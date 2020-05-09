<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install {--Y|yes} {--queue}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Installing ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param string $key
     * @param string $value
     * @param null $env_path
     */
    public function set_env(string $key, string $value, $env_path = null)
    {
        $value = preg_replace('/\s+/', '', $value); //replace special ch
        $key = strtoupper($key); //force upper for security
        $env = file_get_contents(isset($env_path) ? $env_path : base_path('.env'));
        $env = str_replace("$key=" . env($key), "$key=" . $value, $env);
        
        $env = file_put_contents(isset($env_path) ? $env_path : base_path('.env'), $env);
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if($this->confirm('Do you wish to continue?')):
            $this->info("Building project!");
            Artisan::command('key:generate');
            $this->set_env('app_installed', 'true');
        endif;
    }
}
