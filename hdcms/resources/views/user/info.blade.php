@extends('user.layouts.master')
@section('menu')
    @include('user.layouts._info')
@endsection
@section('content')
    <div class="row justify-content-center">
        <form action="{{route('member.user.update',auth()->user())}}" class="col-sm-8" method="post">
            @csrf @method('PUT')
            <div class="card ">
                <div class="card-header">
                    个人信息
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">昵称</label>
                        <input type="text" name="name" class="form-control" value="{{old('name',$user->name)}}" aria-describedby="helpId">
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <button class="btn btn-primary btn-block">保存</button>
                </div>
            </div>
        </form>
    </div>
@endsection
