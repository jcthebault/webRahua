const editForm = document.getElementById('editPopupForm');// Seleccionar el formulario de edición

// Agregar evento al botón "Guardar" del formulario de edición
document.querySelector('#editPopupForm button[type="submit"]').addEventListener('click', function(event) {
    event.preventDefault(); // Prevenir el envío del formulario por defecto

    const editFormData = new FormData(editForm); // Obtener los datos del formulario de edición

    // Realizar la solicitud AJAX
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '../backend/php/script_actualiza_producto.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            if (response.success) {
                // Actualizar la interfaz según sea necesario, por ejemplo, cerrar el formulario de edición
                closeEditForm();
                // También puedes mostrar un mensaje de éxito u otras acciones necesarias
            } else {
                // Manejar errores si es necesario
            }
        }
    };
    xhr.send(editFormData);
});

// Función para abrir el formulario de edición
function openEditForm(productId, productName, productDescription, productPrice, productQuantity) {
    const editProductIdInput = document.getElementById('edit_producto_id');
    const editProductImgInput = document.getElementById('edit_img_prod');
    const editProductNameInput = document.getElementById('edit_nombre_prod');
    const editProductDescriptionInput = document.getElementById('edit_descripcion_prod');
    const editProductPriceInput = document.getElementById('edit_precio_prod');
    const editProductQuantityInput = document.getElementById('edit_cantidad_prod');

    // Asignar valores a los campos del formulario de edición
    editProductIdInput.value = productId;
    editProductNameInput.value = productName;
    editProductDescriptionInput.value = productDescription;
    editProductPriceInput.value = productPrice;
    editProductQuantityInput.value = productQuantity;

    // Mostrar el formulario de edición
    editForm.style.display = 'block';
}

// Función para cerrar el formulario de edición
function closeEditForm() {
    // Limpiar los campos del formulario de edición si es necesario
    editForm.style.display = 'none'; // Ocultar el formulario de edición
}
