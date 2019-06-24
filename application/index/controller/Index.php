<?php
namespace app\index\controller;

class Index extends Base
{
    public function index()
    {
        $hello='hello word！';
        return $this->fetch('',[
            'hello'=>$hello
        ]);
    }
}
