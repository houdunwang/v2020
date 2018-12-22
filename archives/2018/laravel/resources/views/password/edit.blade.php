@extends('layouts.default')
@section('content')
    <form action="{{route('password.update')}}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{$user['email_token']}}">
        <div class="card">
            <div class="card-header">
                修改密码
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>邮箱</label>
                    <input type="text" disabled class="form-control" name="name" value="{{$user['name']}}">
                </div>
                <div class="form-group">
                    <label>密码</label>
                    <input type="text" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label>确认密码</label>
                    <input type="text" class="form-control" name="password_confirmation">
                </div>
            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-success">确定修改</button>
            </div>
        </div>
    </form>
@endsection