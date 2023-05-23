<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js"  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="../js/principal.js" ></script>
    <link rel="stylesheet" href="../css/about_us.css">
    <title>League of Nexus</title>
    <link rel="shortcut icon" href="../media/imagenes/general/logo_inicio.png">
</head>
<body>
    <header>
          <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img  id='logo' src="../media/imagenes/general/logo.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link "  href="principal.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Campeones</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="noticias.php">Noticias</a>
                  </li>
                </ul>
                <form class="d-flex" action="./champ-description.php" method="POST" >
                  <input class="form-control me-2"type="search" onkeyup="cambia()" id="buscador"  placeholder="Ashe" aria-label="Search"> 
                  <button class="btn btn-outline-info" onclick="envia()">Buscar</button>
                </form>
                <?php if ( isset($_COOKIE['user']) ){?>
                  <?php $datos = unserialize($_COOKIE['user']);?>
                  <a href="https://cybmeta.com/required-en-elementos-select" id='perfil'><p><?php echo($datos[0]);?></p><div id="icono-jugador"></div></a>
                  <script> 
                    var numIcon =<?php echo($datos[1]); ?>;
                    var imagen = document.createElement("img");
                    imagen.setAttribute('src',`http://ddragon.leagueoflegends.com/cdn/13.10.1/img/profileicon/`+numIcon+`.png`)
                    document.getElementById("icono-jugador").appendChild(imagen);
                  </script>
                <?php } ?>
              </div>
            </div>
          </nav>
          <div id="campeones_predict_list"> <div></div></div>
    </header>
    <main>
        <section >
        <h1>Sobre Nosotros</h1>
            <!-- idea añadir div transparente en el cual solo tenga borde y se superponga al carrusel para que de un efecto como el de la pagina -->
            <div class="container" id="seccion1">
                <div class="row justify-content-around" id="row" >
                    <div class="col-md-6" id="mision">
                        <img src="../media/imagenes/about_us_img/grieta.png"  alt="">
                    </div>
                    <div  class="col-md-6" id="mision-content">
                        <h2>Nuestra Mision</h2>
                        <p>Es que disfrutes mas sobre el juego conociendo y explorando las posibilidades que este nos ofrece</p>
                    </div>
                </div>
            </div>
            <div class="container" id="seccion2">
                <div class="row justify-content-around" >
                    <div  class="col-lg-6" id="creacion-content">
                        <h2>Creacion</h2>
                        <p>La página fue creado para proporcionar información y recursos útiles para la comunidad de jugadores
                         de League of Legends para ayudar a los jugadores a mejorar sus habilidades, mantenerse informados
                          sobre las últimas noticias y actualizaciones del juego
                        </p>
                    </div>
                    <div class="col-lg-6" id="creacion">
                        <img src="../media/imagenes/about_us_img/aram.jpg"  alt="">
                    </div>
                </div>
            </div>
        </section>
   

    </main>
  <div class="container my-5" id="footer">
    <footer class="text-center text-white bg-dark" >
      <div class="container">
        <section class="mt-5">
          <div class="row text-center d-flex justify-content-center pt-5">
            <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="about_us.php" class="text-white">Sobre Nosotros</a>
              </h6>
            </div>
            <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="#!" class="text-white">Campeones</a>
              </h6>
            </div>
            
          
            <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="https://support.riotgames.com/hc/es" class="text-white">Ayuda</a>
              </h6>
            </div>
          </div>
          <hr class="my-5" />
          <section class="mb-5">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-8">
                <p>
                  League of Nexus fue creado según la política de la ''Sección de parloteo legal'' de Riot Games, utilizando los recursos de Riot Games.  Riot Games no apoya ni patrocina este proyecto.
                </p>
              </div>
            </div>
            <div class="text-center p-3"style="background-color: rgba(0, 0, 0, 0.2)">
              © 2023 Copyright:
              <a class="text-white" href="#">League of Nexus</a>
            </div>
          </section>
        </section>
      </div>
        
    </footer>
  </div>
    
</body>
</html>