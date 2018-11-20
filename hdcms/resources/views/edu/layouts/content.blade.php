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
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>{{hd_config('site.webname')}}</title>
    @include('layouts.hdjs')
    @include('layouts.message')
</head>
<body>
@include('edu.layouts._header')
<div class="container mt-3">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-header">
                    <div class=""><span class="fe fe-file"></span> 内容管理</div>
                </div>
                <div class="card-body">
                    <div class="nav flex-column nav-pills small" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link {{active_class(if_controller('App\Http\Controllers\Edu\LessonController'),'active','text-muted')}}"
                           href="{{route('edu.lesson.lists')}}">课程管理</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            @yield('content')
        </div>
    </div>
</div>
<script>
    require(['jquery', 'bootstrap'])
</script>
@stack('js')
</body>
</html>
