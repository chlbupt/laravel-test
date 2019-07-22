@extends('layouts.main')
@section('content')
    <div class="container">
        <form action="{{ url('/user') }}" method="GET" class="form-inline" role="form">
            <div class="pull-right" style="margin-bottom: 10px; ">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Please input email" name="email">
                    <div class="btn-group form-hori">
                        <button type="submit" class="btn btn-primary">搜索</button>
                        <button type="reset" class="btn btn-danger">重置</button>
                        <button type="button" class="btn btn-info" onclick="layer_show('Add User', '/user/create', '', 350)">添加</button>
                    </div>
                </div>
            </div>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Operate</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="javascript:;" onclick="o2o_s_edit('Edit User', '/user/{{ $user->id }}/edit')">编辑</a>
                            <a href="javascript:;" onclick="o2o_del('/user/{{ $user->id }}/delete')">删除</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </form>
    </div>
@endsection