<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">

        <!-- Toggler -->
        <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand mr-auto" href="/">
            <img src="{{asset('images/logo.png')}}" alt="..." class="navbar-brand-img">
        </a>
        <!-- Form -->
        <form class="form-inline mr-4 d-none d-lg-flex" method="get" action="{{route('edu.search')}}" id="searchForm">
            <div class="input-group input-group-rounded input-group-merge" data-toggle="lists" data-lists-values='["name"]'>
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="w">
                    <input type="hidden" name="t" hidden>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">搜索</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" onclick="searched('article')">文章</a>
                            <a class="dropdown-item" href="#" onclick="searched('topic')">话题</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" onclick="searched('video')">视频</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script>
            function searched(t){
                require(['jquery'],function($){
                    $("[name='t']").val(t);
                    $("#searchForm").submit();
                })
                return false;
            }
        </script>
        <div class="navbar-user">
            @include('common.yields._notification')
            @auth
                <div class="dropdown mr-3">
                    <a href="#" class="text-muted" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fe fe-edit mr-4"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{route('edu.article.create')}}" class="dropdown-item">
                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i> 发表文章
                        </a>
                        @foreach(\App\Models\Category::get() as $category)
                            <a href="{{route('edu.topic.create',['category_id'=>$category['id']])}}" class="dropdown-item">
                                <i class="{{$category['icon']}}" aria-hidden="true"></i> {{$category['title']}}
                            </a>
                        @endforeach
                    </div>
                </div>
        @endauth
        <!-- Dropdown -->
            <div class="dropdown">
                @auth
                    <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{auth()->user()->icon}}" alt="..." class="avatar-img rounded-circle">
                    </a>
                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{route('member.user.edit',[auth()->user(),'type'=>'password'])}}" class="dropdown-item">修改密码</a>
                        <a href="{{route('member.user.show',auth()->user())}}" class="dropdown-item">个人空间</a>
                        <a href="{{route('edu.lesson.lists')}}" class="dropdown-item">内容管理</a>
                        <a href="settings.html" class="dropdown-item">课程收藏</a>
                        @if(auth()->user()->is_admin)
                            <a href="{{route('admin.index')}}" class="dropdown-item">后台管理</a>
                        @endif
                        <hr class="dropdown-divider">
                        <a href="{{route('logout')}}" class="dropdown-item">退出</a>

                    </div>
                @else
                    <a href="{{route('login')}}" class="btn btn-white btn-sm">
                        <span class="fe fe-log-in mr-1"></span> 登录
                    </a>
                    <a href="{{route('register')}}" class="btn btn-white btn-sm">
                        <span class="fe fe-user-plus mr-1"></span> 注册
                    </a>
                @endauth
            </div>
        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse mr-auto order-lg-first" id="navbar">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <input type="search" class="form-control form-control-rounded" placeholder="Search" aria-label="Search">
            </form>

            <!-- Navigation -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item  mr-3">
                    <a class="nav-link" href="/">
                        首页
                    </a>
                </li>
                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle" href="#!" id="topnavPages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        话题
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="topnavPages">
                        @foreach(\App\Models\Category::get() as $category)
                            <li>
                                <a href="{{route('edu.topic.index',['id'=>$category])}}" class="dropdown-item" href="pricing.html">
                                    <i class="{{$category['icon']}}" aria-hidden="true"></i> {{$category['title']}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="{{route('edu.article.index')}}">
                        文章
                    </a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="{{route('edu.lesson.index')}}">
                        教程
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://www.houdunwang.com">
                        培训
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
