<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/9
 * Time: 1:17
 */

namespace App\Http\Controllers\Index;


use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
//    老师简介
    public function teacher(){
        return view('index.teacher.teacher');
    }

    //    老师列表
    public function teacherlist(){
        return view('index.teacher.teacherlist');
    }

}