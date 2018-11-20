@extends('edu.layouts.master')
@section('content')
    <div class="row">
        <div class="col-9">
            <div class="card" data-toggle="lists">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-header-title">搜索结果</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('edu.search._'.$_GET['t'])
                </div>
            </div>
            {{$data->appends(['t'=>$_GET['t'],'w'=>$_GET['w']])->links()}}
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    公告
                </div>
                <div class="card-body">
                    <a href="#" class="text-muted">每晚直播</a>
                    <hr>
                    <a href="http://www.houdunwang.com" class="text-muted">实战培训</a>
                </div>
            </div>
        </div>
    </div>
@endsection
