@extends('layout.site')
@section('titulo', 'Home')
@section('conteudo')
    <div style="text-align:center;">
        <h1>BEM VINDO AO CURSO EM VIDEO CTI VERSION</h1>
        <a href="{{route('admin.cursos')}}">
            <img alt="melhor prof de php" src="https://i.pinimg.com/736x/f8/b1/bb/f8b1bb946cdd43bc6a547ac2c4adf4db.jpg">
        </a>
    </div>
@endsection