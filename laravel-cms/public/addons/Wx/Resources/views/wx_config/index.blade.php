@extends('admin::layouts.master')
@section('content')
    <div class="card" id="app">
        <div class="card-header">配置管理</div>
        <ul role="tablist" class="nav nav-tabs">
            <li class="nav-item"><a href="/wx/wx_config" class="nav-link">配置列表</a></li>
            <li class="nav-item"><a href="#" class="nav-link active">添加配置</a></li>
        </ul>
        <form action="/wx/wx_config" method="post">
            <div class="card-body card-body-contrast">
                @csrf
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-md-right">token</label>
                    <div class="col-12 col-md-9">
                        <input name="token" type="text"
                               value="{{ $wx_config['token']??old('token') }}"
                               class="form-control form-control-sm">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-md-right">encodingaeskey</label>
                    <div class="col-12 col-md-9">
                        <input name="encodingaeskey" type="text"
                               value="{{ $wx_config['encodingaeskey']??old('encodingaeskey') }}"
                               class="form-control form-control-sm">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-md-right">appid</label>
                    <div class="col-12 col-md-9">
                        <input name="appid" type="text"
                               value="{{ $wx_config['appid']??old('appid') }}"
                               class="form-control form-control-sm">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-md-right">appsecret</label>
                    <div class="col-12 col-md-9">
                        <input name="appsecret" type="text"
                               value="{{ $wx_config['appsecret']??old('appsecret') }}"
                               class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-primary offset-sm-2">保存提交</button>
            </div>
        </form>
    </div>
@endsection
