<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    public function showProfile()
    {
//        $profile = Redis::get('user:profile:1');
//        $profile = Redis::command('get', ['user:profile:1']);
//        dd($profile);

//        Redis::pipeline(function($pipe){
//            for($i=0;$i<10;$i++){
//                $pipe->set('key:'.$i, $i);
//            }
//        });
        dd(Redis::keys('*'));
    }
}
