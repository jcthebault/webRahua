//Calles
$(document).ready(function(){
    //let calle = '../../backend/json/calles.json';
    let localidad = '../../backend/json/municipio.json';
    let provincia = '../../backend/json/provincia.json';
    // Cargar los datos del archivo JSON

    //CALLE
    fetch(calle)
    .then(response => response.json())
    .then(data => {
        // Obtener referencia al datalist y construir las opciones
        const dataList = document.getElementById('calles_js');
        data.forEach(item => {
            const option = document.createElement('option');
            option.value = item.nombre; // Supongamos que los datos tienen una propiedad "nombre"
            dataList.appendChild(option);
        });
    })
    .catch(error => console.error('Error al cargar los datos:', error));
});
