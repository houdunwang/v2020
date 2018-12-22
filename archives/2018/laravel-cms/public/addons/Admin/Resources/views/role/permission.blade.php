@extends('admin::layouts.master')
@section('content')
    @component('components.tabs',['title'=>$role->title.'权限设置'])
        @slot('nav')
            <li class="nav-item"><a href="/admin/role" class="nav-link">角色列表</a></li>
            <li class="nav-item"><a href="#" class="nav-link active">权限设置</a></li>
        @endslot
        @slot('body')
            <form action="/admin/role/permission/{{$role['id']}}" method="post">
                @csrf
                @foreach($modules as $module)
                    <div class="card-body pb-0">
                        @foreach($module['rules'] as $rule)
                            <div class="card card-flat">
                                <div class="card-header">{{$rule['group']}}</div>
                                <div class="col-12 col-sm-8 col-lg-6 form-check mt-2">
                                    @foreach($rule['permissions'] as $permission)
                                        <label class="custom-control custom-checkbox custom-control-inline">
                                            <input type="checkbox" name="name[]"
                                                   {{$role->hasPermissionTo($permission['name'])?'checked=""':''}}
                                                   value="{{$permission['name']}}" class="custom-control-input">
                                            <span class="custom-control-label">{{$permission['title']}}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
                <button class="btn btn-primary">保存</button>
            </form>
        @endslot
    @endcomponent
@endsection