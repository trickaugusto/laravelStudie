<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function sobre()
    {
        $soma = 10 + 9;
        echo "Conteúdo dinâmico sobre $soma";
    }

    public function contato()
    {
        echo "Conteúdo dinâmico sobre contato";
    }
    
    public function servicos()
    {
        echo "Conteúdo dinâmico sobre serviços";

    }

    public function servico(int $id)
    {
        $servicos = [
            1 => [
                'nome' => 'Lavagem de rouba',
                'descricao' => 'lore ipsum',
            ],
            2 => [
                'nome' => 'Lavagem de Coberta',
                'descricao' => 'lore ipsum',
            ],
            3 => [
                'nome' => 'Lavagem de pelúcia',
                'descricao' => 'lore ipsum',
            ]
        ];
    
        // Se o arquivo está dentro de outra pasta dentro da view, precisa indicar o caminho, em seguida colocar ponto:
        return view('site.servico', [
            'servico' => $servicos[$id]
        ]);
    }
}
