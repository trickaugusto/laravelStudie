<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ClientController extends Controller
{
    /**
     * Lista os clientes
     *
     * @return View
     */
    public function index(): View
    {
        $clients = Client::get();

        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    /**
     * Mostra um cliente específico
     *
     * @param integer $id
     * @return View
     */
    public function show(int $id): View
    {
        $client = Client::find($id);

        return view('clients.show', [
            'client' => $client
        ]);
    }

    /**
     * Exibe o formulário de criação
     *
     * @return View
     */
    public function create(): View
    {
        return view('clients.create');
    }

    /**
     * Cria um cliente no banco de dados
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // pega todos os dados menos o _token
        $dados = $request->except('_token');

        //dd($dados);

        Client::create($dados);

        return redirect('/clients');
    }

    /**
     * Mostra o formulário para edição
     *
     * @param integer $id
     * @return View
     */
    public function edit(int $id): View
    {
        $client = Client::find($id);

        return view('clients.edit', [
            'client' => $client
        ]);
    }

    /**
     * Atualiza o cliente no banco de dados
     *
     * @param integer $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(int $id, Request $request): RedirectResponse
    {
        //dd($id, $request->all());
        $client = Client::find($id);

        $client->update([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'observacao' => $request->observacao
        ]);

        return redirect('/clients');
    }

    /**
     * Apaga um cliente no banco de dados
     *
     * @param integer $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $client = Client::find($id);

        $client->delete();

        return redirect('/clients');
    }
}
