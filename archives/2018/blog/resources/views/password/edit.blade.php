@extends('layouts.default')
@section('content')
    <form action="{{route('FindPasswordUpdate')}}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{$user['email_token']}}">
        <div class="card">
            <div class="card-header">
                重置密码
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">邮箱</label>
                    <input type="text" disabled class="form-control" name="email"
                    <input type="text" disabled class="form-control" name="email"
                           value="{{$user['email']}}">
                </div>
                <div class="form-group">
                    <label for="">密码</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="">确认密码</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>
            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-success">确定更新</button>
            </div>
        </div>
    </form>
@endsection