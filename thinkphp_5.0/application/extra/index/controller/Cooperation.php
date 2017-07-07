<?php
namespace app\index\controller;
use \think\View;
class Cooperation
{
    public function cooperation()
    {
        $view = new View();
        return $view->fetch("cooperation");
    }

}