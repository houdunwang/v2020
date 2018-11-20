<ul class="list-group list-group-lg list-group-flush list my--4">
    @foreach($data as $article)
        <li class="list-group-item px-0">
            <div class="row align-items-center">
                <div class="col-auto">
                    <div class="avatar">
                        <a href="{{route('member.user.show',$article->user)}}">
                            <img src="{{$article->user->icon}}" class="avatar-img rounded-circle">
                        </a>
                    </div>
                </div>
                <div class="col ml--2">
                    <h4 class="card-title mb-3 name">
                        <a href="{{route('edu.article.show',$article)}}">{{$article['title']}}</a>
                    </h4>
                    <p class="card-text small text-muted mb-1">
                        <span class="fe fe-user"></span>
                        <a href="{{route('member.user.show',$article->user)}}" class="text-muted">{{$article->user->name}}</a> .
                        <span class="fe fe-clock"></span> {{$article->updated_at->diffForHumans()}} .
                        <span class="fe fe-thumbs-up "></span> {{$article->zan_num}} .
                        <span class="fe fe-heart"></span> {{$article->favorite_num}}
                    </p>
                </div>
            </div>
        </li>
    @endforeach
</ul>
