@extends('layouts.app')
@section('heads')
    <link rel="stylesheet" href="{{asset('templates/default/css/index.css')}}">
    <link href="https://cdn.bootcss.com/Swiper/4.3.0/css/swiper.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/Swiper/4.3.0/js/swiper.min.js"></script>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                @include('layouts._message')
                <div class="card">
                    <div class="card-header">
                        {{$content->title}}
                    </div>
                    <div class="card-body">
                        {!! $content->content !!}
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                评论列表
                            </div>
                            <div class="card-block">
                                <ul class="list-group">
                                    @foreach($content->comment as $comment)
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    {{$comment->content}}
                                                </div>
                                                <div class="col-sm-3 text-right">
                                                    <small class="text-secondary">{{$comment->user->name}}</small>
                                                    <small class="text-secondary">
                                                        / {{$comment->updated_at->diffForHumans()}}</small>
                                                </div>

                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="card-footer text-muted">
                                @guest
                                    <div class="text-center">
                                        <a href="/login">请登录后发表评论</a>
                                    </div>
                                @else
                                    <form action="/article/comment" method="post">
                                        <input type="hidden" name="content_id" value="{{$content['id']}}">
                                        @csrf
                                        <div class="form-group">
                                        <textarea name="content" placeholder="发表你的想法" class="form-control"
                                                  rows="5"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-secondary">发表评论</button>
                                        </div>
                                    </form>
                                @endguest

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">热门文章
                    </div>
                    <div class="card-block">
                        <ul class="list-group">
                            @list(['ishot'=>1,'limit'=>6])
                            <ul class="list-group">
                                <a class="list-group-item" href="{{$field['url']}}">{{$field['title']}}</a>
                            </ul>
                            @endList
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts._footer')
@endsection