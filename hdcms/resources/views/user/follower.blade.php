@extends('user.layouts.space')
@section('content')
    <div class="card">
        <div class="card-header">
            他的关注
        </div>
        <div class="card-body">
            <ul class="list-group list-group-lg list-group-flush list my--4">
                @if($followers->count()==0)
                   <div class="text-center text-muted mt-3"> 没有关注</div>
                    @endif
                @foreach($followers as $follower)
                    <li class="list-group-item px-0">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="avatar">
                                    <a href="{{route('member.user.show',$follower)}}">
                                        <img src="{{$follower->icon}}" class="avatar-img rounded-circle">
                                    </a>
                                </div>
                            </div>
                            <div class="col ml--2">
                                <h4 class="card-title mb-3 name">
                                    <a href="{{route('member.user.show',$follower)}}">{{$follower->name}}</a>
                                </h4>
                                <p class="card-text small text-muted mb-1">
                                   注册时间：{{$follower->created_at}}
                                </p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="card-footer text-muted">
            {{$followers->links()}}
        </div>
    </div>
@endsection
