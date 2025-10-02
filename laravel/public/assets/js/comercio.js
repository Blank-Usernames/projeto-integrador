// Máscaras
Inputmask({ "mask": "99999-999" }).mask(document.getElementById("cep"));
Inputmask({ "mask": "(99) 99999-9999" }).mask(document.getElementById("contato"));


// Validação para nome
const nomeInput = document.getElementById("nome");

// Máscara: primeira letra maiúscula
nomeInput.addEventListener("input", function () {
    let nomeUpperCase = this.value;

    // Coloca a primeira letra em maiúscula
    if (nomeUpperCase.length > 0) {
        nomeUpperCase = nomeUpperCase
            .toLowerCase()
            .split(' ')
            .map(palavra => palavra.charAt(0).toUpperCase() + palavra.slice(1))
            .join(' ');
    }

    this.value = nomeUpperCase;
});

nomeInput.addEventListener("blur", function () {
    const valorNome = this.value.trim();
    const regexNome = /^[A-Za-zÀ-ÖØ-öø-ÿ0-9 ]+$/;

    if (valorNome === "" || !regexNome.test(valorNome)) {
        this.classList.add("is-invalid");
        this.classList.remove("is-valid");
    } else {
        this.classList.remove("is-invalid");
        this.classList.add("is-valid");
    }
});

nomeInput.addEventListener("input", function () {
    // Remove o erro enquanto o usuário digita
    this.classList.remove("is-invalid");
});

// Validação para serviço

const servicoInput = document.getElementById("servico");

// Impede o uso da tecla de espaço
servicoInput.addEventListener("keydown", function (event) {
    if (event.key === " ") {
        event.preventDefault();
    }
});

// Máscara: primeira letra maiúscula
servicoInput.addEventListener("input", function () {
    let servicoUpperCase = this.value.replace(/\s/g, ""); // Remove espaços digitados por outros meios

    if (servicoUpperCase.length > 0) {
        servicoUpperCase = servicoUpperCase.charAt(0).toUpperCase() + servicoUpperCase.slice(1).toLowerCase();
    }

    this.value = servicoUpperCase;
});

// Validação ao perder o foco
servicoInput.addEventListener("blur", function () {
    const valorServico = this.value.trim();
    const regexServico = /^[A-Za-zÀ-ÖØ-öø-ÿ]+$/;

    if (valorServico === "" || !regexServico.test(valorServico)) {
        this.classList.add("is-invalid");
        this.classList.remove("is-valid");
    } else {
        this.classList.remove("is-invalid");
        this.classList.add("is-valid");
    }
});


servicoInput.addEventListener("input", function () {
    // Remove o erro enquanto o usuário digita
    this.classList.remove("is-invalid");
});

// Validação para descrição
const descInput = document.getElementById("descricao");

descInput.addEventListener("blur", function () {
    const valorDesc = this.value.trim();

    if (valorDesc == "") {
        this.classList.add("is-invalid");
        this.classList.remove("is-valid");
    } else {
        this.classList.remove("is-invalid");
        this.classList.add("is-valid");
    }

});

descInput.addEventListener("input", function () {
    // Remove o erro enquanto o usuário digita
    this.classList.remove("is-invalid");
});

// Validação para cidade + estado (ex: Santo André - SP)
const cidadeInput = document.getElementById("cidade");

cidadeInput.addEventListener("input", function () {
    let valorCampo = this.value;

    // Remove caracteres especiais indesejados (exceto letras e espaços)
    valorCampo = valorCampo.replace(/[^A-Za-zÀ-ÿ\s]/g, "");

    // Remove espaços duplicados
    valorCampo = valorCampo.replace(/\s{2,}/g, " ");

    // Divide cidade e estado (assumindo que o estado é a última palavra com 2 letras)
    const partes = valorCampo.trim().split(" ");
    let estado = partes[partes.length - 1].toUpperCase();
    let cidade = partes.slice(0, -1).join(" ");

    // Capitaliza cada palavra da cidade
    const capitalizarCidade = (texto) => {
        return texto
            .toLowerCase()
            .split(" ")
            .map(palavra => palavra.charAt(0).toUpperCase() + palavra.slice(1))
            .join(" ");
    };

    const cidadeFormatada = capitalizarCidade(cidade);

    const estadosValidos = [
        "AC", "AL", "AP", "AM", "BA", "CE", "DF", "ES", "GO",
        "MA", "MT", "MS", "MG", "PA", "PB", "PR", "PE", "PI",
        "RJ", "RN", "RS", "RO", "RR", "SC", "SP", "SE", "TO"
    ];    
    
    const regexCidade = /^[A-Za-zÀ-ÿ\s]+$/;
    const cidadeValida = regexCidade.test(cidadeFormatada);
    const estadoValido = estadosValidos.includes(estado);

    if (cidadeValida && estadoValido) {
        this.value = `${cidadeFormatada} - ${estado}`;
        this.classList.remove("is-invalid");
        this.classList.add("is-valid");
    } else {
        this.classList.remove("is-valid");
        this.classList.add("is-invalid");
    }
});

// Validação para bairro
const bairroInput = document.getElementById("bairro");

// Máscara: primeira letra maiúscula
bairroInput.addEventListener("input", function () {
    let bairroUpperCase = this.value;

    // Coloca a primeira letra em maiúscula
    if (bairroUpperCase.length > 0) {
        bairroUpperCase = bairroUpperCase
            .toLowerCase()
            .split(' ')
            .map(palavra => palavra.charAt(0).toUpperCase() + palavra.slice(1))
            .join(' ');
    }
    
    this.value = bairroUpperCase;
});

bairroInput.addEventListener("blur", function () {
    const valorBairro = this.value.trim();
    const regexBairro = /^[A-Za-zÀ-ÖØ-öø-ÿ0-9 ]+$/;

    if (valorBairro === "" || !regexBairro.test(valorBairro)) {
        this.classList.add("is-invalid");
        this.classList.remove("is-valid");
    } else {
        this.classList.remove("is-invalid");
        this.classList.add("is-valid");
    }

});

bairroInput.addEventListener("input", function () {
    // Remove o erro enquanto o usuário digita
    this.classList.remove("is-invalid");
});

// Validação para Rua & N°
const ruaInput = document.getElementById("ruaNome");

// Máscara: primeira letra maiúscula
ruaInput.addEventListener("input", function () {
    let ruaUpperCase = this.value;

    // Coloca a primeira letra em maiúscula
    if (ruaUpperCase.length > 0) {
        ruaUpperCase = ruaUpperCase
            .toLowerCase()
            .split(' ')
            .map(palavra => palavra.charAt(0).toUpperCase() + palavra.slice(1))
            .join(' ');
    }
    
    this.value = ruaUpperCase;
});

ruaInput.addEventListener("blur", function () {
    const valorRua = this.value.trim();
    const regexRua = /^[A-Za-zÀ-ÖØ-öø-ÿ0-9 ]+$/;

    if (valorRua === "" || !regexRua.test(valorRua)) {
        this.classList.add("is-invalid");
        this.classList.remove("is-valid");
    } else {
        this.classList.remove("is-invalid");
        this.classList.add("is-valid");
    }

});

ruaInput.addEventListener("input", function () {
    // Remove o erro enquanto o usuário digita
    this.classList.remove("is-invalid");
});

const numeroRua = document.getElementById("ruaNumero");

numeroRua.addEventListener("blur", function () {
    const valorNumeroRua = this.value.trim();

    if (valorNumeroRua == "") {
        this.classList.add("is-invalid");
        this.classList.remove("is-valid");
    } else {
        this.classList.remove("is-invalid");
        this.classList.add("is-valid");
    }
});

numeroRua.addEventListener("input", function () {
    // Remove o erro enquanto o usuário digita
    this.classList.remove("is-invalid");
});

// Validação para telefone
const contatoInput = document.getElementById("contato");

contatoInput.addEventListener("blur", function () {
    const valorTelefone = this.value.trim();

    if (valorTelefone == "") {
        this.classList.add("is-invalid");
        this.classList.remove("is-valid");
    } else {
        this.classList.remove("is-invalid");
        this.classList.add("is-valid");
    }

});

contatoInput.addEventListener("input", function () {
    // Remove o erro enquanto o usuário digita
    this.classList.remove("is-invalid");
});

// Validação para CEP
const cepInput = document.getElementById("cep");

cepInput.addEventListener("blur", function () {
    const valorCEP = this.value.trim();

    if (valorCEP == "") {
        this.classList.add("is-invalid");
        this.classList.remove("is-valid");
    } else {
        this.classList.remove("is-invalid");
        this.classList.add("is-valid");
    }

});

cepInput.addEventListener("input", function () {
    // Remove o erro enquanto o usuário digita
    this.classList.remove("is-invalid");
});

// Validação para imagem
const form = document.getElementById('cadastroForm');
const imagemInput = document.getElementById('imagemComercio');
let imagemValida = imagemInput.files.length > 0;

form.addEventListener('submit', function (event) {

    if (!form.checkValidity() || !imagemValida) {
        event.preventDefault();
        event.stopPropagation();

        // Feedback visual para imagem
        if (!imagemValida) {
            imagemInput.classList.add('is-invalid');
        } else {
            imagemInput.classList.remove('is-invalid');
            imagemInput.classList.add('is-valid');
        }
    } else {
        imagemInput.classList.remove('is-invalid');
        imagemInput.classList.add('is-valid');
    }

    form.classList.add('was-validated');
});


// Preview da imagem
document.getElementById("imagemComercio").addEventListener("change", function () {
    const file = this.files[0];
    const preview = document.getElementById("previewImagem");

    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            preview.src = e.target.result;
            preview.classList.remove("d-none");
        };
        reader.readAsDataURL(file);
    } else {
        preview.src = "#";
        preview.classList.add("d-none");
    }
});

// Limitação do tamanho da imagem
if (imagemValida && imagemInput.files[0].size > 2 * 1024 * 1024) {
    imagemValida = false;
    imagemInput.classList.add('is-invalid');
    imagemInput.nextElementSibling.textContent = "A imagem deve ter no máximo 2MB.";
}