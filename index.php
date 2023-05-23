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
    <link rel="stylesheet" href="./css/inicio.css">

    <!-- Orbitron -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet"> 
    <title>Inicio</title>
    <script src="./js/index.js"></script>
</head>
<body>
    <div id="titulo">
        <img src="./media/imagenes/general/logo_inicio.png" alt="">
        <h2 class="mt-4 card-title">LEAGUE OF NEXUS</h2>
    </div>
    <div id="prueba">
        <div class=" card bg-dark">
            <form action="./php/get_info.php" method="post" class="card-body">
                <br>
                <label for="usuario">Iniciar Sesión</label>
                <br>
          
                <input type="text" name="usuario"  placeholder="NOMBRE DE USUARIO" class="form-control" required>
                <label for="region" id="region-title">Region</label>
                <select class="form-select from-select-lg mb-3 bg-dark" name="region" id="region" required>
                    <option value="">SELECIONA TU REGIÓN</option>
                    <option value="br1">BR1</option>
                    <option value="eun1">EUN1</option>
                    <option value="euw1">EUW1</option>
                    <option value="jp1">JP1</option>
                    <option value="kr">KR</option>
                    <option value="la1">LA1</option>
                    <option value="la2">LA2</option>
                    <option value="na1">NA1</option>
                    <option value="oc1">OC1</option>
                    <option value="ph2">PH2</option>
                    <option value="ru">RU</option>
                    <option value="sg2">SG2</option>
                    <option value="th2">TH2</option>
                    <option value="tr1">TR1</option>
                    <option value="tw2">TW2</option>
                    <option value="vn2">VN2</option>
                </select>
                <br>
                <button type="submit"  class="btn btn-outline-primary" >Acceder</button>
                <a href="./php/principal.php" class="btn btn-outline-info mt-3"><p> Entrar como invitado</p></a>
            </form>
            
            
        </div>

    </div>
</body>
</html>