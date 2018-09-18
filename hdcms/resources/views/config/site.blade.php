@extends('layouts.admin')
@section('content')
    <div class="card col-sm-8">
        <div class="card-body">
            <form method="post" action="{{route('admin.config.update',['name'=>'site'])}}">
                @csrf
                <div class="form-group">
                    <label>网站名称</label>
                    <input type="text" class="form-control" name="webname" value="{{$config['data']['webname']??''}}">
                </div>
                <div class="form-group">
                    <label>网站关键字</label>
                    <input type="text" class="form-control" name="keywords" value="{{$config['data']['keywords']??''}}">
                </div>
                <div class="form-group">
                    <label>网站介绍</label>
                    <textarea rows="3" class="form-control" name="description">{{$config['data']['description']??''}}</textarea>
                </div>
                <div class="form-group">
                    <label>备案号</label>
                    <input type="text" class="form-control" name="icp" value="{{$config['data']['icp']??''}}">
                </div>
                <div class="form-group">
                    <label>咨询热线</label>
                    <input type="text" class="form-control" name="tel" value="{{$config['data']['tel']??''}}">
                </div>
                <div class="form-group">
                    <label>客服邮箱</label>
                    <input type="text" class="form-control" name="email" value="{{$config['data']['email']??''}}">
                </div>
                <button type="submit" class="btn btn-primary">保存提交</button>
            </form>
        </div>
    </div>
@endsection
