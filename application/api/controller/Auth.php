<?php
namespace app\api\controller;

use think\Config;
class Auth extends Base
{
    protected $loginType; //存储登录信息类型 session cache redis
    protected $uuid;
    protected $member_info;
    /**
     * 构造函数中开启 checkLoginGlobal
     */
    public function _initialize(){
        parent::_initialize();
        //获取config中定义的登录类型
        $this->loginType=Config::get('login_type') ? Config::get('Login_type') : 'session';
        $this->checkLoginGlobal();
    }
}
