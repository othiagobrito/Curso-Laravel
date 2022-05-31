@extends('.layouts.main')

@section('title', 'Produtos')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <h1>Tela de produtos</h1>

        @if ($busca != "")
            <p>O usuário está buscando por: {{ $busca }}</p>
        @endif
    </body>
</html>
@endsection