<?php
namespace app\index\controller;


use think\Controller;


class py extends Controller
{

    public function index()
    {
        return $this->fetch();
    }
}
