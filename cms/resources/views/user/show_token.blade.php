@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">邮箱验证</div>
                    <div class="card-body">
                        <form action="{{route('user.send_token')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">邮箱</label>
                                <input type="text" name="email" class="form-control" value="{{auth()->user()->email}}">
                            </div>
                            <div class="form-group">
                                <label for=""></label>
                                <button class="btn btn-primary">发送验证码</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
