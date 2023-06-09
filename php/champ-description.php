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
    <link rel="stylesheet" href="../css/champ-description.css">
    <link rel="shortcut icon" href="../media/imagenes/general/logo_inicio.png">
</head>
<body>
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
            <a href="perfil.php" id='perfil'><p><?php echo($datos[0]);?></p><div id="icono-jugador"></div></a>
            <script> 
              var numIcon =<?php echo($datos[1]); ?>;
              var imagen = document.createElement("img");
              imagen.setAttribute('src',`https://ddragon.leagueoflegends.com/cdn/13.10.1/img/profileicon/`+numIcon+`.png`)
              document.getElementById("icono-jugador").appendChild(imagen);
            </script>
          <?php } ?>
        </div>
      </div>
    </nav>
    <div id="campeones_predict_list"> <div></div></div>
  </header>
  <div id="main-container" class="main-container">
    <div class="overlay"></div>
    <div class="container" id='info'>
        <!-- Contenido del contenedor izquierdo -->
        <div class="champion-info">
          <div class="champion-details">
            <h1 id="champ-name"></h1>
            <p id="champ-title"></p>
            <p id="champ-description"></p>
          </div>
        </div>
        <div class="stats">
          <img src="../media/imagenes/iconos/attack.png"></img>
          <h2>Ataque</h2>
          <div class="stat">
            <div id="attack"></div>
          </div>
          <img src="../media/imagenes/iconos/deffense.png"></img>
          <h2>Defensa</h2>
          <div class="stat">
            <div id="defense"></div>
          </div>
          <img src="../media/imagenes/iconos/mage.png"></img>
          <h2>Magia</h2>
          <div class="stat">
            <div id="mage"></div>
          </div>
          <img src="../media/imagenes/iconos/diff.png"></img>
          <h2>Dificultad</h2>
          <div class="stat">
            <div id="difficulty"></div>
          </div>
        </div>
        <div id="descr"><p id="desc"></p></div>
        <div class="container" id="right">
          <div id="passive" onmouseover="printData(this.id)" onmouseout="clear()"></div>
          <div id="q" onmouseover="printData(this.id)" onmouseout="clear()"></div>
          <div id="w" onmouseover="printData(this.id)" onmouseout="clear()"></div>
          <div id="es" onmouseover="printData(this.id)" onmouseout="clear()"></div>
          <div id="r" onmouseover="printData(this.id)" onmouseout="clear()"></div>
        </div>
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
  </div>
  <script src="../js/champ-description.js"></script>
  <script>
    var champ = getCookie('campeon');

    var passive = document.getElementById("passive");
    var q = document.getElementById("q");
    var w = document.getElementById("w");
    var e = document.getElementById("es");
    var r = document.getElementById("r");

    passive.addEventListener("mouseout", clear);
    q.addEventListener("mouseout", clear);
    w.addEventListener("mouseout", clear);
    e.addEventListener("mouseout", clear);
    r.addEventListener("mouseout", clear);

    function printData(id) {
      var containerDescr = document.getElementById("descr");
      containerDescr.style.display="block";
      var abilityDesc = document.getElementById("desc");

      fetch('https://ddragon.leagueoflegends.com/cdn/13.9.1/data/es_ES/champion/' + champ + '.json')
        .then(response => response.json())
        .then(data => {
          var champPassive = data.data[championName].passive;
          var champQ = data.data[championName].spells[0];
          var champW = data.data[championName].spells[1];
          var champE = data.data[championName].spells[2];
          var champR = data.data[championName].spells[3];
          console.log(champE.description);
          if (id == "q") {
            abilityDesc.innerHTML = `<h2>`+champQ.name+`</h2>`+champQ.description.replace("\"", "");
          } else if (id == "w") {
            abilityDesc.innerHTML = `<h2>`+champW.name+`</h2>`+champW.description.replace("\"", "");
          } else if (id == "es") {
            abilityDesc.innerHTML = `<h2>`+champE.name+`</h2>`+champE.description.replace("\"", "");
          } else if (id == "r") {
            abilityDesc.innerHTML = `<h2>`+champR.name+`</h2>`+champR.description.replace("\"", "");
          } else if( id=='passive'){
            abilityDesc.innerHTML = `<h2>`+champPassive.name+`</h2>`+champPassive.description.replace("\"", "");
          }

        })
        .catch(error => {
          console.log('Error:', error);
        });
    }

    function clear() {
      var containerDescr = document.getElementById("descr");
      containerDescr.style.display="none";
    }
  </script>
</body>
</html>

