<?php
namespace app\common\validate;

use think\Validate;

class Cegister extends Validate{

	protected $rule=[

		['username','require|alphaNum','用户名不能为空|用户名必须为字母或者数字'],
		['password','require|alphaNum','密码不能为空|密码必须为字母或者数字'],
		['spassword','require|alphaNum|confirm:password','密码不能为空|密码必须为字母或者数字|两次密码不一致'],
		['email','require|email','email不能为空|输入的email格式不正确'],
		['code','require|captcha','验证码不能为空|验证码不正确'],

	];
}