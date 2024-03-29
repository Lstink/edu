<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title> Login </title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Key Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        //        bg.jpg
        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link rel="stylesheet" href="{{env('STATIC_URL')}}html/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{env('STATIC_URL')}}html/css/font-awesome.min.css" type="text/css" media="all">

</head>

<body>

<section class="main">
    <div class="layer">

        <div class="bottom-grid">
            <div class="logo">
                <h1> <a href=""><span class="fa fa-key"></span> 登录❤ </a></h1>
            </div>
            <div class="links">
                <ul class="links-unordered-list">
                    <li class="active">
                        <a href="#" class="">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-w3ls">
            <div class="text-center icon">
                <span class="fa fa-html5"></span>
            </div>
            <div class="content-bottom">
                <form action="#" method="post">
                    <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input name="text1" id="username" type="text" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="field-group">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input name="password" id="pwd" type="Password" placeholder="Password">
                        </div>
                    </div>
                    <div class="wthree-field">
                        <button type="button" class="btn">Get Started</button>
                    </div>
                    <ul class="list-login">
                        <li class="switch-agileits">
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                                keep Logged in
                            </label>
                        </li>
                        <li>
                            <a href="#" class="text-right">forgot password?</a>
                        </li>
                        <li class="clearfix"></li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</section>

</body>
<!-- //Body -->
</html>
<script src="{{env('STATIC_URL')}}layui/layui.js"></script>
<script src="{{env('STATIC_URL')}}js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">

</script>
