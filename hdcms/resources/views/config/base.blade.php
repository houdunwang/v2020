@extends('layouts.admin')
@section('content')
    <div class="card col-sm-8">
        <div class="card-header">
            基本配置
        </div>
        <div class="card-body">
            <form method="post" action="{{route('admin.config.update',['name'=>'base'])}}">
                @csrf
                <div class="form-group">
                    <label>验证码</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="code_expire" value="{{$config['data']['code_expire']}}" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">秒</span>
                        </div>
                    </div>
                    <span class="help-block text-muted">手机或邮箱验证码发送时间周期</span>
                </div>

                <button type="submit" class="btn btn-primary">保存提交</button>
            </form>
        </div>
    </div>
@endsection
