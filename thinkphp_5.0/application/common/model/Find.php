<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/16
 * Time: 15:44
 */

namespace app\common\model;
use\think\Model;

class Find extends Model
{
    protected $autoWriteTimestamp = true;
    public  function find()
    {

        $data = [
            "parent_id" => 0,
            "status" => 1,
        ];
        $order = [
            "listorder" => "desc",
        ];

        return $this->where($data)->order($order)->hasMany('category')->field('id,name,listorder');

    }

}