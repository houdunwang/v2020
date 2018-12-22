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
<div class="container-fluid">
    <div class="row align-items-center justify-content-center">
        <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 my-5">
            <h1 class="display-4 text-center mb-3">
                注册
            </h1>
            <p class="text-muted text-center mb-5">
                后盾人 人人做后盾
            </p>
            <form>
                @csrf
                <div class="form-group">
                    <label>昵称</label>
                    <input type="text" name="name" class="form-control" placeholder="起个有个性的昵称吧">
                </div>
                <div class="form-group">
                    <label>帐号</label>
                    <input type="text" name="account" value="19999999999" class="form-control" placeholder="请输入邮箱或手机号">
                </div>
                <div class="form-group">
                    <label>密码</label>
                    <input type="password" name="password" class="form-control" placeholder="请输入登录密码">
                </div>
                <div class="form-group">
                    <label>确认密码</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="请再次输入登录密码">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="请输入验证码" name="username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="bt">发送验证码</button>
                    </div>
                </div>
                <button class="btn btn-lg btn-block btn-primary mb-3">
                    登录
                </button>
                <p class="text-center">
                    <small class="text-muted text-center">
                        忘记密码? <a href="">找回密码</a>.
                        <a href="{{route('user.create')}}">注册</a>.
                        <a href="/">网站首页</a>
                    </small>
                </p>

            </form>

        </div>
        <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
            <!-- Image -->
            <div class="bg-cover vh-100 mt--1 mr--3" style="background-image: url({{asset('org/Dashkit-1.1.2')}}/img/covers/auth-side-cover.jpg);"></div>
        </div>
    </div>
</div>
@include('layouts._hdjs')
<script>
    require(['hdjs', 'bootstrap'], function (hdjs) {
        let option = {
            //按钮
            el: '#bt',
            //后台链接
            url: '{{route('code.send')}}',
            //验证码等待发送时间
            timeout: 3,
            //CSRF数据
            data: {'_token': '{{csrf_token()}}'},
            //表单数据
            input: '[name="account"]'
        };
        hdjs.validCode(option);
    })
</script>
</body>
</html>
