@extends('edu.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            {{$video->lesson->title}}
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-9">
                    <video id="my-video" class="video-js vjs-big-play-centered VideoSpeed" controls preload="auto" width="100%" height="550" poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
                        <source src="{{$video['path']}}" type="video/mp4">
                        <source src="http://vjs.zencdn.net/v/oceans.webm" type="video/webm">
                        <source src="http://vjs.zencdn.net/v/oceans.ogv" type="video/ogg">
                        <p class="vjs-no-js">
                            要查看此视频，请启用JavaScript，并考虑升级到web浏览器
                            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                        </p>
                    </video>

                    <script>
                        require(['hdjs'], function (hdjs) {
                            hdjs.video('my-video', function (obj) {
                            });
                        })
                    </script>
                    <style>
                        .video-js {
                            width: 100%;
                        }
                    </style>
                </div>
                <div class="col-3">
                    <div class="card mt-3">
                        <div class="card-header">
                            视频列表
                        </div>
                        <div class="card-body">
                            @foreach($video->lesson->video as $video)
                                <div class="row align-items-center">
                                    <div class="col ml--2">
                                        <h4 class="card-title mb-1">
                                            <a href="{{route('edu.video.show',$video)}}" class="small">{{$video->title}}</a>
                                        </h4>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-footer text-muted small">
            发布时间: {{$video->updated_at}}
        </div>
    </div>
    @include('common.comment',['model'=>$video])
@endsection
