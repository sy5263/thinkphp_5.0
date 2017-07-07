<?php
namespace app\common\model;

use think\Model;

class Article extends Model
{
	
	protected $pk ='article_id';
	protected $table='blog_article';



	public function add($data){
    //halt($data);
		$result = $this->validate(true)->save($data);
		//halt($result);
		if(false == $result){

			return['vaid'=>0,'aa'=>$this->getError()];
		}else{

			return['vaid'=>1,'aa'=>"添加成功"];
		}	


	}
	public function upd($data)
    {
    	
        $result = $this->save($data,['article_id'=>$data['article_id']]);
       // halt($result);
        if(false === $result)
        {
            // 验证失败 输出错误信息
            return ['vaid'=>0,'message'=>$this->getError()];
            //dump($this->getError());
        }else
        {
            return ['vaid'=>1,'message'=>"修改成功"];
        }

    }
	
}