<?php

namespace App\Http\Controllers\Auth;

use App\Events\LoginEvent;
use App\Events\LogoutEvent;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/user';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function attemptLogin(Request $request)
    {
        return collect(['name', 'email'])->contains(function ($value) use ($request) {
            $account = $request->get($this->username());
            $password = $request->get('password');
            return $this->guard()->attempt([$value => $account, 'password' => $password], $request->filled('remember'));
        });
    }

    public function username()
    {
        return 'account';
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            event(new LoginEvent($this->guard()->user(), \Request::getClientIp(), time(), 1));
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    public function logout(Request $request)
    {
        event(new LogoutEvent($this->guard()->user(), \Request::getClientIp(), time(), 2));
        $user = Auth::guard('api')->user();

        if($user)
        {
            $user->api_token = null;
            $user->save();
        }
        return response()->json([
            'data' => 'User logout.'
        ], 200);
//        $this->guard()->logout();
//
//        $request->session()->invalidate();
//
//        return redirect('/');
    }
}
