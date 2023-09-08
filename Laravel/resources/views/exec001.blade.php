<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 001</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .quadrado {
            width: 200px;
            height: 200px;
            background-color: #fff;
            border: 1px solid #ccc;
            margin: 10px;
            text-align: center;
            padding: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .quadrado img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    @foreach ($pessoas as $pessoa)
        @component('componets.quadrado')
            @slot('img')
                {{ $pessoa['img'] }}
            @endslot

            @slot('nome')
                {{ $pessoa['nome'] }}
            @endslot

            @slot('idade')
                {{ $pessoa['idade'] }}
            @endslot
        @endcomponent
    @endforeach

</body>

</html>
