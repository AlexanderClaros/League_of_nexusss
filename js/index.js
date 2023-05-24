const api = new XMLHttpRequest();
api.open('GET','https://ddragon.leagueoflegends.com/cdn/13.7.1/data/en_US/champion.json',true);
api.send();
console.log('entra');
api.onreadystatechange =function(){
    if(this.status == 200 && this.readyState == 4){
        console.log('entra');
        var datos = JSON.parse(this.responseText);
            console.log(typeof datos.data);
            var listado=[]
            claves=Object.keys(datos.data);
            for(let i=0; i<claves.length;i++){
                let clave= claves[i];
                listado.push(datos.data[clave].name)
                console.log(datos.data[clave].name);
            }
            // lista.forEach(dato => {
            //     listado.push(dato.name)
            // });
            console.log(listado);
            $(document).ready(function() {
                $('body').css(
                    'background-image','url('+`https://ddragon.leagueoflegends.com/cdn/img/champion/splash/${listado[Math.floor(Math.random() * (listado.length- 0) + 0)]}_0.jpg`+')'
                );
            });
        
    }
}