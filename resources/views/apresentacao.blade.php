<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá Mundo!</h1>
    @foreach($objetos as $objeto)
       <h2> Meu nome é: {{ $objeto['nome'] }} </h2>
    @endforeach

    <h1>Hello World!</h1>
</body>
</html>