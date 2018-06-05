@extends('layouts.default')
@section('content')
    <form action="{{route('FindPasswordSend')}}" method="post">
        @csrf
        <div class="card">
            <div class="card-header">
                找回密码
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">邮箱</label>
                    <input type="text" class="form-control" name="email">
                    <small id="helpId" class="form-text text-muted">请输入注册时的邮箱</small>
                </div>
            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-success">发送</button>
            </div>
        </div>
    </form>
@endsection