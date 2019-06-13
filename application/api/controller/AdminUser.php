<?php
namespace app\api\controller;

class AdminUser extends Base
{
    public function AdminUserInfo($id=1){
    
        $m=model('common/User')->get($id);
        return $m->department->name;
    }
}
