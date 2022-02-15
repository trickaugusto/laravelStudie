<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Saudacao extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param string $nome
     * @return void
     */
    public function __invoke(string $nome = 'TreinaWeb')
    {
        // O segundo parâmetro é enviado o nome da variável e o conteúdo pra view, lá na view abrimos a shortTag do PHP e pegamos como $nome
        // return view('saudacao', [
        //     'nome' => $nome
        // ]);

        // Também é possível fazer dessa forma, é mais elegante =)
        return view('saudacao')->with('nome', $nome);

    }
}
