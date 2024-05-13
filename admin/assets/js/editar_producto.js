//Editar
function openEditForm(idProducto) {
    // Obtener los valores de los campos existentes
    let productId = document.getElementById("producto_id" + idProducto).textContent;
    let productName = document.getElementById("nombre_prod" + idProducto).textContent;
    let productDescription = document.getElementById("descripcion_prod" + idProducto).textContent;
    let productPrice = document.getElementById("precio_prod" + idProducto).textContent;
    let productQuantity = document.getElementById("cantidad_prod" + idProducto).textContent;

    // Crear el contenido HTML del formulario de edición
    const formContent = `
    <div class="formEmergente_div">
        <?php include '../../backend/php/conn.php'; ?>
        <h3>Editar Producto</h3>
        <form class="formEmergente" action="../backend/php/actualizar_producto.php" method="post" enctype="multipart/form-data">
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
            <div class="btn-container">
                <button class="btn_general" type="button" onclick="closeEditForm()">Cancelar</button>
                <button class="btn_general" type="submit">Guardar</button>
            </div>
        </form>
        </div>
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

//Eliminar
function quitarProducto(idProducto) {
    // Obtener los valores de los campos existentes
    let productId = document.getElementById("producto_id" + idProducto).textContent;
    let productName = document.getElementById("nombre_prod" + idProducto).textContent;

    // Crear el contenido HTML del formulario de edición
    const eliminarProd = `
    <div class=eliminador_10>
        <p>${productId}</p>
        <p>${productName}</p>
    </div>
    `;

    // Mostrar la ventana emergente de SweetAlert2 con el contenido del formulario de edición
    Swal.fire({
        html:eliminarProd, 
        title: '¿Estás seguro?',
        text: "Esta acción no se puede deshacer",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminarlo'
    }).then((result) => {
        if (result.isConfirmed) {
            // Envía una solicitud AJAX al servidor para eliminar el producto
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "../backend/php/eliminar_producto.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Aquí puedes manejar la respuesta del servidor si es necesario
                    // Por ejemplo, recargar la página o actualizar la tabla de productos
                    location.reload(); // Recargar la página para mostrar los cambios
                }
            };
            console.log("ID del producto:", idProducto);//Control del id
            xhr.send("id_producto=" + idProducto);
        }
    });
}

