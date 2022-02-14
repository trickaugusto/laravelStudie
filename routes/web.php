<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/servico/{id}', function (int $id) {
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

    echo $servicos[$id]['nome'];
    echo "<br>";
    echo $servicos[$id]['descricao'];
});

// Com interrogação o parâmetro fica opcional, não causando erro se não for passado
Route::get('/saudacao/{nome?}', function (string $nome = null) {
    echo "Olá $nome";
});