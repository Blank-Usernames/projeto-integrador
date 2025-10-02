@extends('header')

@section('conteudos')

<link rel="stylesheet" href="../public/assets/css/comercio.css">

<main>
        <!-- Cadastro de Comércio -->
        <section class="formComercio py-5 px-md-5" style="margin-bottom: 15rem;">
            <div class="container mt-5">
                <h2 class="mb-4">Cadastro de Comércio</h2>
                <form id="cadastroForm" novalidate>

                    <!-- Nome -->
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" placeholder="Nome do comércio" id="nome" required>
                        <div class="invalid-feedback">Formato inválido. Não é permitido caractéres especiais.</div>
                    </div>

                    <!-- Descrição -->
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea class="form-control" id="descricao"
                            placeholder="Breve descrição do seu comércio e serviço" rows="3" required></textarea>
                        <div class="invalid-feedback">Por favor, descreva brevemente o comércio.</div>
                    </div>

                    <!-- Serviço -->
                    <div class="mb-3">
                        <label for="servico" class="form-label">Serviço</label>
                        <input type="text" class="form-control" placeholder="Utilize somente uma palavra" id="servico" required>
                        <div class="invalid-feedback">Por favor, insira o tipo de serviço oferecido. (Ex: Restaurante, Comercial, Fábrica)</div>
                    </div>

                    <div class="row">

                        <!-- Cidade e Estado -->
                        <div class="col-md-6 mb-3">
                            <label for="cidade" class="form-label">Cidade e Estado</label>
                            <input type="text" class="form-control" placeholder="Cidade - UF" id="cidade" required>
                            <div class="invalid-feedback">
                                Formato inválido. Use: Nome da Cidade - UF Válido (Ex: Santo André - SP).
                            </div>
                        </div>

                        <!-- Bairro -->
                        <div class="col-md-6 mb-3">
                            <label for="bairro" class="form-label">Bairro</label>
                            <input type="text" class="form-control" placeholder="Bairro do seu comércio" id="bairro"
                                required>
                            <div class="invalid-feedback">
                                Formato inválido. Insira um bairro (Ex: Jordanópolis).
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Rua -->
                        <div class="col-md-6 mb-3">
                            <label for="ruaNome" class="form-label">Rua</label>
                            <input type="text" class="form-control" placeholder="Rua do seu comércio" id="ruaNome"
                                required>
                            <div class="invalid-feedback">
                                Por favor, insira uma rua (Ex: Del Caramuru).
                            </div>
                        </div>

                        <!-- N° -->
                        <div class="col-md-6 mb-3">
                            <label for="ruaNumero" class="form-label">Nº</label>
                            <input type="text" class="form-control" placeholder="N° do seu comércio" id="ruaNumero"
                                maxlength="5" required>
                            <div class="invalid-feedback">
                                Por favor, insira o N° do seu comércio (Ex: 11 ou 1111)
                            </div>
                        </div>
                    </div>

                    <!-- Imagem -->
                    <div class="mb-3">
                        <label for="imagemComercio" class="form-label">Imagem do Comércio</label>
                        <input class="form-control" type="file" id="imagemComercio" accept="image/*" required>
                        <div class="invalid-feedback">
                            Por favor, envie uma imagem do comércio.
                        </div>
                    </div>

                    <!-- Preview opcional -->
                    <div class="mb-3">
                        <img id="previewImagem" src="#" alt="Preview da imagem" class="img-fluid d-none border rounded"
                            style="max-height: 700px;">
                    </div>

                    <div class="row">

                        <!-- CEP -->
                        <div class="col-md-6 mb-3">
                            <label for="cep" class="form-label">CEP</label>
                            <input type="text" class="form-control" placeholder="00000-000" id="cep" required>
                            <div class="invalid-feedback">
                                Formato inválido. Insira um CEP válido (Ex: 11111-111).
                            </div>
                        </div>

                        <!-- Contato -->
                        <div class="col-md-6 mb-3">
                            <label for="contato" class="form-label">Contato</label>
                            <input type="text" class="form-control" placeholder="(XX) XXXXX-XXXX" id="contato" required>
                            <div class="invalid-feedback">
                                Por favor, insira um telefone (Ex: (11) 1111-1111).
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn-custom">Cadastrar</button>

                </form>
            </div>

        </section>
</main>

<script src="../public/assets/js/comercio.js"></script>

@endsection