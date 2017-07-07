<?php
namespace app\common\model;

use think\Model;

class Picture extends Model

{
    protected $db;
    protected function _initialize(){
    parent::_initialize();
    $this->db =new \app\common\model\Picture();
  }
    public function product_add()
    {
       
   
        return $this->fetch();
    }

}