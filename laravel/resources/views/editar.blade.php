@extends('header')

@section('conteudos')

<link rel="stylesheet" href="../public/assets/css/editar.css">

<main>
        <!-- Modal de Confirmação de Exclusão -->
            <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content rounded-4">
                        <div class="modal-header border-0">
                            <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Exclusão</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Fechar"></button>
                        </div>
                        <div class="modal-body">
                            Tem certeza que deseja excluir sua conta? Essa ação não poderá ser desfeita e deletará todos seus registros.
                        </div>
                        <div class="modal-footer border-0 d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <form method="POST" action="{{route('deletar.usuario')}}">@csrf @method('DELETE')<button type="submit" class="btn btn-danger">Excluir</button></form>
                        </div>
                    </div>
                </div>
            </div>
            
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
                </div>
            @endif

            
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Erro ao atualizar os dados:</strong>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $erro)
                            <li>{{ $erro }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
                </div>
            @endif

        <!-- CRUD de Usuário -->
        <section class="formUsuario">
            <div class="container mt-5">
                <h2 class="mb-4">Informações de Usuário</h2>
                <form method="POST" action="{{route('atualizar.usuario')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label" style="font-weight: bolder;">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="seuemail@exemplo.com" value="{{ $usuario->email }}" required>
                        <div class="invalid-feedback">
                            Formato inválido. Utilize um E-mail existente (Ex: seuemail@exemplo.com).
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nome" class="form-label" style="font-weight: bolder;">Nome</label>
                        <input type="text" class="form-control" id="nome" name="name" placeholder="Seu nome ou da empresa" value="{{ $usuario->name }}" required>
                        <div class="invalid-feedback">
                            Formato inválido. Insira um nome (Ex: FulanoBeltrano ou EmpresaComercialLTDA).
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label" style="font-weight: bolder;">Telefone</label>
                        <input type="tel" class="form-control" id="telefone" name="telephone" placeholder="(XX) XXXXX-XXXX" value="{{ $usuario->telephone }}" required>
                        <div class="invalid-feedback">
                            Formato inválido. Insira um telefone (Ex: (11) 1111-1111).
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="cidade" class="form-label">Cidade e Estado</label>
                        <input type="text" class="form-control" id="cidade" name="city" placeholder="Cidade - UF" value="{{ $usuario->city }}" required>
                        <div class="invalid-feedback">
                            Formato inválido. Use: Nome da Cidade - UF Válido (Ex: Santo André - SP).
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label" style="font-weight: bolder;">Senha</label>
                        <input type="password" class="form-control" id="senha" name="password" placeholder="Repita sua senha ou crie uma nova" required>
                        <div class="invalid-feedback">
                            Formato inválido. A senha deve ter: No mínimo 8 caractéres, 1 caractére especial e 1 número.
                        </div>
                        <div class="default-feedback">
                            A senha deve ter: No mínimo 8 caractéres, 1 caractére especial e 1 número.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="senha" class="form-label" style="font-weight: bolder;">Confirme a Senha</label>
                        <input type="password" class="form-control" id="senhaConfirma" name="password_confirmation" placeholder="Confirme sua senha"
                            required>
                        <div class="invalid-feedback">
                            Senha inválida. Repita a mesma senha corretamente.
                        </div>
                    </div>
                    <div class="buttonsContainer">
                        <div class="buttonsForm">
                            <button type="submit" class="btn-custom">Salvar</button>
                            <a href="{{route('home')}}"><button type="button" class="btn-cancel">Cancelar</button></a>
                        </div>
                        <div class="buttonDelete">
                            <button type="button" class="btn-outline-delete" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
                                <i class="bi bi-trash"></i> Deletar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
</main>

<script src="../public/assets/js/cadastro.js"></script>

@endsection