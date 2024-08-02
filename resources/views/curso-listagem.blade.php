@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <table class="table table-warning table-striped">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
            
        @foreach($objetos as $objeto)
        <tr>
            <td> {{ $objeto['nome'] }} </td>
            <td> {{ $objeto['idade'] }} </td>
        </tr>
        @endforeach
    </table>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop