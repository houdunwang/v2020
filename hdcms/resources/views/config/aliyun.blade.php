@extends('layouts.admin')
@section('content')
    <div class="card col-sm-8">
        <div class="card-header">
            阿里云
        </div>
        <div class="card-body">
            <form method="post" action="{{route('admin.config.update',['name'=>'aliyun'])}}">
                @csrf
                <div class="form-group">
                    <label>regionId</label>
                    <input type="text" class="form-control" name="HD_ALIYUN_REGIONID" value="{{$config['data']['HD_ALIYUN_REGIONID']??'cn-hangzhou'}}">
                </div>
                <div class="form-group">
                    <label>accessId</label>
                    <input type="text" class="form-control" name="HD_ALIYUN_ACCESSID" value="{{$config['data']['HD_ALIYUN_ACCESSID']??''}}">
                </div>
                <div class="form-group">
                    <label>accessKey</label>
                    <input type="password" class="form-control" name="HD_ALIYUN_ACCESSKEY" value="{{$config['data']['HD_ALIYUN_ACCESSKEY']??''}}">
                </div>
                <button type="submit" class="btn btn-primary">保存提交</button>
            </form>
        </div>
    </div>
@endsection
