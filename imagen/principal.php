<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ApiNux</title>
    <link rel="stylesheet" href="prism.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <!-- comente esta parte porque tenia una version antigua de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" defer=""></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js" defer=""></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" defer=""></script>
    <link rel="stylesheet" href="prism.css">
    <link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2017/01/31/15/33/linux-2025130_1280.png" type="image/x-icon">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="prism.js"></script>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

   /*  agregue esto para arreglar lo de la solicitud API */
/*     @media (min-width: 576px){
.modal-dialog {
  max-width: 700px;
  margin: 1.75rem auto;
    margin-top: 1.75rem;
    margin-bottom: 1.75rem;
}} */

    body{
      background-color: black; 
    }
    .visualizar{
        width: 100%;
    }
    .contenedorGrid{
        display: grid;
        width: 80%;
        margin-left: 10%;
        margin-right: 10%;
        grid-template-columns: auto;
    }
    .imgLogo{
        width: 52px;
        height: 44px;    
    }
  /*   .imagen{
        width: 20%;
        height: 20%;
    } */
    .contenedor{
        margin-left: 50px;
        margin-right: 50px;
    }
  /*   .contenedor>img{
        height: 50%;
        width: 50%;
    } */
    .contenedor>img{
        height: 200px;
        width: 300px;
    } 
    @media (max-width: 1300px){
        .contenedor>img{
            height: 240px; /* 200px */
            width: 47.1%;/*  31% */
        }
        .contenedor{
        margin-left: 0.5%;
        margin-right: 0.5%;
    }
    }
    @media (max-width: 600px){
        .contenedor>img{
            height: 160px;/* 100px */
            width: 47.1%;/*  31% */
        }
        .contenedor{
        margin-left: 0.5%;
        margin-right: 0.5%;
    }
    }
    @media (max-width: 400px){
        .contenedor>img{
            height: 90px;/*  60px */
            width: 47.1%;/*  31% */
        }
        .contenedor{
        margin-left: 0.5%;
        margin-right: 0.5%;
    }
    }
    .contenidoModal{
        background-color: black;
    }
    .centrarNumero{
        text-align: center;
    }
    .centrarWpp{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
</style>
</head>
<body>
<!-- barra de navegacion -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img class="imgLogo" src="https://cdn.pixabay.com/photo/2017/01/31/15/33/linux-2025130_1280.png" alt="">
            ApiNux
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">            
            <li class="nav-item d-flex align-items-center">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Iniciar sesión</a>
            </li>
            <li class="nav-item d-flex align-items-center">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal1">Contáctanos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal2"><button type="button" class="btn btn-success">Subir</button></a>
            </li>
          </ul>
            <!-- cambiar esta parte para que se inice sesion y en caso de haber iniciado sesion lo dirija a las instrucciones para hacer fecth API -->
            <a class="nav-link ml-auto pl-0" href="#" data-toggle="modal" data-target="#exampleModal3"><button type="button" class="btn btn-success">Solicitud API</button></a>
        </div>
    </nav>

<!-- modal para iniciar sesion para solicitud de API -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog mt-0 mb-2 h-100 d-flex justify-content-center align-items-center" role="document">
      <div class="modal-content contenidoModal">
        <div class="modal-header">
          <h5 class="modal-title text-white" id="exampleModalLabel">Fetch API</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
             <!--  agregue el style="height: 500px" -->
                <div class="d-flex justify-content-center align-item-center" style="height: 450px">
  <pre><code class="language-javascript">//Hacer solicitudes a la API
  //Ejecutar las siguientes lineas de codigo
  fetch("https://6460edfe185dd9877e33740e.mockapi.io/jugadores")
    .then((response) => response.json())
    .then((data) => {
      console.log(data)
    })
    .catch((error) => {
      console.error("Error al obtener los datos:", error);
  });

  //Resultado: el resultado sera un json 
  //con la siguiente estructura:
  [
    {
      "titulo": "casa",
      "links": ["www.casa1Image1.com","www.casa2Image2.com","www.casa3Image3.com"],
      "id": 1
    },
    {
      "titulo": "amar",
      "links": ["www.amar1Image1.com","www.amar2Image2.com"],
      "id": 2
    }
  ]</code></pre>
                </div>
            </form>
        </div>
        <div class="modal-footer p-2">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>

<!-- modal para subir imagenes -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog mt-0 mb-2 h-100 d-flex justify-content-center align-items-center" role="document">
      <div class="modal-content contenidoModal">
        <div class="modal-header">
          <h5 class="modal-title text-white" id="exampleModalLabel">Subir imagen</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <div class="form-group  text-white">
                    <label for="title">Titulo</label>
                    <!-- cambie id="" por name="nombre" lo cambie por title para correrlo aqui -->
                    <input required type="text" class="form-control" name="title" placeholder="Ingresa un titulo que defina la imagen">
                </div>
                <div class="form-group  text-white">
                    <label for="archivo">Seleccionar</label>
                    <!-- cambie name por image -->
                    <input required  class="form-control" type="file" name="image">
                </div>
                <div class="form-group  text-white">
                    <label for="description">Descripción</label>
                    <textarea class="form-control" name="description" rows="5" placeholder="Escribe una descripción o palabras claves que relacionen con la imagen"></textarea>
                </div>
                <button type="submit" class="btn btn-success" id="subirImagen">Subir imagen</button>
            </form>
        </div>
        <div class="modal-footer">
            <div class="d-flex justify-content-center align-item-center">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
      </div>
    </div>
</div>

<!-- modal para contactanos -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog mt-0 mb-2 h-75 d-flex justify-content-center align-items-center" role="document">
      <div class="modal-content contenidoModal">
        <div class="modal-header">
          <h5 class="modal-title text-white" id="exampleModalLabel">Contáctanos</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body d-flex justify-content-center align-item-center text-align-center">
            <div class="d-flex justify-content-center align-item-center">
                <div class="centrarWpp">
                    <a href="https://wa.me/573163748711">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="green" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg>
                    </a>
                </div>
                <div  class="d-flex flex-colum justify-content-center align-item-center flex-column m-2">
                    <h3 class="text-white m-2 centrarNumero">Escríbenos al WhatsApp</h3>
                    <a class="text-success m-2 centrarNumero" href="https://wa.me/573163748711">+57 3163748711</a>
                </div>
            </div>
        </div>
        <div  class="d-flex justify-content-center align-item-center m-2">
            <h5 class="text-white">Correo: oscar.campus@gmail.com</h5>
        </div>
        <div class="modal-footer">
            <div class="d-flex justify-content-center align-item-center">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
      </div>
    </div>
</div>

<!-- modal para iniciar sesion -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog mt-0 mb-2 h-75 d-flex justify-content-center align-items-center" role="document">
          <div class="modal-content contenidoModal">
            <div class="modal-header">
              <h5 class="modal-title text-white" id="exampleModalLabel">Inicia sesión</h5>
              <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="insertar.php">
                    <div class="form-group  text-white">
                      <label for="email">Correo electrónico</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Ingresa tu correo electrónico">
                    </div>
                    <div class="form-group  text-white">
                      <label for="password">Contraseña</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Ingresa tu contraseña">
                    </div>
                    <button type="submit" class="btn btn-success">Iniciar sesión</button>
                    <div class="d-flex justify-content-lg-start align-item-center mt-2">
                        <a href="" class="m">¿Has olvidado tú contraseña?</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal5">Crear cuenta</button>
            </div>
          </div>
        </div>
</div>

<!-- modal para crear cuenta -->
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog mt-0 mb-2 h-100 d-flex justify-content-center align-items-center" role="document">
          <div class="modal-content contenidoModal">
            <div class="modal-header">
              <h5 class="modal-title text-white" id="exampleModalLabel">Crear cuenta</h5>
              <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="crearUsuario.php">
                    <div class="form-group  text-white">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa nombre">
                    </div>
                    <div class="form-group  text-white">
                      <label for="numero">Número telefónico</label>
                      <input type="text" class="form-control" name="numero" id="nombre" placeholder="Ingresa numero celular">
                    </div>
                    <div class="form-group  text-white">
                      <label for="fecha">Fecha de nacimiento</label>
                      <input type="date" class="form-control" name="fecha" id="fecha" placeholder="Ingresa fecha de nacimiento">
                    </div>
                    <div class="form-group  text-white">
                      <label for="email">Correo electrónico</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Ingresa correo electrónico">
                    </div>
                    <div class="form-group  text-white">
                      <label for="password">Contraseña</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Ingresa contraseña">
                    </div>
                    <button type="submit" class="btn btn-success">Crear cuenta</button>
                   <!--  <div class="d-flex justify-content-lg-start align-item-center mt-2">
                        <a href="" class="m">¿Has olvidado tú contraseña?</a>
                    </div> -->
                </form>
            </div>
            <div class="modal-footer">
            <a href="principal.php"><button type="button" class="btn btn-dark">Cerrar</button></a>
              <!-- <button type="button" class="btn btn-success">Crear cuenta</button> -->
            </div>
          </div>
        </div>
</div>

<!-- seccion buscador -->
<div class="container mt-4">
    <div class="row d-flex justify-content-center">
    <form id="miFormulario">
        <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="buscarImagen" placeholder="Buscar...">
            <button class="btn btn-dark" onclick="procesarFormulario()" id="buscar" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
            </button>
        </div>
        </div>
    </form>
    </div>
</div>

<!-- muestra imagenes -->
<div class="contenedor row d-flex justify-content-center align-item-center">
  <div id="api">

  </div>


  <?php
  $directorio = 'uploads/'; // Reemplaza con la ruta a tu carpeta de imágenes
      $uuu='C:/xampp/htdocs/imagen/';
  $archivos = scandir($directorio);
  foreach ($archivos as $archivo) {
      $extension = pathinfo($archivo, PATHINFO_EXTENSION);
      if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) { // Filtrar solo imágenes
          $rutaArchivo = $directorio . '/' . $archivo;
          $rutaArchivo1 = $uuu.$directorio . '/' . $archivo;
          echo '<img class="m-1 p-0" src="' . $rutaArchivo . '" alt="' . $archivo . '">';
          /* echo '<p>' . $rutaArchivo . '</p>    <p>' . $archivo . '</p>'; */
          /* echo '<a href="' . $rutaArchivo1 . '" >' . $archivo . '</a>'; */
      }
  }
  ?>    
</div>


<script>

let api=document.getElementId("api")

function procesarFormulario() {
  // Obtener los valores de los campos de entrada
  let buscarImagen=document.getElementId("buscarImagen")
  // Validar los campos si es necesario

  // Procesar los datos
  // Aquí puedes realizar cualquier operación con los datos ingresados, como enviarlos a un servidor, realizar cálculos, etc.
  console.log("buscarImagen: " + buscarImagen);

  fetch("https://6460edfe185dd9877e33740e.mockapi.io/jugadores"){
    .then((response) => response.json())
    .then((data) => {
      console.log(data)
      let x
      for(let i=0;i<data.length;i++){
        if(data[i].titulo==buscarImagen.value){
          /* const img=document.createElement("img") */
          /* img.src=data[i].link */
          api.innerHTML=`
            <img class="m-1 p-0" src="${data[i].link}">
          `
        }else{
          alert("No hay coincidencias para la palabra, intenta con otra busqueda")
        }
    }
    })
    .catch((error) => {
      console.error("Error al obtener los datos:", error);
  });
  }

  // Restablecer el formulario
  document.getElementById("miFormulario").reset();
}



/* let a1=document.getElementById("subirImagen");

  function registrarTiempo() {
      const data = {
        titulo: `.$titulo.`,
        link: `.$link.`,
      };
    
      fetch("https://6460edfe185dd9877e33740e.mockapi.io/jugadores", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
      })
        .then((response) => response.json())
        .then((result) => {
          console.log("Puntuación registrada:", result);
          alert("¡Registro exitoso!");
        })
        .catch((error) => {
          console.error("Error al registrar la puntuación:", error);
          alert(
            "Ha ocurrido un error. Por favor, intenta nuevamente."
          );
        });
    }

a1.addEventListener("click", function (){
    registrarTiempo();
}) */

</script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
</body>
</html>