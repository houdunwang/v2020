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
@include('user.layouts._header')
<div class="container mt-3">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-header">
                    {{$user->name}}
                </div>
                <div class="card-body  text-center">
                    <div class="avatar avatar-xl">
                        <img src="{{$user->icon}}" alt="..." class="avatar-img rounded-circle">
                    </div>
                    @can('follow',$user)
                        <div class="text-muted text-center mt-4">
                            @if(auth()->user()->following($user))
                                <a href="{{route('member.follow',$user)}}" class="btn btn-info btn-block btn-sm"><span class="fe fe-plus"></span> 已经关注</a>
                            @else
                                <a href="{{route('member.follow',$user)}}" class="btn btn-white btn-block  btn-sm"><span class="fe fe-plus"></span> 关注</a>
                            @endif
                        </div>
                    @endcan
                </div>
                <div class="card-body">
                    <div class="nav flex-column nav-pills small text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link text-muted" href="{{route('member.follower',$user)}}">
                            <span class="fe fe-user mr-0"></span> 他的关注</a>
                        <a class="nav-link text-muted" href="{{route('member.fans',$user)}}">
                            <span class="fe fe-rss mr-0"></span> 他的粉丝</a>
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
