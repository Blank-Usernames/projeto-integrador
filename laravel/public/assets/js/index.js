// Carousel Script

let time = 7000 // Tempo de Rotação
let currentImageIndex = 0 // Primeira Imagem

const images = document.querySelectorAll('#slider img') // Pegar as Imagens
const texts = document.querySelectorAll('#slider .slider-text'); // Pega os textos
let max = images.length // Tamanho das Imagens

function nextImage() { // Puxar a próxima imagem
    images[currentImageIndex].classList.remove("selected") // Remover a classe do elemento atual
    texts[currentImageIndex].classList.remove("selected") // Remover a classe do elemento atual
    currentImageIndex++ // Incrementar o length das imagens

    if (currentImageIndex >= max) { // Se o representativo da imagem atual for maior que o representativo da quantidade
        currentImageIndex = 0 // Ele reseta o representativo da imagem
    }

    images[currentImageIndex].classList.add("selected") // Senão (ou seja, se o representativo da imagem for menor que o da quantidade) ele vai adicionar a classe selecionada
    texts[currentImageIndex].classList.add("selected") // Senão (ou seja, se o representativo do texto for menor que o da quantidade) ele vai adicionar a classe selecionada
}

function startSlider() {
    setInterval(nextImage, time)
}

document.addEventListener("DOMContentLoaded", startSlider)