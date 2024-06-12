<?php

namespace App\Http\Controllers;

use App\User;
use App\Pagina;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Requests\BoletimRequest;
use Illuminate\Support\Facades\Session;

class PaginaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dados = Pagina::orderBy('titulo')->get();

        return view('pagina/index', compact('dados'));
    }

    public function atualizar($id)
    {
        $boletim = Boletim::find($id);
        $boletim->fl_publicacao = !$boletim->fl_publicacao;
        $boletim->save();

        Flash::success('<i class="fa fa-check"></i> Informações de publicação atualizadas com sucesso');
        return redirect('boletins')->withInput();
    }

    public function show(Boletim $boletim)
    {
        return view('boletim/detalhes', compact('boletim'));
    }

    public function create()
    {
        return view('boletim/create');
    }

    public function store(BoletimRequest $request)
    {
        $pdf = $request->file('pdf');
        $imagem = $request->file('imagem');

        dd($pdf);
    }
}