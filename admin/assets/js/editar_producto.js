function openEditForm() {
    // Mostrar el formulario emergente de edición
    document.getElementById("editPopupForm").style.display = "block";

    // Obtener los valores de los campos existentes y establecerlos en el formulario de edición
    let productId = document.getElementById("producto_id").value;
    let productName = document.getElementById("nombre_prod").value;
    let productDescription = document.getElementById("descripcion_prod").value;
    let productPrice = document.getElementById("precio_prod").value;
    let productQuantity = document.getElementById("cantidad_prod").value;

    // Establecer los valores en el formulario de edición
    document.getElementById("edit_producto_id").value = productId;
    document.getElementById("edit_nombre_prod").value = productName;
    document.getElementById("edit_descripcion_prod").value = productDescription;
    document.getElementById("edit_precio_prod").value = productPrice;
    document.getElementById("edit_cantidad_prod").value = productQuantity;
}

function closeEditForm() {
    // Ocultar el formulario emergente de edición
    document.getElementById("editPopupForm").style.display = "none";
}