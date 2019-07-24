@extends('layouts.main')

@section('nav')
    @include('layouts.nav')
@endsection

@section('content')
    <div class="main container">
        <form action="{{ url('/user') }}" method="GET" class="form-inline" role="form">
            <div class="pull-right" style="margin-bottom: 10px; ">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Please input email" name="email" value="{{ get_params($_SERVER['QUERY_STRING'], 'email') }}">
                    <div class="btn-group form-hori">
                        <button type="submit" class="btn btn-primary">搜索</button>
                        <button type="button" class="btn btn-danger" onclick="reset_form('{{ url('/user') }}')">重置</button>
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
                            <a href="javascript:;" onclick="o2o_s_edit('Edit User', '/user/{{ $user->id }}/edit', '', 300)">编辑</a>
                            <a href="javascript:;" onclick="o2o_del('/user/{{ $user->id }}/delete')">删除</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </form>
    </div>
    <script>
        function reset_form(url) {
            $('form')[0].reset();
            this.location.href = url;
        }
    </script>
@endsection