@extends('header')

@section('conteudos')

<link rel="stylesheet" href="../public/assets/css/configurar.css">

<main>
        <div class="placeCards" id="container">


            <!-- Modal de Edição -->
            <div class="modal fade" id="editarComercioModal" tabindex="-1" aria-labelledby="editarComercioLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content rounded-4">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editarComercioLabel">Editar Comércio</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Fechar"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <!-- Imagem -->
                                <div class="mb-3">
                                    <label for="imagemComercio" class="form-label">Imagem do Comércio</label>
                                    <input type="file" class="form-control" id="imagemComercio">
                                </div>

                                <!-- Nome -->
                                <div class="mb-3">
                                    <label for="nomeComercio" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="nomeComercio">
                                </div>

                                <!-- Descrição -->
                                <div class="mb-3">
                                    <label for="descricaoComercio" class="form-label">Descrição</label>
                                    <textarea class="form-control" id="descricaoComercio" rows="3"></textarea>
                                </div>

                                <!-- Endereço -->
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="cidade" class="form-label">Cidade</label>
                                        <input type="text" class="form-control" id="cidade">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="bairro" class="form-label">Bairro</label>
                                        <input type="text" class="form-control" id="bairro">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="rua" class="form-label">Rua</label>
                                        <input type="text" class="form-control" id="rua">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="numero" class="form-label">N°</label>
                                        <input type="text" class="form-control" id="numero">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="cep" class="form-label">CEP</label>
                                        <input type="text" class="form-control" id="cep">
                                    </div>
                                </div>

                                <!-- Contato -->
                                <div class="row mt-3 g-3">
                                    <div class="col-md-6">
                                        <label for="telefone" class="form-label">Telefone</label>
                                        <input type="text" class="form-control" id="telefone">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="modal-footer d-flex justify-content-end gap-2 flex-wrap">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn-outline-orange" style="width: 50%;">Salvar
                                Alterações</button>
                        </div>

                    </div>
                </div>
            </div>


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
                            Tem certeza que deseja excluir este item? Essa ação não poderá ser desfeita.
                        </div>
                        <div class="modal-footer border-0 d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </div>
                    </div>
                </div>
            </div>




            <!-- Cabeçalho fixo -->
            <div class="container-header d-flex justify-content-between align-items-center">
                <h2 class="mb-0">Meus Comércios Registrados</h2>
                <a href="{{route('comercio')}}"><i class="bi bi-plus-lg"></i> Adicionar Comércio</a>
            </div>


            <!-- Card 1 -->
            <div class="card shadow-sm border-0 rounded-4 card-horizontal" style="max-width: 600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem do comércio">
                    </div>
                    <div class="col-md-8 d-flex flex-column justify-content-between p-3">
                        <p class="card-text text-muted mb-3">Descrição do comércio. Pode incluir localização, tipo de
                            serviço, etc.</p>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" class="btn-outline-orange" data-bs-toggle="modal"
                                data-bs-target="#editarComercioModal">
                                <i class="bi bi-pencil-square"></i> Editar
                            </button>
                            <button type="button" class="btn-outline-delete" data-bs-toggle="modal"
                                data-bs-target="#confirmDeleteModal">
                                <i class="bi bi-trash"></i> Deletar
                            </button>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Card 2 -->
            <div class="card shadow-sm border-0 rounded-4 card-horizontal" style="max-width: 600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem do comércio">
                    </div>
                    <div class="col-md-8 d-flex flex-column justify-content-between p-3">
                        <p class="card-text text-muted mb-3">Descrição do comércio. Pode incluir localização, tipo de
                            serviço, etc.</p>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" class="btn-outline-orange" data-bs-toggle="modal"
                                data-bs-target="#editarComercioModal">
                                <i class="bi bi-pencil-square"></i> Editar
                            </button>
                            <button type="button" class="btn-outline-delete" data-bs-toggle="modal"
                                data-bs-target="#confirmDeleteModal">
                                <i class="bi bi-trash"></i> Deletar
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card shadow-sm border-0 rounded-4 card-horizontal" style="max-width: 600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem do comércio">
                    </div>
                    <div class="col-md-8 d-flex flex-column justify-content-between p-3">
                        <p class="card-text text-muted mb-3">Descrição do comércio. Pode incluir localização, tipo de
                            serviço, etc.</p>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" class="btn-outline-orange" data-bs-toggle="modal"
                                data-bs-target="#editarComercioModal">
                                <i class="bi bi-pencil-square"></i> Editar
                            </button>
                            <button type="button" class="btn-outline-delete" data-bs-toggle="modal"
                                data-bs-target="#confirmDeleteModal">
                                <i class="bi bi-trash"></i> Deletar
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Card 4 -->
            <div class="card shadow-sm border-0 rounded-4 card-horizontal" style="max-width: 600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem do comércio">
                    </div>
                    <div class="col-md-8 d-flex flex-column justify-content-between p-3">
                        <p class="card-text text-muted mb-3">Descrição do comércio. Pode incluir localização, tipo de
                            serviço, etc.</p>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" class="btn-outline-orange" data-bs-toggle="modal"
                                data-bs-target="#editarComercioModal">
                                <i class="bi bi-pencil-square"></i> Editar
                            </button>
                            <button type="button" class="btn-outline-delete" data-bs-toggle="modal"
                                data-bs-target="#confirmDeleteModal">
                                <i class="bi bi-trash"></i> Deletar
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Card 5 -->
           <div class="card shadow-sm border-0 rounded-4 card-horizontal" style="max-width: 600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem do comércio">
                    </div>
                    <div class="col-md-8 d-flex flex-column justify-content-between p-3">
                        <p class="card-text text-muted mb-3">Descrição do comércio. Pode incluir localização, tipo de
                            serviço, etc.</p>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" class="btn-outline-orange" data-bs-toggle="modal"
                                data-bs-target="#editarComercioModal">
                                <i class="bi bi-pencil-square"></i> Editar
                            </button>
                            <button type="button" class="btn-outline-delete" data-bs-toggle="modal"
                                data-bs-target="#confirmDeleteModal">
                                <i class="bi bi-trash"></i> Deletar
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Card 6 -->
            <div class="card shadow-sm border-0 rounded-4 card-horizontal" style="max-width: 600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem do comércio">
                    </div>
                    <div class="col-md-8 d-flex flex-column justify-content-between p-3">
                        <p class="card-text text-muted mb-3">Descrição do comércio. Pode incluir localização, tipo de
                            serviço, etc.</p>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" class="btn-outline-orange" data-bs-toggle="modal"
                                data-bs-target="#editarComercioModal">
                                <i class="bi bi-pencil-square"></i> Editar
                            </button>
                            <button type="button" class="btn-outline-delete" data-bs-toggle="modal"
                                data-bs-target="#confirmDeleteModal">
                                <i class="bi bi-trash"></i> Deletar
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="card shadow-sm border-0 rounded-4 card-horizontal" style="max-width: 600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem do comércio">
                    </div>
                    <div class="col-md-8 d-flex flex-column justify-content-between p-3">
                        <p class="card-text text-muted mb-3">Descrição do comércio. Pode incluir localização, tipo de
                            serviço, etc.</p>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" class="btn-outline-orange" data-bs-toggle="modal"
                                data-bs-target="#editarComercioModal">
                                <i class="bi bi-pencil-square"></i> Editar
                            </button>
                            <button type="button" class="btn-outline-delete" data-bs-toggle="modal"
                                data-bs-target="#confirmDeleteModal">
                                <i class="bi bi-trash"></i> Deletar
                            </button>
                        </div>
                    </div>
                </div>
            </div>


</main>


@endsection