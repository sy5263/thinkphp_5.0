<?php
namespace app\common\model;
use\think\Model;

class Category extends Model
{
	protected $autoWriteTimestamp = true;
	public  function add($data)
	{
		//halt($data);
		$data['status'] = 1;
		//$data['create_time'] = time();
		return $this->save($data);
	}

	public function savecategory()
	{
		$data = [
			"parent_id" => 0,
			"status" => 1,
		];
		$order = [
			"listorder" => "desc",
		];

		return $this->where($data)->order($order)->select();//数据表查询语句

	}

	public function indexcategory($parent_id=0)
	{
		$data = [
			'parent_id' => $parent_id,
			'status' => ['neq',-1],//如果为-1
		];

		$order =[
			'listorder' => 'desc',
			'id' => 'desc',
		];
		$result = $this->where($data)->order($order)->paginate();
		//echo $this->getLastSql();

		return $result;

	}

}
	
