$(document).ready(function(){
    $("#formulario").submit(function(e){
        // Evitar que el formulario se envíe de forma predeterminada
        e.preventDefault();
        
        // Creación de variables
        const adminUser = $("#admin_user").val();
        const adminPass = $("#admin_pass").val();
        const adminErr = [];

        // Comprobar si los campos están vacíos
        if(!$.trim(adminUser)) adminErr.push(`--> Usuario`);
        if(!$.trim(adminPass)) adminErr.push(`--> Contraseña`);

        // Si hay errores, mostrar alerta y detener el envío del formulario
        if(adminErr.length) {
            alert(`Datos incompletos: \n${adminErr.join("\n")}`);
        } else {
            // Si no hay errores, enviar los datos del formulario al servidor para validación
            $.ajax({
                type: "POST",
                url: "backend/php/script_login.php",
                data: $("#formulario").serialize(), // Serializar los datos del formulario
                success: function(response) {
                    // Manejar la respuesta del servidor
                    if (response === "success") {
                        // Si la validación es exitosa, redirigir a la página de inicio
                        window.location.href = "../../views/inicio.php";
                    } else {
                        // Si la validación falla, mostrar un mensaje de error
                        alert("Usuario o contraseña incorrectos");
                    }
                },
                error: function(xhr, status, error) {
                    // Manejar errores de la solicitud AJAX
                    alert("Error al enviar el formulario: " + error);
                }
            });
        }
    });
});