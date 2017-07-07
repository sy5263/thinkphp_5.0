<?php
namespace app\index\controller;
use \think\View;

class Cegister
{
    public function cegister()
    {
        $view = new View();
        return $view->fetch("cegister");
    }

}