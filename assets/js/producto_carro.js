
function actualizarTablaCarrito() {
    const carrito = JSON.parse(localStorage.getItem('carrito')) || []; 
    const tablaCarrito = document.getElementById('cartBody');
    tablaCarrito.innerHTML = '';
    if(carrito.length === 0){
        const filaMensaje =document.createElement('tr');
        filaMensaje.innerHTML = `<td class="carroVacio" colspan="6">¡No hay productos!</td>`;
        tablaCarrito.appendChild(filaMensaje);
    }else{
        carrito.forEach(producto => {
            const fila = document.createElement('tr');
            fila.innerHTML = `
                <td class="cartBody_td">${producto.id}</td>
                <td class="cartBody_td">${producto.nombre}</td>
                <td class="cartBody_td">${producto.precio}</td>
                <td class="cartBody_td">${producto.cantidad}</td>
                <td class="cartBody_td" id="subtotal">$(despues lo veo)</td>
                <td class="cartBody_td"><button class="quitProducto" onclick="quitarDelCarrito('${producto.id}')">X</button></td>`;
            tablaCarrito.appendChild(fila);
        });
        
    }
}


function agregarAlCarrito(idProducto) {

    const producto = {
        id: document.getElementById("idprod_" + idProducto).textContent,
        nombre: document.getElementById("nombreProducto_" + idProducto).textContent,
        precio: document.getElementById("precioProducto_" + idProducto).textContent,
        cantidad: document.getElementById("cantProducto_" + idProducto).value
    };


    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];


    const indice = carrito.findIndex(item => item.id === producto.id);
    if (indice !== -1) {

        carrito[indice].cantidad = parseInt(carrito[indice].cantidad) + parseInt(producto.cantidad);

    } else {

        carrito.push(producto);
    }


    localStorage.setItem('carrito', JSON.stringify(carrito));
    Swal.fire({
        icon: 'success',
        title: '¡Producto agregado!',
        confirmButtonText: 'Gracias',
        timer: 1500 
    });
    
}


document.addEventListener('DOMContentLoaded', function() {
    actualizarTablaCarrito();
});


function quitarDelCarrito(idProducto) {
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    carrito = carrito.filter(producto => producto.id !== idProducto);
    localStorage.setItem('carrito', JSON.stringify(carrito));
    actualizarTablaCarrito();
}

//DISMINUCION DE CANTIDADES DE LOS PRODUCTOS
function disminuirCantidad(idProducto) {
    const inputCantidad = document.getElementById('cantProducto_' + idProducto);
    let valorActual = parseInt(inputCantidad.value);
    if (valorActual > 1) {
        inputCantidad.value = valorActual - 1;
    }
}
//AUMENTO DE CANTIDADES DE LOS PRODUCTOS
function aumentarCantidad(idProducto) {
    const inputCantidad = document.getElementById('cantProducto_' + idProducto);
    let valorActual = parseInt(inputCantidad.value);
    const cantidadMaxima = parseInt(inputCantidad.max);
    if (valorActual < cantidadMaxima) {
        inputCantidad.value = valorActual + 1;
    }
}

function vaciarCarrito() {
    localStorage.removeItem('carrito');
};