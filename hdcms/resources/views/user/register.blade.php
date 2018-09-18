<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{asset('org/Dashkit-1.1.2')}}/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="{{asset('org/Dashkit-1.1.2')}}/libs/highlight/styles/vs2015.min.css">
    <link rel="stylesheet" href="{{asset('org/Dashkit-1.1.2')}}/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="{{asset('org/Dashkit-1.1.2')}}/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('org/Dashkit-1.1.2')}}/libs/flatpickr/dist/flatpickr.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('org/Dashkit-1.1.2')}}/css/theme.min.css">

    <title>Dashkit</title>
</head>
<body class="d-flex align-items-center bg-white border-top-2 border-primary">

<!-- CONTENT
================================================== -->
<div class="container-fluid">
    <div class="row align-items-center justify-content-center">
        <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 my-5">
            <!-- Heading -->
            <h1 class="display-4 text-center mb-3">
                注册
            </h1>
            <!-- Subheading -->
            <p class="text-muted text-center mb-5">
                注册帐号参与学习讨论
            </p>
            <form method="post" action="{{route('register')}}">
                @csrf
                <div class="form-group">
                    <label>昵称</label>
                    <input type="text" class="form-control" name="name" placeholder="用一个有个性的昵称吧" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label>帐号</label>
                    <input type="password"  value="{{old('account')}}" class="form-control" name="account" placeholder="请输入邮箱或手机号">
                </div>
                <div class="form-group">
                    <label>密码</label>
                    <input type="password" class="form-control" name="password" placeholder="输入注册密码">
                </div>
                <div class="form-group">
                    <label>确认密码</label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="请再次输入注册密码">
                </div>
                <div class="input-group mb-3">
                    <input type="text" value="{{old('code')}}"  class="form-control" placeholder="请输入验证码" name="code" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="bt">发送验证码</button>
                    </div>
                </div>
                <button class="btn btn-lg btn-block btn-primary mb-3">
                    注册
                </button>
                <p class="text-center">
                    <small class="text-muted text-center">
                        没有帐号? <a href="{{route('login')}}">登录</a>.
                        <a href="/">返回首页</a>
                    </small>
                </p>
            </form>
        </div>
        <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
            <div class="bg-cover vh-100 mt--1 mr--3" style="background-image: url({{asset('org/Dashkit-1.1.2')}}/img/covers/auth-side-cover.jpg);"></div>
        </div>
    </div>
</div>
@include('layouts.hdjs')
@include('layouts.message')
<script>
    require(['hdjs'], function (hdjs) {
        let option = {
            //按钮
            el: '#bt',
            //后台链接
            url: '{{route('util.code.send')}}',
            //验证码等待发送时间
            timeout: "{{hd_config('base.code_expire')}}",
            data: {"_token": "{{csrf_token()}}"},
            //表单，手机号或邮箱的INPUT表单
            input: '[name="account"]'
        };
        hdjs.validCode(option);
    })
</script>
</body>
</html>
