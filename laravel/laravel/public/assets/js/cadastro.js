// Validação para e-mail (ex: seuemail@exemplo.com)
const emailInput = document.getElementById("email");

emailInput.addEventListener("blur", function () {
    const valorEmail = this.value.trim();
    const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!regexEmail.test(valorEmail)) {
        this.classList.add("is-invalid");
        this.classList.remove("is-valid");
    } else {
        this.classList.remove("is-invalid");
        this.classList.add("is-valid");
    }
});

emailInput.addEventListener("input", function () {
    // Remove o erro enquanto o usuário digita
    this.classList.remove("is-invalid");
});

// Validação para nome (não ter caractére especial)
const nomeInput = document.getElementById("nome");

nomeInput.addEventListener("blur", function () {
    const valorNome = this.value.trim();
    const regexNome = /^[A-Za-z0-9]+$/;

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

// Máscara e validação para telefone
Inputmask({ "mask": "(99) 99999-9999" }).mask(document.getElementById("telefone"));
const telefoneInput = document.getElementById("telefone");

telefoneInput.addEventListener("blur", function () {
    const valorTelefone = this.value.trim();

    if (valorTelefone == "") {
        this.classList.add("is-invalid");
        this.classList.remove("is-valid");
    } else {
        this.classList.remove("is-invalid");
        this.classList.add("is-valid");
    }

});

telefoneInput.addEventListener("input", function () {
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


// Validação para senha
const senhaInput = document.getElementById("senha");

senhaInput.addEventListener("blur", function () {
    const valorSenha = this.value.trim();
    const regexSenha = /^(?=.*[0-9])(?=.*[!@#$%^&*(),.?":{}|<>])[A-Za-z\d!@#$%^&*(),.?":{}|<>]{8,}$/;

    if (!regexSenha.test(valorSenha)) {
        this.classList.add("is-invalid");
        this.classList.remove("is-valid");
        document.querySelectorAll(".default-feedback").forEach(function (el) {
            el.classList.add("hide");
        });
    } else {
        this.classList.remove("is-invalid");
        this.classList.add("is-valid");
        document.querySelectorAll(".default-feedback").forEach(function (el) {
            el.classList.add("hide");
        });
    }
});

senhaInput.addEventListener("input", function () {
    // Remove o erro enquanto o usuário digita
    this.classList.remove("is-invalid");
});

// Validação para confirmação senha
const confirmaInput = document.getElementById("senhaConfirma");

confirmaInput.addEventListener("blur", function () {
    if (confirmaInput.value === senhaInput.value && senhaInput.value !== "") {
        this.classList.remove("is-invalid");
        this.classList.add("is-valid");
    } else {
        this.classList.add("is-invalid");
        this.classList.remove("is-valid");
    }
});

confirmaInput.addEventListener("input", function () {
    // Remove o erro enquanto o usuário digita
    document.querySelectorAll(".default-feedback").forEach(function (el) {
        el.classList.remove("hide");
    });
    this.classList.remove("is-invalid");
});




