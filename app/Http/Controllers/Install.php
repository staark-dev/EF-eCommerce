<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class Install extends Controller
{
    private function set_env(string $key, string $value, $env_path = null)
    {
        $value = preg_replace('/\s+/', ' ', $value);
        $key = strtoupper($key);
        $env = file_get_contents(isset($env_path) ? $env_path : base_path('.env'));
        $env = str_replace("$key=" . env($key), "$key=" . $value, $env);
        
        $env = file_put_contents(isset($env_path) ? $env_path : base_path('.env'), $env);
    }

    public function index(Request $request)
    {
        $view = null;
        \Artisan::call('cache:clear');
        \Artisan::call('config:clear');

        switch($request->steep)
        {
            case "site":
                $view = view('install.index');
                break;
            case "database":
                $view = view('install.database');
                break;

            case "admin":
                $view = view('install.admin');
                break;
        }

        return $view;
    }

    public function store(Request $request)
    {
        switch($request->steep)
        {
            case "site":
                $this->set_env('APP_NAME', "\"{$request->input('site_name')}\"");
                $this->set_env('APP_URL', "\"{$request->input('site_url')}\"");
                $this->set_env('APP_LANG', $request->input('site_lang'));
                return redirect()->route('install', ['steep' => 'database']);
            break;

            case "database":
                $this->set_env('DB_HOST', $request->input('database_host'));
                $this->set_env('DB_DATABASE', $request->input('database_db'));
                $this->set_env('DB_USERNAME', $request->input('database_user'));
                $this->set_env('DB_PASSWORD', $request->input('database_pwd'));

                return redirect()->route('install', ['steep' => 'admin']);
            break;

            case "admin":
            break;
        }
    }
}
