<?php
namespace app\base\controller;

use think\Controller;
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
}