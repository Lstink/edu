<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/9
 * Time: 8:00
 */

namespace App\Http\Controllers\Index;


use App\Http\Controllers\Controller;

class PageController extends Controller
{
//    关于我们
    public function page(){
        return  view('index.page.page');
    }
    //    联系我们
    public function pagecontact(){
        return  view('index.page.pagecontact');
    }

}