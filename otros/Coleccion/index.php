<?php
    $id = "0y303SMUsJl2Hs04lQbINsPTHJ1J46YM1f-wBZR6U5M16_c";
    /*if(isset($_COOKIE["user"])){

    }*/
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>League of Nexus</title>
        <link rel="stylesheet" href="./css/styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>
    <body>
        <div class="header">
            <h1>Colección</h1>
        </div>
        <div class="mainFrame">
            <div class="sideLeft">
                <div class="mastery">
                    <div class="totalPoints"></div>
                    <p>Puntuación total de maestría</p>
                </div>
                <div class="filter">
                    <div class="orderCustom orderChamp">
                        <div class="option firstOp selected" data-value="0">Alfabético</div>
                        <div class="option lastOp" data-value="1">Maestría</div>
                    </div>
                    <div class="orderCustom orderRol">
                        <div class="option firstOp selected" data-value="0">Por defecto</div>
                        <div class="option lastOp" data-value="1">Rol</div>
                    </div> 
                </div>
            </div>
            <div class="listCollection"></div>
        </div>
        <script type="module" src="./js/index.js"></script>
    </body>
</html>