<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
//use App\DripEmailer;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send {user : The ID of the user} {--queue= : Whether the job should be queued}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send drip e-mails to a user';
    protected $drip;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
//        $this->drip = $drip;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        dd($this->arguments());
//        $this->drip->send(User::find($this->argument('user')));
//        dd($this->ask("What's your name?"));
//        dd($this->secret("What's your password?"));
//        if($this->confirm('Do you wish to continue? [y|N]')){
//            dd('your choice is yes');
//        }
//        $name = $this->choice('what is your name?', ['taylor', 'Dayle']);
//        dd($name);
//        $this->line('hello');
//        $this->info('hello');
//        $this->comment('hello');
//        $this->question('hello');
//        $this->error('hello');
    }
}
