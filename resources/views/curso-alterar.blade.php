@extends('adminlte::page')

@section('title', 'Cadastro de Curso')

@section('content_header')
    <h1>Novo Cadastro</h1>
@stop

@section('content')
    <form action="{{route('curso.atualizar', ['id' => $objeto->id])}}" method="POST">
        @method('PUT')
        @include('curso-modelo')
    </form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop