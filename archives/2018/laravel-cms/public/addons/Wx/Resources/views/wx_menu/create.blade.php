@extends('admin::layouts.master')
@section('head')
    <link rel="stylesheet" href="{{asset('addons/Wx/Resources/views/menu/index.css')}}">
@endsection
@section('content')
    <div class="card" id="app">
        <div class="card-header">微信菜单管理</div>
        <form action="/wx/wx_menu" method="post">
            <div class="card-body card-body-contrast">
                @csrf
                <div class="row">
                    <div class="col-sm-4">
                        <div class="mobile">
                            <div class="menu-container">
                                <div class="menu" v-for="(v,i) in menus">
                                    <h5><i @click="delMenu(i)" class="fa fa-minus-square" aria-hidden="true"></i> @{{ v.name }}</h5>
                                    <dl>
                                        <dd v-if="v.sub_button.length<5"><i @click="addSubMenu(v)" class="fa fa-plus-square" aria-hidden="true"></i> 添加菜单</dd>
                                        <dd v-for="(m,n) in v.sub_button">
                                            <i @click="delSubMenu(v,n)" class="fa fa-minus-square" aria-hidden="true"></i>  @{{ m.name }}
                                        </dd>
                                    </dl>
                                </div>
                                <div class="menu" v-if="menus.length<3">
                                    <h5 @click="add()"><i class="fa fa-plus-square" aria-hidden="true"></i> 添加菜单</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="card-header">
                                基本设置
                            </div>
                            <div class="card-block">
                                <div class="form-group row">
                                    <label for="inputSmall" class="col-12 col-sm-3 col-form-label text-sm-right">菜单名称</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input type="text" class="form-control form-control-sm" name="name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                菜单
                            </div>
                            <div class="card-block">
                                <div class="form-group row">
                                    <label for="inputSmall" class="col-12 col-sm-3 col-form-label text-sm-right">菜单</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input type="text" class="form-control form-control-sm" v-model="active.name">
                                    </div>
                                </div>
                                <div class="form-group row pt-1 pb-1">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">动作</label>
                                    <div class="col-12 col-sm-8 col-lg-6 form-check mt-2">
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="radio-inline" v-model="active.type" value="view" class="custom-control-input">
                                            <span class="custom-control-label">链接</span>
                                        </label>
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="radio-inline" v-model="active.type" value="click"  class="custom-control-input">
                                            <span class="custom-control-label">关键词</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row" v-if="active.type=='view'">
                                    <label for="inputSmall" class="col-12 col-sm-3 col-form-label text-sm-right">链接</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input type="text" class="form-control form-control-sm" v-model="active.url">
                                    </div>
                                </div>
                                <div class="form-group row" v-if="active.type=='click'">
                                    <label for="inputSmall" class="col-12 col-sm-3 col-form-label text-sm-right">关键词</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input type="text" class="form-control form-control-sm"  v-model="active.key">
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer text-muted">
                                <textarea name="data" hidden>@{{ menus }}</textarea>
                                <button class="btn-primary btn">保存菜单</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script>
        require(["{{asset('addons/Wx/Resources/views/menu/index.js')}}"], function (index) {
            index([]);
        });
    </script>
@endsection