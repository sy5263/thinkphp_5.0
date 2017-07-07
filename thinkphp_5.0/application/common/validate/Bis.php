<?php
namespace app\common\validate;
use think\Validate;
class Bis extends Validate {
protected $rule = [
'name' => 'require|max:25',
'email' => 'email',
'logo' => 'require', //require  ±ØĞëÌîĞ´
'city_id' => 'require',
'bank_info' => 'require',
'bank_name' => 'require',
'bank_user' => 'require',
'faren' => 'require',
'faren_tel' => 'require',
];

// ³¡¾°ÉèÖÃ
protected  $scene = [
'add' => ['name', 'email', 'logo', 'city_id', 'bank_info', 'bank_name', 'bank_user', 'faren', 'faren_tel'],
];



}