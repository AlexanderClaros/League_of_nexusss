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
const listado=new Map()
const api = new XMLHttpRequest();
api.open('GET','http://ddragon.leagueoflegends.com/cdn/13.7.1/data/en_US/champion.json',true);
api.send();

api.onreadystatechange =function(){
    if(this.status == 200 && this.readyState == 4){
        
        var datos = JSON.parse(this.responseText);
            console.log(typeof datos.data);
            claves=Object.keys(datos.data);
            for(let i=0; i<claves.length;i++){
                let clave= claves[i];
                listado.set(datos.data[clave].name,datos.data[clave].image['full']);
                
               
            }
            
    }
}
console.log(listado);

function cambia(){
 try{

 
    var entrada =document.getElementById("buscador");
    entrada_corregida=entrada.value.toString();
    entrada_corregida= entrada_corregida[0].toUpperCase()+entrada_corregida.substring(1,55).toLowerCase();
    console.log(entrada_corregida);
    var contenedor = document.getElementById("campeones_predict_list");
    contenedor.innerHTML='';
    listado.forEach(function(valor,elemento) {
        if (elemento.includes(entrada_corregida)) {
            var fila = document.createElement('div');
            fila.setAttribute('id','campeon_list_contain')
            var imagen = document.createElement('img');
            var cuadro =`http://ddragon.leagueoflegends.com/cdn/13.10.1/img/champion/`+elemento.replace(' ','').replace('.','').replace('\'','')+`.png`;
            imagen.setAttribute('src',`http://ddragon.leagueoflegends.com/cdn/13.10.1/img/champion/`+valor)
            console.log(valor);
            var nombre = document.createElement('h3');
            nombre.innerText=elemento;
            fila.appendChild(imagen);
            fila.appendChild(nombre);
            contenedor.appendChild(fila);
            fila.setAttribute('style',`background-image:url('http://ddragon.leagueoflegends.com/cdn/img/champion/splash/`+valor.replace('.png','')+`_0.jpg');border:1px solid white;`)
            fila.setAttribute('onclick',`mostrar_descripcion(variable='`+valor.replace('.png','')+`')`);
        }
    }); 
    } catch(error){
        var contenedor = document.getElementById("campeones_predict_list");
        contenedor.innerHTML='';
    }
}
function mostrar_descripcion(nombre){
    var fecha = new Date()
    fecha.setTime(fecha.getTime() + (1*24*60*60*1000));
    fecha.toUTCString()
    document.cookie = `campeon=`+nombre+`; expires=`+fecha+`; path=/;`; 
    window.location.href="../php/champ-description.php";
}

function envia(){
    try{

        var entrada =document.getElementById("buscador");
        entrada_corregida=entrada.value.toString();
        entrada_corregida= entrada_corregida[0].toUpperCase()+entrada_corregida.substring(1,55).toLowerCase();
        listado.forEach(function(valor,elemento) {
            if (elemento == entrada_corregida) {
                var fecha = new Date();
                fecha.setTime(fecha.getTime() + (1*24*60*60*1000));
                fecha.toUTCString();
                document.cookie = `campeon=`+valor.replace('.png','')+`; expires=`+fecha+`; path=/;`; 
                window.location.href="../php/champ-description.php";
            }
            else{
                console.log('no se envia');
            }
        }); 
        } catch(error){
            console.log('no se ha enviado');
        }
    
}