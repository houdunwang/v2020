@extends('user.layouts.master')
@section('menu')
    @include('user.layouts._info')
@endsection
@section('content')
    <form action="{{route('member.user.update',auth()->user())}}" class="col-sm-10" method="post">
        @csrf @method('PUT')
        <div class="card ">
            <div class="card-header">
                修改密码
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">新密码</label>
                    <input type="password" name="password" class="form-control" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">确认密码</label>
                    <input type="password" name="password_confirmation" class="form-control" aria-describedby="helpId">
                </div>
            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-primary btn-block">保存</button>
            </div>
        </div>
    </form>
@endsection
