@extends('layouts.default')
@section('content')
    <form action="{{route('user.store')}}" method="post">
        @csrf
        <div class="card">
            <div class="card-header">
                用户注册
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>昵称</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label>邮箱</label>
                    <input type="text" class="form-control" name="email" value="{{old('email')}}">
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
                <button type="submit" class="btn btn-success">注册</button>
            </div>
        </div>
    </form>
@endsection