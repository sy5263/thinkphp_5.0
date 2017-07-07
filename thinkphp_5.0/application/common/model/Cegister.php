<?php
namespace app\common\model;

use think\Model;

class Cegister extends Model{
    protected $pk='id';
    protected $table='cegister';
    public function register($data)
    {
        $validate=Validate('Cegister');//调用验证规则
        if(!$validate->check($data))
        {
            //验证失败
            return ['valid'=>0,'msg'=>$validate->getError()];
        }
        $result=$this->allowField(true)->save($data);			//添加数据
        //halt($this->getLastSql());
        if($result)
        {
            return ['valid'=>1,'msg'=>'注册成功'];
        }

    }
}
