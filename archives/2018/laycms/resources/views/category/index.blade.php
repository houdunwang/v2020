@extends('layouts.admin')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-sm">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            栏目列表
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('content.category.create')}}" class="nav-link">
                            添加栏目
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body pt-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th>
                        <th>栏目名称</th>
                        <th>创建时间</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category['id']}}</td>
                            <td>{{$category['_name']}}</td>
                            <td>{{$category->created_at}}</td>
                            <td>
                                <div class="btn-group mr-2 btn-group-sm" role="group" aria-label="First group">
                                    <a class="btn btn-white" href="{{route('content.category.edit',$category)}}">编辑</a>
                                    <a class="btn btn-light">删除</a>
                                    <a class="btn btn-white">查看</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
