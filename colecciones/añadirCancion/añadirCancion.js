document.addEventListener("DOMContentLoaded", function () {
    // Obtiene el elemento del checkbox y el contenedor del segundo artista
    var checkbox = document.getElementById("flexSwitchCheckDefault");
    var artista2Container = document.getElementById("artista2Container");

    // Añade un evento de cambio al checkbox
    checkbox.addEventListener("change", function () {
        // Si el checkbox está marcado, muestra el campo del segundo artista; de lo contrario, ocúltalo
        artista2Container.style.visibility = checkbox.checked ? "visible" : "hidden";
    });
});