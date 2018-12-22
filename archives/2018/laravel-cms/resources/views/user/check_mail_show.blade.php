@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                @include('layouts._message')
                <div class="card">
                    <div class="card-header">
                        系统提示
                    </div>
                    <div class="card-body">
                       <h3>请验证邮箱后体验网站所有功能</h3>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="{{route('send_mail_token')}}" class="btn btn-success">重新发送验证邮件</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection