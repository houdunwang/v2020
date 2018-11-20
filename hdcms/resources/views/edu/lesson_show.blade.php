@extends('edu.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            {{$lesson->title}}
        </div>
        <div class="card-body">
          {{$lesson->description}}
        </div>
        <div class="card-footer text-muted">
            <button class="btn btn-white">收藏课程</button>
        </div>
    </div>
    <div class="card" data-toggle="lists" data-lists-values="[&quot;name&quot;]">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h4 class="card-header-title">
                        视频列表
                    </h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-lg list-group-flush list my--4">
                @foreach($lesson->video as $video)
                    <li class="list-group-item px-0">
                        <div class="row align-items-center">
                            <div class="col ml-2">
                                <h4 class="card-title mb-1 name">
                                    <a href="{{route('edu.video.show',$video)}}">{{$video['title']}}</a>
                                </h4>
                                <p class="card-text small text-muted mb-1">
                                    {{$video->updated_at}}
                                </p>
                            </div>
                            <div class="col-auto">
                                <a href="{{route('edu.video.show',$video)}}" class="btn btn-sm btn-white d-none d-md-inline-block">
                                    开始学习
                                </a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>
@endsection
