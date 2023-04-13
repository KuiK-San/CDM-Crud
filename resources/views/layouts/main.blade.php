<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">

    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <div class="nav-wrapper grey darken-4">
                <a href="/" class="brand-logo">CRUD - CDM</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="/create/view">Create</a></li>
                </ul>
            </div>

        </nav>
    </header>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>

    <footer class="page-footer grey darken-4">
        
        <p class="center-align">Guilherme Casagrande - CDM &copy; <?= date('Y') ?></p>
        
    </footer>
    <!-- materialize script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>