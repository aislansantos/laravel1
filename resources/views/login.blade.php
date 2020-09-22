@extends('layouts.admin')

@section('title', 'Login')


@section('content')

@if(session('warning'))
    <x-alert>
       {{ session('warning') }}
    </x-alert>
@endif

    <form method="post">
        @csrf
        <input type="email" name="email" id="" placeholder="digite um e-mail"><br/>
        <input type="password" name="password" id="" placeholder="digite uma senha"><br/>

        <input type="submit" value="Entrar">
    </form>

@endsection