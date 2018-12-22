@extends('admin::layouts.master')
@section('content')
    @component('components.tabs',['title'=>'模板设置'])
        @slot('nav')
        @endslot
        @slot('body')
            <div class="row">
                @foreach($templates as $template)
                    <div class="card col-sm-3">
                        <div class="card-block">
                            <img src="{{$template['preview']}}" style="width:100%;height:180px;">
                        </div>
                        @if(\HDModule::config('article.config.template') == $template['name'])
                            <a href="/article/template/set/{{$template['name']}}" class="btn btn-success btn-block">默认模板</a>
                        @else
                        <a href="/article/template/set/{{$template['name']}}" class="btn btn-secondary btn-block">设为默认模板</a>
                        @endif
                    </div>
                @endforeach
            </div>
        @endslot
    @endcomponent
@endsection