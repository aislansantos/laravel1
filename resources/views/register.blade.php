@extends('layouts.admin')

@section('title', 'Cadastro')


@section('content')

@if(session('warning'))
    <x-alert>
       {{ session('warning') }}
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