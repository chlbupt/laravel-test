<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Http\Response\ResponseJson;

class UserController extends Controller
{
    use ResponseJson;

    public function index(){

        $user = app('App\User');
        $email = request('email');
        if($email){
            $user = $user->where('email', 'like', '%'.$email.'%');
        }
        $name = request('name');
        if($name){
            $user = $user->where('name', 'like', '%'.$name.'%');
        }
//        DB::connection()->enableQueryLog();
        $users = $user->orderBy('id', 'desc')->paginate(10);
//        dd(DB::getQueryLog());
        return view('user.index', compact('users'));
    }
    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:10|min:5',
            'email' => 'required|email',
            'password' => 'required|min:6|max:10',
        ]);
        $params = request(['name', 'email', 'password']);
        $params['password'] = bcrypt($params['password']);
        User::create($params);
        return redirect(url('/user/create'));
    }
    public function edit(User $user)
    {
        return view('user/edit', compact('user'));
    }
    public function update(User $user)
    {
        // 验证
        $this->validate(request(),[
            'name' => 'required|string|min:5',
            'email' => 'required|email',
        ]);
        // 逻辑
        $user->name = request('name');
        $user->email = request('email');
        $user->save();
        //渲染
        return redirect("/user/{$user->id}/edit");
    }
    public function delete(User $user)
    {
        // TODO: 用户权限验证
        $user->delete();
        return redirect(url('/user'));
    }

    public function info()
    {
        return $this->jsonSuccessData([
            'id' => 1,
            'name' => 'wulekong',
        ]);
    }

}
