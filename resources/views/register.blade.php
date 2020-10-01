@extends('layouts.admin')

@section('title', 'Cadastro')


@section('content')

@if($errors->any())
    <x-alert>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </x-alert>
@endif

    <form method="post">
        @csrf
    <input type="text" name="name" placeholder="Digite seu nome" value="{{old('name')}}" /><br />
        <input type="email" name="email" id="" placeholder="Digite um e-mail" value="{{old('email')}}"><br/>
        <input type="password" name="password" id="" placeholder="Digite uma senha"><br/>
        <input type="password" name="password_confirmation" id="" placeholder="Confirme uma senha"><br/>

        <input type="submit" value="Cadastrar">
    </form>

@endsection