@extends('layouts.admin')

@section('title', 'Configurações')


@section('content')
<h1>Configurações</h1>

meu nome é {{$nome}}. E tenho {{$idade}} anos. <br/>

versão: {{$versao}}

<form method="POST">
    @csrf


    Nome:<br/>
    <input type="text" name="nome" id=""><br>


    idade: <br/>
    <input type="text" name="Idade" id=""><br>

    Cidade: <br/>
    <input type="text" name="cidade" id=""><br>

    <input type="submit" value="Enviar">

</form>
<a href="/config/info">Informações</a>
@endsection