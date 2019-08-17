<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class StorageController extends Controller
{
    public function index(){
//        $contents = Storage::get('default.jpg');
//        $url = Storage::put('avatars/2.jpg', $contents);
//        dump($url);
//        $exists = Storage::exists('avatars/1.jpg');
//        if($exists){
//            dump('exists');
//        }
//        return Storage::download('avatars/1.jpg', '头像.jpg');
//        dump(Storage::url('defaults.jpg'));

//        $size = Storage::size('default.jpg');
//        $last = Storage::lastModified('default.jpg');
//        dump(Carbon::createFromTimestamp($last)->toDateString() );

//        $url = Storage::putFile('avatars/3.jpg', new File('avatars/2.jpg'));
//        dump($url);

//        Storage::prepend('logs/file.log', 'hello');
//        Storage::append('logs/file.log', 'world');
//        Storage::copy('logs/file.log', 'avatars/file1.log');
//        Storage::move('logs/file.log', 'imgs/file.log');

        // 文件可见度
//        $content = Storage::get('imgs/file.log');
//        Storage::put('avatars/file2.log', $content, 'public');
//        Storage::setVisibility('avatars/file2.log', 'private');
//        $visible = Storage::getVisibility('avatars/file2.log');
//
//        dump($visible);

        // 删除文件
//        dump(Storage::delete(['avatars/file2.log']));

        // 目录
        $directory = 'imgs';
//        $files1 = Storage::files($directory);
//        $files2 = Storage::allFiles($directory);
//        dump($files1);
//        dump($files2);

//        $directories1 = Storage::directories($directory);
//        $directories2 = Storage::allDirectories($directory);
//        dump($directories1);
//        dump($directories2);

        // makeDirectory:创建目录
//        dump(Storage::makeDirectory('hello'));

        // deleteDirectory:删除目录
        Storage::deleteDirectory('hello');
    }

    public function store(Request $request)
    {
//        $path = $request->file('avatar')->store('avatars');
//        return $path;

//        $path = Storage::putFile('avatars', $request->file('avatar'));
//        return $path;

//        $path = $request->file('avatar')->storeAs('avatars', $request->user()->id);
    }
}
