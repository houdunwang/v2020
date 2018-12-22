@extends('layouts.default')
@section('content')
    @auth
    <div class="card">
        <div class="card-header">
            发表博客
        </div>
        <div class="card-body">
            <form action="{{route('blog.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" name="content" value="{{old('content')}}"></textarea>
                </div>
                <button type="submit" class="btn btn-success">发表</button>
            </form>
        </div>
    </div>
    @endauth
    <div class="card mt-3">
        <div class="card-header">
            博客列表
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <td>{{$blog->content}}</td>
                        <td>

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