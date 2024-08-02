@extends('app')

@section('conteudo')
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
@endsection('conteudo')