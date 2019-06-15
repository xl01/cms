<?php
namespace app\api\controller;
class Test extends Auth{
    public function test(){
    //检查用户是否登录
    if(!$this->uuid){
        return self::show(0,'用户未登录');
    }
    }
}