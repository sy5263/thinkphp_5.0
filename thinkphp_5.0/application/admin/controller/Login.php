<?php

    namespace app\admin\controller;

    use app\common\model\Admin;
    use think\Controller;

    class Login extends Controller
    {
        public function login  ()
        {
            //清除session中的登录信息
            session(null);
            //测试数据库连接
           // $data = db('admin')->find(1);
           // dump($data);
            if(request()->isPost()){
                $res = (new Admin())->login(input('post.'));
                if($res['valid'])
                {
                    //说明登录成功
                    $this->success($res['msg'],'admin/index/index');exit;
                }else{
                    //说明登录失败
                    $this->error($res['msg']);exit;
                }
            }
            //加载登录页面
            return $this->fetch();
        }
    }
