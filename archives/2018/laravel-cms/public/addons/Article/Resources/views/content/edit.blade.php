@extends('admin::layouts.master')
@section('content')
    <div class="card" id="app">
        <div class="card-header">文章管理</div>
        <ul role="tablist" class="nav nav-tabs">
            <li class="nav-item"><a href="/article/content" class="nav-link">文章列表</a></li>
            <li class="nav-item"><a href="#" class="nav-link active">修改文章</a></li>
        </ul>
        <form action="/article/content/{{$content['id']}}" method="post">
            <div class="card-body card-body-contrast">
                @csrf @method('PUT')
                <div class="row">
                    <div class="col-sm-4 border bg-transparent">
                        <div class="form-group row">
                            <label for="title" class="col-12 col-sm-3 col-form-label text-md-right">标题</label>
                            <div class="col-12 col-md-9">
                                <input id="title" name="title" type="text"
                                       value="{{ $content['title']??old('title') }}"
                                       class="form-control form-control-sm form-control{{ $errors->has('title') ? ' is-invalid' : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-12 col-sm-3 col-form-label text-md-right">栏目</label>
                            <div class="col-12 col-md-9">
                                <select name="category_id" class="form-control-xs form-conrrol">
                                    @foreach($categories as $category)
                                        <option value="{{$category['id']}}" {{$category['id']==$content['category_id']?'selected':''}}>{{$category['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="author" class="col-12 col-sm-3 col-form-label text-md-right">作者</label>
                            <div class="col-12 col-md-9">
                                <input id="author" name="author" type="text"
                                       value="{{ $content['author']??old('author') }}"
                                       class="form-control form-control-sm form-control{{ $errors->has('author') ? ' is-invalid' : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="thumb" class="col-12 col-sm-3 col-form-label text-md-right">缩略图</label>
                            <div class="col-12 col-lg-9">
                                <img onclick="upImagePc()" src="{{$content['thumb']}}" class="img-fluid" alt="Responsive image">
                                <input type="text" name="thumb" hidden value="{{$content['thumb']}}">
                                <script>
                                    require(['hdjs']);
                                    //上传图片
                                    function upImagePc() {
                                        require(['hdjs'], function (hdjs) {
                                            hdjs.image(function (images) {
                                                $("[name='thumb']").val(images[0]);
                                                $(".img-fluid").attr('src', images[0]);
                                            })
                                        });
                                    }
                                </script>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="click" class="col-12 col-sm-3 col-form-label text-md-right">查看次数</label>
                            <div class="col-12 col-md-9">
                                <input id="click" name="click" type="number"
                                       value="{{ $content['click']??old('click') }}"
                                       class="form-control form-control-sm form-control{{ $errors->has('click') ? ' is-invalid' : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="istop" class="col-12 col-sm-3 col-form-label text-md-right"
                                   style="padding-top:initial;">置顶</label>
                            <div class="col-12 col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"
                                           {{$content['istop']=='1'?'checked':''}}
                                           name="istop" value="1"
                                           id="istop-1">
                                    <label class="form-check-label" for="istop-1">是</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"
                                           {{$content['istop']=='2'?'checked':''}}
                                           name="istop" value="2"
                                           id="istop-2">
                                    <label class="form-check-label" for="istop-2">否</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group row pt-0">
                            <div class="col-12">
                                <textarea id="container" style="height:300px;width:100%;" name="content">{{ $content['content']??old('content') }}</textarea>
                                <script>
                                    require(['hdjs'], function (hdjs) {
                                        hdjs.ueditor('container', {hash: 2, data: 'hd'}, function (editor) {
                                        });
                                    })
                                </script>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-primary offset-sm-2">保存更新</button>
            </div>
        </form>
    </div>
@endsection
