<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

use function Ramsey\Uuid\v1;

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
    public function set_env(string $key, string $value)
    {
        $envFile = base_path() . '/.env';
        $str = file_get_contents($envFile);
        $oldValue = strtok($str, "{$key}=");
        $str = str_replace("{$key}={$oldValue}", "{$key}={$value}\n", $str);
        file_put_contents($envFile, $str);
    }

    public function putPermanentEnv($key, $value)
    {
        $path = base_path() . '/.env';

        $escaped = preg_quote('='.env($key), '/');

        file_put_contents($path, preg_replace(
            "/^{$key}{$escaped}/m",
            "{$key}={$value}",
            file_get_contents($path)
        ));

        return true;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if($this->confirm('Do you wish to continue?')):
            $this->info("Building eCommerce project!");
            \Artisan::call('key:generate');
            $this->info("Your application key has been set.");
            \Artisan::call('config:clear');
            $this->info("Your application configuration has been clean");

            // Config all for fresh install
            $this->line("Set default value for fresh install your application");
            $this->line("Set your application env installed to false");

            $this->set_env('APP_INSTALLED', 'false');
            $this->info("Your Application has been set to installed false");
            $this->line("Setting your application url");

            $this->set_env('APP_URL', 'http://localhost');
            $this->info("Application url has been set successfuly");
            $this->line("Set application default lang");

            $this->set_env('APP_LANG', 'en');
            $this->info("Application languages has been set successfuly");
            $this->line("Setting your database connection to default");

            $this->set_env('DB_HOST', 'null');
            $this->set_env('DB_DATABASE', 'null');
            $this->set_env('DB_USERNAME', 'null');
            $this->set_env('DB_PASSWORD', 'null');

            $this->info("Application setting has been set successfuly");
            $this->info("Your application is ready for use");

            $this->putPermanentEnv('APP_ENVTEST', 'data');
        endif;
    }
}
