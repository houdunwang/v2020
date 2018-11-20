@extends('edu.layouts.master')
@section('content')
    <div class="row">
        <div class="col-9">
            <div class="card" data-toggle="lists">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-header-title">文章</h4>
                        </div>
                        <div class="col-auto">
                            <a href="{{route('edu.topic.create')}}" class="btn btn-sm btn-primary">
                                发表
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-lg list-group-flush list my--4">
                        @foreach($topics as $topic)
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar">
                                            <img src="{{$topic->user->icon}}" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="col ml--2">
                                        <h4 class="card-title mb-3 name">
                                            <a href="{{route('edu.topic.show',$topic)}}">{{$topic['title']}}</a>
                                        </h4>
                                        <p class="card-text small text-muted mb-1">
                                            <span class="fe fe-user"></span> {{$topic->user->name}} .
                                            <span class="fe fe-clock"></span> {{$topic->updated_at->diffForHumans()}} .
                                            <span class="fe fe-thumbs-up "></span> {{$topic->zan_num}} .
                                            <span class="fe fe-heart"></span> {{$topic->favorite_num}}
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            {{$topics->appends(['id'=>Request::query('id')])->links()}}
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    公告
                </div>
                <div class="card-body">
                    <a href="#" class="text-muted">每晚直播</a>
                    <hr>
                    <a href="http://www.houdunwang.com" class="text-muted">实战培训</a>
                </div>
            </div>
        </div>
    </div>
@endsection
