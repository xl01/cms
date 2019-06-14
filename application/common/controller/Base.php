<?php
namespace app\common\controller;

use think\Controller;
use think\Loader;

class Base extends Controller
{ 
    /**
     * 全局返回方法
     */
    public static function show($status='',$message='',$data=[]){
        $result=[
            'status'=>$status,
            'message'=>$message,
            'data'=>$data
        ];
        exit(json_encode($result));
    }
    /**
     * 全局组建参数函数
     */
    public function buildParam($param){
        $data=[];
        if(is_array($param)){
            foreach ($param as $key => $value) {
                # code...
                $data[$key]=$this->request->param($value);
            }
        }
        return $data;
    }
    /**
     * 全局进行数据 增改操作
     */
    public function editData($parameter=false,$validate_name=false,$model_name=false,$save_data=[]){
        //第一步获取到需要传入数据库的数据。
        // 参数 1 4 都为空 则接收表单的所有数据
        //参数 1 为false 参数4不为空 则传入数据就为参数4的自定义的数据
        // 参数1 不为空 参数4为空 则按照参数1 对数据进行筛选，得到数据
        if(empty($save_data)){
            if($parameter != false && is_array($parameter)){
                $data=$this->buildParam($parameter);
            }else{
                $data=$this->request->post();
            }
        }else{
            $data=$save_data;
        }
        //对得到的数据进行校验，防止不合法数据入库
        if(!$data) return show(0,'封装后数据为空');
        //判断参数中是否绑定登录用户数据
        // if ($this->checkLoginToken() && !isset($data['uuid'])) $data['uuid'] = $this->uuid;
        //根据传入参数，对数据进行校验
        if($validate_name!=false){
            $result=$this->validate($data,$validate_name);
            if(true!==$result) return $this->show('0',$result);
        }
        //加载传入的模型，执行方法
        $model_edit=Loader::model($model_name);
        if(!$model_edit) return $this->show(0,'未找到模型数据');

        return $model_edit->editData($data);
    }
    /**
     * 全局模型执行方法
     */
    public function doModelAction($param_data,$validate_name=false,$model_name=false,$action_name="editData"){
        //数据校验
        if($validate_name!=false){
            $result=$this->validate($param_data,$validate_name);
            if(true !== $result) $this->show(0,$result);
        }
        //模型加载并执行方法
        $model_edit=Loader::model($model_name);
        if(!$model_edit) return $this->show(0,'模型加载失败');
        return $model_edit->$action_name($param_data);
    }
    /**
     * 检测是否登录
     */
    public function checkLoginGLobal(){
        $check_success=false;
        switch ($this->loginType) {
            case 1:
            case "session":
                $this->uuid=Session::get('uuid','Global');
                $this->member_info=Session::get('member_info','Global');
                if($this->uuid && $this->member_info){
                    $check_success=true;
                }
                break;
            case 2:
            case "cache":
                $session_id_check=Cookie::get("session_id");
                $this->uuid=Cache::get("uuid_{$session_id_check}");
                $this->member_info=Cache::get("member_info_{$session_id_check}");
                if($this->uuid && $this->member_info){
                    $check_success =true;
                }
                //刷新 缓存有效期
                Cache::set("uuid_{$session_id_check}",$this->uuid);
                Cache::set("member_info_{$session_id_check}",$this->member_info);
                break;
                return $check_success;
        }
    }
    /**
     * 设置全局登录
     */
    public function setLoginGlobal($member_info=[],$login_code=0){
        $set_success=false;
        if($member_info){
            switch($this->loginType){
                case 1:
                case "session":
                    Session::set('member_info',$member_info,'Global');
                    Session::set('uuid',$member_info['uuid'],'Global');
                    if(Session::has('uuid',"Global")){
                        $set_success=true;
                    }
                    break;
                case 2:
                case "cache":
                    $session_id = $this->create_uuid("SN");
                    Cookie::set("session_id", $session_id);
                    Cache::set("member_info_$session_id", $member_info);
                    Cache::set("uuid_$session_id", $member_info['uuid']);
                    $session_id_check = Cookie::get("session_id");
                    if ((Cache::get("uuid_{$session_id_check}"))) {
                    $set_success = true;
                }
                    break;
            }
        }
        if (!$set_success) return false;
            //保存登录记录
            $this->saveLoginInfo($member_info['uuid'],$login_code);

            return true;
        }
        /**
            * 全局退出
            * Power by Mikkle
            * QQ:776329498
            * @return bool
            */
            protected function logoutGlobal(){
                switch ($this->loginType) {
                case 1:
                case "session":
                Session::delete('uuid', 'Global');
                Session::delete('member_info', 'Global');
                break;
                case 2:
                case "cache":
                $session_id_check = Cookie::get("session_id");
                Cache::rm("uuid_{$session_id_check}");
                Cache::rm("member_info_{$session_id_check}");
                Cookie::delete("session_id");
                break;
                case 3:
                case "redis":
                    break;
                }
                $this->member_info = null;
                $this->uuid = null;
                return true;
                }
}