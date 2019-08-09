<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/9
 * Time: 2:04
 */

namespace App\Http\Controllers\Index;


use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
//    资讯列表
    public function articlelist(){
        return view('index.article.articlelist');
    }
    //    资讯详情
    public function article(){
        return view('index.article.article');
    }

}