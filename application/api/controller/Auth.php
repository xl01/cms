<?php
namespace app\api\controller;

class Auth extends Base
{
    protected $loginType; //存储登录信息类型 session cache redis
    protected $uuid;
    protected $member_info;
}
