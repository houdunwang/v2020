@extends('user.layouts.master')
@section('menu')
    @include('user.layouts._info')
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="card col-sm-8">
            <div class="card-header">
                头像设置
            </div>
            <div class="card-body text-center">
                <form action="{{route('member.user.update',Auth::user())}}" id="updateIcon" method="post">
                    @csrf @method("PUT")
                    <div class="avatar avatar-xxl" onclick="upImagePc(this)">
                        <input type="hidden" name="icon">
                        <img src="{{auth()->user()->icon}}" class="avatar-img rounded-circle">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        function upImagePc() {
            require(['hdjs'], function (hdjs) {
                hdjs.image(function (images) {
                    $("[name='icon']").val(images[0]);
                    $(".avatar img").attr('src', images[0]);
                    $("#updateIcon").submit();
                })
            });
        }
    </script>
@endpush
@push('css')
    <style>
        .avatar {
            cursor: pointer;
        }
    </style>
@endpush
