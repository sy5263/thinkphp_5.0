<?php
namespace app\admin\controller;


use think\Controller;


class Category extends Controller
{
    private $object;//定义全局变量
    public function _initialize()
    {
        $this->object=model('category');//调用model层的category方法
    }
    public function index()
    {
        //搜索功能

        $parent_id = input("get.parent_id",0);//获取input框的值默认为0
        $categorys=$this->object->indexcategory($parent_id);//$category保存调用model层的indexcategory（$parent—id）方法并传值
        //$this->assign();
        return $this->fetch('',["categorys"=>$categorys]);//查询数据库
        //return $this->fetch('index.html',["数据库表"=>上条语句的变量]);
        //return $this->fetch();
        //$this->assign('list',$data);
    }
    public function add()
    {
        $category = $this->object->savecategory();
        //$this->assign("category",$category);

        return $this->fetch('',["category"=>$category]);

    }

    public function save()
    {
        //print_r($_POST);  //不安全
        //print_r(input("post."));
        //print_r(request()->post());
        if(!request()->isPost()){
            $this->error("提交数据失败");
        }
        $data = input("post.");
        //print_r ($data);die;
        //$data['status'] = 10;
        $validate = validate('Category');

        if(!$validate->scene('add')->check($data))
        {
            return $this->error($validate->getError());
        }
        if(!empty($data['id'])){

             $this->update($data);
        }else{
             $data['id']=0;
        }
        $res = Model('Category')->add($data);
        if($res)
        {
            return $this->success("添加成功");
        }else
        {
            return $this->success("添加失败");

        }


    }
    //修改
    public function edit($id=0){
        if(intval($id)<1){
            $this->error("数据错误");
        }
        $categoryid = $this->object->get($id);
//halt($categoryid);
        $category = $this->object->savecategory();
        return $this->fetch('',["category"=>$category,"categoryid"=>$categoryid]);//加载视图并分配变量
    }
    public function update($data){
        $rs = $this->object->save($data,['id'=>$data['id']]);
        if($rs){
            return $this->success("修改成功");
        }else{
            return $this->success("修改失败");
        }
    }
    public function status(){

        $data = input("get.");
        $validate = validate('Category');
        if(!$validate->scene('status')->check($data)){
            return $this->error($validate->getError());
        }
        $res = $this->object->save(['status'=>$data['status']],['id'=>$data['id']]);
        if($res){
            $this->success("状态更新成功");
        }else{
            $this->success("状态更新失败");
        }

    }
    // 排序逻辑
    public function listorder($id, $listorder) {
       // print_r($id);die;
        $res = $this->object->save(['listorder'=>$listorder], ['id'=>$id]);
        //print_r($listorder);die;
        if($res) {
            $this->result($_SERVER['HTTP_REFERER'], 1, 'success');

        }else {
            $this->result($_SERVER['HTTP_REFERER'], 0, '更新失败');
        }
    }
    public function find(){

        $categorys="";
    if(request()->isPost()){

        $categorys=input('post.inp');
        //halt($inp);
        $categorys=db('category')->where('id|name','like',"{$categorys}%")->select();
   //halt($categorys);
    }
    if($categorys){
    //    halt("dfgdfg");
        return $this->fetch('index',["categorys"=>$categorys]);
      }else{
        $this->error("没有您要找的数据");
      }
    }
}
