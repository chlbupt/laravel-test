@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        {{--<form action="/user" method="POST" enctype="multipart/form-data">--}}
        <form action="/user/{{ $user->id }}" method="POST" class="form-horizontal" id="user">
            {{csrf_field()}}
            {{ method_field("PUT") }}
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">姓名</label>
                <div class="col-sm-8">
                    <input name="name" id="name" type="text" class="form-control" placeholder="输入姓名" value="{{ $user->name }}">
                </div>

            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">邮箱</label>
                <div class="col-sm-8">
                    <input name="email" id="email" type="text" class="form-control" placeholder="输入邮箱" value="{{ $user->email }}">
                </div>

            </div>

            @include('layouts.error')
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">提交</button>
                </div>
            </div>
        </form>
    </div>
@endsection