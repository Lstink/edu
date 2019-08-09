<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/9
 * Time: 2:39
 */

namespace App\Http\Controllers\Index;


use App\Http\Controllers\Controller;

class MycourseController extends  Controller
{
//    个人中心
    public function mycourse(){
        return view('index.mycourse.mycourse');
    }

}