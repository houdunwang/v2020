@auth
    <div class="dropdown mr-4 d-none d-lg-flex">
        <a href="#" class="text-muted" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="badge badge-light">{{auth()->user()->unreadNotifications->count()}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="card-header-title">
                            通知
                        </h5>
                    </div>
                    <div class="col-auto">
                        <a href="{{route('common.notification.index')}}" class="small">
                            查看全部
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush my--3">
                    @foreach(auth()->user()->unreadNotifications()->limit(3)->get() as $notification)
                        <a class="list-group-item px-0" href="{{route('common.notification.show',$notification)}}">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-sm">
                                        <img src="{{$notification->data['user_icon']}}" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="col ml--2">
                                    <div class="small text-muted">
                                        <strong class="text-body">{{$notification->data['user_name']}}</strong>
                                        回复了
                                        {{$notification->data['title']}}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <small class="text-muted">
                                        {{$notification->created_at->diffForHumans()}}
                                    </small>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endauth
