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
                <div class="card">
                    <div class="card-header">
                        {{$category['name']}}
                    </div>
                    <div class="card-block">
                        @foreach($data as $field)
                        <ul class="list-group">
                            <a class="list-group-item" href="/article/content/{{$field['id']}}.html">{{$field['title']}}</a>
                        </ul>
                        @endforeach
                    </div>
                </div>
               <div class="mt-3">
                   {{$data->links()}}
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