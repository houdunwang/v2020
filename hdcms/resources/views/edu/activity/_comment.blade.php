<li class="list-group-item px-0">
    <div class="row align-items-center">
        <div class="col-auto">
            <a href="{{route('member.user.show',$activity->causer)}}" class="avatar avatar-lg">
                <img src="{{$activity->causer->icon}}" alt="..." class="avatar-img rounded">
            </a>
        </div>
        <div class="col ml--2">
            <!-- Title -->
            <h4 class="card-title mb-1 name">
                <a href="{{route('member.user.show',$activity->causer)}}">{{$activity->causer->name}} </a> 评论了
                <a href="{{$activity->subject->belongModel->getLink('#'.$activity->subject['id'])}}">{{$activity->subject->belongModel->title}}</a>
            </h4>

            <!-- Text -->
            <p class="card-text small text-muted mb-1">
                <span class="fe fe-clock"></span> {{$activity->created_at->diffForHumans()}}
            </p>
        </div>
    </div> <!-- / .row -->
</li>
