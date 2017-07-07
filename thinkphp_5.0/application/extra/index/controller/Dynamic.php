<?php
namespace app\index\controller;
use \think\View;
class Dynamic
{
    public function dynamic()
    {
        $view = new View();
        return $view->fetch("dynamic");
    }

}
