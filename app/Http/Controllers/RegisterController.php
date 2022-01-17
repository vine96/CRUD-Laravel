<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        $nome = "Vinícius";
        $idade = 25;
        $profissao = "Programador";
        $arr = [1,2,3,4,5];

        $nomes = ["Eleonora", "Judite", "Josepha", "Godofreda", "Maria"];

        $busca = request('search');

        return view('list',
        [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => $profissao,
            'arr' => $arr,
            'nomes' => $nomes,
            'busca' => $busca
        ]);
    }

    public function create(){
        return view('register.create');
    }
}
