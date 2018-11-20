<div class="collapse navbar-collapse" id="sidebarCollapse">
    <!-- Form -->
    <form class="mt-4 mb-3 d-md-none">
        <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <span class="fe fe-search"></span>
                </div>
            </div>
        </div>
    </form>
    <!-- Navigation -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link " href="/">
                <i class="fe fe-home"></i> 网站首页
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#sidebarPages" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarPages">
                <i class="fe fe-layout"></i> 系统管理
            </a>
            <div class="collapse " id="sidebarPages">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="{{route('admin.config.edit',['name'=>'base'])}}" class="nav-link ">
                            基本配置
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.config.edit',['name'=>'site'])}}" class="nav-link ">
                            网站信息
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.config.edit',['name'=>'email'])}}" class="nav-link ">
                            邮箱设置
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.config.edit',['name'=>'upload'])}}" class="nav-link ">
                            上传配置
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.config.edit',['name'=>'aliyun'])}}" class="nav-link ">
                            阿里云
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="#sidebarLayouts" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                <i class="fe fe-user"></i> 会员粉丝
            </a>
            <div class="collapse " id="sidebarLayouts">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">
                            会员列表
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="#video" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                <i class="fe fe-book-open"></i> 在线教育
            </a>
            <div class="collapse " id="video">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">
                            视频管理
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('edu.category.index')}}" class="nav-link">
                            贴子分类
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item d-md-none">
            <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                <span class="fe fe-bell"></span> Notifications
            </a>
        </li>
    </ul>

    <!-- Divider -->
    <hr class="my-3">

    <!-- Heading -->
    <h6 class="navbar-heading text-muted">
        扩展模块
    </h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">
        <li class="nav-item dropdown">
            <a class="nav-link" href="#sidebarComponents" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarComponents">
                <i class="fe fe-book-open"></i> 示例
            </a>
            <div class="collapse " id="sidebarComponents">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="components.html#alerts" class="nav-link">
                            Alerts
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="http://www.hdcms.com">
                <i class="fe fe-git-branch"></i> HDCMS <span class="badge badge-primary ml-auto">v5.0.1</span>
            </a>
        </li>
    </ul>


    <!-- User (md) -->
    <div class="navbar-user mt-auto d-none d-md-flex">

        <!-- Icon -->
        <a href="#sidebarModalActivity" class="text-muted" data-toggle="modal">
              <span class="icon">
                <i class="fe fe-bell"></i>
              </span>
        </a>

        <!-- Dropup -->
        <div class="dropup">

            <!-- Toggle -->
            <a href="#!" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-sm avatar-online">
                    <img src="{{asset('org/Dashkit-1.1.2')}}/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                </div>
            </a>
            <!-- Menu -->
            <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                <a href="profile-posts.html" class="dropdown-item">个人资料</a>
                <hr class="dropdown-divider">
                <a href="{{route('logout')}}" class="dropdown-item">退出</a>
            </div>

        </div>

        <!-- Icon -->
        <a href="#sidebarModalSearch" class="text-muted" data-toggle="modal">
              <span class="icon">
                <i class="fe fe-search"></i>
              </span>
        </a>

    </div>


</div>
