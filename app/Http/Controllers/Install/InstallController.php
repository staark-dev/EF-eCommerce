<?php

namespace App\Http\Controllers\Install;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;

class InstallController extends Controller
{
    public $userData = [];

    private function setEnv($key, $value, $env_path = null)
    {
        $value = preg_replace('/\s+/', ' ', $value);
        $key = strtoupper($key);
        $env = file_get_contents(isset($env_path) ? $env_path : base_path('.env'));
        $oldValue = strtok($env, "{$key}=");
        $env = str_ireplace("{$key}={$oldValue}", "{$key}={$value}\n", $env);
        $env = file_put_contents(isset($env_path) ? $env_path : base_path('.env'), $env);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(\Config::get('app.installed') == true) {
            return redirect()->url('/');
        }

        \Artisan::call('config:clear');
        $view = null;

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

            case "migrate":
                $view = view('install.migrate');
            break;
        }

        return $view;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->steep == "site")
        {
            $this->setEnv('app_name', "\"{$request->input('site_name')}\"");

            $this->setEnv('app_url', $request->input('site_url'));
            $this->setEnv('app_lang', $request->input('site_lang'));
            $this->setEnv('app_version', '0.13');
        }
        /*
        switch($request->steep)
        {
            case "site":
                $this->setEnv('APP_NAME', "bla bla");
                $this->setEnv('APP_URL', "bla bla");
                
                
                return redirect()->route('install.index', ['steep' => 'database']);
            break;

            case "database":
                $this->setEnv('DB_HOST=', $request->input('database_host'));
                $this->setEnv('DB_DATABASE=', $request->input('database_db'));
                $this->setEnv('DB_USERNAME=', $request->input('database_user'));
                $this->setEnv('DB_PASSWORD=', ($request->input('database_pwd')) ? $request->input('database_pwd') : "");

                return redirect()->route('install.index', ['steep' => 'admin']);
            break;

            case "admin":
                $this->userData = [
                    'name' => $request->input('user_name'),
                    'email' => $request->input('user_email'),
                    'password' => \Hash::make($request->input('user_pwd'))
                ];

                return redirect()->route('install.index', ['steep' => 'migrate']);
            break;

            case "migrate":
                \Artisan::call('migrate');

                User::create([
                    'name' => $this->userData['name'],
                    'email' => $this->userData['email'],
                    'password' => $this->userData['password'],
                    'email_verified_at' => Carbon::now()
                ]);

                $this->setEnv('APP_INSTALLED', true);
                
                return redirect()->url('/login');
            break;
        }*/
    }
}
