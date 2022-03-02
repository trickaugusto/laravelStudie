@extends('app')

@section('titulo', 'Detalhes do cliente')

@section('conteudo')
            <div class="card">
                <div class="card-header">
                    Detalhes do cliente {{ $client->nome }}
                </div>
                <div class="card-body">
                    
                    <p><strong>ID:</strong> {{ $client->id }}</p>
                    <p><strong>Nome:</strong> {{ $client->nome }}</p>
                    <p><strong>Endereço:</strong> {{ $client->endereco }}</p>
                    <p><strong>Observação:</strong> {{ $client->observacao }}</p>
                    <br>
                    <a class="btn btn-success" href="{{ route('clients.index') }}">Voltar</a>
                </div>
            </div>
@endsection