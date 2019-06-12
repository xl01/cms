<?php
namespace app\base\controller;

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
            if(true!==$result) return $this->show('0','数据不合法',$result);
        }
        //加载传入的模型，执行方法
        $model_edit=Loader::model($model_name);
        if($model_edit) return $this->show(0,'未找到模型数据');

        return $model_edit->editData($data);
    }
}