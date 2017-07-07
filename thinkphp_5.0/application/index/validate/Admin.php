<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/14
 * Time: 12:00
 */
namespace app\admin\validate;

use think\Validate;

class Admin extends Validate{

    protected  $rule=[
        'username'=>'require',
        'password'=>'require',
        'code'=>'require|captcha'
    ];
    protected  $message=[
        'username.require'=>'请输入用户名',
        'password.require'=>'请输入密码',
        'code.require'=>'请输入验证码',
        'code.captcha'=>'验证码不正确'
    ];


}