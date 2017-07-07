<?php
namespace app\admin\validate;
use think\Validate;

class Inrtoduce extends Validate
{
    protected $rule = [
        'title'=>'require',
		'content'=>'require',
        

    ];
    protected $message = [
       'title'=>'请输入标题',
	   'content'=>'请输入标题',
        
    ];
}