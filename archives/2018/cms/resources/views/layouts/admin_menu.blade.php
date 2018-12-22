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
                <i class="fe fe-file"></i> 系统管理
            </a>
            <div class="collapse " id="sidebarPages">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="{{route('config.edit',['name'=>'site'])}}" class="nav-link ">网站配置</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('config.edit',['name'=>'mail'])}}" class="nav-link ">邮箱配置</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('config.edit',['name'=>'upload'])}}" class="nav-link ">上传配置</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('config.edit',['name'=>'aliyun'])}}" class="nav-link ">阿里云</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#sidebarAuth" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                <i class="fe fe-user"></i> 文章系统
            </a>
            <div class="collapse" id="sidebarAuth">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="{{route('config.edit',['name'=>'aliyun'])}}" class="nav-link ">阿里云</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#video" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                <i class="fe fe-user"></i> 视频教程
            </a>
            <div class="collapse" id="video">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="{{route('config.edit',['name'=>'aliyun'])}}" class="nav-link ">阿里云</a>
                    </li>
                </ul>
            </div>
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
                <i class="fe fe-book-open"></i> 测试
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
                <a href="profile-posts.html" class="dropdown-item">Profile</a>
                <a href="settings.html" class="dropdown-item">Settings</a>
                <hr class="dropdown-divider">
                <a href="sign-in.html" class="dropdown-item">Logout</a>
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
