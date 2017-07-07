<?php
namespace app\index\controller;


use think\Controller;


class index extends Controller
{

    public function index()
    {
        $field=db('article')->select();
        $this->assign('field',$field);
        return $this->fetch();
    }
}
