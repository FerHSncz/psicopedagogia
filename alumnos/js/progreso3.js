function actualizarProgreso() {
    var preguntasRespondidas = document.querySelectorAll('input[type="radio"]:checked').length;
    var progressBar = document.getElementById('progress-bar');
    var porcentajeCompletado = (preguntasRespondidas / 80) * 100;
    progressBar.style.width = porcentajeCompletado + "%";
    progressBar.innerHTML = "Faltan " + (80 - preguntasRespondidas) + " oraciones";
}