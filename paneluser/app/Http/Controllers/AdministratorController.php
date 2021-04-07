<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AdministratorController extends Controller
{
    use AuthenticatesUsers;

    protected function guard()
    {
        return Auth::guard('admins'); //->user();
    }

    function __construct()
    {
        $this->middleware('auth:admins', ['only' => ['secret']]);
    }

    public function showLoginForm()
    {
        return view('administrator.login');
    }


    public function authenticated()
    {
        return redirect('home');
    }

    public function secret()
    {
        return 'Hola';
    }
}
