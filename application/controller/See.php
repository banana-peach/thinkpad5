<?php
namespace app\controller;
use think\Controller;
class See extends Controller
{
    public function index()
    {
        // return $this->fetch('index');
        return view('index')->assign([
            'name' => '奥斯绿卡',
            'username' => '辉1夜',
            'email' => 'huiye@163.com'
        ]);
        // return "222";
    }
}
