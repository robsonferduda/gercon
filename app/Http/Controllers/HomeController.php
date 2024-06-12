<?php

namespace App\Http\Controllers;

use App\User;
use App\Boletim;
use App\Pagina;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $boletins = Boletim::orderBy('created_at','DESC')->get();
        $paginas = Pagina::orderBy('created_at','DESC')->get();

        return view('home', compact('boletins','paginas'));
    }
}