<!doctype html>
<html><!-- InstanceBegin template="/Templates/dwt.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta charset="utf-8">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>谋刻职业教育在线测评与学习平台</title>

    <link rel="stylesheet" href="/index/css/course.css"/>
    <link rel="stylesheet" href="/index/css/register-login.css"/>
    <script src="/index/js/jquery-1.8.0.min.js"></script>
    <link rel="stylesheet" href="/index/css/tab.css" media="screen">
    <script src="/index/js/jquery.tabs.js"></script>
    <script src="/index/js/mine.js"></script>
    <!-- InstanceEndEditable -->
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->

</head>

<body>

<div class="head" id="fixed">
    <div class="nav">
        @include('index.public.nav')
        <span class="massage">
            <!--<span class="select">
        	<a href="#" class="sort">课程</a>
        	<input type="text" value="关键字"/>
            <a href="#" class="sellink"></a>
            <span class="sortext">
            	<p>课程</p>
                <p>题库</p>
                <p>讲师</p>
            </span>
        </span>-->
            <!--未登录-->
        	<span class="exambtn_lore">
                 <a class="tkbtn tklog" href="/index/login">登录</a>
                 <a class="tkbtn tkreg" href="/index/register">注册</a>
            </span>
            <!--登录后-->
            <!--<div class="logined">
                <a href="mycourse.html"  onMouseOver="logmine()" style="width:70px" class="link2 he ico" target="_blank">sherley</a>
                <span id="lne" style="display:none" onMouseOut="logclose()" onMouseOver="logmine()">
                    <span style="background:#fff;">
                        <a href="mycourse.html" style="width:70px; display:block;" class="link2 he ico" target="_blank">sherley</a>
                    </span>
                    <div class="clearh"></div>
                    <ul class="logmine" >
                        <li><a class="link1" href="#">我的课程</a></li>
                        <li><a class="link1" href="#">我的题库</a></li>
                        <li><a class="link1" href="#">我的问答</a></li>
                        <li><a class="link1" href="#">退出</a></li>
                    </ul>
                </span>
            </div>-->

        </span>
    </div>
</div>
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="login" style="background:url(/index/images/12.jpg) right center no-repeat #fff">
    <h2>登录</h2>
    <form style="width:600px">
        <div>
            <p class="formrow">
                <label class="control-label" for="register_email">帐号</label>
                <input type="text">
            </p>
            <span class="text-danger">请输入Email地址 / 用户昵称</span>
        </div>
        <div>
            <p class="formrow">
                <label class="control-label" for="register_email">密码</label>
                <input type="password">
            </p>
            <p class="help-block"><span class="text-danger">密码错误</span></p>
        </div>
        <div class="loginbtn">
            <label><input type="checkbox"  checked="checked"> <span class="jzmm">记住密码</span> </label>&nbsp;&nbsp;
            <button type="submit" class="uploadbtn ub1">登录</button>

        </div>
        <div class="loginbtn lb">
            <a href="#" class="link-muted">还没有账号？立即免费注册</a>
            <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
            <a href="forgetpassword.html" class="link-muted">找回密码</a>
        </div>
    </form>
    <div class="hezuologo">
        <span class="hezuo">使用合作网站账号登录</span>
        <div class="hezuoimg">
            <img src="/index/images/hezuoqq.png" class="hzqq" title="QQ" width="40" height="40"/>
            <img src="/index/images/hezuowb.png" class="hzwb" title="微博" width="40" height="40"/>
        </div>

    </div>
</div>
<!-- InstanceEndEditable -->


<div class="clearh"></div>
@include('index.public.foot')
<!--右侧浮动-->
@include('index.public.rmbar')
</body>

<!-- InstanceEnd --></html>
