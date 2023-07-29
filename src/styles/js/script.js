const track = document.querySelector('.carousel-track');
const prevButton = document.querySelector('.carousel-prev');
const nextButton = document.querySelector('.carousel-next');
const indicator = document.querySelector('.carousel-indicator');

const slides = Array.from(track.children);
let dots = Array.from(document.querySelectorAll('.carousel-dot'));
let slideWidth = slides[0].getBoundingClientRect().width;

// Posicionar os slides lado a lado
slides.forEach((slide, index) => {
    slide.style.left = `${slideWidth * index}px`;
    indicator.innerHTML += `<div class="carousel-dot"></div>`;
    dots = Array.from(document.querySelectorAll('.carousel-dot'));
});

let slideIndex = 0;
dots[slideIndex].classList.add('active');

// Função para mover os slides
const moveToSlide = (track, slideIndex) => {
    track.style.transform = `translateX(-${slideWidth * slideIndex}px)`;
    updateIndicator(dots, slideIndex);
};

// Função para atualizar o indicador de posição
const updateIndicator = (dots, activeIndex) => {
    dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === activeIndex);
    });
};

// Evento para ir para o slide anterior
prevButton.addEventListener('click', () => {
    if (slideIndex > 0) {
        slideIndex--;
        moveToSlide(track, slideIndex);
    } else {
        slideIndex = slides.length - 1;
        moveToSlide(track, slideIndex);
    }
});

// Evento para ir para o próximo slide
nextButton.addEventListener('click', () => {
    slideIndex = (slideIndex < (slides.length - 1)) ? ++slideIndex : 0;
    moveToSlide(track, slideIndex);
});

// Recalcular tamanho do slide quando o navegador é redimensionado
window.addEventListener('resize', () => {
    slideWidth = slides[0].getBoundingClientRect().width;
    // Posicionar os slides lado a lado
    slides.forEach((slide, index) => {
        slide.style.left = `${slideWidth * index}px`;
    });
});

// Evento para navegar pelos slides a partir do indicador
dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        slideIndex = index;
        moveToSlide(track, slideIndex);
    });
});

// Evento para mudar o slide automático
// setInterval(() => {
//     if (slideIndex < slides.length - 1) {
//         slideIndex++;
//     } else {
//         slideIndex = 0;
//     }
//     moveToSlide(track, slideIndex);
// }, 4000);