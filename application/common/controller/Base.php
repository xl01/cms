<?php
namespace app\common\controller;

use think\Controller;
use think\Loader;
use think\Session;

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
     * 生成随机数
     *
     */
    static public function rdKey($length=8)   
    {   
       $pattern = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLOMNOPQRSTUVWXYZ';  
       $key='';
        for($i=0;$i<$length;$i++)   
        {   
            $key.= $pattern{mt_rand(0,35)};    //生成php随机数   
        }   
        return $key;   
    }   

    /**
     * 保存登录信息
     */
    public function saveLoginMes($member_info=[]){
        $save_code=false;
        if(!empty($member_info)&& is_array($member_info)){
            //生成一个随机数
            $rk=$this->rdKey();
            //保存到session中
            Session::set('uuid',$rk,'Global');
            //保存uuid 登录信息
            $member_info['uuid']=$rk;
            $member_info['logintime']=time();
            $member_info['loginip']=$this->request->ip();
            if(Session::has('uuid','Global')){
                $uuid=Session::get('uuid','Global');
                Session::set('member_info'.$uuid,$member_info,'Global');
                if(Session::has('member_info'.$uuid,'Global')){
                    //信息绑定到request请求中
                    $user=model('Admin')->get($member_info['id']);
                    $this->request->bind('user',$user);
                    $save_code=true;
                }
            }
        }
        return $save_code;
    }
    /**
     * 判断是否绑定了登录信息
     */
    public function checkLoginMes(){
        $check_code=false;
        if(Session::has('uuid','Global')){
            $uuid=Session::get('uuid','Global');
            if(Session::has('member_info'.$uuid,'Global')){
                $mes=Session::get('member_info'.$uuid,'Global');
                if(!empty($mes) && time()-$mes['logintime']<3600){
                    $mes['logintime']=time();
                    Session::set('member_info'.$uuid,$mes,'Global');
                    $check_code=true;
                }
            }
        }
        return $check_code;
    }
    /**
     * 退出登录
     */
    public function clearLoginMes(){
        Session::clear('Global');
        Session::clear();
    }
}