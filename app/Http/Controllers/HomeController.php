<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Noticia;
use App\Multimidia;
use App\Projeto;

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
        $user = User::count();
        $post = Noticia::count();
        $foto = Multimidia::count();
        $projeto = Projeto::count();
        return view('admin.home', compact('user','post','foto','projeto'));
    }
}
