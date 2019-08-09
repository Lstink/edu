<!doctype html>
<html><!-- InstanceBegin template="/Templates/dwt.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta charset="utf-8">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>谋刻职业教育在线测评与学习平台</title>
    <link rel="stylesheet" href="/index/css/course.css"/>
    <link rel="stylesheet" href="/index/css/tab.css" media="screen">
    <script src="/index/js/jquery-1.8.0.min.js"></script>
    <script src="/index/js/jquery.tabs.js"></script>
    <script src="/index/js/mine.js"></script>
    <script>
        $(function(){
            /*左侧栏*/
            var w = $(window).width();
            var lw = (w - 1100) / 2 - 10;
            $(".courseleft").css({
                "position": "fixed",
                "top": "80px",
                "left": lw + 10
            });
        });

    </script>
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
<div class="coursecont">
    <div class="courseleft">
        <ul class="courseul pageul">
            <li style="border-radius:3px 3px 0 0"><a href="/page/page">关于我们<b></b></a></li>
            <li class="curr"><a href="/page/pagecontact" >联系我们<b></b></a></li>
            <li><a href="#" >帮助中心<b></b></a></li>
            <li><a href="#" >意见反馈<b></b></a></li>
            <li style="border-radius:0 0 3px 3px "><a href="#" >加入我们<b></b></a></li>
        </ul>
    </div>
    <div class="courseright pageright" style="min-height:500px;">
        <h3 class="mem-h3">联系我们</h3>
        <div class="clearh"></div>
        <div class="pagetext">
	    	<span class="pagemap">
            	<img src="/index/images/map.jpg" width="400">
            </span>
            <span class="contact">
            	<p><strong>咨询热线</strong>：400-803-5080</p>
                <p><strong>客服QQ</strong>：2977138424</p>
                <p><strong>公司地址</strong>：山西省太原市高新开发区体育路南内环街口数码港A座4层</p>
            </span>
        </div>
    </div>
    <div class="clearh"></div>
</div>
</div>
<!-- InstanceEndEditable -->


<div class="clearh"></div>
@include('index.public.foot')
<!--右侧浮动-->
@include('index.public.rmbar')
</body>

<!-- InstanceEnd --></html>
