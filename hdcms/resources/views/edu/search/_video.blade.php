<ul class="list-group list-group-lg list-group-flush list my--4">
    @foreach($data as $video)
        <li class="list-group-item px-0">
            <div class="row align-items-center">
                <div class="col ml--2">
                    <h4 class="card-title mb-3 name">
                        <a href="{{route('edu.video.show',$video)}}">{{$video['title']}}</a>
                    </h4>
                    <p class="card-text small text-muted mb-1">
                        <span class="fe fe-user"></span>
                        <a href="{{route('member.user.show',$video->user)}}" class="text-muted">{{$video->user->name}}</a> .
                        <span class="fe fe-clock"></span> {{$video->updated_at->diffForHumans()}} .
                        <span class="fe fe-thumbs-up "></span> {{$video->zan_num}} .
                        <span class="fe fe-heart"></span> {{$video->favorite_num}}
                    </p>
                </div>
            </div>
        </li>
    @endforeach
</ul>
