@extends('admin::layouts.master')
@section('head')
    <link rel="stylesheet" href="{{asset('addons/News/Resources/views/news/less/news.css')}}">
@endsection
@section('content')
    <ul role="tablist" class="nav nav-tabs">
        <li class="nav-item"><a href="/news/news" class="nav-link">图文消息列表</a></li>
        <li class="nav-item"><a href="#" class="nav-link active">添加图文消息</a></li>
    </ul>
    <form action="/news/news" method="post">
        @csrf
        {!! $ruleView !!}
        <div class="card" id="app">
            <div class="card-header">图文消息管理</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="news">
                            <div class="first" v-for="(v,i) in news" v-if="i==0">
                                <img :src="v.picurl" alt="">
                                <p>@{{ v.title }}</p>
                                <div class="edit">
                                    <button class="btn btn-secondary" type="button" @click="edit(v)">编辑</button>
                                    <button class="btn btn-secondary" type="button" @click="del(i)">删除</button>
                                    <button class="btn btn-secondary" type="button" @click="prev(i)" v-if="i>0">上移</button>
                                    <button class="btn btn-secondary" type="button" @click="next(i)" v-if="i<news.length-1">下移</button>
                                </div>
                            </div>
                            <div class="item" v-for="(v,i) in news" v-if="i>0">
                                <img :src="v.picurl" alt="">
                                <p>@{{ v.title }}</p>
                                <div class="edit">
                                    <button class="btn btn-secondary" type="button" @click="edit(v)">编辑</button>
                                    <button class="btn btn-secondary" type="button" @click="del(i)">删除</button>
                                    <button class="btn btn-secondary" type="button" @click="prev(i)" v-if="i>0">上移</button>
                                    <button class="btn btn-secondary" type="button" @click="next(i)" v-if="i<news.length-1">下移</button>
                                </div>
                            </div>
                            <div class="pt-2">
                                <button class="btn btn-secondary btn-block" type="button" @click="add">添加图文</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group row">
                            <label for="inputSmall" class="col-12 col-sm-3 col-form-label text-sm-right">标题</label>
                            <div class="col-12 col-sm-8">
                                <input id="inputSmall" type="text" v-model="active.title" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputSmall" class="col-12 col-sm-3 col-form-label text-sm-right">描述</label>
                            <div class="col-12 col-sm-8">
                                <textarea class="form-control-sm form-control" v-model="active.discription" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputSmall" class="col-12 col-sm-3 col-form-label text-sm-right">缩略图</label>
                            <div class="col-sm-8">
                                <div class="input-group mb-1">
                                    <input class="form-control  form-control-sm" v-model="active.picurl">
                                    <div class="input-group-append">
                                        <button @click="upImagePc()" class="btn btn-secondary" type="button">单图上传</button>
                                    </div>
                                </div>
                                <div style="display: inline-block;position: relative;">
                                    <img :src="active.picurl" class="img-responsive img-thumbnail" width="150">
                                    <em class="close" style="position: absolute;top: 3px;right: 8px;" title="删除这张图片"
                                        onclick="removeImg(this)">×</em>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputSmall" class="col-12 col-sm-3 col-form-label text-sm-right">链接</label>
                            <div class="col-12 col-sm-8">
                                <input id="inputSmall" type="text" v-model="active.url" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <textarea name="data" hidden>@{{ news }}</textarea>
        </div>

        <button class="btn btn-primary">保存提交</button>
    </form>
@endsection
@section('scripts')
    <script>
        require(['{{asset('addons/News/Resources/views/news/js/news.js')}}'], function (news) {
            news([{title: '后盾人', 'discription': 'houdunren.com', 'picurl': '/plugin/hdjs/image/nopic.jpg', 'url': 'http://www.houdunwang.com'}])
        })
    </script>
@endsection