@extends('layouts.default')
@section('content')
    <div class="alert alert-success" role="alert">
        <strong>验证邮件已经发送到邮箱 {{$user->email}}</strong>
    </div>
@endsection
