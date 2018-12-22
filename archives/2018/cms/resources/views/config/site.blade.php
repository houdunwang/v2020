@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-border-color card-border-color-primary">
                    <div class="card-header card-header-divider">网站全局配置
                    </div>
                    <div class="card-body">
                        <form action="{{route('config.update',['name'=>'site'])}}" method="post">
                            @csrf @method('PUT')
                            <div class="form-group row">
                                <label for="inputText3" class="col-12 col-sm-3 col-form-label text-sm-right">网站名称</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input id="inputText3" type="text" name="webname" class="form-control" value="{{$config['data']['webname']??'后盾人'}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputText3" class="col-12 col-sm-3 col-form-label text-sm-right">关键词</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input id="inputText3" type="text" name="keywords" class="form-control" value="{{$config['data']['keywords']??'PHP,Linux,CSS,Webpack'}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputText3" class="col-12 col-sm-3 col-form-label text-sm-right">网站描述</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <textarea name="description" class="form-control"  rows="5">{{$config['data']['description']}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputText3" class="col-12 col-sm-3 col-form-label text-sm-right">备案号</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input id="inputText3" type="text" name="icp" class="form-control" value="{{$config['data']['icp']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputText3" class="col-12 col-sm-3 col-form-label text-sm-right">客服电话</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input id="inputText3" type="text" name="tel" class="form-control" value="{{$config['data']['tel']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputText3" class="col-12 col-sm-3 col-form-label text-sm-right"></label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                   <button class="btn btn-primary">保存</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
