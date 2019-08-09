<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//后台首页
Route::any('/adminIndex','Admin\IndexController@adminIndex');
Route::any('/adminLogin','Admin\IndexController@adminLogin');#后台登录

//前台首页
Route::any('/index/allIndex','Index\IndexController@index');

//注册页面
Route::any('/index/register','Index\IndexController@register');

//登陆页面
Route::any('/index/login','Index\IndexController@login');

//课程列表页面
Route::any('/course/courselist','Index\CourseController@courselist');
//课程详情
Route::any('/course/coursecont','Index\CourseController@coursecont');
//课程章节
Route::any('/course/coursecont1','Index\CourseController@coursecont1');
//课程视频
Route::any('/course/video','Index\CourseController@video');

//资讯列表页面
Route::any('/article/articlelist','Index\ArticleController@articlelist');
//资讯详情
Route::any('/article/article','Index\ArticleController@article');

//个人中心
Route::any('/mycourse/mycourse','Index\MycourseController@mycourse');

//关于我们
Route::any('/page/page','Index\PageController@page');
//联系我们
Route::any('/page/pagecontact','Index\PageController@pagecontact');

//老师列表
Route::any('/teacher/teacherlist','Index\TeacherController@teacherlist');
//老师简介
Route::any('/teacher/teacher','Index\TeacherController@teacher');