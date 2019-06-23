<?php
namespace app\admin\controller;

class Login extends Base{
    public function index(){
        return $this->fetch();
    }
    public function checkLogin(){
        $map=[
            'username'=>'username',
            'password'=>'password',
            'yzm'=>'yzm'
        ];
        $param=$this->buildParam($map);
        //验证码校验
        if (!captcha_check($param['yzm'])) {
            self::show(0,'验证码错误');
        }
        //登录验证
        $admin=model('Admin')->get(['username'=>$param['username']]);
        if($admin){
            if($admin->password===md5($param['password'].$admin->code)){
                //保存信息到session
                $this->saveLoginMes($admin->toArray());
                self::show(1,'登录成功!');
            }
        }
        self::show(0,'用户名不存在或者密码错误!');
    }
    public function logout(){
        $this->clearLoginMes();
        $this->success('退出成功!','login/index');
    }
}
