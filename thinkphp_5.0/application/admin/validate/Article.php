<?php
namespace app\admin\validate;
use think\Validate;

class Article extends Validate
{
    protected $rule = [
        'article_title'=>'require',
        

    ];
    protected $message = [
       'article_title'=>'请输入标题',
        
    ];
}