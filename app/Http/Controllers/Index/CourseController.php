<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/9
 * Time: 0:25
 */

namespace App\Http\Controllers\Index;


use App\Http\Controllers\Controller;

class CourseController extends Controller
{
//    课程列表页面
    public function courselist(){
        return view('index.course.courselist');
    }
//    课程详情
    public function coursecont(){
        return view('index.course.coursecont');
    }
//    课程章节
    public function coursecont1(){
        return view('index.course.coursecont1');
    }
//    课程视频
    public function video(){
        return view('index.course.video');
    }

}