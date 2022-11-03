<?php

namespace app\controller;

use think\Controller;
use app\model\News as NewsModel;
use think\Db;
use think\facade\Cookie;

class News extends Controller
{
    public function getall()
    {
        Cookie::set('oooo', 'xxxx', 3600);
        $posts =  NewsModel::select();

        return json($posts);
        // return 'hellooooo';
    }
    public function getone()
    {
        $id = input('id');
        Cookie::set('oooo', 'xxxx', 3600);
        $posts =  NewsModel::select($id);

        return json($posts);
        // return 'hellooooo';
    }
}
