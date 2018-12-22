@extends('video.layouts.master')
@section('content')
    <div class="row mt-3">
        <div class="col-12">

            <!-- Files -->
            <div class="card" data-toggle="lists" data-lists-values="[&quot;name&quot;]">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">

                            <!-- Title -->
                            <h4 class="card-header-title">
                                动态
                            </h4>

                        </div>
                        <div class="col-auto">

                            <!-- Dropdown -->
                            <div class="dropdown">

                                <!-- Toggle -->
                                <a href="#!" class="small text-muted dropdown-toggle" data-toggle="dropdown">
                                    排序
                                </a>

                                <!-- Menu -->
                                <div class="dropdown-menu">
                                    <a class="dropdown-item sort" data-sort="name" href="#!">
                                        精华
                                    </a>
                                    <a class="dropdown-item sort" data-sort="name" href="#!">
                                        全部
                                    </a>
                                </div>

                            </div>

                        </div>
                        <div class="col-auto">

                            <!-- Button -->
                            <a href="#!" class="btn btn-sm btn-primary">
                                发表
                            </a>

                        </div>
                    </div> <!-- / .row -->
                </div>

                <div class="card-body">

                    <!-- List -->
                    <ul class="list-group list-group-lg list-group-flush list my--4">
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#!" class="avatar avatar-lg">
                                        <img src="http://www.aoxiangjun.com/images/xjyan.jpg" alt="..." class="avatar-img rounded">
                                    </a>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="card-title mb-1 name">
                                        <a href="#!">向军大军</a> 发表了
                                        <a href="">上传事件监听器，系统提供以下监听器，开发者可以自行开发监听器处理上传</a>
                                    </h4>

                                    <!-- Text -->
                                    <p class="card-text small text-muted mb-1">
                                        <span class="fe fe-clock"></span> 3 小时前
                                    </p>

                                    <!-- Time -->
                                    <p class="card-text small text-muted">
                                        系统提供几个上传处理监听器，当然开发者可以自行开发监听器处理上传
                                    </p>

                                </div>
                            </div> <!-- / .row -->

                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </div>
@endsection
