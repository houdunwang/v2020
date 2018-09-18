@extends('edu.layouts.master')
@section('content')
        <div class="row">
            <div class="col-12">
                <div class="card" data-toggle="lists" data-lists-values="[&quot;name&quot;]">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-header-title">动态</h4>
                            </div>
                            <div class="col-auto">
                                <!-- Dropdown -->
                                <div class="dropdown">
                                    <!-- Toggle -->
                                    <a href="#!" class="small text-muted dropdown-toggle" data-toggle="dropdown">
                                        筛选
                                    </a>
                                    <!-- Menu -->
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item sort" data-sort="name" href="#!">
                                            全部
                                        </a>
                                        <a class="dropdown-item sort" data-sort="name" href="#!">
                                            精华
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="btn btn-sm btn-primary">
                                    发表
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- List -->
                        <ul class="list-group list-group-lg list-group-flush list my--4">
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <a href="#!" class="avatar avatar-lg">
                                            <img src="http://www.aoxiangjun.com/images/xjyan.jpg" alt="..." class="avatar-img rounded">
                                        </a>
                                    </div>
                                    <div class="col ml--2">
                                        <!-- Title -->
                                        <h4 class="card-title mb-1 name">
                                            <a href="#!">向军大叔  </a> 发表了 <a href="">Repository 模式主要思想是建立一个数据操作代理层，把controller里的数据</a>
                                        </h4>

                                        <!-- Text -->
                                        <p class="card-text small text-muted mb-1">
                                            <span class="fe fe-clock"></span> 3 小时前
                                        </p>

                                        <!-- Time -->
                                        <p class="card-text small text-muted">
                                            数据处理逻辑和业务逻辑分离，可以对这两个代码分别进行测试
                                        </p>

                                    </div>
                                </div> <!-- / .row -->
                            </li>

                        </ul>

                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
@endsection
