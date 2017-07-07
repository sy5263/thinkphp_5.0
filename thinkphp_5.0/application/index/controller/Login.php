<?php
namespace app\index\controller;
use think\Controller;

class Login extends Controller
{

    public function login()
    {

        if(request()->isPost())
        {
            $data=input('post.');

            //halt($data);

            $result=model('Index')->login($data);

            //halt($result);
            if($result['valid'])
            {
                $this->success($result['msg'],'index/index/index');
            }
            else
            {
                $this->error($result['msg']);
            }

        }
        session(null);

        return $this->fetch();
    }
}

