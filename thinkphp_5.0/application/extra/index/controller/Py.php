<?php
namespace app\index\controller;
use \think\View;
class Py
{
    public function py()
    {
        $view = new View();
        return $view->fetch("py");
    }

}
