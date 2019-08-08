<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

/**
 * 后台首页登录
 * Class IndexController
 * @package App\Http\Controllers\Admin
 */
class IndexController extends Controller
{


    /**
     * 后台首页页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminIndex(){

        return view( 'admin.adminIndex' );

    }


    public function adminLogin(){

        return view( 'admin.adminLogin' );

    }


}




















