<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"D:\myphp_www\PHPTutorial\WWW\6cms\public/../application/admin\view\index\index.html";i:1560428730;s:75:"D:\myphp_www\PHPTutorial\WWW\6cms\application\admin\view\common\header.html";i:1560428730;s:75:"D:\myphp_www\PHPTutorial\WWW\6cms\application\admin\view\common\footer.html";i:1560428730;}*/ ?>
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
    <!-- 头部 -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <img src="http://my.cms.com/static/admin/images/logo.png" alt="">
                        </small>
                    </a>
                </div>
                <!-- /Navbar Barnd -->
                <!-- Sidebar Collapse -->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="collapse-icon fa fa-bars"></i>
                </div>
                <!-- /Sidebar Collapse -->
                <!-- Account Area and Settings -->
                <div class="navbar-header pull-right">
                    <div class="navbar-account">
                        <ul class="account-area">
                            <li>
                                <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                    <div class="avatar" title="View your public profile">
                                        <img src="http://my.cms.com/static/admin/images/adam-jansen.jpg">
                                    </div>
                                    <section>
                                        <h2><span class="profile"><span>admin</span></span></h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a>David Stevenson</a></li>
                                    <li class="dropdown-footer">
                                        <a href="/admin/user/logout.html">
                                            退出登录
                                        </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a href="/admin/user/changePwd.html">
                                            修改密码
                                        </a>
                                    </li>
                                </ul>
                                <!--/Login Area Dropdown-->
                            </li>
                            <!-- /Account Area -->
                            <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                            <!-- Settings -->
                        </ul>
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>

    <!-- /头部 -->

    <div class="main-container container-fluid">
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa  fa-dashboard"></i>
                            <span class="menu-text">仪表盘</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="javascript:void(0)" data-src="welcome.html">
                                    <span class="menu-text">
                                        首页 </span>
                                    <!-- <i class="menu-expand"></i> -->
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-src="add.html">
                                    <span class="menu-text">
                                        更新 </span>
                                    <!-- <i class="menu-expand"></i> -->
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">文章</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="javascript:void(0)" data-src="list.html">
                                    <span class="menu-text">所有文章 </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-src="list.html">
                                    <span class="menu-text">写文章 </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-src="list.html">
                                    <span class="menu-text">分类目录 </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-src="list.html">
                                    <span class="menu-text">标签 </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-xing-square"></i>
                            <span class="menu-text">媒体</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="javascript:void(0)" data-src="edit.html">
                                    <span class="menu-text">
                                        媒体库 </span>
                                    <!-- <i class="menu-expand"></i> -->
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-src="edit.html">
                                    <span class="menu-text">
                                        添加 </span>
                                    <!-- <i class="menu-expand"></i> -->
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa  fa-pagelines"></i>
                            <span class="menu-text">页面</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="javascript:void(0)" data-src="edit.html">
                                    <span class="menu-text">
                                        所有页面 </span>
                                    <!-- <i class="menu-expand"></i> -->
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-src="edit.html">
                                    <span class="menu-text">
                                        新建页面 </span>
                                    <!-- <i class="menu-expand"></i> -->
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-comment"></i>
                            <span class="menu-text">评论</span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-ambulance"></i>
                            <span class="menu-text">外观</span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-bug"></i>
                            <span class="menu-text">插件</span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">用户</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                                <li>
                                    <a href="javascript:void(0)" data-src="<?php echo url('admin/user/add'); ?>">
                                        <span class="menu-text">
                                            添加用户 </span>
                                        <!-- <i class="menu-expand"></i> -->
                                    </a>
                                </li>
                            </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gears"></i>
                            <span class="menu-text">工具</span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">设置</span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">

                <!-- Page Body -->
                <iframe src="<?php echo url('admin/index/welcome'); ?>" id="iframe" width="100%" height="600px" frameborder="0"></iframe>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>


		<script src="http://my.cms.com/static/admin/style/iframe.js"></script>
        <script>
            $(document).ready(function () {
                $(".submenu li a").click(function () {
                    var aurl = $(this).data('src');
                    $("#iframe").attr("src", aurl);
                });
            });
        </script>
        <!--Basic Scripts-->
        <script src="http://my.cms.com/static/admin/style/bootstrap.js"></script>
        <!--Beyond Scripts-->
        <script src="http://my.cms.com/static/admin/style/beyond.js"></script>
    </body>

</html>
