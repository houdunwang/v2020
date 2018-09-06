
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
                登录
            </h1>

            <!-- Subheading -->
            <p class="text-muted text-center mb-5">
                登录帐号参与学习讨论
            </p>
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>帐号</label>
                    <input type="text" class="form-control" name="account" placeholder="请输入邮箱或手机号">
                </div>
                <div class="form-group">
                    <label>密码</label>
                    <input type="password" class="form-control" name="password" placeholder="输入登录密码">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="remember">
                    <label>记住我</label>
                </div>
                <button class="btn btn-lg btn-block btn-primary mb-3">
                    登录
                </button>
                <p class="text-center">
                    <small class="text-muted text-center">
                        没有帐号? <a href="{{route('user.create')}}">注册</a>.
                        <a href="{{route('user.create')}}">找回密码</a>.
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
</body>
</html>
