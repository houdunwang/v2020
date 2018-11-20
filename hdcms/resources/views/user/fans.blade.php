@extends('user.layouts.space')
@section('content')
    <div class="card">
        <div class="card-header">
            他的粉丝
        </div>
        <div class="card-body">
            <ul class="list-group list-group-lg list-group-flush list my--4">
                @foreach($fans as $fan)
                    <li class="list-group-item px-0">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="avatar">
                                    <a href="{{route('member.user.show',$fan)}}">
                                        <img src="{{$fan->icon}}" class="avatar-img rounded-circle">
                                    </a>
                                </div>
                            </div>
                            <div class="col ml--2">
                                <h4 class="card-title mb-3 name">
                                    <a href="{{route('member.user.show',$fan)}}">{{$fan->name}}</a>
                                </h4>
                                <p class="card-text small text-muted mb-1">
                                   注册时间：{{$fan->created_at}}
                                </p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="card-footer text-muted">
            {{$fans->links()}}
        </div>
    </div>
@endsection
