var logged = false;

class User {
    constructor(name, password = null) {
        this.name = name;
        this.password = password;
    }
}
class Guest extends User {
    constructor() {
        super("Guest", null);
    }
}
function enviarMensaje(event) {
    event.preventDefault();

    // Obtener el mensaje del campo de texto
    var mensaje = document.getElementById("mensaje").value;

    if (mensaje.trim() == "") {
        return alert("El mensaje no puede estar vacío");
    }
    if (logged == false) {
        const user = new Guest();
        mensaje = "El usuario " + user.name + " dice: " + mensaje;
        
        var nuevoMensaje = document.createElement("p");
        nuevoMensaje.innerText = mensaje;

        var historial = document.getElementById("chat-history");
        historial.appendChild(nuevoMensaje);

        document.getElementById("mensaje").value = "";
    }
}