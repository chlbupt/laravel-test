<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('build {project}', function($project){
    $this->info("Building {$project}!");
})->describe('Bulid project');

Artisan::command('test', function(){
    $headers = ['Name', 'Email'];
    $users = [
        ['学员君1', 'yaojinbu-1@163.com'],
        ['学员君2', 'yaojinbu-2@163.com'],
        ['学员君3', 'yaojinbu-3@163.com'],
        ['学员君4', 'yaojinbu-4@163.com'],
    ];
    $this->table($headers, $users);

    $users = App\User::all();
    $bar = $this->output->createProgressBar(count($users));
    $bar->start();
    foreach($users as $user){
//        $this->performTask($user);
        sleep(2);
        $bar->advance();
    }
    $bar->finish();
});