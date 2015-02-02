var main = document.getElementById('main'); 
main.style.transition = "opacity 3s";

function fadeIn() {
    main.style.opacity = 1;
}

window.addEventListener("load", fadeIn, false);