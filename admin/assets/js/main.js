 // Función para mostrar las novedades
 function mostrarNovedades() {
    document.getElementById("contenedorNovedades").style.display = "block";
    document.getElementById("contenedorSorteos").style.display = "none";
    document.getElementById("contenedorInformacionImportante").style.display = "none";
}

// Función para mostrar los sorteos
function mostrarSorteos() {
    document.getElementById("contenedorNovedades").style.display = "none";
    document.getElementById("contenedorSorteos").style.display = "block";
    document.getElementById("contenedorInformacionImportante").style.display = "none";
}

// Función para mostrar la información importante
function mostrarInformacionImportante() {
    document.getElementById("contenedorNovedades").style.display = "none";
    document.getElementById("contenedorSorteos").style.display = "none";
    document.getElementById("contenedorInformacionImportante").style.display = "block";
}