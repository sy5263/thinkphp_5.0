<?php
namespace app\index\controller;
use think\Controller;

class Cegister extends Controller
{
    protected $db;
    public function _initialize()
    {
        $this->db=model('Cegister');
    }
    public function cegister()
    {
        if(request()->isPost())
        {
            //表单提交的数据获取
            $data=input('post.');
            //调用模型层的方法处理数据
            $result=$this->db->register($data);
            if($result['valid'])
            {
                $this->success($result['msg'],'index/login/login');
            }
            else
            {
                $this->error($result['msg']);
            }
        }
        return $this->fetch();
        /*  $view = new View();
         return $view->fetch("cegister"); */
    }

}