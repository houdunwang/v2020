@extends('edu.layouts.master')
@section('content')
    <div class="row listAlias">
        @foreach($lessons as $lesson)
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card">
                    <a href="{{route('edu.lesson.show',$lesson)}}">
                        <img src="{{$lesson['thumb']}}" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title mb-2 name">
                                    <a href="{{route('edu.lesson.show',$lesson)}}">
                                        {{$lesson['title']}}
                                    </a>
                                </h4>
                                <p class="card-text small text-muted">
                                   {{$lesson->updated_at}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{$lessons->links()}}
@endsection
@push('css')
    <style>
        .card-img-top{height:260px;
        }
    </style>
    @endpush
