<html>
<head>
    <title>Revisão Prova</title>

    <link rel="stylesheet" href="{{asset('js/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('js/fa/css/all.css')}}">

    <script src="{{asset('js/jquery-3.5.0.js')}}"></script>
    <script src="{{asset('js/init.js')}}"></script>

</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Revisão Prova</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/marcas">Marca</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/modelos">Modelo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/categorias">Categoria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/produtos">Produtos</a>
            </li>
        </ul>
    </div>
</nav>

<main class="container" style="margin-top: 60px;">
    @yield('conteudo')
</main>
</body>
</html>





