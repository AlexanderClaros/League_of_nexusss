var slider=$('.slider');
var siguiente=$('#btn-next');
var anterior=$('#btn-prev');
$(document).ready(function(){
    $('.slider div:last').insertBefore('.slider div:first');
    $('.slider').css('margin-left','-'+100+'%');
        function moverD() {
            $('.slider').animate({
                marginLeft:'-200%'
            },700,function(){
                $('.slider div:first').insertAfter('.slider div:last');
                $('.slider').css('margin-left','-'+100+'%');
            });
        }
        function moverI() {
            $('.slider').animate({
                marginLeft:0
            },700,function(){
                $('.slider div:last').insertBefore('.slider div:first');
                $('.slider').css('margin-left','-'+100+'%');
            });
        }
    $('#btn-next').click(function(){
        moverD();
    });
    $('#btn-prev').click(function(){
        moverI();
    });
    
});
$(document).ready(function() {
    $('#exampleModal').modal('show');
});
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