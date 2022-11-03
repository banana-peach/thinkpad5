<?php

namespace app\controller;

use think\Controller;
use app\model\Doctor;
use app\model\Student;

class Doctors extends Controller
{
    public function login()
    {
        $username = input('post.username');
        $password = input('post.password');

        $user = Doctor::where('username',$username)->where('password',$password)->find();
        if($user){
            return [
                "user"=>$user,
                "code"=>1,
                "message"=>"登陆成功"
                
            ];
        }else {
            return [
                "code"=>0,
                "message"=>"账号或者密码错误"
                
            ];
        }

    }
    // 查询某一项, 根据id
    public function checkOne()
    {
        $id = input('id');
        return Doctor::get($id);
    }
}