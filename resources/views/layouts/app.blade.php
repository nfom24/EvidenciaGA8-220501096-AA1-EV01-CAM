<!DOCTYPE html>
<html>
<head>
    <title>COCINA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('recetas.index') }}"><strong>RECETAS</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ingredientes.index') }}"><strong>INGREDIENTES</strong></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container mt-4">
        @yield('content')
    </main>

</body>
</html>
