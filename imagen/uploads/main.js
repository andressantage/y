// Validar que se haya seleccionado un archivo de imagen antes de enviar el formulario
document.querySelector('form').addEventListener('submit', function(event) {
    var fileInput = document.querySelector('input[type="file"]');
    if (fileInput.value === '') {
      event.preventDefault();
      alert('Please select a file.');
    }
  });
  