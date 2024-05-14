document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('btnComprar').addEventListener('click', function() {
        const carrito = JSON.parse(localStorage.getItem('carrito'));

        if (!carrito || carrito.length === 0) {
            Swal.fire({
                icon: 'info',
                title: '¡Carrito vacío!',
                text: 'Tu carrito de compras está vacío. Agrega productos antes de comprar.',
                confirmButtonText: 'Ok'
            });
            return;
        }

        fetch('../../backend/php/script_carro.php', {
            method: 'POST',
            body: JSON.stringify({ carrito: carrito }),
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => {
            if (response.ok) {
                Swal.fire({
                    icon: 'success',
                    title: '¡Carrito enviado!',
                    text: '¡Gracias por tu compra!',
                    confirmButtonText: 'Ok'
                }).then(() => {
                    window.location.href = '../../views/pages/user.php';
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: '¡Error!',
                    text: 'Hubo un problema, intente nuevamente.',
                    confirmButtonText: 'Ok'
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
            Swal.fire({
                icon: 'error',
                title: '¡Error!',
                text: 'Hubo un problema al enviar tu carrito a la base de datos.',
                confirmButtonText: 'Ok'
            });
        });
    });

    document.getElementById('vaciar-carrito-btn').addEventListener('click', vaciarCarrito);
});

function vaciarCarrito() {
    Swal.fire({
        icon: 'warning',
        title: '¿Estás seguro?',
        text: '¿Deseas vaciar tu carrito de compras?',
        showCancelButton: true,
        confirmButtonText: 'Sí, vaciar carrito',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            localStorage.removeItem('carrito');
            Swal.fire({
                icon: 'success',
                title: '¡Carrito vaciado!',
                text: 'Tu carrito de compras ha sido vaciado exitosamente.',
                confirmButtonText: 'Ok'
            });
            limpiarTablaCarrito();
        }
    });
}

function limpiarTablaCarrito() {
    const tablaCarrito = document.getElementById('cartBody');
    tablaCarrito.innerHTML = '';
}
