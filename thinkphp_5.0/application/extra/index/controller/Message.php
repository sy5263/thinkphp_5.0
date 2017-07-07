<?php
namespace app\index\controller;
use \think\View;
class Message
{
    public function message()
    {
        $view = new View();
        return $view->fetch("message");
    }

}
