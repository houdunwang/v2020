@extends('admin::layouts.master')
@section('content')
    <div class="card" id="app">
        <div class="card-header">图文消息管理</div>
        <div class="tab-container">
            <ul role="tablist" class="nav nav-tabs">
                <li class="nav-item"><a href="/news/news" class="nav-link active">图文消息列表</a></li>
                <li class="nav-item"><a href="/news/news/create" class="nav-link">添加图文消息</a></li>
            </ul>
            <div class="card card-contrast card-border-color-success">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width: 10%;">编号</th>
                            <th>图文内容</th>
                            <th>规则编号</th>
                            <th>创建时间</th>
                            <th>修改时间</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                            <tr>
                                <td>{!! $d['id'] !!}</td>
                                <td>{!! $d->rule?$d->rule->name:'' !!}</td>
                                <td>{!! $d['rule_id'] !!}</td>
                                <td>{!! $d['created_at'] !!}</td>
                                <td>{!! $d['updated_at'] !!}</td>
                                <td class="text-right">
                                    <a href="/news/news/{{$d['id']}}/edit" class="btn btn-secondary">编辑</a>
                                    <button type="button" class="btn btn-secondary btn-danger" onclick="del({{$d['id']}},this)">删除</button>
                                    <form action="/news/news/{{$d['id']}}" hidden method="post">
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
    </div>
    <div class="float-right">
        {!!  $data->links() !!}
    </div>
@endsection
@section('scripts')
    <script>
        function del(id, el) {
            if (confirm('确定删除吗？')) {
                $(el).next('form').trigger('submit')
            }
        }
    </script>
@endsection
