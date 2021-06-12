<!DOCTYPE html>
<html lang="{( str_replace('_','-', app()-getLocale()) )}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- Fonte do Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <!-- Estilo da aplicação -->
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">

        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
                <img src="/img/logo.png" alt="">
            </a>
            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                    <a href="/" class="nav-link">Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/events/create" class="nav-link">Criar Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Cadastrar</a>
                </li>

            </ul>

        </div>
    </nav>

    @yield('content')
    <footer>
        <p>HDC Event &copy; 2021</p>
    </footer>

    <script src="https://unpkg.com/ionicons@5.5.1/dist/ionicons.js"></script>

</body>


</html>
