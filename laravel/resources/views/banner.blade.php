@extends('header')

@section('conteudos')

 <main>
        <!-- Caroussel -->
        <section id="slider">
            <div class="slider-text selected">
                <h1 style="font-weight: bolder;">Registre seu negócio e ganhe exposição</h1>
                <br>
                <p>Ao registrar seu comércio em nossa plataforma, aumentará as chances de atingir o público certo e
                    adquirir clientela.</p>
            </div>
            <div class="slider-text">
                <h1 style="font-weight: bolder;">Encontre o que você precisa aonde quiser</h1>
                <br>
                <p>Procure o local mais próximo conforme a suas necessidades de forma prática, objetiva, e muito fácil!
                </p>
            </div>

            <div class="slider-text">
                <h1 style="font-weight: bolder;">Explore novas oportunidades perto de você</h1>
                <br>
                <p>Descubra serviços e produtos locais que podem facilitar seu dia a dia e surpreender você.</p>
            </div>

            <img src="https://images.pexels.com/photos/2679323/pexels-photo-2679323.jpeg?_gl=1*8svhsx*_ga*MTU1NDIyMDY3NS4xNzQyMzkzNDA3*_ga_8JE65Q40S6*czE3NTU3ODI4NTIkbzMkZzEkdDE3NTU3ODMwODMkajQ2JGwwJGgw."
                alt="image1" class="selected">

            <img src="https://images.pexels.com/photos/4484078/pexels-photo-4484078.jpeg?_gl=1*wooyq5*_ga*MTU1NDIyMDY3NS4xNzQyMzkzNDA3*_ga_8JE65Q40S6*czE3NTU3ODI4NTIkbzMkZzEkdDE3NTU3ODMwMDQkajQ3JGwwJGgw"
                alt="image2">

            <img src="https://images.pexels.com/photos/6545444/pexels-photo-6545444.jpeg?_gl=1*jz9bnx*_ga*MTU1NDIyMDY3NS4xNzQyMzkzNDA3*_ga_8JE65Q40S6*czE3NTU3ODI4NTIkbzMkZzEkdDE3NTU3ODMwMzkkajEyJGwwJGgw"
                alt="image3">
        </section>

        <section id="cta">
            <div class="cta-text">
                <p>Ainda não tem uma conta? Cadastre-se e descubra tudo o que sua região tem a oferecer!</p>
                <small style="font-size: 0.6em; color: #666;">É rápido, gratuito e você começa a explorar em
                    segundos.</small>
            </div>
            <a href="{{route('cadastro')}}">
                <button type="button" class="btn btn-light btn-lg m-2"
                    style="background-color: var(--cor01); color: #FFFFFF; font-size: 0.8em;">Cadastre-se
                </button>
            </a>
        </section>
    </main>

    <script src="../public/assets/js/index.js"></script>
    
@endsection