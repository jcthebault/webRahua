$(document).ready(function(){
    $("#log_form").submit(function(e){
        e.preventDefault();
        const usuario = $("#usuario").val();
        const password = $("#password").val();
        const err_log = [];

        if(!$.trim(usuario))err_log.push(`"Usuario"`);
        if(!$.trim(password))err_log.push(`"Contraseña"`);

        if(err_log.length){
            alert(`Por favor, complete el/los campo/s: ${err_log.join(' y ')} correctamente.`);
            return false;
        }
        // Solicitud de validacion de usuario
        $.ajax({
            url: "../../backend/php/script_login.php", 
            method: "POST",
            data: {usuario: usuario, password: password},
            success: function(response){
                if(response.trim() === "success") {
                    window.location.href = "../../index.php";
                } else {
                    alert(response);
                }
            },
            error: function(xhr, status, error) {
                alert("Error en la solicitud AJAX");
            }
        });
    });
});
