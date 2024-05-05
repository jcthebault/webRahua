//Funcion de actualizar carrito
function actualizarTablaCarrito() {
    const carrito = JSON.parse(localStorage.getItem('carrito')) || []; // Obtener el carrito desde localStorage
    const tablaCarrito = document.getElementById('cartBody');// Obtener el cuerpo de la tabla del carrito
    tablaCarrito.innerHTML = ''; // Limpiar el contenido actual de la tabla
    carrito.forEach(producto => {// Iterar sobre los productos en el carrito y agregarlos a la tabla
        const fila = document.createElement('tr');
        fila.innerHTML = `
            <td class="cartBody_td">${producto.id}</td>
            <td class="cartBody_td">${producto.nombre}</td>
            <td class="cartBody_td">${producto.precio}</td>
            <td class="cartBody_td">${producto.cantidad}</td>
            <td class="cartBody_td" id="subtotal">$</td>
            <td class="cartBody_td"><button class="quitProducto" onclick="quitarDelCarrito('${producto.id}')">X</button></td>
        `;
        tablaCarrito.appendChild(fila);
    });
}
//Funcion de agregar carrito
function agregarAlCarrito(idProducto) {
    // Obtener el producto desde el DOM
    const producto = {
        id: document.getElementById("idprod_" + idProducto).textContent,
        nombre: document.getElementById("nombreProducto_" + idProducto).textContent,
        precio: document.getElementById("precioProducto_" + idProducto).textContent,
        cantidad: document.getElementById("cantProducto_" + idProducto).value
    };

    // Obtener el carrito de localStorage o inicializarlo si es la primera vez
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

    // Verificar si el producto ya está en el carrito
    const indice = carrito.findIndex(item => item.id === producto.id);
    if (indice !== -1) {
        // Si el producto ya está en el carrito, actualizar la cantidad
        carrito[indice].cantidad = parseInt(carrito[indice].cantidad) + parseInt(producto.cantidad);

    } else {
        // Si el producto no está en el carrito, agregarlo
        carrito.push(producto);
    }

    // Guardar el carrito actualizado en localStorage
    localStorage.setItem('carrito', JSON.stringify(carrito));
    console.log(carrito)//Control del localStorage -> Que se cargue

}
//Funcion para actualizar cuando se cargue el DOM
document.addEventListener('DOMContentLoaded', function() {
    actualizarTablaCarrito();//Actualizar la tabla
});
// Función para quitar un producto del carrito
function quitarDelCarrito(idProducto) {
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    carrito = carrito.filter(producto => producto.id !== idProducto);
    localStorage.setItem('carrito', JSON.stringify(carrito));
    actualizarTablaCarrito();
}


// AUMENTO Y DISMINUCION DE CANTIDADES DE LOS PRODUCTOS
function disminuirCantidad(idProducto) {
    const inputCantidad = document.getElementById('cantProducto_' + idProducto);
    let valorActual = parseInt(inputCantidad.value);
    if (valorActual > 1) {
        inputCantidad.value = valorActual - 1;
    }
}

function aumentarCantidad(idProducto) {
    const inputCantidad = document.getElementById('cantProducto_' + idProducto);
    let valorActual = parseInt(inputCantidad.value);
    const cantidadMaxima = parseInt(inputCantidad.max);
    if (valorActual < cantidadMaxima) {
        inputCantidad.value = valorActual + 1;
    }
}

