<?php
namespace app\admin\controller;

class Login extends Base
{
    public function index()
    {
        return $this->fetch();
    }
    public function check(){
        $param=[
            'username'=>'username',
            'password'=>'password'
        ];
        $param=self::buildParam($param);
        
        self::show(1,'数据返回',$param);
    }
}
