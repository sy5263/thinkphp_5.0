<?php
namespace app\index\controller;


use think\Controller;


class message extends Controller
{

    public function index()
    {
        return $this->fetch();
    }
}
