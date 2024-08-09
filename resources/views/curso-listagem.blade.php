@extends('adminlte::page')

@section('title', 'Listagem de Cursos')

@section('content_header')
    <h1>Listagem de Cursos</h1>
@stop

@section('content')
    <table class="table table-warning table-striped">
        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>
            
        @forelse($objetos as $objeto)
        <tr>
            <td> {{ $objeto['id'] }} </td>
            <td> {{ $objeto['nome'] }} </td>
        </tr>
        @empty
        <tr>
            <td> Não há registros cadastrados. </td>
        </tr>
        @endforelse
    </table>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop