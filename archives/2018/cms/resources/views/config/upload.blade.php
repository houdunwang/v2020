@extends('layouts.admin')
@section('content')
    <form action="{{route('config.update',['name'=>'upload'])}}" method="post">
        @csrf @method('PUT')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="editormd">
                        <textarea style="display:none;"></textarea>
                    </div>
                </div>
                @push('js')
                    <script>
                        require(['hdjs'], function (hdjs) {
                            hdjs.editormd("editormd", {
                                width: '100%',
                                height: 300,
                                toolbarIcons: function () {
                                    return [
                                        "bold", "del", "italic", "quote", "|",
                                        "list-ul", "list-ol", "hr", "|",
                                        "link", "hdimage", "code-block", "|",
                                        "watch", "preview", "fullscreen"
                                    ]
                                },
                                //后台上传地址，默认为 hdjs配置项window.hdjs.uploader
                                server: '',
                                //editor.md库位置
                                path: "{{asset('org/hdjs')}}/package/editor.md/lib/"
                            });
                        });
                    </script>
                @endpush
                <div class="card card-border-color card-border-color-primary">
                    <div class="card-header card-header-divider">图片上传配置</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputText3" class="col-12 col-sm-3 col-form-label text-sm-right">图片类型</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input id="inputText3" type="text" name="image_type" class="form-control"
                                       value="{{$config['data']['image_type']??'jpeg,jpg,gif,png'}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputText3" class="col-12 col-sm-3 col-form-label text-sm-right">图片大小</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="image_size"
                                           value="{{$config['data']['image_size']??2000}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">字节</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card card-border-color card-border-color-primary">
                    <div class="card-header card-header-divider">文件上传配置</div>
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="inputText3" class="col-12 col-sm-3 col-form-label text-sm-right">文件类型</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input id="inputText3" type="text" name="file_type" class="form-control"
                                       value="{{$config['data']['file_type']??'zip,json'}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputText3" class="col-12 col-sm-3 col-form-label text-sm-right">图片大小</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="file_size"
                                           value="{{$config['data']['file_size']??2000}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">字节</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputText3" class="col-12 col-sm-3 col-form-label text-sm-right"></label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <button class="btn btn-primary">保存</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
@endsection
