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
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </div>
                    </div>
                </div>
            </div>


        <!-- CRUD de Usuário -->
        <section class="formUsuario">
            <div class="container mt-5">
                <h2 class="mb-4">Informações de Usuário</h2>
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label" style="font-weight: bolder;">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="seuemail@exemplo.com" required>
                        <div class="invalid-feedback">
                            Formato inválido. Utilize um E-mail existente (Ex: seuemail@exemplo.com).
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nome" class="form-label" style="font-weight: bolder;">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Seu nome ou da empresa" required>
                        <div class="invalid-feedback">
                            Formato inválido. Insira um nome (Ex: FulanoBeltrano ou EmpresaComercialLTDA).
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label" style="font-weight: bolder;">Telefone</label>
                        <input type="tel" class="form-control" id="telefone" placeholder="(XX) XXXXX-XXXX" required>
                        <div class="invalid-feedback">
                            Formato inválido. Insira um telefone (Ex: (11) 1111-1111).
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="cidade" class="form-label">Cidade e Estado</label>
                        <input type="text" class="form-control" id="cidade" placeholder="Cidade - UF" required>
                        <div class="invalid-feedback">
                            Formato inválido. Use: Nome da Cidade - UF Válido (Ex: Santo André - SP).
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label" style="font-weight: bolder;">Senha Nova</label>
                        <input type="password" class="form-control" id="senha" placeholder="Crie uma senha" required>
                        <div class="invalid-feedback">
                            Formato inválido. A senha deve ter: No mínimo 8 caractéres, 1 caractére especial e 1 número.
                        </div>
                        <div class="default-feedback">
                            A senha deve ter: No mínimo 8 caractéres, 1 caractére especial e 1 número.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="senha" class="form-label" style="font-weight: bolder;">Confirme a Senha</label>
                        <input type="password" class="form-control" id="senhaConfirma" placeholder="Repita sua senha"
                            required>
                        <div class="invalid-feedback">
                            Senha inválida. Repita a mesma senha corretamente.
                        </div>
                    </div>
                    <div class="buttonsContainer">
                        <div class="buttonsForm">
                            <button type="submit" class="btn-custom">Salvar</button>
                            <a href="{{route('editar')}}"><button type="button" class="btn-cancel">Cancelar</button></a>
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