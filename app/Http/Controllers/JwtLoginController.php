<?php

namespace App\Http\Controllers;

use App\Common\Auth\JwtAuth;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Response\ResponseJson;
use Illuminate\Http\Request;

class JwtLoginController extends BaseController
{
    use ResponseJson;

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $jwtAuth = JwtAuth::getInstance();
        $token = $jwtAuth->setUid(1)->encode()->getToken();
        return $this->jsonSuccessData([
            'token' => $token,
        ]);
    }
}