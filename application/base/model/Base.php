<?php
namespace app\base\model;

use think\Model;

abstract class Base extends Model{
    /**
     * 根据有id 修改信息 无id 新增信息
     */
    public function editData($data){
        //数据组装
        if(isset($data['id'])){
            if(is_numeric($data['id']) && $data['id']>0){
                $save=$this->allowField(true)->save($data,['id'=>$data['id']]);
            }else{
                $save=$this->allowField(true)->save($data);
            }
        }else{
            $save=$this->allowField(true)->save($data);
        }
        //返回结果
        if($save==0 || $save==false){
            $res=['status'=>0,'message'=>'数据更新失败'];
        }else{
            $res=['status'=>1,'message'=>'数据更新成功'];
        }
        return $res;
    }
}