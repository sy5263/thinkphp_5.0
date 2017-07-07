<?php
namespace app\common\model;

use\think\Loader;

use\think\Model;
class Index extends Model
{
    protected  $pk='id';
    protected  $table='cegister';
    public  function login($data)
    {
        //halt($data);
        $validate =Loader::validate('Admin');

        //  $user = loader::model("cegister")->where($where)->find(); // 查询一行数据
        if(!$validate->check($data))
        {
            return ['valid'=>0,'msg'=>$validate->getError()];
        }

        $userInfo=$this->where('username',$data['username'])->where('password',$data['password'])->find();
        if(!$userInfo){
            return['valid'=>0,'msg'=>'用户名不正确'];
        }
        session('cegister.id',$userInfo['id']);
        session('cegister.username',$userInfo['username']);
        session('cegister.password',$userInfo['password']);
        return['valid'=>1,'msg'=>'登录成功'];
    }

}