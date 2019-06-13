<?php
namespace app\common\model;


class User extends Base{

    public function department(){
        return $this->belongsTo('Department');
    }
}