<?php
namespace app\admin\controller;

use think\Controller;

/**栏目管理
 * Class Category
 * @package app\admin\controller
 */
class Productlist extends Controller
{
   protected $db;
   protected function _initialize(){
   parent::_initialize();
    $this->db =new \app\common\model\Productlist();
}
     public function productlist()
    
    { 
       $field='';
        //产品查询搜索
        if(request()->isPost()){
            $key = input('param.productlist');
            //halt($key);
            $field = db('productlist')->where('id|title|content|univalent','like',"{$key}%")->select();
        }
         
        
      //halt($field);
        if($field){
               $this->assign('field',$field);
                return $this->fetch();
        }else{
        //获取产品数据
         $field = db ('productlist')->select();
         $this->assign('field',$field);
           return $this->fetch();
    }

    }
        //添加产品数据
    public function product_add()
    {
        if(request()->isPost())
        {
            $datas=input('post.');
            $file = request()->file('file');
          //  halt($file);
            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . DS . 'upload');
            //halt($info);
            if($info){
                // 成功上传后 获取上传信息
                // 输出 jpg
              //  echo $info->getExtension();
                // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
               // echo $info->getSaveName();
                // 输出 42a79759f284b767dfcb2a0197904287.jpg
               // echo $info->getFilename();
               $datas['image']='/thinkphp_5.0/public/'.'upload'.'/'.$info->getSaveName();
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
            // halt($_POST);die;
            //if($res['vaid']){}
            //halt(input('post.'));
             $res= $this->db->add($datas);
           if($res['vaid'])
            {
             $this->success($res['aa'],'Productlist/productlist');exit;
            }else{
                $this->error($res['aa']);exit;
            }
    
     }
   
        return $this->fetch();
    }
     //产品管理删除
    public function del(){



      $id =input('get.id');
      $res= db('productlist')->where('id',$id)->delete();
      if($res){
          $this->success('删除成功','productlist');exit;
      }else{
          $this->error('删除失败');exit;
      }
    }

     //产品管理修改
      public function product_upd()
    {
        $id = input('param.id');
      // halt($id);
        $oldData = $this->db->find($id);
        //halt($oldData);
        $this->assign('oldData',$oldData);
        if (request()->isPost())
        {
            //halt(input('post.'));
            $res = $this->db->upd(input('post.'));

            if($res['vaid'])
            {
                $this->success($res['message'],'Productlist/productlist');exit;

            }
            else{
                $this->error($res['message']);exit;
            }
        }
        return $this->fetch();
    }


}