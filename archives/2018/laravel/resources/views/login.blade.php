@extends('layouts.default')
@section('content')
    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="card">
            <div class="card-header">
                登录
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>邮箱</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>密码</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <a href="{{route('password.show')}}">找回密码</a>
            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-success">登录</button>
            </div>
        </div>
    </form>
@endsection