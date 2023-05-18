<?php
setcookie('user','',time()-(60*5));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js"  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Konkhmer+Sleokchher&display=swap" rel="stylesheet">
    <!-- ultra -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ultra&display=swap" rel="stylesheet">
    <!-- alef -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alef:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./inicio.css">

    <title>Inicio</title>
    
</head>
<body>

    <h2 class="mt-4 card-title">LEAGUE OF NEXUS</h2>
    <div id="prueba">
        <div class=" card bg-dark">
            <form action="get_info.php" method="post" class="card-body">
                <br>
                <label for="usuario">Iniciar Sesión</label>
                <br>
                <br>
                <br>
                <br>
                <input type="text" name="usuario"  placeholder="NOMBRE DE USUARIO" class="form-control">
                <br>
                <br>
                <button type="submit"  class="btn btn-outline-primary" >Acceder</button>
                <a href="principal.php" class="btn btn-outline-info mt-3"><p> Entrar como invitado</p></a>
            </form>
            
            <script>
                
                const api = new XMLHttpRequest();
                api.open('GET','http://ddragon.leagueoflegends.com/cdn/13.7.1/data/en_US/champion.json',true);
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
                                    'background-image','url('+`http://ddragon.leagueoflegends.com/cdn/img/champion/splash/${listado[Math.floor(Math.random() * (listado.length- 0) + 0)]}_0.jpg`+')'
                                );
                            });
                        
                    }
                }
            </script>
        </div>

    </div>
</body>
</html>