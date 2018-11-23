@extends('layouts.admin')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-sm">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            栏目列表
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('content.category.create')}}" class="nav-link">
                            添加栏目
                        </a>
                    </li>
                </ul>
            </div>
            <form method="post" action="{{route('content.category.store')}}">
                @csrf
                @include('category.layouts._category')
            </form>
        </div>
    </div>
@endsection
