@extends('layouts.default')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">{{$user['name']}}</h1>
            <div class="text-center">
                <a href="{{route('follow',$user)}}" class="btn btn-info mr-2">粉丝{{$user->follower()->count()}}</a>
                <a href="{{route('following',$user)}}" class="btn btn-info mr-2">关注{{$user->following()->count()}}</a>
                @auth
                    <a href="{{route('user.follow',$user)}}" class="btn btn-success">
                        {{$followTitle}}
                    </a>
                @endauth
            </div>

        </div>
        <div class="card-body">
            <table class="table">
                <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <td>
                            {{$blog['content']}}
                        </td>
                        <td>
                            @can('delete',$blog)
                                <form action="{{route('blog.destroy',$blog)}}" method="post">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm">删除</button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer text-muted">
            {{$blogs->links()}}
        </div>
    </div>
@endsection