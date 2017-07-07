<?php
namespace app\admin\controller;

use think\Controller;

/**栏目管理
 * Class Category
 * @package app\admin\controller
 */
class Picture extends Controller
{
    protected $db;
   protected function _initialize(){
   parent::_initialize();
    $this->db =new \app\common\model\Productlist();
    }
    
    //首页
    public function Picture()
    {
        return $this->fetch();
    }
    //添加
    public function Picture_add()
    {
        return $this->fetch();
    }
}