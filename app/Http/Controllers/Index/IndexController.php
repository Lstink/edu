<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/8
 * Time: 22:27
 */

namespace App\Http\Controllers\Index;


use App\Http\Controllers\Controller;

class IndexController extends Controller
{
//    前台首页
    public function index(){
        return view('index.index.index');
    }
//注册页面
   public function register(){
       return view('index.index.register');
   }
//   登陆页面
    public function login(){
        return view('index.index.login');
    }

}