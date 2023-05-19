const droppable1 = document.getElementById("t1");
const droppable2 = document.getElementById("t2");
const droppable3 = document.getElementById("t3");

let draggable1 = document.getElementById(droppable1.children[0].id);
let draggable2 = document.getElementById("disco2");
let draggable3 = document.getElementById("disco3");
let draggable4 = document.getElementById("disco4");
let draggable5 = document.getElementById("disco5");
let draggable6 = document.getElementById("disco6");
function h() {
  let draggable1 = document.getElementById(droppable1.children[0].id);
  let draggable2 = document.getElementById(droppable2.children[0].id);
  let draggable3 = document.getElementById(droppable3.children[0].id);
}

function f(x) {
  if (x == "1") {
    return disco1.offsetWidth;
  } else if (x == "2") {
    return disco2.offsetWidth;
  } else if (x == "3") {
    return disco3.offsetWidth;
  } else if (x == "4") {
    return disco4.offsetWidth;
  } else if (x == "5") {
    return disco5.offsetWidth;
  } else if (x == "6") {
    return disco6.offsetWidth;
  } else {
    return 0;
  }
}

draggable1.addEventListener("dragstart", (event) => {
  event.dataTransfer.setData("text/plain", event.target.id);
});

if (draggable2 != "") {
  draggable2.addEventListener("dragstart", (event) => {
    event.dataTransfer.setData("text/plain", event.target.id);
  });
}

if (draggable3 != "") {
  draggable3.addEventListener("dragstart", (event) => {
    event.dataTransfer.setData("text/plain", event.target.id);
  });
}

draggable4.addEventListener("dragstart", (event) => {
  event.dataTransfer.setData("text/plain", event.target.id);
});

draggable5.addEventListener("dragstart", (event) => {
  event.dataTransfer.setData("text/plain", event.target.id);
});

draggable6.addEventListener("dragstart", (event) => {
  event.dataTransfer.setData("text/plain", event.target.id);
});

droppable1.addEventListener("dragover", (event) => {
  event.preventDefault();
});
droppable1.addEventListener("drop", (event) => {
  const draggedElementId = event.dataTransfer.getData("text/plain");
  const draggedElement = document.getElementById(draggedElementId);

  if (draggedElement.offsetWidth < f(droppable1.innerHTML[31])) {
    droppable1.prepend(draggedElement);
  } else if (f(droppable1.innerHTML[31]) === 0) {
    droppable1.prepend(draggedElement);
  }
});

droppable2.addEventListener("dragover", (event) => {
  event.preventDefault();
});
droppable2.addEventListener("drop", () => {
  const draggedElementId = event.dataTransfer.getData("text/plain");
  const draggedElement = document.getElementById(draggedElementId);
  if (draggedElement.offsetWidth < f(droppable2.innerHTML[31])) {
    droppable2.prepend(draggedElement);
    h();
  } else if (f(droppable2.innerHTML[31]) === 0) {
    droppable2.prepend(draggedElement);
    h();
  }
  h();
});

droppable3.addEventListener("dragover", (event) => {
  event.preventDefault();
});
droppable3.addEventListener("drop", (event) => {
  const draggedElementId = event.dataTransfer.getData("text/plain");
  const draggedElement = document.getElementById(draggedElementId);

  if (draggedElement.offsetWidth < f(droppable3.innerHTML[31])) {
    droppable3.prepend(draggedElement);
  } else if (f(droppable3.innerHTML[31]) === 0) {
    droppable3.prepend(draggedElement);
  }
  let draggable1 = document.getElementById(droppable1.children[0].id);
});

let intervalo;
let tiempo = 0;
let milisegundos = 0;
const registros = [];

function iniciarConteo() {
  intervalo = setInterval(actualizarConteo, 10);
}

function detenerConteo() {
  clearInterval(intervalo);
  intervalo = null;
}

let tiempoR;
function actualizarConteo() {
  milisegundos += 10;
  if (milisegundos === 1000) {
    milisegundos = 0;
    tiempo++;
  }
  document.getElementById("contador").innerHTML =
    tiempo + " segundos, " + milisegundos + " milisegundos";
  tiempoR = tiempo * 1000 + milisegundos;
}

function registrarTiempo() {
  let tiempoT;
  const username = document.getElementById("username").value;

  const data = {
    username: username,
    tiempoT: tiempoR,
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
      alert("¡Puntuación registrada exitosamente!");
    })
    .catch((error) => {
      console.error("Error al registrar la puntuación:", error);
      alert(
        "Ha ocurrido un error al registrar la puntuación. Por favor, intenta nuevamente."
      );
    });
}

function obtenerDatos() {
  const mostrar = document.getElementById("lista");
  mostrar.style.display = "flex";

  fetch("https://6460edfe185dd9877e33740e.mockapi.io/jugadores")
    .then((response) => response.json())
    .then((data) => {
      const lista = document.getElementById("listaValores");
      lista.innerHTML = "";

      let listado = [];
      data.forEach((valor) => {
        listado.push(valor.tiempoT);
      });
      const listaOrdenadaAscendente = listado.slice().sort((a, b) => a - b);

      let posicion = [];
      listaOrdenadaAscendente.forEach((valor) => {
        posicion.push(listado.indexOf(valor));
      });

      const tr = document.createElement("tr");
      const td1 = document.createElement("td");
      const td2 = document.createElement("td");
      const td3 = document.createElement("td");

      td1.textContent = "Posicion";
      td2.textContent = "Nombre";
      td3.textContent = "Tiempo";
      tr.appendChild(td1);
      tr.appendChild(td2);
      tr.appendChild(td3);
      lista.appendChild(tr);

      for (let i = 0; i < posicion.length; i++) {
        const tr = document.createElement("tr");
        const td1 = document.createElement("td");
        const td2 = document.createElement("td");
        const td3 = document.createElement("td");
        td1.textContent = i + 1;
        td2.textContent = data[posicion[i]].username;
        td3.textContent = data[posicion[i]].tiempoT;
        tr.appendChild(td1);
        tr.appendChild(td2);
        tr.appendChild(td3);
        lista.appendChild(tr);
      }
    })
    .catch((error) => {
      console.error("Error al obtener los datos:", error);
    });
}

function observarDivLleno() {
  return new Promise((resolve) => {
    const miDiv = document.getElementById("t3");

    const observer = new MutationObserver(() => {
      if (miDiv.children.length === 6) {
        observer.disconnect();
        resolve();
      }
    });
    observer.observe(miDiv, { childList: true });
  });
}

async function accionDespuesDeDivLleno() {
  await observarDivLleno();

  console.log("Finalizo.");
  detenerConteo();
  registrarTiempo();

  setTimeout(() => {
    obtenerDatos();
  }, 2000);
}

accionDespuesDeDivLleno();