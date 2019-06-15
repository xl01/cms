<?php
namespace app\admin\controller;

use think\Config;
class Index extends Base
{
    public function index()
    {
        // halt(Config::get('login_type'));
        return $this->fetch();
    }
    public function welcome(){
        return $this->fetch();
    }

}
