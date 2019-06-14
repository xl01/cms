<?php
namespace app\index\controller;

class Error extends Base
{
    public function _empty(){
        halt('没找到页面');
    }
}
