<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public static function setenv($key, $value)
    {
        // $env = file_get_contents();
        $file = file_get_contents(base_path('.env'));
        echo "Default text: <br>";
        print_r($file);
        $oldValue = strtok($file, "{$key}=");
        $text = str_replace("{$key}={$oldValue}", "{$key}={$value}\r\n", $file);
        echo "<br> <br>Modified text: <br>";
        print_r($text);
    }
}
