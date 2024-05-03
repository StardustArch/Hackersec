function toggleMenu() {
    var navegacao = document.getElementById("navegacao");
    navegacao.classList.toggle("active");
    var menuToggle = document.querySelector(".menu-toggle");
    menuToggle.classList.toggle("change");

    var overlay = document.getElementById("overlay");
    overlay.style.display = "block";
}

function closeMenu() {

    var overlay = document.getElementById("overlay");
    overlay.style.background = "none";
    overlay.style.display = "none"; 
    // Oculta o overlay quando o menu é fechado
    var navegacao = document.getElementById("navegacao");
    navegacao.classList.remove("active");
    var menuToggle = document.querySelector(".menu-toggle");
    menuToggle.classList.remove("change");
}


window.addEventListener('scroll', function () {
    var nav = document.getElementById('nav-fixed');
    var logo = document.getElementById('menu-image-center');
    if (window.scrollY > 0) {
        nav.style.transition = 'background-color 0.7s ease'; // Adiciona a transição suave
        nav.style.backgroundColor = 'black'; // Altera a cor de fundo desejada
        nav.classList.remove('transparent');
    } else {
        nav.style.transition = 'background-color 0.7s ease'; // Adiciona a transição suave
        nav.style.backgroundColor = 'transparent'; // Volta à cor de fundo transparente
        nav.classList.add('transparent');
    }
});

document.getElementById('menu-opcoes-right').addEventListener('mouseover', function () {
    document.getElementById('dropdown').style.display = 'block';
});

document.getElementById('dropdown').addEventListener('mouseleave', function () {
    document.getElementById('dropdown').style.display = 'none';
});

document.addEventListener("DOMContentLoaded", function () {
    // Aguarde até que o conteúdo da página esteja totalmente carregado
    setTimeout(function () {
        // Esconda o preloader após um determinado tempo (1 segundo no exemplo)
        document.getElementById("preloader").style.display = "none";
        document.getElementById("content").style.display = "block"; // Mostra o conteúdo da página
    }, 1000); // Tempo em milissegundos
});