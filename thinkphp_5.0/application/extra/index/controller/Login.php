<?php
namespace app\index\controller;
use \think\View;

class Login
{
    public function login()
    {
        $view = new View();
        return $view->fetch("login");
    }

}