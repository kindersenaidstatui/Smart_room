<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @vite(['resources/css/a.css', 'resources/js/login.js'])

</head>
<body class="login-page">
    <main class="login-shell">
        <section class="login-intro" aria-label="Smart Room">
            <a class="login-brand">
                <span class="login-brand-mark"><i class="bi bi-grid-fill"></i></span>
                <span>Smart Room</span>
            </a>

            <div class="login-intro-copy">
                <span class="eyebrow">Painel administrativo</span>
                <h1>Seu espaço,<br><strong>mais inteligente.</strong></h1>
                <p>Organize salas, acompanhe o ambiente e mantenha tudo sob controle em um só lugar.</p>
            </div>

            <div class="login-intro-footer">
                <span class="status-dot"></span>
                <span>Sistema operacional</span>
            </div>
        </section>

        <section class="login-form-area">
            <div class="login-form-wrap">
                <div class="login-heading">
                    <span class="login-icon"><i class="bi bi-person-lock"></i></span>
                    <span class="eyebrow">Acesso restrito</span>
                    <h2>Bem-vindo de volta</h2>
                    <p>Entre com seus dados para acessar o painel.</p>
                </div>
           

                    <div class="form-field">
                        <label for="email">E-mail</label>
                        <div class="input-wrap">
                            <i class="bi bi-envelope"></i>
                            <input id="email" type="email" name="email" placeholder="seu@email.com" autocomplete="email" required autofocus>
                        </div>
                    </div>

                    <div class="form-field">
                        <label for="senha">Senha</label>
                        <div class="input-wrap">
                            <i class="bi bi-lock"></i>
                            <input id="senha" type="password" name="senha" placeholder="Digite sua senha" autocomplete="current-password" required>
                        </div>
                    </div>
<br>
                    <div class="login-options">
                        <label class="remember-option">
                            <input type="checkbox" name="lembrar" value="1">
                            <span class="checkmark"></span>
                            <span>Lembrar-me</span>
                        </label>
                        <span class="login-help">Acesso seguro</span>
                    </div>

                    <button class="login-submit" id="entrar" type="button">
                        Entrar no painel
                        <i class="bi bi-arrow-right"></i>
                    </button>
               

                <p class="login-legal">Ao entrar, você confirma que possui autorização para acessar este painel.</p>
            </div>
        </section>
    </main>
</body>
</html>
