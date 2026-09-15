<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Painel Administrativo')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @vite(['resources/css/a.css', 'resources/js/dashboard.js'])
</head>

<body class="admin-page">
    
    <nav class="navbar navbar-expand-lg navbar-adm">
        <div class="container">

            <!-- Logo / Nome -->
            <a class="navbar-brand" href="#">
                <i class="bi bi-grid-fill"></i>
                Smart Room
            </a>

            <!-- Botão responsivo -->
            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuNavbar">

                <i class="bi bi-list"></i>
            </button>

            <div class="collapse navbar-collapse" id="menuNavbar">

                <!-- Menu central -->
                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="bi bi-house-door"></i>
                            Geral
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-door-open"></i>
                            Salas
                        </a>
                    </li>

                </ul>

                <!-- Perfil -->
                <div class="dropdown">

                    <button class="btn perfil-btn dropdown-toggle"
                        type="button"
                        data-bs-toggle="dropdown">

                        <div class="perfil-icon">
                            <i class="bi bi-person"></i>
                        </div>

                        <span id="nome-usuario">{{ $usuario->nome }}</span>

                    </button>

                    <ul class="dropdown-menu dropdown-menu-end">

                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-person me-2"></i>
                                Meu Perfil
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-gear me-2"></i>
                                Configurações
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item text-danger" type="submit">
                                    <i class="bi bi-box-arrow-right me-2"></i>
                                    Sair
                                </button>
                            </form>
                        </li>

                    </ul>

                </div>

            </div>
        </div>
    </nav>


    <main class="container mt-5">
        @yield('content')
    </main>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
