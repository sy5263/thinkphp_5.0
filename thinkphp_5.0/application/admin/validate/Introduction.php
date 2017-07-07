<?php
namespace app\admin\validate;
use think\Validate;

class Introduction extends Validate
{
    protected $rule = [
        'jiage'=>'require',
        'guige'=>'require',
        'tedian'=>'require',
      

    ];
    protected $message = [
       'jiage.require'=>'请输入dcfcg标题',
        'guige.require'=>'输入.描述',
        'tedian.require'=>'输入单价',
    

    ];
}