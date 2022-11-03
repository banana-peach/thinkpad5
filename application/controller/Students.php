<?php

namespace app\controller;

use think\Controller;
use app\model\Student;

class Students extends Controller
{

    // 获取全部的数据
    public function index()
    {
        return Student::where('id', '>', '0')->select();
    }

    // 查询某一项, 根据id
    public function checkOne()
    {
        $id = input('id');
        return Student::get($id);
    }

    // 修改某一项, 根据id
    public function changeOne()
    {
        $id = input('id');
        return Student::get($id);
    }

    // 删除某一项, 根据id
    public function deleteOne()
    {
        $id = input('id');

        return Student::destroy($id);
    }

    // 添加某一项
    public function addOne()
    {
        $student_id = input('post.student_id');
        $class_id = input('post.class_id');
        $name = input('post.name');
        $grade = input('post.grade');

        $student = new Student;
        $student->student_id = $student_id;
        $student->class_id = $class_id;
        $student->name = $name;
        $student->grade = $grade;
        $student->save();
        return $student->id;

    }

    // 下载
    public function downloadFile()
    {
        $upload = app()->getRootPath();
        // download是系统封装的一个助手函数
        return download($upload . "/Uploads/pin.jpg", 'my.jpg');
    }

    // 上传
    public function uploadFile()
    {
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('file');
        // 移动到框架应用根目录/uploads/ 目录下
        $info = $file->move('../Uploads');
        if ($info) {
            // 成功上传后 获取上传信息
            // 输出 jpg
//            echo $info->getExtension();
            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
            echo $info->getSaveName();
            // 输出 42a79759f284b767dfcb2a0197904287.jpg
//            echo $info->getFilename();
        } else {
            // 上传失败获取错误信息
            echo $file->getError();
        }
    }}

