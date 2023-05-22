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
    <link rel="stylesheet" href="../css/noticias.css">
    <title>League of Nexus</title>
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
                    <a class="nav-link active" aria-current="page"href="noticias.html">Noticias</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <datalist id="campeones_predict_list"></datalist>
                  <input class="form-control me-2" type="search" placeholder="Ashe" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Buscar</button>
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
    </header>
    <main>
        <section id="section1">
        <div id="fondo"></div>
        <div id="fondo-reference">
            <div class=" row justify-content-around" id="principal-content">
                <div class="col-md-3" id="text">
                    <p id="tipo-principal">MULTIMEDIA</p>
                    <h1>MÚSICA OFICIAL DE SOMBRA DE TINTA 2023</h1> 
                    <p id="descripcion-principal">Dejaos llevar por el poder desatado con la música de Sombra de tinta. </p>
                </div>
                <div id="imagen" class="col-md-7">
                    <a href="https://www.youtube.com/watch?v=Eb7fLzUMoEk"><img src="../media/imagenes/noticias_img/sombra.jpg" alt=""></a>
                </div>
            </div>
        </div>
       </section>
       <section id="container-notice">
        <div class="container">
            <div class="notice row  justify-content-center">
                <div class="img-noticia col-lg-6">
                    <a href="https://www.youtube.com/shorts/xvydVSJ6GxQ"><img src="../media/imagenes/noticias_img/chanceux.jpg" alt=""></a>
                </div>
                <div class="col-lg-4">
                    <p class="tipo">COMUNIDAD</p>
                    <h2>COMPOSICIONES CON SUERTE:EZREAL DE TRES ESTRELLAS</h2>
                    <p class="descripcion">En Composiciones con suerte, los profesionales de TFT nos explican su toma de desiciones para estrategias de higroll</p>
                    <p class="fecha">18-05-2023</p>
                </div>
            </div>
            <div class="notice row  justify-content-center">
                <div class="img-noticia col-lg-6">
                    <a href="https://www.youtube.com/watch?v=IL1aZCpDnEM"><img src="../media/imagenes/noticias_img/mecha.jpg" alt=""></a>
                </div>
                <div class="col-lg-4">
                    <p class="tipo">MULTIMEDIA</p>
                    <h2>Mecha Prime cero | Expositor de arenas</h2>
                    <p class="descripcion">¡Poneos el mechatraje!</p>
                    <p class="fecha">16-05-2023</p>
                </div>
            </div>
            <div class="notice row  justify-content-center">
                <div class="img-noticia col-lg-6">
                    <a href="https://www.leagueoflegends.com/es-es/news/game-updates/notas-de-la-version-13-10-de-teamfight-tactics/"><img src="../media/imagenes/noticias_img/ttversion.jpg" alt=""></a>
                </div>
                <div class="col-lg-4">
                    <p class="tipo">ACTUALIZACIONES DEL JUEGO</p>
                    <h2>Notas de la version 13.10 de Teamfight Tactics</h2>
                    <p class="descripcion"> 
                        Ya están aquí los Reinos del tesoro y la arena Mecha Prime cero que os llevará a combatir hasta la luna y mas alla.Además del nuevos
                        sistema con el que conseguiréis contenido cosmético, hemos preparado unos cuantos cambios de equilibrio menoresy portables que llegarán
                        a las partidas normales
                    </p>
                    <p class="fecha">16-05-2023</p>
                </div>
            </div>
            <div class="notice row  justify-content-center">
                <div class="img-noticia col-lg-6">
                    <a href="https://www.leagueoflegends.com/es-es/news/game-updates/notas-de-la-version-13-10/"><img src="../media/imagenes/noticias_img/version.jpg" alt=""></a>
                </div>
                <div class="col-lg-4">
                    <p class="tipo">ACTUALIZACIONES DEL JUEGO</p>
                    <h2>Notas de la versión 13.10</h2>
                    <p class="descripcion">Os damos la bienvenida a la versión 13.10, la actualización de mitad de temporada!</p>
                    <p class="fecha">16-05-2023</p>
                </div>
            </div>
            <div class="notice row  justify-content-center">
                <div class="img-noticia col-lg-6">
                    <a href="https://www.youtube.com/watch?v=h4WIP7DUWO8"><img src="../media/imagenes/noticias_img/campeonato.jpg" alt=""></a>
                </div>
                <div class="col-lg-4">
                    <p class="tipo">ESPORTS</p>
                    <h2>Campeonato de ¡El ataque de los monstruos!</h2>
                    <p class="descripcion">Preparaos para la batalla más grande de la historia de Espatulópolis en el campeonato de ¡El ataque de los monstruos!</p>
                    <p class="fecha">16-05-2023</p>
                </div>
            </div>
            <div class="notice row  justify-content-center">
                <div class="img-noticia col-lg-6">
                    <a href=""><img src="" alt=""></a>
                </div>
                <div class="col-lg-4">
                    <p class="tipo"></p>
                    <h2></h2>
                    <p class="descripcion"></p>
                    <p class="fecha"></p>
                </div>
            </div>
            <div class="notice row  justify-content-center">
                <div class="img-noticia col-lg-6">
                    <a href=""><img src="" alt=""></a>
                </div>
                <div class="col-lg-4">
                    <p class="tipo"></p>
                    <h2></h2>
                    <p class="descripcion"></p>
                    <p class="fecha"></p>
                </div>
            </div>
            
        </div>
       </section>
     
        <a href="https://www.burgerking.es/originals"><div id="anuncio"></div></a>
    
    </main>
  <div class="container my-5" id="footer">
    <footer class="text-center text-white bg-dark" >
      <div class="container">
        <section class="mt-5">
          <div  id =" enlace"class=" row text-center d-flex justify-content-center pt-5">
            <div class="col-md-4">
              <h6 class="text-uppercase font-weight-bold">
                <a href="about_us.php" class="text-white">Sobre Nosotros</a>
              </h6>
            </div>
            <div class="col-md-4">
              <h6 class="text-uppercase font-weight-bold">
                <a href="#!" class="text-white">Campeones</a>
              </h6>
            </div>
            
          
            <div class="col-md-4">
              <h6 class="text-uppercase font-weight-bold">
                <a href="https://support.riotgames.com/hc/es" class="text-white">Ayuda</a>
              </h6>
            </div>
          </div>
          <hr class="my-5" />
          <section class="mb-5">
            <div class=" row d-flex justify-content-center">
              <div class="col-lg-8">
                <p>
                  League of Nexus fue creado según la política de la ''Sección de parloteo legal'' de Riot Games, utilizando los recursos de Riot Games.  Riot Games no apoya ni patrocina este proyecto.
                </p>
              </div>
            </div>
            <div class="text-center p-3"style="background-color: rgba(0, 0, 0, 0.2)">
              © 2023 Copyright:
              <a class="text-white" href="principal.php">League of Nexus</a>
            </div>
          </section>
        </section>
      </div>
        
    </footer>
  </div>
    
</body>
</html>