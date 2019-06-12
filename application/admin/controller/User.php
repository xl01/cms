<?php
namespace app\admin\controller;

class User extends Base
{
    public function add(){
        return $this->fetch();
    }
    public function save(){
        // $validate_name = "base/ProjectEnty.edit";
        $model_name='base/User';
        return json($this->editData(false,false,$model_name));
    }
}
