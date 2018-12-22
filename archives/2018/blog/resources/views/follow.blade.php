@extends('layouts.default')
@section('content')
    <div class="card">
        <div class="card-header">
           <h2>{{$title}}</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>
                            <a href="{{route('user.show',$user)}}">  {{$user->name}}</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer text-muted">
         {{$users->links()}}
        </div>
    </div>
@endsection