<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\phpStudy\WWW\tp5\public/../application/admin\view\auth\login.html";i:1467971080;}*/ ?>
﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--Head-->

<head>
    <meta charset="utf-8" />
    <title>管理员登录</title>
    <meta name="description" content="login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">
    <!--Basic Styles-->
    <!--Basic Styles-->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/assets/css/weather-icons.min.css" rel="stylesheet" />

    <!--Beyond styles-->
    <link id="beyond-link" href="/assets/css/beyond.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/demo.min.css" rel="stylesheet" />
    <link href="/assets/css/typicons.min.css" rel="stylesheet" />
    <link href="/assets/css/animate.min.css" rel="stylesheet" />
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown" id="authLogin">
        <validator name="signinValidation">
        <form novalidate>
          <div class="loginbox bg-white">
            <div class="loginbox-title">登录</div>
            <div class="loginbox-social">
                <div class="social-title ">联系你的社交账户</div>
            </div>
            <div class="loginbox-textbox">
                <input type="text"
                v-validate:usernameLogin="{ required: true}"
                class="form-control"
                placeholder="用户名"
                v-model="user.usernamelogin">
            </div>
            <div class="loginbox-textbox">
                <input type="password" v-model="user.password"
                v-validate:password="{ required: true }"
                class="form-control"
                placeholder="密码"/>
            </div>
            <div class="loginbox-submit">
            <button type="button" @click="doLogin()" class="btn btn-primary btn-block" :disabled="$signinValidation.invalid">登录</button>
            </div>
        </div>
        </form>
      </validator>
        <div class="logobox" v-if="msg"><p style="color: red;line-height: 40px;
    text-align: center;">{{msg}}</p></div>
    </div>
    <!--Basic Scripts-->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/slimscroll/jquery.slimscroll.min.js"></script>
    <!--Beyond Scripts-->
    <script src="/assets/js/beyond.js"></script>
    <!-- Vue -->
    <script src="/assets/vue/vue.js"></script>
    <script src="/assets/vue/vue-validator.js"></script>
    <script>
        var vm = new Vue({
          el: '#authLogin',
          data: {
            user: {},
            msg:''
          },
          methods: {
            doLogin: function () {
                $.ajax({
                    type: "POST",
                    url: '/login.html',
                    dataType: 'json',
                    cache: false,
                    data: this.user,
                    success: function(data) {
                        if(data.status>0){
                            window.location.href = '/Admin/Index/index'
                        }else{
                            vm.$set('msg',data.msg)
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                    }
                });
            }
          }
        })
    </script>
</body>
</html>
