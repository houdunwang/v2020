@extends('layouts.app')
@section('heads')
    <link rel="stylesheet" href="{{asset('templates/default/css/index.css')}}">
    <link href="https://cdn.bootcss.com/Swiper/4.3.0/css/swiper.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/Swiper/4.3.0/js/swiper.min.js"></script>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">置顶文章
                    </div>
                    <div class="card-block">
                        @list(['limit'=>5])
                        <ul class="list-group">
                            <a class="list-group-item" href="{{$field['url']}}">{{$field['title']}}</a>
                        </ul>
                        @endList
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                @slide(['height'=>'300'])
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">热门文章
                    </div>
                    <div class="card-block">
                        <ul class="list-group">
                            @list(['ishot'=>1,'limit'=>5])
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
    <div class="container mt-3">
        <div class="row">
            @category
            <div class="col-sm-6 mb-3">
                <div class="card">
                    <div class="card-header">{{$field['name']}}</div>
                    <div class="card-block">
                        <ul class="list-group">
                            @list(['cid'=>[$field['id']],'limit'=>6])
                            <a class="list-group-item" href="{{$field['url']}}">{{$field['title']}}</a>
                            @endList
                        </ul>
                    </div>
                </div>
            </div>
            @endCategory
        </div>
    </div>
    @include('layouts._footer')
@endsection