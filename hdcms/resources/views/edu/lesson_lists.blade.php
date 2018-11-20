@extends('edu.layouts.content')
@section('content')
    <div class="card">
        <div class="card-header border-bottom-0">
            <div>
                <ul class="nav nav-tabs nav-tabs-sm">
                    <li class="nav-item">
                        <a href="{{route('edu.lesson.lists')}}" class="nav-link active">
                            课程列表
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('edu.lesson.create')}}" class="nav-link">
                            发表课程
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">编号</th>
                    <th scope="col">课程名称</th>
                    <th scope="col">更新时间</th>
                    <th scope="col">视频数量</th>
                    <th scope="col"  width="180"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($lessons as $lesson)
                    <tr>
                        <th scope="row">{{$lesson['id']}}</th>
                        <td>{{$lesson['title']}}</td>
                        <td>{{$lesson['updated_at']}}</td>
                        <td>{{$lesson->video->count()}}</td>
                        <td class="text-right">
                            <a href="{{route('edu.lesson.show',$lesson)}}" class="btn btn-sm btn-white">查看</a>
                            <a href="{{route('edu.lesson.edit',$lesson)}}" class="btn btn-sm btn-white">编辑</a>
                            <a href="javascript:void(0)" onclick="del({{$lesson['id']}})" class="btn btn-sm btn-white">删除</a>
                            <form action="{{route('edu.lesson.destroy',$lesson)}}" method="post" id="{{$lesson['id']}}">
                                @csrf @method('DELETE')
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer text-muted">
            {{$lessons->links()}}
        </div>
    </div>
@endsection
@push('js')
    <script>
        function del(id) {
            require(['hdjs'], function (hdjs) {
                hdjs.confirm('确定删除吗', function () {
                    $("#" + id).submit();
                })
            })
        }
    </script>
@endpush
