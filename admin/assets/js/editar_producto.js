function openEditForm(idProducto) {
    // Obtener los valores de los campos existentes
    let productId = document.getElementById("producto_id").textContent;
    let productName = document.getElementById("nombre_prod").textContent;
    let productDescription = document.getElementById("descripcion_prod").textContent;
    let productPrice = document.getElementById("precio_prod").textContent;
    let productQuantity = document.getElementById("cantidad_prod").textContent;

    // Crear el contenido HTML del formulario de edición
    const formContent = `
        <h2>Editar Producto</h2>
        <form action="actualizar_producto.php" method="post" enctype="multipart/form-data">
            <div class="id_prod">
                <label for="edit_producto_id">Id Producto</label>
                <input type="number" name="edit_producto_id" id="edit_producto_id" value="${productId}" readonly>
            </div>
            <div class="nombre_prod">
                <label for="edit_nombre_prod">Nombre</label>
                <input type="text" name="edit_nombre_prod" id="edit_nombre_prod" value="${productName}">
            </div>
            <div class="descripcion_prod">
                <label for="edit_descripcion_prod">Descripción</label>
                <textarea name="edit_descripcion_prod" id="edit_descripcion_prod" cols="30" rows="10">${productDescription}</textarea>
            </div>
            <div class="precio_prod">
                <label for="edit_precio_prod">Precio $</label>
                <input type="number" name="edit_precio_prod" id="edit_precio_prod" value="${productPrice}">
            </div>
            <div class="cantidad_prod">
                <label for="edit_cantidad_prod">Cantidad</label>
                <input type="number" name="edit_cantidad_prod" id="edit_cantidad_prod" value="${productQuantity}">
            </div>
            <div class="btn_prod">
                <button type="button" onclick="closeEditForm()">Cancelar</button>
                <button type="submit">Guardar</button>
            </div>
        </form>
    `;

    // Mostrar la ventana emergente de SweetAlert2 con el contenido del formulario de edición
    Swal.fire({
        html: formContent,
        showCloseButton: true,
        showConfirmButton: false,
        focusConfirm: false,
        customClass: 'swal-wide'
    });
}

function closeEditForm() {
    // Cerrar la ventana emergente de SweetAlert2
    Swal.close();
}
