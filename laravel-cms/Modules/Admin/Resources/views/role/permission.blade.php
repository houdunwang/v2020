@extends('admin::layouts.master')
@section('content')
    <form action="/admin/role/permission/{{$role['id']}}" method="post">
        @csrf
        <div class="card card-border-color card-border-color-primary">
            <div class="card-header">
                [{{$role->title}}] 权限设置
            </div>
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
        </div>
        <button class="btn btn-primary">保存</button>
    </form>
@endsection