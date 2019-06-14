<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"E:\myphp_www\PHPTutorial\WWW\6cms\public/../application/admin\view\user\add.html";i:1560469195;s:75:"E:\myphp_www\PHPTutorial\WWW\6cms\application\admin\view\common\header.html";i:1560469195;s:75:"E:\myphp_www\PHPTutorial\WWW\6cms\application\admin\view\common\footer.html";i:1560469195;}*/ ?>
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
    <script type="text/javascript" src="http://my.cms.com/static/form.js"></script>
</head>

<body>
        <!-- Page Body -->
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <a href="#">系统</a>
                </li>
                <li>
                    <a href="#">用户管理</a>
                </li>
                <li class="active">添加用户</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
    
        <!-- Page Body -->
        <div class="page-body">
    
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-header bordered-bottom bordered-blue">
                            <span class="widget-caption">新增用户</span>
                        </div>
                        <div class="widget-body">
                            <div id="horizontal-form">
                                <form id="user_add_form" class="form-horizontal" role="form" action="" method="post">
                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">用户名</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="username" placeholder="" name="username"
                                                required="" type="text">
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>
                                    <div class="form-group">
                                            <label for="password" class="col-sm-2 control-label no-padding-right">密码</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" placeholder="" name="password"
                                                    required="" type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>
                                    <div class="form-group">
                                            <label for="password" class="col-sm-2 control-label no-padding-right">邮箱</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" placeholder="" name="email"
                                                    required="" type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>
                                    <div class="form-group">
                                            <label for="password" class="col-sm-2 control-label no-padding-right">真实姓名</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" placeholder="" name="realname"
                                                    required="" type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button id="user_add_btn" type="button" class="btn btn-default">保存信息</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    var fm=new FormHelper();
                    fm.form='#user_add_form';
                    fm.button='#user_add_btn';
                    fm.url="<?php echo url('admin/user/save'); ?>";
                    fm.tourl="<?php echo url('admin/index/index'); ?>";
                    fm.init();
                </script>
            </div>
    
        </div>

    
    
            <!--Basic Scripts-->
        <script src="http://my.cms.com/static/admin/style/bootstrap.js"></script>
        <!--Beyond Scripts-->
        <script src="http://my.cms.com/static/admin/style/beyond.js"></script>
    </body>

</html>