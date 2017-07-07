<?php
namespace app\admin\validate;
use think\Validate;

class Productlist extends Validate
{
    protected $rule = [
        'title'=>'require',
        'content'=>'require',
        'univalent'=>'require',
      

    ];
    protected $message = [
       'title'=>'请输入标题',
        'content'=>'输入描述',
        'univalent'=>'输入单价',
    

    ];
}