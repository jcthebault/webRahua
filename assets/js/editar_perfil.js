window.onload = function() {
    editar();
};

function editar() {
    document.getElementById("btnEditar").addEventListener("click", function() {
        let camposEdicion = document.querySelectorAll(".campoEdicion input");
        camposEdicion.forEach(function(campo) {
            campo.removeAttribute("readonly");
        });
        document.getElementById("btnActualizar").removeAttribute("disabled");
    });
}
