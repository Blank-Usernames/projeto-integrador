 @extends('header')

 @section('conteudos')

<link rel="stylesheet" href="../public/assets/css/cadastro.css">

<main>
        <!-- Cadastro de Usuário -->
        <section class="formUsuario">
            <div class="container mt-5">
                <h2 class="mb-4">Cadastro de Usuário</h2>
                <form method="POST" action="{{route('register')}}">
                    <div class="mb-3">
                        <label for="email" class="form-label" style="font-weight: bolder;">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="seuemail@exemplo.com" required>
                        <div class="invalid-feedback">
                            Formato inválido. Utilize um E-mail existente (Ex: seuemail@exemplo.com).
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nome" class="form-label" style="font-weight: bolder;">Nome</label>
                        <input type="text" class="form-control" id="nome" name="name" placeholder="Seu nome ou da empresa" required>
                        <div class="invalid-feedback">
                            Formato inválido. Insira um nome (Ex: FulanoBeltrano ou EmpresaComercialLTDA).
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label" style="font-weight: bolder;">Telefone</label>
                        <input type="tel" class="form-control" id="telefone" name="telephone" placeholder="(XX) XXXXX-XXXX" required>
                        <div class="invalid-feedback">
                            Formato inválido. Insira um telefone (Ex: (11) 1111-1111).
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="cidade" class="form-label">Cidade e Estado</label>
                        <input type="text" class="form-control" id="cidade" name="city" placeholder="Cidade - UF" required>
                        <div class="invalid-feedback">
                            Formato inválido. Use: Nome da Cidade - UF Válido (Ex: Santo André - SP).
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label" style="font-weight: bolder;">Senha</label>
                        <input type="password" class="form-control" id="senha" name="password" placeholder="Crie uma senha" required>
                        <div class="invalid-feedback">
                            Formato inválido. A senha deve ter: No mínimo 8 caractéres, 1 caractére especial e 1 número.
                        </div>
                        <div class="default-feedback">
                            A senha deve ter: No mínimo 8 caractéres, 1 caractére especial e 1 número.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="senha" class="form-label" style="font-weight: bolder;">Confirme a Senha</label>
                        <input type="password" class="form-control" id="senhaConfirma" name="password_confirmation" placeholder="Repita sua senha"
                            required>
                        <div class="invalid-feedback">
                            Senha inválida. Repita a mesma senha corretamente.
                        </div>
                    </div>
                    <button type="submit" class="btn-custom">Cadastrar</button>
                </form>
            </div>
        </section>
</main>


<script src="../public/assets/js/cadastro.js"></script>

 @endsection