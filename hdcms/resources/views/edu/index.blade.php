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
                                    <a class="dropdown-item sort" data-sort="name" href="{{route('edu.home')}}">
                                        全站
                                    </a>
                                    <a class="dropdown-item sort" data-sort="name"  href="{{route('edu.home',['t'=>'follow'])}}">
                                        关注
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-lg list-group-flush list my--4">
                        @foreach($activitys as $activity)
                            @switch($activity->log_name)
                                @case('comment')
                                @include('edu.activity._comment')
                                @break
                                @case('article')
                                @include('edu.activity._article')
                                @break
                            @endswitch
                        @endforeach
                    </ul>
                </div>
            </div>
            {{$activitys->appends(['t'=>Request::query('t')])->links()}}
        </div>
    </div> <!-- / .row -->
@endsection
