<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
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
        return view('productos');
    }
    public function post()
    {
        return view('productos');
    }
    public function users()
    {
        return view('users');
    }
    public function solicitudes()
    {
        return view('solicitudes');
    }
}
