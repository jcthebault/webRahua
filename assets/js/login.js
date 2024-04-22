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
        //Solicitud de validacion de usuario
        $.ajax({
            url: "../../backend/php/validad_usuario.php", 
            method: "POST",
            data: {usuario: usuario, password: password},
            success: function(response){
                alert(response);
            }
        });
/* 
        if(usuario==="pedrito" && password==="pedro123"){
            alert(`Bienvenido ${usuario}, Que tengas un lindo día`);
        }else{
            alert("Usuario y/contraseña incorrectos");
        }*/
    });
});