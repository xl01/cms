<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"E:\myphp_www\PHPTutorial\WWW\6cms\public/../application/admin\view\login\index.html";i:1561270716;s:75:"E:\myphp_www\PHPTutorial\WWW\6cms\application\admin\view\common\header.html";i:1561269538;s:75:"E:\myphp_www\PHPTutorial\WWW\6cms\application\admin\view\common\footer.html";i:1560642643;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>测试架构项目</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://my.cms.com/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="http://my.cms.com/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="http://my.cms.com/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="http://my.cms.com/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="http://my.cms.com/static/admin/style/demo.css" rel="stylesheet">
    <link href="http://my.cms.com/static/admin/style/typicons.css" rel="stylesheet">
    <link href="http://my.cms.com/static/admin/style/animate.css" rel="stylesheet">

    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <!--弹出框-->
    <script type="text/javascript" src="http://my.cms.com/static/dialog/layer.js"></script>
    <script type="text/javascript" src="http://my.cms.com/static/dialog.js"></script>
    <script type="text/javascript" src="http://my.cms.com/static/jquery.form.js"></script>
    <script type="text/javascript" src="http://my.cms.com/static/form.js"></script>
</head>

<body>
    <div class="login-container animated fadeInDown">
        <form id="loginform" action="<?php echo url('checkLogin'); ?>" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">请登录</div>
                <div class="loginbox-textbox">
                    <input value="admin" class="form-control" placeholder="请输入用户名" name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="请输入密码" name="password" type="password">
                </div>

                <div class="loginbox-textbox">
                    <input class="form-control" autocomplete="off" placeholder="验证码" name="yzm" type="text">
                    <div><img style="margin-top:6px;" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>?'+ Math.random();"/></div>
                </div>


                <div class="loginbox-submit">
                    <input id="loginbtn" class="btn btn-primary btn-block" value="登录" type="button">
                </div>
            </div>
                <div class="logobox">
                    <p class="text-center">山东万虹家政欢迎您</p>
                </div>
        </form>
    </div>
    <script>
        var fm=new FormHelper();
        fm.button="#loginbtn";
        fm.form="#loginform";
        fm.url="<?php echo url('checkLogin'); ?>";
        fm.tourl="<?php echo url('index/index'); ?>";
        fm.init();
    </script>
        <!--Basic Scripts-->
        <script src="http://my.cms.com/static/admin/style/bootstrap.js"></script>
        <!--Beyond Scripts-->
        <script src="http://my.cms.com/static/admin/style/beyond.js"></script>
    </body>

</html>