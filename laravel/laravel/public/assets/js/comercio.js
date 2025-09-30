// Máscaras
Inputmask({ "mask": "99999-999" }).mask(document.getElementById("cep"));
Inputmask({ "mask": "(99) 99999-9999" }).mask(document.getElementById("contato"));


// Validação para nome
const nomeInput = document.getElementById("nome");

nomeInput.addEventListener("blur", function () {
    const valorNome = this.value.trim();

    if (valorNome == "") {
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

cidadeInput.addEventListener("blur", function () {
    const valorCampo = this.value.trim();
    const partes = valorCampo.split(" ");
    const estado = partes.pop().toUpperCase();
    const cidade = partes.join(" ");

    const regexCidade = /^[A-Za-zÀ-ÿ' -]+$/;
    const estadosValidos = [
        "AC", "AL", "AP", "AM", "BA", "CE", "DF", "ES", "GO",
        "MA", "MT", "MS", "MG", "PA", "PB", "PR", "PE", "PI",
        "RJ", "RN", "RS", "RO", "RR", "SC", "SP", "SE", "TO"
    ];

    const cidadeValida = regexCidade.test(cidade);
    const estadoValido = estadosValidos.includes(estado);

    if (cidadeValida && estadoValido) {
        this.classList.remove("is-invalid");
        this.classList.add("is-valid");
    } else {
        this.classList.add("is-invalid");
        this.classList.remove("is-valid");
    }
});


cidadeInput.addEventListener("input", function () {
    this.classList.remove("is-invalid");
});

// Validação para bairro
const bairroInput = document.getElementById("bairro");

bairroInput.addEventListener("blur", function () {
    const valorBairro = this.value.trim();

    if (valorBairro == "") {
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

ruaInput.addEventListener("blur", function () {
    const valorRua = this.value.trim();

    if (valorRua == "") {
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


