<?php
namespace app\admin\controller;

use think\Loader;

class User extends Base{
    public function add(){
        return $this->fetch();
    }
    public function save(){
        

        $validate_name = "common/User.register";
        $model_name='common/User';
        return json($this->editData(false,$validate_name,$model_name));
    }
}