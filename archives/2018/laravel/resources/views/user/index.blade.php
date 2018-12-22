@extends('layouts.default')
@section('content')
    <div class="card">
        <div class="card-header">
            会员列表
        </div>
        <div class="card-block">
            <table class="table">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>昵称</th>
                    <th width="100">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user['id']}}</td>
                        <td>{{$user['name']}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{route('user.show',$user)}}"
                                   class="btn btn-success">查看</a> @can('delete',$user)
                                    <form action="{{route('user.destroy',$user)}}" method="post">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger">删除</button>
                                    </form>
                                @endcan
                                @can('update',$user)
                                    <a href="{{route('user.edit',$user)}}" class="btn btn-secondary">编辑</a>
                                @endcan
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="card-footer text-muted">
            {{$users->links()}}
        </div>
    </div>
@endsection