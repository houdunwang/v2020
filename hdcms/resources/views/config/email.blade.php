@extends('layouts.admin')
@section('content')
    <div class="card col-sm-8">
        <div class="card-body">
            <form method="post" action="{{route('admin.config.update',['name'=>'email'])}}">
                @csrf
                <div class="form-group">
                    <label>发送方式</label>
                    <input type="text" class="form-control" name="MAIL_DRIVER" value="{{$config['data']['MAIL_DRIVER']??''}}">
                </div>
                <div class="form-group">
                    <label>邮箱服务器</label>
                    <input type="text" class="form-control" name="MAIL_HOST" value="{{$config['data']['MAIL_HOST']??''}}">
                </div>
                <div class="form-group">
                    <label>端口号</label>
                    <input type="text" class="form-control" name="MAIL_PORT" value="{{$config['data']['MAIL_PORT']??'25'}}">
                </div>
                <div class="form-group">
                    <label>回复地址</label>
                    <input type="text" class="form-control" name="MAIL_FROM_ADDRESS" value="{{$config['data']['MAIL_FROM_ADDRESS']??''}}">
                </div>
                <div class="form-group">
                    <label>登录帐号</label>
                    <input type="text" class="form-control" name="MAIL_USERNAME" value="{{$config['data']['MAIL_USERNAME']??''}}">
                </div>
                <div class="form-group">
                    <label>邮箱登录密码</label>
                    <input type="password" class="form-control" name="MAIL_PASSWORD" value="{{$config['data']['MAIL_PASSWORD']??''}}">
                </div>
                <div class="form-group">
                    <label>发件人中文名称</label>
                    <input type="text" class="form-control" name="MAIL_FROM_NAME" value="{{$config['data']['MAIL_FROM_NAME']??''}}">
                </div>
                <div class="form-group">

                    <label>加密方式</label>
                    <input type="text" class="form-control" name="MAIL_ENCRYPTION" value="{{$config['data']['MAIL_ENCRYPTION']??'tls'}}">
                </div>
                <button type="submit" class="btn btn-primary">保存提交</button>
            </form>
        </div>
    </div>
@endsection
