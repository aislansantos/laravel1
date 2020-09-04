@extends('layouts.admin')

@section('title', 'Configurações')


@section('content')
<h1>Configurações</h1>

<x-alert>
teste
</x-alert>

<ul>
    @forelse($lista as $item )
        <li>{{ $item['nome'] }} - {{ $item['qt'] }}</li>
    @empty
        <li> não há ingredientes</li>
    @endforelse

</ul>


<form method="POST">
    @csrf


    Nome:<br />
    <input type="text" name="nome" id=""><br>


    idade: <br />
    <input type="text" name="Idade" id=""><br>

    Cidade: <br />
    <input type="text" name="cidade" id=""><br>

    <input type="submit" value="Enviar">

</form>
<a href="/config/info">Informações</a>
@endsection
