@extends('layouts.default')
@section('content')
    <form action="">
        <div class="card">
            <div class="card-header">
                用户注册
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>邮箱</label>
                    <input type="text" class="form-control" name="email">
                </div>
            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-success">注册</button>
            </div>
        </div>
    </form>
@endsection