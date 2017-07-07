<?php
namespace app\common\validate;

use think\Validate;

class Login extends Validate{

	protected $rule=[
	
		['username','require|alphaNum','用户名不能为空|用户名必须为字母或者数字'],
		['password','require|alphaNum','密码不能为空|密码必须为字母或者数字'],
		['code','require|captcha','验证码不能为空|验证码不正确'],
	
	];
}