<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
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

    <h1>Olá Mundo!</h1>
    <h1>Hello World!</h1>
</body>
</html>