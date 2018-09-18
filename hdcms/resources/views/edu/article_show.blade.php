@extends('edu.layouts.master')
@section("content")
    <div class="row">
        <div class="col-9">
            <div class="card card-body p-5">
                {{--收藏--}}
                @auth
                    <div class="row">
                        <div class="col text-right">
                            @if($article->isFavorite(auth()->user()))
                                <a href="{{route('common.favorite.make',['model'=>'Article','id'=>$article['id']])}}" class="btn btn-info btn-sm">
                                    <span class="fe fe-heart mr-1"></span> 感谢收藏
                                </a>
                            @else
                                <a href="{{route('common.favorite.make',['model'=>'Article','id'=>$article['id']])}}" class="btn btn-white btn-sm">
                                    <span class="fe fe-heart mr-1"></span> 收藏
                                </a>
                            @endif
                        </div>
                    </div>
                @endauth

                <div class="row">
                    <div class="col text-center">
                        <h2 class="mb-4">
                            {{$article['title']}}
                        </h2>
                        <p class="card-text small text-muted mb-1">
                            <span class="fe fe-user"></span> {{$article->user->name}} .
                            <span class="fe fe-clock"></span>  {{$article->updated_at->diffForHumans()}}
                        </p>
                    </div>
                </div>
                <hr>
                <div class="content mt-3">
                    {{$article['content']}}
                </div>
                @auth
                    <div class="text-center mt-5">
                        @if($article->isZan(auth()->user()))
                            <a href="{{route('common.zan.make',['model'=>'Article','id'=>$article['id']])}}" class="btn btn-info">
                                <span class="fe fe-thumbs-up mr-0"></span> 点个赞呗
                            </a>
                        @else
                            <a href="{{route('common.zan.make',['model'=>'Article','id'=>$article['id']])}}" class="btn btn-white">
                                <span class="fe fe-thumbs-up mr-0"></span> 点个赞呗
                            </a>
                        @endif
                    </div>
                @endauth
                <div class="text-center mt-5">
                    @foreach($article->zan as $zan)
                        <div class="avatar">
                            <img src="{{$zan->user->icon}}" class="avatar-img rounded-circle">
                        </div>
                    @endforeach
                </div>
            </div>
            @include('common.comment',['model'=>$article])
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    {{$article->user->name}}
                </div>
                <div class="card-body  text-center">
                    <div class="avatar avatar-xl">
                        <img src="{{$article->user->icon}}" alt="..." class="avatar-img rounded-circle">
                    </div>
                </div>
                @can('follow',$article->user)
                    <div class="card-footer text-muted text-center">
                        @if(auth()->user()->following($article->user))
                            <a href="{{route('member.follow',$article->user)}}" class="btn btn-info btn-block"><span class="fe fe-plus"></span> 已经关注</a>
                        @else
                            <a href="{{route('member.follow',$article->user)}}" class="btn btn-white btn-block"><span class="fe fe-plus"></span> 关注 TA</a>
                        @endif
                    </div>
                @endcan
            </div>
        </div>
    </div>
@endsection
