@extends('admin::layouts.master')
@section('content')
    <div class="card" id="app">
        <div class="card-header">幻灯片管理</div>
        <ul role="tablist" class="nav nav-tabs">
            <li class="nav-item"><a href="/article/slide" class="nav-link">幻灯片列表</a></li>
            <li class="nav-item"><a href="#" class="nav-link active">添加幻灯片</a></li>
        </ul>
        <form action="/article/slide" method="post">
            <div class="card-body card-body-contrast">
                @csrf
                <div class="form-group row">
    <label for="title" class="col-12 col-sm-3 col-form-label text-md-right">标题</label>
    <div class="col-12 col-md-9">
        <input id="title" name="title" type="text"
               value="{{ $slide['title']??old('title') }}"
               class="form-control form-control-sm form-control{{ $errors->has('title') ? ' is-invalid' : '' }}">
        @if ($errors->has('title'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="url" class="col-12 col-sm-3 col-form-label text-md-right">链接</label>
    <div class="col-12 col-md-9">
        <input id="url" name="url" type="text"
               value="{{ $slide['url']??old('url') }}"
               class="form-control form-control-sm form-control{{ $errors->has('url') ? ' is-invalid' : '' }}">
        @if ($errors->has('url'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('url') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="pic" class="col-12 col-sm-3 col-form-label text-md-right">图片</label>
    <div class="col-12 col-lg-9">
        <hd-image name="pic" id="pic" image-url="{!! $slide['pic']??old('pic') !!}"></hd-image>
        @if ($errors->has('pic'))
            <span class="text-danger">
                <strong>{{ $errors->first('pic') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="click" class="col-12 col-sm-3 col-form-label text-md-right">查看次数</label>
    <div class="col-12 col-md-9">
        <input id="click" name="click" type="text"
               value="{{ $slide['click']??old('click') }}"
               class="form-control form-control-sm form-control{{ $errors->has('click') ? ' is-invalid' : '' }}">
        @if ($errors->has('click'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('click') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="enable" class="col-12 col-sm-3 col-form-label text-md-right" style="padding-top:initial;">状态</label>
    <div class="col-12 col-md-9">
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio"
                           {{old('enable',$slide['enable'])=='1'?'checked':''}}
                           name="enable" value="1"
                           id="enable-1">
                    <label class="form-check-label" for="enable-1">开启</label>
           </div>            <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio"
                           {{old('enable',$slide['enable'])=='2'?'checked':''}}
                           name="enable" value="2"
                           id="enable-2">
                    <label class="form-check-label" for="enable-2">关闭</label>
           </div>
        <br>
        @if ($errors->has('enable'))
            <span class="text-danger">
                <strong>{{ $errors->first('enable') }}</strong>
            </span>
        @endif
    </div>
</div>

            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-primary offset-sm-2">保存提交</button>
            </div>
        </form>
    </div>
@endsection
