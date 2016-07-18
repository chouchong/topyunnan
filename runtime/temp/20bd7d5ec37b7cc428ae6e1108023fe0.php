<?php if (!defined('THINK_PATH')) exit(); /*a:9:{s:75:"D:\phpStudy\WWW\topyunnan\public/../application/admin\view\index\index.html";i:1468203746;s:73:"D:\phpStudy\WWW\topyunnan\public/../application/admin\view\base\base.html";i:1468380670;s:76:"D:\phpStudy\WWW\topyunnan\public/../application/admin\view\public\style.html";i:1468380567;s:78:"D:\phpStudy\WWW\topyunnan\public/../application/admin\view\public\loading.html";i:1468203746;s:74:"D:\phpStudy\WWW\topyunnan\public/../application/admin\view\public\nav.html";i:1468396422;s:78:"D:\phpStudy\WWW\topyunnan\public/../application/admin\view\public\sidebar.html";i:1468377891;s:77:"D:\phpStudy\WWW\topyunnan\public/../application/admin\view\public\script.html";i:1468808902;s:76:"D:\phpStudy\WWW\topyunnan\public/../application/admin\view\public\modal.html";i:1468203746;s:77:"D:\phpStudy\WWW\topyunnan\public/../application/admin\view\public\danger.html";i:1468227114;}*/ ?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>

    <meta name="description" content="Dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">
    <!--Basic Styles-->
    <!--Basic Styles-->
<link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
<link id="bootstrap-rtl-link" href="" rel="stylesheet" />
<link href="/assets/css/font-awesome.min.css" rel="stylesheet" />
<link href="/assets/css/weather-icons.min.css" rel="stylesheet" />

<!--Fonts-->
<!-- <link href="http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css"> -->

<!--Beyond styles-->
<link id="beyond-link" href="/assets/css/beyond.min.css" rel="stylesheet" type="text/css" />
<link href="/assets/css/demo.min.css" rel="stylesheet" />
<link href="/assets/css/typicons.min.css" rel="stylesheet" />
<link href="/assets/css/animate.min.css" rel="stylesheet" />
<link id="skin-link" href="" rel="stylesheet" type="text/css" />

<!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
<script src="/assets/js/skins.min.js"></script>
<script src="/assets/js/jquery-2.0.3.min.js"></script>
<script src="/assets/js/bootbox/bootbox.js"></script>

    
</head>
<!-- /Head -->
<!-- Body -->
<body>
    <!-- Loading Container -->
    <div class="loading-container">
    <div class="loading-progress">
        <div class="rotator">
            <div class="rotator">
                <div class="rotator colored">
                    <div class="rotator">
                        <div class="rotator colored">
                            <div class="rotator colored"></div>
                            <div class="rotator"></div>
                        </div>
                        <div class="rotator colored"></div>
                    </div>
                    <div class="rotator"></div>
                </div>
                <div class="rotator"></div>
            </div>
            <div class="rotator"></div>
        </div>
        <div class="rotator"></div>
    </div>
</div>
    <!--  /Loading Container -->
    <!-- Navbar -->
    <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="/assets/img/logo.png" alt="" />
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->

            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/assets/img/avatars/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo $userInfo; ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <!--Avatar Area-->
                                <li class="edit">
                                    <a href="#" class="pull-right">用户设置</a>
                                </li>
                                <!--/Theme Selector Area-->
                                <li class="dropdown-footer" id="bootbox-confirm" style="cursor: pointer;">
                                    <a>
                                        退 出
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                    </ul>
                    <div class="setting">
                        <a id="btn-setting" title="Setting" href="#">
                            <i class="icon glyphicon glyphicon-cog"></i>
                        </a>
                    </div>
                    <div class="setting-container">
                        <label>
                            <a class="dropdown-footer"><span class="text" style="color: #fff;">退 出</span></a>
                        </label>
                    </div>
                    <!-- Settings -->
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
<script>
    $(function(){
        "use strict";
        $(".dropdown-footer").on('click', function () {
            bootbox.confirm("是否确定退出", function (result) {
                if (result) {
                    $.ajax({
                        type: "POST",
                        url: '/admin/common/logout',
                        dataType: 'json',
                        cache: false,
                        success: function(data) {
                            if(data.status>0){
                                window.location.href = '/admin/login.html';
                            }
                        },
                        error: function(xhr, status, error) {
                            console.log(xhr);
                            console.log(status);
                            console.log(error);
                        }
                    });
                }
            });
        });
    })
</script>
    <!-- /Navbar -->
    <!-- Main Container -->
    <div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input type="text" class="searchinput" />
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- 控制面板 -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <?php if(is_array($navBar) || $navBar instanceof \think\Collection): $i = 0; $__LIST__ = $navBar;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li <?php if($pid2 == $vo['id']||$pid1 == $vo['id']): ?>class="open"<?php endif; if($uri == $vo['name']): ?>class="active"<?php endif; ?>>
            <a href='<?php if(!empty($vo["name"])): ?><?php echo url($vo["name"]); else: ?>#<?php endif; ?>' class="menu-dropdown">
                <i class="menu-icon <?php echo $vo['icon']; ?>"></i>
                <span class="menu-text"><?php echo $vo['title']; ?> </span>
                <i class="menu-expand"></i>
            </a>
            <?php if(isset($vo['sub']) && !empty($vo['sub'])): ?>
            <ul class="submenu">
                <?php if(is_array($vo['sub']) || $vo['sub'] instanceof \think\Collection): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                <li <?php if($uri == $v['name']||$pid1 == $v['id']): ?>class="active"<?php endif; ?>>
                    <a href="<?php echo url($v['name']); ?>">
                        <i class="menu-icon <?php echo $v['icon']; ?>"></i>
                        <span class="menu-text"> <?php echo $v['title']; ?> </span>
                    </a>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <?php endif; ?>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <!-- /Sidebar Menu -->
</div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            
<div class="page-content">
    <!-- Page Breadcrumb -->
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="#">Home</a>
            </li>
            <li class="active">Dashboard</li>
        </ul>
    </div>
    <!-- /Page Breadcrumb -->
    <!-- Page Header -->
    <div class="page-header position-relative">
        <div class="header-title">
            <h1>
                Dashboard
            </h1>
        </div>
        <!--Header Buttons-->
        <div class="header-buttons">
            <a class="sidebar-toggler" href="#">
                <i class="fa fa-arrows-h"></i>
            </a>
            <a class="refresh" id="refresh-toggler" href="">
                <i class="glyphicon glyphicon-refresh"></i>
            </a>
            <a class="fullscreen" id="fullscreen-toggler" href="#">
                <i class="glyphicon glyphicon-fullscreen"></i>
            </a>
        </div>
        <!--Header Buttons End-->
    </div>
    <!-- /Page Header -->
    <!-- Page Body -->
    <div class="page-body">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="databox radius-bordered databox-shadowed databox-graded">
                            <div class="databox-left bg-themesecondary">
                                <div class="databox-piechart">
                                    <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="50" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">50%</span></div>
                                </div>
                            </div>
                            <div class="databox-right">
                                <span class="databox-number themesecondary">14</span>
                                <div class="databox-text darkgray">NEW TASKS</div>
                                <div class="databox-stat themesecondary radius-bordered">
                                    <i class="stat-icon icon-lg fa fa-tasks"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="databox radius-bordered databox-shadowed databox-graded">
                            <div class="databox-left bg-themethirdcolor">
                                <div class="databox-piechart">
                                    <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="15" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.2)"><span class="white font-90">15%</span></div>
                                </div>
                            </div>
                            <div class="databox-right">
                                <span class="databox-number themethirdcolor">1</span>
                                <div class="databox-text darkgray">NEW MESSAGE</div>
                                <div class="databox-stat themethirdcolor radius-bordered">
                                    <i class="stat-icon  icon-lg fa fa-envelope-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="databox radius-bordered databox-shadowed databox-graded">
                            <div class="databox-left bg-themeprimary">
                                <div class="databox-piechart">
                                    <div id="users-pie" data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="76" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">76%</span></div>
                                </div>
                            </div>
                            <div class="databox-right">
                                <span class="databox-number themeprimary">98</span>
                                <div class="databox-text darkgray">NEW USERS</div>
                                <div class="databox-state bg-themeprimary">
                                    <i class="fa fa-check"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="databox radius-bordered databox-shadowed databox-graded">
                            <div class="databox-left no-padding bordered-left-2 bordered-palegreen">
                                <img src="/assets/img/avatars/John-Smith.jpg" style="width:65px; height:65px;">
                            </div>
                            <div class="databox-right padding-top-20">
                                <div class="databox-stat palegreen">
                                    <i class="stat-icon icon-xlg fa fa-phone"></i>
                                </div>
                                <div class="databox-text darkgray">JOHN SMITH</div>
                                <div class="databox-text darkgray">TOP RESELLER</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="dashboard-box">
                            <div class="box-header">
                                <div class="deadline">
                                    Remaining Days: 109
                                </div>
                            </div>
                            <div class="box-progress">
                                <div class="progress-handle">day 20</div>
                                <div class="progress progress-xs progress-no-radius bg-whitesmoke">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                    </div>
                                </div>
                            </div>
                            <div class="box-tabbs">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs tabs-flat  nav-justified" id="myTab11">
                                        <li class="active">
                                            <a data-toggle="tab" href="#visits">
                                                Visits
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#realtime">
                                                Real-Time
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" id="contacttab" href="#bandwidth">
                                                Bandwidth
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#sales">
                                                Sales
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tabs-flat no-padding">
                                        <div id="visits" class="tab-pane active animated fadeInUp">
                                            <div class="row">
                                                <div class="col-lg-12 chart-container">
                                                    <div id="dashboard-chart-visits" class="chart chart-lg no-margin"></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div id="realtime" class="tab-pane padding-left-5 padding-right-10 animated fadeInUp">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div id="dashboard-chart-realtime" class="chart chart-lg no-margin" style="width:100%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="bandwidth" class="tab-pane padding-10 animated fadeInUp">
                                            <div class="databox-sparkline bg-themeprimary">
                                                <span id="dashboard-bandwidth-chart" data-sparkline="compositeline" data-height="250px" data-width="100%" data-linecolor="#fff" data-secondlinecolor="#eee"
                                                      data-fillcolor="rgba(255,255,255,.1)" data-secondfillcolor="rgba(255,255,255,.25)"
                                                      data-spotradius="0"
                                                      data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#ffce55"
                                                      data-highlightspotcolor="#fff" data-highlightlinecolor="#fff"
                                                      data-linewidth="2" data-secondlinewidth="2"
                                                      data-composite="500, 400, 100, 450, 300, 200, 100, 200">
                                                    300,300,400,300,200,300,300,200
                                                </span>
                                            </div>
                                        </div>
                                        <div id="sales" class="tab-pane animated fadeInUp no-padding-bottom" style="padding:20px 20px 0 20px;">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                    <div class="databox databox-xlg databox-vertical databox-inverted databox-shadowed">
                                                        <div class="databox-top">
                                                            <div class="databox-sparkline">
                                                                <span data-sparkline="line" data-height="125px" data-width="100%" data-fillcolor="false" data-linecolor="themesecondary"
                                                                      data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#ffce55"
                                                                      data-highlightspotcolor="#ffce55" data-highlightlinecolor="#ffce55"
                                                                      data-linewidth="1.5" data-spotradius="2">
                                                                    1,2,4,3,5,6,8,7,11,14,11,12
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="databox-bottom no-padding text-align-center">
                                                            <span class="databox-number lightcarbon no-margin">224</span>
                                                            <span class="databox-text lightcarbon no-margin">Sale Unit / Hour</span>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                    <div class="databox databox-xlg databox-vertical databox-inverted databox-shadowed">
                                                        <div class="databox-top">
                                                            <div class="databox-sparkline">
                                                                <span data-sparkline="line" data-height="125px" data-width="100%" data-fillcolor="false" data-linecolor="themefourthcolor"
                                                                      data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#8cc474"
                                                                      data-highlightspotcolor="#8cc474" data-highlightlinecolor="#8cc474"
                                                                      data-linewidth="1.5" data-spotradius="2">
                                                                    100,208,450,298,450,776,234,680,1100,1400,1000,1200
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="databox-bottom no-padding text-align-center">
                                                            <span class="databox-number lightcarbon no-margin">7063$</span>
                                                            <span class="databox-text lightcarbon no-margin">Income / Hour</span>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                    <div class="databox databox-xlg databox-vertical databox-inverted databox-shadowed">
                                                        <div class="databox-top">
                                                            <div class="databox-piechart">
                                                                <div data-toggle="easypiechart" class="easyPieChart block-center"
                                                                     data-barcolor="themeprimary" data-linecap="butt" data-percent="80" data-animate="500"
                                                                     data-linewidth="8" data-size="125" data-trackcolor="#eee">
                                                                    <span class="font-200"><i class="fa fa-gift themeprimary"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="databox-bottom no-padding text-align-center">
                                                            <span class="databox-number lightcarbon no-margin">9</span>
                                                            <span class="databox-text lightcarbon no-margin">NEW ORDERS</span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                    <div class="databox databox-xlg databox-vertical databox-inverted  databox-shadowed">
                                                        <div class="databox-top">
                                                            <div class="databox-piechart">
                                                                <div data-toggle="easypiechart" class="easyPieChart block-center"
                                                                     data-barcolor="themethirdcolor" data-linecap="butt" data-percent="40" data-animate="500"
                                                                     data-linewidth="8" data-size="125" data-trackcolor="#eee">
                                                                    <span class="white font-200"><i class="fa fa-tags themethirdcolor"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="databox-bottom no-padding text-align-center">
                                                            <span class="databox-number lightcarbon no-margin">11</span>
                                                            <span class="databox-text lightcarbon no-margin">NEW TICKETS</span>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-days">
                                <div class="row">
                                    <div class=" col-lg-1 col-md-1 col-sm-6 col-xs-12">
                                        <a class="day-container" href="">
                                            <div class="day">16</div>
                                            <div class="month">AUG</div>
                                        </a>
                                    </div>
                                    <div class=" col-lg-1 col-md-1 col-sm-6 col-xs-12">
                                        <a class="day-container" href="">
                                            <div class="day">15</div>
                                            <div class="month">JUL</div>
                                            <b class="day-pin"></b>
                                        </a>
                                    </div>
                                    <div class=" col-lg-1 col-md-1 col-sm-6 col-xs-12">
                                        <a class="day-container highlight" href="">
                                            <div class="day">11</div>
                                            <div class="month">JUN</div>
                                        </a>
                                    </div>
                                    <div class=" col-lg-1 col-md-1 col-sm-6 col-xs-12">
                                        <a class="day-container" href="">
                                            <div class="day">09</div>
                                            <div class="month">MAY</div>
                                        </a>
                                    </div>
                                    <div class=" col-lg-1 col-md-1 col-sm-6 col-xs-12">
                                        <a class="day-container " href="">
                                            <div class="day">14</div>
                                            <div class="month">APR</div>
                                            <b class="day-pin"></b>
                                        </a>
                                    </div>
                                    <div class=" col-lg-1 col-md-1 col-sm-6 col-xs-12">
                                        <a class="day-container" href="">
                                            <div class="day">01</div>
                                            <div class="month">MAR</div>
                                        </a>
                                    </div>
                                    <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <a class="day-container all" href="">
                                            <div class="day">2013</div>
                                            <div class="month">SEE ALL</div>
                                            <span class="day-more">
                                                <i></i>
                                            </span>
                                        </a>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="orders-container">
                    <div class="orders-header">
                        <h6>Latest Orders</h6>
                    </div>
                    <ul class="orders-list">
                        <li class="order-item">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                    <div class="item-booker">Ned Stards</div>
                                    <div class="item-time">
                                        <i class="fa fa-calendar"></i>
                                        <span>10 minutes ago</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                    <div class="item-price">
                                        <span class="currency">$</span>
                                        <span class="price">400</span>
                                    </div>
                                </div>
                            </div>
                            <a class="item-more" href="">
                                <i></i>
                            </a>
                        </li>
                        <li class="order-item top">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                    <div class="item-booker">Steve Lewis</div>
                                    <div class="item-time">
                                        <i class="fa fa-calendar"></i>
                                        <span>2 hours ago</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                    <div class="item-price">
                                        <span class="currency">$</span>
                                        <span class="price">620</span>
                                    </div>
                                </div>
                            </div>
                            <a class="item-more" href="">
                                <i></i>
                            </a>
                        </li>
                        <li class="order-item">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                    <div class="item-booker">John Ford</div>
                                    <div class="item-time">
                                        <i class="fa fa-calendar"></i>
                                        <span>Today 8th July</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                    <div class="item-price">
                                        <span class="currency">$</span>
                                        <span class="price">220</span>
                                    </div>
                                </div>
                            </div>
                            <a class="item-more" href="">
                                <i></i>
                            </a>
                        </li>
                        <li class="order-item">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                    <div class="item-booker">Kim Basinger</div>
                                    <div class="item-time">
                                        <i class="fa fa-calendar"></i>
                                        <span>Yesterday 7th July</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                    <div class="item-price">
                                        <span class="currency">$</span>
                                        <span class="price">400</span>
                                    </div>
                                </div>
                            </div>
                            <a class="item-more" href="">
                                <i></i>
                            </a>
                        </li>
                        <li class="order-item">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                    <div class="item-booker">Steve Lewis</div>
                                    <div class="item-time">
                                        <i class="fa fa-calendar"></i>
                                        <span>5th July</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                    <div class="item-price">
                                        <span class="currency">$</span>
                                        <span class="price">340</span>
                                    </div>
                                </div>
                            </div>
                            <a class="item-more" href="">
                                <i></i>
                            </a>
                        </li>
                    </ul>
                    <div class="orders-footer">
                        <a class="show-all" href=""><i class="fa fa-angle-down"></i> Show All</a>
                        <div class="help">
                            <a href=""><i class="fa fa-question"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-12 col-xs-12">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themeprimary">
                        <i class="widget-icon fa fa-tasks themeprimary"></i>
                        <span class="widget-caption themeprimary">Task Board</span>
                    </div><!--Widget Header-->
                    <div class="widget-body">
                        <div class="widget-main no-padding">
                            <div class="task-container">
                                <div class="task-search">
                                    <span class="input-icon">
                                        <input type="text" class="form-control" placeholder="Search Tasks">
                                        <i class="fa fa-search gray"></i>
                                    </span>
                                </div>
                                <ul class="tasks-list">
                                    <li class="task-item">
                                        <div class="task-check">
                                            <label>
                                                <input type="checkbox">
                                                <span class="text"></span>
                                            </label>
                                        </div>
                                        <div class="task-state">
                                            <span class="label label-yellow">
                                                In Progress
                                            </span>
                                        </div>
                                        <div class="task-time">1 hour ago</div>
                                        <div class="task-body">Ask to the sysadmins to install Python 3 on the server and run it</div>
                                        <div class="task-creator"><a href="">Cameron Hetfield</a></div>
                                        <div class="task-assignedto">assigned to you</div>
                                    </li>
                                    <li class="task-item">
                                        <div class="task-check">
                                            <label>
                                                <input type="checkbox">
                                                <span class="text"></span>
                                            </label>
                                        </div>
                                        <div class="task-state">
                                            <span class="label label-orange">
                                                Active
                                            </span>
                                        </div>
                                        <div class="task-time">2 hours ago</div>
                                        <div class="task-body">Write documentation for the new API with test and deploy specifications</div>
                                        <div class="task-creator"><a href="">Behrang Nitsche</a></div>
                                        <div class="task-assignedto">assigned to you</div>
                                    </li>
                                    <li class="task-item">
                                        <div class="task-check">
                                            <label>
                                                <input type="checkbox">
                                                <span class="text"></span>
                                            </label>
                                        </div>
                                        <div class="task-state">
                                            <span class="label label-palegreen">
                                                Approved
                                            </span>
                                        </div>
                                        <div class="task-time">yesterday</div>
                                        <div class="task-body">Code refactoring and rewriting silly codes and test it</div>
                                        <div class="task-creator"><a href="">David Fincher</a></div>
                                        <div class="task-assignedto">assigned to Kim</div>
                                    </li>
                                </ul>
                            </div>
                        </div><!--Widget Main Container-->
                    </div><!--Widget Body-->
                </div>

            </div>
            <div class="col-lg-8 col-sm-12 col-xs-12">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="widget">
                            <div class="widget-header bordered-bottom bordered-themesecondary">
                                <i class="widget-icon fa fa-tags themesecondary"></i>
                                <span class="widget-caption themesecondary">Ticket Board</span>
                            </div><!--Widget Header-->
                            <div class="widget-body">
                                <div class="widget-main no-padding">
                                    <div class="tickets-container">
                                        <ul class="tickets-list">
                                            <li class="ticket-item">
                                                <div class="row">
                                                    <div class="ticket-user col-lg-6 col-sm-12">
                                                        <img src="/assets/img/avatars/adam-jansen.jpg" class="user-avatar">
                                                        <span class="user-name">Adam Johnson</span>
                                                        <span class="user-at">at</span>
                                                        <span class="user-company">Microsoft</span>
                                                    </div>
                                                    <div class="ticket-time  col-lg-4 col-sm-6 col-xs-12">
                                                        <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                        <i class="fa fa-clock-o"></i>
                                                        <span class="time">1 Hours Ago</span>
                                                    </div>
                                                    <div class="ticket-type  col-lg-2 col-sm-6 col-xs-12">
                                                        <span class="divider hidden-xs"></span>
                                                        <span class="type">Issue</span>
                                                    </div>
                                                    <div class="ticket-state bg-palegreen">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="ticket-item">
                                                <div class="row">
                                                    <div class="ticket-user col-lg-6 col-sm-12">
                                                        <img src="/assets/img/avatars/divyia.jpg" class="user-avatar">
                                                        <span class="user-name">Divyia Phillips</span>
                                                        <span class="user-at">at</span>
                                                        <span class="user-company">Dribbble</span>
                                                    </div>
                                                    <div class="ticket-time  col-lg-4 col-sm-6 col-xs-12">
                                                        <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                        <i class="fa fa-clock-o"></i>
                                                        <span class="time">3 Hours Ago</span>
                                                    </div>
                                                    <div class="ticket-type  col-lg-2 col-sm-6 col-xs-12">
                                                        <span class="divider hidden-xs"></span>
                                                        <span class="type">Payment</span>
                                                    </div>
                                                    <div class="ticket-state bg-palegreen">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="ticket-item">
                                                <div class="row">
                                                    <div class="ticket-user col-lg-6 col-sm-12">
                                                        <img src="/assets/img/avatars/Matt-Cheuvront.jpg" class="user-avatar">
                                                        <span class="user-name">Nicolai Larson</span>
                                                        <span class="user-at">at</span>
                                                        <span class="user-company">Google</span>
                                                    </div>
                                                    <div class="ticket-time  col-lg-4 col-sm-6 col-xs-12">
                                                        <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                        <i class="fa fa-clock-o"></i>
                                                        <span class="time">18 Hours Ago</span>
                                                    </div>
                                                    <div class="ticket-type  col-lg-2 col-sm-6 col-xs-12">
                                                        <span class="divider hidden-xs"></span>
                                                        <span class="type">Issue</span>
                                                    </div>
                                                    <div class="ticket-state bg-darkorange">
                                                        <i class="fa fa-times"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="ticket-item">
                                                <div class="row">
                                                    <div class="ticket-user col-lg-6 col-sm-12">
                                                        <img src="/assets/img/avatars/Sergey-Azovskiy.jpg" class="user-avatar">
                                                        <span class="user-name">Bill Jackson</span>
                                                        <span class="user-at">at</span>
                                                        <span class="user-company">Mabna</span>
                                                    </div>
                                                    <div class="ticket-time  col-lg-4 col-sm-6 col-xs-12">
                                                        <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                        <i class="fa fa-clock-o"></i>
                                                        <span class="time">2 days Ago</span>
                                                    </div>
                                                    <div class="ticket-type  col-lg-2 col-sm-6 col-xs-12">
                                                        <span class="divider hidden-xs"></span>
                                                        <span class="type">Payment</span>
                                                    </div>
                                                    <div class="ticket-state bg-palegreen">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="ticket-item">
                                                <div class="row">
                                                    <div class="ticket-user col-lg-6 col-sm-12">
                                                        <img src="/assets/img/avatars/John-Smith.jpg" class="user-avatar">
                                                        <span class="user-name">Eric Clapton</span>
                                                        <span class="user-at">at</span>
                                                        <span class="user-company">Musicker</span>
                                                    </div>
                                                    <div class="ticket-time  col-lg-4 col-sm-6 col-xs-12">
                                                        <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                        <i class="fa fa-clock-o"></i>
                                                        <span class="time">2 days Ago</span>
                                                    </div>
                                                    <div class="ticket-type  col-lg-2 col-sm-6 col-xs-12">
                                                        <span class="divider hidden-xs"></span>
                                                        <span class="type">Info</span>
                                                    </div>
                                                    <div class="ticket-state bg-yellow">
                                                        <i class="fa fa-info"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col=lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="databox databox-lg databox-inverted radius-bordered databox-shadowed databox-graded databox-vertical">
                            <div class="databox-top bg-palegreen no-padding">
                                <div class="databox-stat white bg-palegreen font-120">
                                    <i class="stat-icon fa fa-caret-down icon-xlg"></i>
                                </div>
                                <div class="horizontal-space space-lg"></div>
                                <div class="databox-sparkline no-margin">
                                    <span data-sparkline="compositebar" data-height="82px" data-width="100%"
                                          data-barcolor="#b0dc81"
                                          data-barwidth="10px" data-barspacing="5px"
                                          data-fillcolor="false" data-linecolor="#fff" data-spotradius="3" data-linewidth="2"
                                          data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#fff"
                                          data-highlightspotcolor="#fff" data-highlightlinecolor="#fff"
                                          data-composite="7, 6, 5, 7, 9, 10, 8, 7, 6, 6, 4, 7, 8">
                                        8,4,1,2,4,6,2,4,4,8,10,7,10
                                    </span>
                                </div>
                            </div>
                            <div class="databox-bottom no-padding">
                                <div class="databox-row">
                                    <div class="databox-cell cell-6 text-align-left">
                                        <span class="databox-text">Sales Total</span>
                                        <span class="databox-number">$23,657</span>
                                    </div>
                                    <div class="databox-cell cell-6 text-align-right">
                                        <span class="databox-text">September</span>
                                        <span class="databox-number font-70">$1,257</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col=lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="databox databox-lg databox-inverted radius-bordered databox-shadowed databox-graded databox-vertical">
                            <div class="databox-top bg-orange no-padding">
                                <div class="databox-stat white bg-orange font-120">
                                    <i class="stat-icon fa fa-caret-up icon-xlg"></i>
                                </div>
                                <div class="horizontal-space space-lg"></div>
                                <div class="databox-sparkline no-margin">
                                    <span data-sparkline="compositebar" data-height="82px" data-width="100%"
                                          data-barcolor="#fb7d64"
                                          data-barwidth="10px" data-barspacing="5px"
                                          data-fillcolor="false" data-linecolor="#fff" data-spotradius="3" data-linewidth="2"
                                          data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#fff"
                                          data-highlightspotcolor="#fff" data-highlightlinecolor="#fff"
                                          data-composite="7, 6, 5, 7, 9, 10, 8, 6,2,4,1,2,7">
                                        10,7,10,8,4,6, 6, 4, 7, 8 ,4,4,8
                                    </span>
                                </div>
                            </div>
                            <div class="databox-bottom no-padding">
                                <div class="databox-row">
                                    <div class="databox-cell cell-6 text-align-left">
                                        <span class="databox-text">Users Total</span>
                                        <span class="databox-number">76,109</span>
                                    </div>
                                    <div class="databox-cell cell-6 text-align-right">
                                        <span class="databox-text">New</span>
                                        <span class="databox-number font-70">7,540</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col=lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="databox databox-lg databox-inverted radius-bordered databox-shadowed databox-graded databox-vertical">
                            <div class="databox-top bg-azure no-padding">
                                <div class="databox-stat white bg-azure font-120">
                                    <i class="stat-icon fa fa-caret-up icon-xlg"></i>
                                </div>
                                <div class="horizontal-space space-lg"></div>
                                <div class="databox-sparkline no-margin">
                                    <span data-sparkline="compositebar" data-height="82px" data-width="100%"
                                          data-barcolor="#3bcbef"
                                          data-barwidth="10px" data-barspacing="5px"
                                          data-fillcolor="false" data-linecolor="#fff" data-spotradius="3" data-linewidth="2"
                                          data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#fff"
                                          data-highlightspotcolor="#fff" data-highlightlinecolor="#fff"
                                          data-composite="8,4,1,2,4,6,2,4,4,8,10,7,7">
                                        7, 6, 5, 7, 9, 10, 8, 7, 6, 6, 4, 7, 8
                                    </span>
                                </div>
                            </div>
                            <div class="databox-bottom no-padding">
                                <div class="databox-row">
                                    <div class="databox-cell cell-6 text-align-left">
                                        <span class="databox-text">Visits Total</span>
                                        <span class="databox-number">990,541</span>
                                    </div>
                                    <div class="databox-cell cell-6 text-align-right">
                                        <span class="databox-text">September</span>
                                        <span class="databox-number font-70">292,123</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="databox databox-xxlg databox-vertical databox-inverted">
                    <div class="databox-top bg-whitesmoke no-padding">
                        <div class="databox-row row-2 bg-orange no-padding">
                            <div class="databox-cell cell-1 text-align-center no-padding padding-top-5">
                                <span class="databox-number white"><i class="fa fa-bar-chart-o no-margin"></i></span>
                            </div>
                            <div class="databox-cell cell-8 no-padding padding-top-5 text-align-left">
                                <span class="databox-number white">PAGE VIEWS</span>
                            </div>
                            <div class="databox-cell cell-3 text-align-right padding-10">
                                <span class="databox-text white">13 DECEMBER</span>
                            </div>
                        </div>
                        <div class="databox-row row-4">
                            <div class="databox-cell cell-6 no-padding padding-10 padding-left-20 text-align-left">
                                <span class="databox-number orange no-margin">534,908</span>
                                <span class="databox-text sky no-margin">OVERAL VIEWS</span>
                            </div>
                            <div class="databox-cell cell-2 no-padding padding-10 text-align-left">
                                <span class="databox-number orange no-margin">4,129</span>
                                <span class="databox-text darkgray no-margin">THIS WEEK</span>
                            </div>
                            <div class="databox-cell cell-2 no-padding padding-10 text-align-left">
                                <span class="databox-number orange no-margin">329</span>
                                <span class="databox-text darkgray no-margin">YESTERDAY</span>
                            </div>
                            <div class="databox-cell cell-2 no-padding padding-10 text-align-left">
                                <span class="databox-number orange no-margin">104</span>
                                <span class="databox-text darkgray no-margin">TODAY</span>
                            </div>
                        </div>
                        <div class="databox-row row-6 no-padding">
                            <div class="databox-sparkline">
                                <span data-sparkline="line" data-height="126px" data-width="100%" data-fillcolor="#37c2e2" data-linecolor="#37c2e2"
                                      data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#ffce55"
                                      data-highlightspotcolor="#f5f5f5 " data-highlightlinecolor="#f5f5f5"
                                      data-linewidth="2" data-spotradius="0">
                                    5,7,6,5,9,4,3,7,2
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="databox-bottom bg-sky no-padding">
                        <div class="databox-cell cell-2 text-align-center no-padding padding-top-5">
                            <span class="databox-header white">Mon</span>
                        </div>
                        <div class="databox-cell cell-2 text-align-center no-padding padding-top-5">
                            <span class="databox-header white">Tues</span>
                        </div>
                        <div class="databox-cell cell-2 text-align-center no-padding padding-top-5">
                            <span class="databox-header white">Wed</span>
                        </div>
                        <div class="databox-cell cell-2 text-align-center no-padding padding-top-5">
                            <span class="databox-header white">Thu</span>
                        </div>
                        <div class="databox-cell cell-2 text-align-center no-padding padding-top-5">
                            <span class="databox-header white">Fri</span>
                        </div>
                        <div class="databox-cell cell-2 text-align-center no-padding padding-top-5">
                            <span class="databox-header white">Sat</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="databox databox-xxlg databox-vertical databox-shadowed bg-white radius-bordered padding-5">
                    <div class="databox-top">
                        <div class="databox-row row-12">
                            <div class="databox-cell cell-3 text-center">
                                <div class="databox-number number-xxlg sonic-silver">164</div>
                                <div class="databox-text storm-cloud">online</div>
                            </div>
                            <div class="databox-cell cell-9 text-align-center">
                                <div class="databox-row row-6 text-left">
                                    <span class="badge badge-palegreen badge-empty margin-left-5"></span>
                                    <span class="databox-inlinetext uppercase darkgray margin-left-5">NEW</span>
                                    <span class="badge badge-yellow badge-empty margin-left-5"></span>
                                    <span class="databox-inlinetext uppercase darkgray margin-left-5">RETURNING</span>
                                </div>
                                <div class="databox-row row-6">
                                    <div class="progress bg-yellow progress-no-radius">
                                        <div class="progress-bar progress-bar-palegreen" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="databox-bottom">
                        <div class="databox-row row-12">
                            <div class="databox-cell cell-7 text-center  padding-5">
                                <div id="dashboard-pie-chart-sources" class="chart"></div>
                            </div>
                            <div class="databox-cell cell-5 text-center no-padding-left padding-bottom-30">
                                <div class="databox-row row-2 bordered-bottom bordered-ivory padding-10">
                                    <span class="databox-text sonic-silver pull-left no-margin">Type</span>
                                    <span class="databox-text sonic-silver pull-right no-margin uppercase">PCT</span>
                                </div>
                                <div class="databox-row row-2 bordered-bottom bordered-ivory padding-10">
                                    <span class="badge badge-blue badge-empty pull-left margin-5"></span>
                                    <span class="databox-text darkgray pull-left no-margin hidden-xs">FEED</span>
                                    <span class="databox-text darkgray pull-right no-margin uppercase">46%</span>
                                </div>
                                <div class="databox-row row-2 bordered-bottom bordered-ivory padding-10">
                                    <span class="badge badge-orange badge-empty pull-left margin-5"></span>
                                    <span class="databox-text darkgray pull-left no-margin hidden-xs">PREFERRAL</span>
                                    <span class="databox-text darkgray pull-right no-margin uppercase">21%</span>
                                </div>
                                <div class="databox-row row-2 bordered-bottom bordered-ivory padding-10">
                                    <span class="badge badge-pink badge-empty pull-left margin-5"></span>
                                    <span class="databox-text darkgray pull-left no-margin hidden-xs">DIRECT</span>
                                    <span class="databox-text darkgray pull-right no-margin uppercase">12%</span>
                                </div>
                                <div class="databox-row row-2 bordered-bottom bordered-ivory padding-10">
                                    <span class="badge badge-palegreen badge-empty pull-left margin-5"></span>
                                    <span class="databox-text darkgray pull-left no-margin hidden-xs">EMAIL</span>
                                    <span class="databox-text darkgray pull-right no-margin uppercase">11%</span>
                                </div>
                                <div class="databox-row row-2 padding-10">
                                    <span class="badge badge-yellow badge-empty pull-left margin-5"></span>
                                    <span class="databox-text darkgray pull-left no-margin hidden-xs">ORGANIC</span>
                                    <span class="databox-text darkgray pull-right no-margin uppercase">10%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Page Body -->
</div>

            <!-- /Page Content -->
        </div>
        <!-- /Page Container -->
        <!-- Main Container -->

    </div>

    <!--Basic Scripts-->
    <!--Basic Scripts-->
<script src="/assets/js/bootstrap.min.js"></script>

<!--Beyond Scripts-->
<script src="/assets/js/beyond.js"></script>


<!--Page Related Scripts-->
<!--Sparkline Charts Needed Scripts-->
<script src="/assets/js/charts/sparkline/jquery.sparkline.js"></script>
<script src="/assets/js/charts/sparkline/sparkline-init.js"></script>

<!--Easy Pie Charts Needed Scripts-->
<script src="/assets/js/charts/easypiechart/jquery.easypiechart.js"></script>
<script src="/assets/js/charts/easypiechart/easypiechart-init.js"></script>

<!-- Flot Charts Needed Scripts -->
<script src="/assets/js/charts/flot/jquery.flot.js"></script>
<script src="/assets/js/charts/flot/jquery.flot.resize.js"></script>
<script src="/assets/js/charts/flot/jquery.flot.pie.js"></script>
<script src="/assets/js/charts/flot/jquery.flot.tooltip.js"></script>
<script src="/assets/js/charts/flot/jquery.flot.orderBars.js"></script>

<!-- Vue -->
<script src="/assets/vue/vue.js"></script>
<script src="/assets/vue/vue-validator.js"></script>

<!-- alert -->
<script src="/assets/alert.js"></script>
    <!--Success Modal Templates-->
<div id="modal-success" class="modal modal-message modal-success fade" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-check"></i>
            </div>
            <div class="modal-title">Success</div>

            <div class="modal-body">You have done great!</div>
            <div class="modal-footer">
               <!--  <button type="button" class="btn btn-success" data-dismiss="modal">OK</button> -->
            </div>
        </div> <!-- / .modal-content -->
    </div> <!-- / .modal-dialog -->
</div>
<!--End Success Modal Templates-->
    <div id="modal-danger" class="modal modal-message modal-danger fade" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-fire"></i>
            </div>
            <div class="modal-title">Alert</div>

            <div class="modal-body">You'vd done bad!</div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">OK</button> -->
            </div>
        </div> <!-- / .modal-content -->
    </div> <!-- / .modal-dialog -->
</div>
    
    <script>
    </script>
</body>
<!--  /Body -->
</html>
