@extends('layouts.admin')

@section('title', 'Adição de Tarefas')


@section('content')
<h1>Adição</h1>

@if($errors->any())
    <x-alert>
        @foreach ($errors->all() as $error)
            {{$error}}<br />
        @endforeach
    </x-alert>
@endif

<form method="post">

    @csrf

    <label>
        titulo:<br />
        <input type="text" name="titulo" id="">
    </label>

    <input type="submit" value="Adicionar">
</form>
@endsection
