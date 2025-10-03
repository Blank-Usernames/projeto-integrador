<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <link rel="stylesheet" href="../public/assets/css/index.css">
    <title>NextShop | O lugar que você precisa mais próximo de você</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/inputmask@5.0.8/dist/inputmask.min.js"></script>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg"
            style="background-image: linear-gradient(to bottom, var(--cor01),var(--cor02));">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('home')}}" style="height: 4rem; width: 3rem;"><img
                        src="../public/assets/src/NextShop-White.png" alt="Logo"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Toggle Mobile -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-row">
                        <li class="nav-item me-3">
                            <a class="nav-link" aria-current="page" href="{{route('home')}}"><i
                                    class="bi bi-house-fill m-1"></i>Início</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href="{{route('sobre')}}"><i class="bi bi-info-circle-fill m-1"></i>Sobre</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href="{{route('editar')}}"><i class="bi bi-person-fill m-1"></i>Minha Conta</a>
                        </li>
                    </ul>

                    <div class="d-flex">
                        <button type="button" class="btn btn-light m-2 btn-primary" data-bs-toggle="modal"
                            data-bs-target="#loginModal" id="loginButton">Entrar</button>
                        <a href="{{route('cadastro')}}"><button type="button" class="btn btn-light m-2"
                                id="signupButton">Cadastro</button>
                        </a>
                    </div>

                </div>


                <!-- LOGIN MODAL -->
                <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered"> <!-- Centraliza o modal -->
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="loginModalLabel">Entrar na Plataforma</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Fechar"></button>
                            </div>

                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="emailInput" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="emailInput"
                                            placeholder="seuemail@exemplo.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="senhaInput" class="form-label">Senha</label>
                                        <input type="password" class="form-control" id="senhaInput"
                                            placeholder="Digite sua senha">
                                    </div>
                                </form>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary"
                                    style="background-color: var(--cor01); border: none;">Entrar</button>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </nav>
    </header>

    {{-- Conteúdo Vem aqui --}}
    @yield('conteudos')

    <footer>
        <p>Copyright © 2025 NextShop</p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
<script src="../public/assets/js/cadastro.js"></script>

</html>