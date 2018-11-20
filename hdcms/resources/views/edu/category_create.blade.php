@extends('layouts.admin')
@section('content')
    <form action="{{route('edu.category.store')}}" method="post" class="col-10">
        @csrf
        <div class="card col-12">
            <div class="card-header">
                添加分类
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">分类名称</label>
                    <input type="text" name="title" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">分类图标</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i id="icon-i" class="fa fa-file-pdf-o" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="icon">
                        <div class="input-group-append">
                            <span class="input-group-text" onclick="font()">选择图标</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-primary">保存提交</button>
            </div>
        </div>
    </form>
@endsection
@push('js')
    <script>
        function font() {
            require(['hdjs'], function (hdjs) {
                hdjs.font(function (icon) {
                    $("[name=icon]").val(icon);
                    $("#icon-i").attr('class', icon)
                })
            })
        }
    </script>
@endpush
