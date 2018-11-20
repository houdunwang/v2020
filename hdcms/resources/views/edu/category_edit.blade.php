@extends('layouts.admin')
@section('content')
    <form action="{{route('edu.category.update',$category)}}" method="post" class="col-10">
        @csrf @method('PUT')
        <div class="card col-12">
            <div class="card-header">
                修改分类
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">分类名称</label>
                    <input type="text" name="title" class="form-control" value="{{$category['title']}}">
                </div>
                <div class="form-group">
                    <label for="">分类图标</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i id="icon-i" class="{{$category['icon']}}" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="icon" value="{{$category['icon']}}">
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
