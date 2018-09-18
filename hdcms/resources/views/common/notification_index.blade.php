@extends('user.layouts.master')
@section('menu')
    @include('common.yields._notification_menu')
@endsection
@section('content')
    <div class="card" data-toggle="lists" data-lists-values="[&quot;name&quot;]">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h4 class="card-header-title">通知列表</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-lg list-group-flush list my--4">
                @foreach($notifications as $notification)
                    <li class="list-group-item px-0">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="avatar">
                                    <img src="{{$notification->data['user_icon']}}" class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <div class="col ml--2">
                                <h4 class="card-title mb-3 name">
                                    <a href="{{route('member.user.show',$notification->data['user_id'])}}">{{$notification->data['user_name']}}</a>
                                    回复了
                                    <a href="{{route('common.notification.show',$notification)}}">
                                        {{$notification->data['title']}}
                                    </a>
                                </h4>
                                <p class="card-text small text-muted mb-1">
                                    <span class="fe fe-clock"></span> {{$notification->created_at->diffForHumans()}}
                                </p>
                            </div>
                        </div>
                    </li>
                @endforeach
                @if($notifications->count()==0)
                    <div class="mt-3">
                        <strong class="text-muted">没有通知...</strong>
                    </div>
                @endif
            </ul>
        </div>
    </div>
@endsection
