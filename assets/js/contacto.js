$(document).ready(function() {
    $("#form_cont").submit(function(e) {
        e.preventDefault(); // Evita que el formulario se envíe automáticamente

        // Obtener los valores de los campos del formulario
        const nombre = $("#nombre").val().trim();
        const apellido = $("#apellido").val().trim();
        const correo = $("#correo").val().trim();
        const telefono = $("#telefono").val().trim();
        const asunto = $("#asunto").val().trim();
        const mensaje = $("#mensaje").val().trim();
        const error = [];

        // Validar que los campos no estén vacíos
        if (!nombre) error.push("Nombre");
        if (!apellido) error.push("Apellido");
        if (!correo) error.push("Correo");
        if (!telefono) error.push("Teléfono");
        if (!asunto) error.push("Asunto");
        if (!mensaje) error.push("Mensaje");

        if (error.length) {
            // Construir el mensaje de error
            const errorMessage = error.map((e) => `\n ${e}`).join('');

            // Mostrar mensaje de advertencia con SweetAlert
            Swal.fire({
                icon: 'info',
                title: 'Por favor, complete los siguientes campos:',
                text: errorMessage,
                confirmButtonText: 'Gracias',
            });
            return false; // Evitar que se envíe el formulario
        }

        // Si no hay errores, enviar el formulario a través de AJAX
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            success: function(response) {
                // Mostrar mensaje de éxito con SweetAlert
                Swal.fire({
                    icon: 'success',
                    title: '¡Formulario enviado con éxito!',
                    text: `${nombre}, el formulario ha sido enviado con éxito. ¡Gracias por contactarnos!`,
                    confirmButtonText: 'Aceptar',
                });

                // Limpiar los campos del formulario después de enviar
                $("#nombre").val('');
                $("#apellido").val('');
                $("#correo").val('');
                $("#telefono").val('');
                $("#asunto").val('');
                $("#mensaje").val('');
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Hubo un error al enviar el formulario. Por favor, inténtalo de nuevo más tarde.',
                    confirmButtonText: 'Aceptar',
                });
            }
        });
    });
});
