<!doctype html>
<html><!-- InstanceBegin template="/Templates/dwt.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta charset="utf-8">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>谋刻职业教育在线测评与学习平台</title>
    <link rel="stylesheet" href="/index/css/course.css"/>
    <link rel="stylesheet" href="/index/css/member.css"/>
    <script src="/index/js/jquery-1.8.0.min.js"></script>
    <link rel="stylesheet" href="/index/css/tab.css" media="screen">
    <script src="/index/js/jquery.tabs.js"></script>
    <script src="/index/js/mine.js"></script>
    <script type="text/javascript">
        $(function(){


            $('.demo2').Tabs({
                event:'click'
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
<div class="clearh"></div>
<div class="membertab">
    <div class="memblist">
        <div class="membhead">
            <div style="text-align:center;"><img src="/index/images/0-0.JPG" width="80" ></div>
            <div style="width:220px;text-align:center;">
                <p class="membUpdate mine">某某某</p>
                <p class="membUpdate mine"><a href="mysetting.html">修改信息</a>&nbsp;|&nbsp;<a href="myrepassword.html">修改密码</a></p>
                <div class="clearh"></div>
            </div>
        </div>
        <div class="memb">

            <ul>
                <li class="currnav"><a class="mb1" href="mycourse.html">我的课程</a></li>
                <li><a class="mb3" href="myask.html">我的问答</a></li>
                <li><a class="mb4" href="mynote.html">我的笔记</a></li>
                <li><a class="mb12" href="myhomework.html">我的作业</a></li>
                <li><a class="mb2" href="training_list.html" target="_blank">我的题库</a></li>
            </ul>

        </div>


    </div>


    <div class="membcont">
        <h3 class="mem-h3">我的课程</h3>
        <div class="box demo2" style="width:820px;">
            <ul class="tab_menu" style="margin-left:30px;">
                <li class="current">学习中</li>
                <li>已学完</li>
                <li>收藏</li>
            </ul>
            <div class="tab_box">
                <div>
                    <ul class="memb_course">

                        <li>
                            <div class="courseli">
                                <a href="/course/video" target="_blank"><img width="230" src="/index/images/c8.jpg"></a>
                                <p class="memb_courname"><a href="/course/video" class="blacklink">会计基础</a></p>
                                <div class="mpp">
                                    <div class="lv" style="width:20%;"></div>
                                </div>
                                <p class="goon"><a href="/course/video"><span>继续学习</span></a></p>
                            </div>
                        </li>
                        <li>
                            <div class="courseli">
                                <a href="/course/video" target="_blank"><img width="230" src="/index/images/c8.jpg"></a>
                                <p class="memb_courname"><a href="/course/video" class="blacklink">会计基础</a></p>
                                <div class="mpp">
                                    <div class="lv" style="width:20%;"></div>
                                </div>
                                <p class="goon"><a href="/course/video"><span>继续学习</span></a></p>
                            </div>
                        </li>
                        <li>
                            <div class="courseli">
                                <a href="/course/video" target="_blank"><img width="230" src="/index/images/c8.jpg"></a>
                                <p class="memb_courname"><a href="/course/video" class="blacklink">会计基础</a></p>
                                <div class="mpp">
                                    <div class="lv" style="width:20%;"></div>
                                </div>
                                <p class="goon"><a href="/course/video"><span>继续学习</span></a></p>
                            </div>
                        </li>





                        <div style="height:10px;" class="clearfix"></div>
                    </ul>

                </div>
                <div class="hide">
                    <div>
                        <ul class="memb_course">

                            <li>
                                <div class="courseli">
                                    <a href="/course/video" target="_blank"><img width="230" src="/index/images/c8.jpg"></a>
                                    <p class="memb_courname"><a href="/course/coursecont" class="blacklink">会计基础</a></p>
                                    <div class="mpp">
                                        <div class="lv" style="width:100%;"></div>
                                    </div>
                                    <p class="goon"><a href="/course/coursecont"><span>查看课程</span></a></p>
                                </div>
                            </li>
                            <li>
                                <div class="courseli">
                                    <a href="/course/video" target="_blank"><img width="230" src="/index/images/c8.jpg"></a>
                                    <p class="memb_courname"><a href="/course/coursecont" class="blacklink">会计基础</a></p>
                                    <div class="mpp">
                                        <div class="lv" style="width:100%;"></div>
                                    </div>
                                    <p class="goon"><a href="/course/coursecont"><span>查看课程</span></a></p>
                                </div>
                            </li>


                            <div class="clearfix" style="height:10px;"></div>
                        </ul>

                    </div>
                </div>
                <div class="hide">
                    <div>
                        <ul class="memb_course">
                            <li>
                                <div class="courseli mysc">
                                    <a href="/course/video" target="_blank"><img width="230" src="/index/images/c8.jpg" class="mm"></a>
                                    <p class="memb_courname"><a href="/course/video" class="blacklink">会计基础</a></p>
                                    <div class="mpp">
                                        <div class="lv" style="width:20%;"></div>
                                    </div>
                                    <p class="goon"><a href="#"><span>继续学习</span></a></p>
                                    <div class="mask"><span class="qxsc"  title="移除收藏">▬</span></div>
                                </div>
                            </li>
                            <li>
                                <div class="courseli mysc">
                                    <a href="/course/video" target="_blank"><img width="230" src="/index/images/c8.jpg" class="mm"></a>
                                    <p class="memb_courname"><a href="/course/video" class="blacklink">会计基础</a></p>
                                    <div class="mpp">
                                        <div class="lv" style="width:20%;"></div>
                                    </div>
                                    <p class="goon"><a href="#"><span>继续学习</span></a></p>
                                    <div class="mask"><span class="qxsc"  title="移除收藏">▬</span></div>
                                </div>
                            </li>
                            <div class="clearfix" style="height:10px;"></div>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="clearh"></div>
</div>

<!-- InstanceEndEditable -->


<div class="clearh"></div>
@include('index.public.foot')
<!--右侧浮动-->
@include('index.public.rmbar')
</body>

<!-- InstanceEnd --></html>

