<?php
namespace app\common\validate;

class User extends \think\Validate{
    protected $rule=[
        ['mobile','regex:1[34578]\d{9}','请输入正确的手机号码'],
        ['username','alphaDash|length:4,25','请输入正确的用户名(为字母和数字，下
        划线_及破折号-)|用户名长度必须在4--20位之间'],
        ['password','require|alphaDash|length:4,25', '密码不能为空|请输入正确
            的密码(为字母和数字，下划线_及破折号-)|密码长度必须在4--20位之间'],
    ];
    protected $scene=[
        'login'=>['username','password'],
        'register'=>['username','password']
    ];
}