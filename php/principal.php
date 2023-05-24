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
    <link rel="stylesheet" href="../css/principal.css">
    <link rel="shortcut icon" href="../media/imagenes/general/logo_inicio.png">
    <title>League of Nexus</title>
</head>
<body>
  <!-- Inicio Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Anuncio</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">  
          <img src="../media/imagenes/anuncios/anuncio3.jpg" style="width:470px;" alt="">  
        </div>
        <div class="modal-footer">
            <a href=""><button type="button" class="btn btn-outline-dark">Pidela ya</button></a>
        </div>
      </div>
    </div>
    </div>
    <!-- Fin Modal -->
    <header>
          <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container-fluid">
              <a class="navbar-brand" href="principal.php"><img  id='logo' src="../media/imagenes/general/logo.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="principal.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Campeones</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="noticias.php">Noticias</a>
                  </li>
                </ul>
                <form class="d-flex" action="./champ-description.php" method="POST" >
                  <input class="form-control me-2"type="search" onkeyup="cambia()" id="buscador"  placeholder="Ashe" aria-label="Search"> 
                  <button class="btn btn-outline-info" onclick="envia()">Buscar</button>
                </form>
                <?php if ( isset($_COOKIE['user']) ){?>
                  <?php $datos = unserialize($_COOKIE['user']);?>
                  <a href="./perfil.php" id='perfil'><p><?php echo($datos[0]);?></p><div id="icono-jugador"></div></a>
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
        <section>
          <div id="contenedor">      
            <div class="slider">
                <div><img src="../media/imagenes/carrusel/carrusel1.png"alt=""></div>
                <div><img src="../media/imagenes/carrusel/carrusel2.png" alt=""></div>
                <div><img src="../media/imagenes/carrusel/carrusel3.png" alt=""></div>
            </div>
            <div id="btn-prev">&#60</div>
            <div id="btn-next">&#62</div>
        </div>
        </section>
        <section>
          <h1>Elige tu camino</h1>
          <div class="contenedor-campeones">
            <div class="seccion2 container">
              <div class="slider-campeones container">
                <div class="row justify-content-between">
                  <h2 class="col-6">CLASE:TIRADOR</h2>
                  <img id='icono' class='col-6'src="../media/imagenes/iconos/tirador.png" alt="">
                </div>
                <div class="row justify-content-evenly">
                  <div class="col-md-6" id="video">
                    <video width="500" height="500" class='mx-auto' autoplay muted loop >
                      <source src="../media/videos campeones/ashe.mp4" type="video/mp4">
                    </video>
                  </div>
                  <p id="descripcion" class="col-md-6">Los Tiradores son campeones a distancia cuyo poder gira casi exclusivamente en torno a sus ataques básicos: utilizando su alcance para causar daños continuos masivos desde la distancia, los tiradores son capaces de derribar incluso al más duro de los oponentes cuando se coloca detrás de la seguridad de su equipo, y sobresalen en asegurar los objetivos del mapa, como el Dragon Dragon, el Baron Nashor Baron Nashor y las torretas.
                   
                  </p>
                </div>
              </div>
            </div>
            <div class="seccion2 container">
              <div class="slider-campeones container">
                <div class="row justify-content-between">
                  <h2 class="col-6">CLASE:LUCHADOR</h2>
                  <img id='icono' class='col-6'src="../media/imagenes/iconos/luchador.png" alt="">
                </div>
                <div class="row justify-content-evenly">
                  <div class="col-md-6" id="video">
                    <video width="500" height="500" class='mx-auto' autoplay muted loop >
                      <source src="../media/videos campeones/darius.mp4" type="video/mp4">
                    </video>
                  </div>
                  <p id="descripcion" class="col-md-6">
                    Los luchadores son un grupo diverso de combatientes de corto alcance que sobresalen tanto causando como resistiendo daño. Con fácil acceso a daños pesados y continuos y una gran cantidad de defensas innatas, los luchadores prosperan en combates prolongados mientras buscan enemigos para derribar, pero su alcance limitado los pone en riesgo constante de ser mantenido a raya por sus oponentes a través de control de masas, rango y movilidad.
                  </p>
                </div>
              </div>
            </div>
            <div class="seccion2 container">
              <div class="slider-campeones container">
                <div class="row justify-content-between">
                  <h2 class="col-6">CLASE:ANIQUILADOR</h2>
                  <img id='icono' class='col-6'src="../media/imagenes/iconos/aniquilador.png" alt="">
                </div>
                <div class="row justify-content-evenly">
                  <div class="col-md-6" id="video">
                    <video width="500" height="500" class='mx-auto' autoplay muted loop >
                      <source src="../media/videos campeones/kaisa.mp4" type="video/mp4">
                    </video>
                  </div>
                  <p id="descripcion" class="col-md-6">
                    Los Aniquiladores son campeones altamente móviles que se especializan en daño de ráfaga de un solo objetivo. Por lo general, carecen de resiliencia, compensan con creces su potencial para cubrir grandes distancias, eliminan rápidamente objetivos prioritarios y se retiran con la misma rapidez. Representando un estilo de juego de alto riesgo y alta recompensa, los asesinos son oportunistas naturales y prefieren atacar cuando sus objetivos están solos y vulnerables.</p>
                </div>
              </div>
            </div>
            <div class="seccion2 container">
              <div class="slider-campeones container">
                <div class="row justify-content-between">
                  <h2 class="col-6">CLASE:TANQUE</h2>
                  <img id='icono' class='col-6'src="../media/imagenes/iconos/tanque.png" alt="">
                </div>
                <div class="row justify-content-evenly">
                  <div class="col-md-6" id="video">
                    <video width="500" height="500" class='mx-auto' autoplay muted loop >
                      <source src="../media/videos campeones/shen.mp4" type="video/mp4">
                    </video>
                  </div>
                  <p id="descripcion" class="col-md-6">
                    Los Tanques son campeones de combate cuerpo a cuerpo que sacrifican el daño a cambio de un poderoso control de masas. Si bien son capaces de enfrentarse a enemigos en combate, el objetivo de un tanque no es matar enemigos; más bien, los tanques se destacan por desestabilizar a los enemigos y desviar el foco hacia ellos mismos, lo que les permite bloquear objetivos específicos, así como eliminar amenazas de sus aliados.
                    </p>
                </div>
              </div>
            </div>
            <div class="seccion2 container">
              <div class="slider-campeones container">
  
                <div class="row justify-content-between">
                  <h2 class="col-6">CLASE:MAGO</h2>
                  <img id='icono' class='col-6'src="../media/imagenes/iconos/mago.png" alt="">
                </div>
                <div class="row justify-content-evenly">
                  <div class="col-md-6" id="video">
                    <video width="500" height="500" class='mx-auto' autoplay muted loop >
                      <source src="../media/videos campeones/lux.mp4" type="video/mp4">
                    </video>
                  </div>
                  <p id="descripcion" class="col-md-6">
                    Los Magos son campeones que normalmente poseen gran alcance, daño de área de efecto basado en la habilidad y control de masas, y que usan todas estas fortalezas en tándem entre sí para atrapar y destruir enemigos desde la distancia. Especializados en daño mágico, a menudo en ráfagas y, por lo tanto, invierten mucho en objetos que les permiten lanzar hechizos más fuertes y rápidos, los magos se destacan en encadenar sus habilidades en poderosos combos para ganar peleas.
                  </p>
                </div>
              </div>
            </div>
            <div class="seccion2 container">
              <div class="slider-campeones container">
                <div class="row justify-content-between">
                  <h2 class="col-6">CLASE:CONTROLADOR</h2>
                  <img id='icono' class='col-6'src="../media/imagenes/iconos/controlador.png" alt="">
                </div>
                <div class="row justify-content-evenly">
                  <div class="col-md-6" id="video">
                    <video width="500" height="500" class='mx-auto' autoplay muted loop >
                      <source src="../media/videos campeones/tresh.mp4" type="video/mp4">
                    </video>
                  </div>
                  <p id="descripcion" class="col-md-6">
                    Los Controladores ayudan a sus aliados con una potente utilidad y mantienen a los enemigos a raya con el control de masas. Débiles cuando están solos, los controladores son capaces de amplificar enormemente el poder de sus compañeros de equipo para convertirse en la clase más fuerte en combate grupal (o "luchas en equipo"), proporcionando utilidad crucial o control de masas en momentos difíciles para salvar a los aliados de la muerte y permitir derribos en el equipo enemigo
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="chat-header">
              <h2>Comunidad</h2>
          </div>
          <div class="chat-container">
            <div class="chat-history"  id="chat-history">
                <!-- Aquí van los mensajes del chat -->
            </div>
            <div class="chat-input">
                <form onsubmit="enviarMensaje(event);">
                    <input id="mensaje" type="text" placeholder="Escribe tu mensaje aquí">
                    <button type="submit">Enviar</button>
                </form>
            </div>
          </div>
        </section>
        <div class="container d-flex justify-content-cente" >
          <a class="mx-auto" href="https://www.dynos.es/ofertas"> <img  class="mx-auto"src="../media/imagenes/anuncios/anuncio2.png" id="anuncio" alt=""></a>
        </div>
    </main>
  <div class="container my-5" id="footer">
    <footer class="text-center text-white " >
      <div class="container">
        <section class="mt-5">
          <div class="row text-center d-flex justify-content-center pt-5">
            <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="./about_us.php" class="text-white">Sobre Nosotros</a>
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