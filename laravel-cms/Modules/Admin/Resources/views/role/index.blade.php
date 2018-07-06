@extends('admin::layouts.master')
@section('content')
    <div class="card card-table">
        <div class="card-header">
            <button class="btn btn-space btn-primary">角色列表</button>
            <button data-toggle="modal" data-target="#addRole" type="button" class="btn btn-space btn-secondary">
                添加角色
            </button>
            @component('components.modal',['id'=>'addRole','title'=>'添加角色','url'=>'/admin/role'])
                <div class="form-group">
                    <label>角色名称</label>
                    <input type="text" placeholder="请输入中文角色名称" name="title" class="form-control"
                           value="{{old('title')}}">
                </div>
                <div class="form-group">
                    <label>角色标识</label>
                    <input type="text" placeholder="标识必须为英文字母" name="name" class="form-control" value="{{old('name')}}">
                </div>
            @endcomponent
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th style="width:10%;">编号</th>
                    <th style="width:30%;">角色名称</th>
                    <th class="">角色标识</th>
                    <th class="number">创建时间</th>
                    <th class="number"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td>{{$role['id']}}</td>
                        <td>{{$role['title']}}</td>
                        <td class="">{{$role['name']}}</td>
                        <td class="number">{{$role['created_at']}}</td>
                        <td class="number">
                            <div class="btn-group btn-space">
                                <button type="button" data-toggle="modal" data-target="#editRole{{$role['id']}}" class="btn btn-secondary">编辑</button>
                                <button type="button" class="btn btn-secondary">删除</button>
                                <a href="/admin/role/permission/{{$role['id']}}" class="btn btn-secondary">权限</a>
                            </div>
                            @component('components.modal',['id'=>"editRole{$role['id']}",'method'=>'PUT','title'=>"编辑{$role['title']}",'url'=>"/admin/role/{$role['id']}"])
                                <div class="form-group text-left">
                                    <label>角色名称</label>
                                    <input type="text" placeholder="请输入中文角色名称" name="title" class="form-control"
                                           value="{{$role['title']}}">
                                </div>
                                <div class="form-group text-left">
                                    <label>角色标识</label>
                                    <input type="text" placeholder="标识必须为英文字母" name="name" class="form-control"
                                           value="{{$role['name']}}">
                                </div>
                            @endcomponent
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection