@extends('admin::layouts.master')
@section('content')
    <div class="card" id="app">
        <div class="card-header">评论管理</div>
        <ul role="tablist" class="nav nav-tabs">
            <li class="nav-item"><a href="/article/comment" class="nav-link">评论列表</a></li>
            <li class="nav-item"><a href="#" class="nav-link active">修改评论</a></li>
        </ul>
        <form action="/article/comment/{{$comment['id']}}" method="post">
            <div class="card-body card-body-contrast">
                @csrf @method('PUT')
                <div class="form-group row">
    <label for="user_id" class="col-12 col-sm-3 col-form-label text-md-right">用户编号</label>
    <div class="col-12 col-md-9">
        <input id="user_id" name="user_id" type="text"
               value="{{ $comment['user_id']??old('user_id') }}"
               class="form-control form-control-sm form-control{{ $errors->has('user_id') ? ' is-invalid' : '' }}">
        @if ($errors->has('user_id'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('user_id') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="content" class="col-12 col-sm-3 col-form-label text-md-right">评论内容</label>
    <div class="col-12 col-md-9">
        <input id="content" name="content" type="text"
               value="{{ $comment['content']??old('content') }}"
               class="form-control form-control-sm form-control{{ $errors->has('content') ? ' is-invalid' : '' }}">
        @if ($errors->has('content'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('content') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="content_id" class="col-12 col-sm-3 col-form-label text-md-right">文章编号</label>
    <div class="col-12 col-md-9">
        <input id="content_id" name="content_id" type="text"
               value="{{ $comment['content_id']??old('content_id') }}"
               class="form-control form-control-sm form-control{{ $errors->has('content_id') ? ' is-invalid' : '' }}">
        @if ($errors->has('content_id'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('content_id') }}</strong>
            </span>
        @endif
    </div>
</div>

            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-primary offset-sm-2">保存更新</button>
            </div>
        </form>
    </div>
@endsection
