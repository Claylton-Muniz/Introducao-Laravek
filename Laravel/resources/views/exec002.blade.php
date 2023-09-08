<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 002</title>

    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
        }

        .grid-item {
            text-align: center;
        }

        img {
            max-width: 100%;
        }
    </style>

</head>

<body>

    <div class="grid-container">
        @for ($i = 0; $i < 50; $i++)
            @component('componets.imagem')
                @slot('img')
                    {{ $img[$i] }}
                @endslot
            @endcomponent
        @endfor
    </div>

</body>

</html>
