@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        <form class="form-horizontal" action="/user/me/setting" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-sm-2 control-label" for="name">用户名</label>
                <div class="col-sm-8">
                    <input class="form-control" name="name" type="text" value="{{ Auth::user()->name }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="email">邮箱</label>
                <div class="col-sm-8">
                    <input class="form-control" name="email" type="text" value="{{ Auth::user()->email }}">
                </div>
            </div>
            @include('layouts.error')
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">提交</button>
            </div>
        </form>
        <br>

    </div>
@endsection