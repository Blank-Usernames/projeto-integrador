@extends('header')

@section('conteudos')

<link rel="stylesheet" href="../public/assets/css/home.css">

<main>

        <div class="searchContainer">
            <h1 id="homeTitle" class="text-center fw-bold mb-4">Para onde vamos hoje?</h1>

            <section class="searchPlace">
                <h3 class="searchTitle text-center mb-3">Pesquise seu lugar de preferência</h3>

                <!-- Search Bar -->
                <nav class="navbar bg-light shadow-sm">
                    <div class="container-fluid justify-content-center">
                        <form class="d-flex flex-column flex-md-row gap-2 mx-auto" style="max-width: 800px;">
                            <input class="form-control me-2 rounded-pill px-4 py-2 border-0 shadow-sm" type="search"
                                placeholder="Município, Bairro, Rua..." aria-label="Search" />
                            <button class="btn btn-success rounded-pill px-4" type="submit">Buscar</button>
                        </form>
                    </div>
                </nav>

                <div class="comercioLinks">
                    <a href="{{route('comercio')}}" id="comercioLink">Cadastre seu comércio</a>
                    <a href="{{route('configurar')}}" id="comercioLink">Configure seu comércio</a>
                </div>

                <!-- Place Cards -->
                <div class="placeCards d-flex flex-wrap justify-content-center gap-4">

                    <!-- Card 1 -->
                    <div class="card comercio-card shadow-sm" style="width: 18rem;">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem do comércio">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Nome do Comércio</h5>
                            <p class="card-text text-muted mb-1"><i class="bi bi-geo-alt-fill"></i> Cidade, UF</p>
                            <p class="card-text mb-2"><span class="badge badge-comercio">Serviço</span></p>
                            <div class="mb-2">
                                <small>([numero] visualizações)</small>
                            </div>
                            <a href="#" class="btn-comercio w-100 rounded-pill" data-bs-toggle="modal"
                                data-bs-target="#detalhesComercioModal">Ver detalhes</a>
                        </div>
                    </div>


                    <!-- Card 2 -->
                    <div class="card comercio-card shadow-sm" style="width: 18rem;">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem do comércio">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Nome do Comércio</h5>
                            <p class="card-text text-muted mb-1"><i class="bi bi-geo-alt-fill"></i> Cidade, UF</p>
                            <p class="card-text mb-2"><span class="badge badge-comercio">Serviço</span></p>
                            <div class="mb-2">
                                <small>([numero] visualizações)</small>
                            </div>
                            <a href="#" class="btn-comercio w-100 rounded-pill" data-bs-toggle="modal"
                                data-bs-target="#detalhesComercioModal">Ver detalhes</a>
                        </div>
                    </div>


                    <!-- Card 3 -->
                    <div class="card comercio-card shadow-sm" style="width: 18rem;">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem do comércio">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Nome do Comércio</h5>
                            <p class="card-text text-muted mb-1"><i class="bi bi-geo-alt-fill"></i> Cidade, UF</p>
                            <p class="card-text mb-2"><span class="badge badge-comercio">Serviço</span></p>
                            <div class="mb-2">
                                <small>([numero] visualizações)</small>
                            </div>
                            <a href="#" class="btn-comercio w-100 rounded-pill" data-bs-toggle="modal"
                                data-bs-target="#detalhesComercioModal">Ver detalhes</a>
                        </div>
                    </div>


                    <!-- Card 4 -->
                    <div class="card comercio-card shadow-sm" style="width: 18rem;">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem do comércio">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Nome do Comércio</h5>
                            <p class="card-text text-muted mb-1"><i class="bi bi-geo-alt-fill"></i> Cidade, UF</p>
                            <p class="card-text mb-2"><span class="badge badge-comercio">Serviço</span></p>
                            <div class="mb-2">
                                <small>([numero] visualizações)</small>
                            </div>
                            <a href="#" class="btn-comercio w-100 rounded-pill" data-bs-toggle="modal"
                                data-bs-target="#detalhesComercioModal">Ver detalhes</a>
                        </div>
                    </div>


                    <!-- Card 5 -->
                    <div class="card comercio-card shadow-sm" style="width: 18rem;">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem do comércio">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Nome do Comércio</h5>
                            <p class="card-text text-muted mb-1"><i class="bi bi-geo-alt-fill"></i> Cidade, UFP</p>
                            <p class="card-text mb-2"><span class="badge badge-comercio">Serviço</span></p>
                            <div class="mb-2">
                                <small>([numero] visualizações)</small>
                            </div>
                            <a href="#" class="btn-comercio w-100 rounded-pill" data-bs-toggle="modal"
                                data-bs-target="#detalhesComercioModal">Ver detalhes</a>
                        </div>
                    </div>


                    <!-- Card 6 -->
                    <div class="card comercio-card shadow-sm" style="width: 18rem;">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem do comércio">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Nome do Comércio</h5>
                            <p class="card-text text-muted mb-1"><i class="bi bi-geo-alt-fill"></i> Cidade, UF</p>
                            <p class="card-text mb-2"><span class="badge badge-comercio">Serviço</span></p>
                            <div class="mb-2">
                                <small>([numero] visualizações)</small>
                            </div>
                            <a href="#" class="btn-comercio w-100 rounded-pill" data-bs-toggle="modal"
                                data-bs-target="#detalhesComercioModal">Ver detalhes</a>
                        </div>
                    </div>

                    <!-- CARD MODAL -->
                    <div class="modal fade" id="detalhesComercioModal" tabindex="-1"
                        aria-labelledby="detalhesComercioLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content rounded-4">

                                <!-- Imagem do comércio -->
                                <img src="https://via.placeholder.com/800x300" alt="Imagem do comércio"
                                    class="w-100 object-fit-cover comercio-img-top">

                                <div class="modal-header bg-light">
                                    <h5 class="modal-title fw-bold" id="detalhesComercioLabel">Detalhes do Comércio</h5>
                                </div>
                                <div class="modal-body">
                                    <h4 class="mb-3">Nome do Comércio</h4>
                                    <p><strong>Descrição:</strong> Descrição do serviço ou produto oferecido.</p>
                                    <hr>
                                    <p><strong><i class="bi bi-geo-alt-fill text-danger"></i> Localização:</strong></p>
                                    <ul class="list-unstyled ms-3">
                                        <li>Cidade</li>
                                        <li>Bairro</li>
                                        <li>Rua, N°</li>
                                        <li>CEP</li>
                                    </ul>
                                    <p><strong>Contato:</strong> (11) 99999-1234 exemplo@gmail.com</p>
                                    <p><strong>Postado por:</strong> @usuario</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary rounded-pill"
                                        data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>

</main>
     
@endsection