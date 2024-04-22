$(document).ready(function(){
    $("#form_cont").submit(function(e){
        e.preventDefault();
        const nombre = $("#nombre").val();
        const apellido = $("#apellido").val();
        const correo = $("#correo").val();
        const telefono = $("#telefono").val();
        const asunto = $("#asunto").val();
        const mensaje = $("#mensaje").val();
        const error = [];

        if(!$.trim(nombre))error.push(`"Nombre"`);
        if(!$.trim(apellido))error.push(`"Apellido"`);
        if(!$.trim(correo))error.push(`"Correo"`);
        if(!$.trim(telefono))error.push(`"Telefono"`);
        if(!$.trim(asunto))error.push(`"Asunto"`);
        if(!$.trim(mensaje))error.push(`"Mensaje"`);

        if(error.length){
            alert(`Por favor, debes completar lo siguente: ${error.map((e) => `\n-${e}` )}`);
            return false;
        }
        alert(`${nombre},\n el formulario ha sido enviado con exito, muchas gracias`);
    });
} );