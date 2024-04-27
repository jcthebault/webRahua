document.querySelector('.grid_form').addEventListener('submit', function(event) {
    event.preventDefault();
  
    const inputFile = document.getElementById('img_prod').files[0];
    const modal = document.getElementById('myModal');
    const modalMessage = document.getElementById('modalMessage');
    const lastIdContainer = document.querySelector('.id_prod');
  
    const formData = new FormData(this); // Obtener los datos del formulario
  
    // Realizar la solicitud AJAX
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '../backend/php/script_carga_producto.php', true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        const response = JSON.parse(xhr.responseText);
        if (response.success) {
          modalMessage.textContent = response.message;
          lastIdContainer.innerHTML = `<p>Último ID de producto cargado: ${response.last_id}</p>`;
        } else {
          modalMessage.textContent = response.message;
        }
        modal.style.display = 'block';
      }
    };
    xhr.send(formData);
  });
