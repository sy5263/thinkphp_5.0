<?php
namespace app\common\model;

use think\Model;

class Productbrand extends Model

{
    protected $db;
    protected function _initialize(){
    parent::_initialize();
    $this->db =new \app\common\model\Productbrand();
  }
    
}