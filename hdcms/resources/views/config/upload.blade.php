@extends('layouts.admin')
@section('content')
    <form method="post" action="{{route('admin.config.update',['name'=>'upload'])}}" class="col-sm-9">
        @csrf
        <div class="card col-sm-8">
            <div class="card-header">
                图片上传配置
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>图片大小</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="image_size" value="{{$config['data']['image_size']??'2000000'}}" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">字节</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>允许类型</label>
                    <input type="text" class="form-control" name="image_type" value="{{$config['data']['image_type']??'jpg,jpeg,png,gif'}}">
                </div>
            </div>
        </div>
        <div class="card col-sm-8">
            <div class="card-header">
                文件上传配置
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>图片大小</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="file_size" value="{{$config['data']['file_size']??'2000000'}}" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">字节</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>允许类型</label>
                    <input type="text" class="form-control" name="file_type" value="{{$config['data']['file_type']??'zip,doc,rar'}}">
                </div>
                <button type="submit" class="btn btn-primary">保存提交</button>
            </div>
        </div>
    </form>
@endsection
