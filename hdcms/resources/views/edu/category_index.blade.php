@extends('layouts.admin')
@section('content')
    <div class="card col-12">
        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-sm mb-5">
                <li class="nav-item mr-4">
                    <a href="#" class="nav-link active">
                        分类列表
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('edu.category.create')}}" class="nav-link">
                        添加分类
                    </a>
                </li>
            </ul>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">编号</th>
                        <th scope="col">分类名称</th>
                        <th scope="col">图标</th>
                        <th scope="col">更新时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categorys as $category)
                        <tr>
                            <th scope="row">{{$category['id']}}</th>
                            <td>{{$category['title']}}</td>
                            <td>
                                <i class="{{$category['icon']}}" aria-hidden="true"></i>
                            </td>
                            <td>{{$category['created_at']}}</td>
                            <td>
                                <a href="{{route('edu.category.edit',$category)}}" class="btn btn-sm btn-white">编辑</a>
                                <a href="javascript:void(0)" onclick="del({{$category['id']}})" class="btn btn-sm btn-white">删除</a>
                                <form id="{{$category['id']}}" action="{{route('edu.category.destroy',$category)}}" method="post">
                                    @csrf @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        function del(id) {
            require(['hdjs'], function (hdjs) {
                hdjs.confirm('确认删除吗', function () {
                    $("#" + id).submit();
                })
            })
        }
    </script>
@endpush
