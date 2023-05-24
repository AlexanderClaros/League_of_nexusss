
<!DOCTYPE html>
<html>
<head>
	<title>League of Legends - Profile</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<style>
        @import url('https://fonts.googleapis.com/css?family=Friz Quadrata');
		body {
		font-family: 'Friz Quadrata', sans-serif;
        font-size: 16px;
        line-height: 1.5;
		}

        body {
        cursor: blue;
        background-color:#091428;
        background-image: url('https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/bltc28d43095579c8b5/5d87c24e8d8a3163705e3070/summonersrift.jpg');
        }
		
		header {
            background-image: url('https://raw.communitydragon.org/latest/plugins/rcp-fe-lol-static-assets/global/default/images/lcu-article-backdrop.jpg');
			background-color: #1E1E1E;
			color: #C28F38;
			padding: 20px;
			text-align: center;
			font-size: 40px;
			font-weight: bold;
            border-bottom: 4px solid #785A28;
            border-radius: 10px;
        
		}

            .button-49,
            .button-49:after {
    
            width: 150px;
            height: 76px;
            line-height: 78px;
            font-size: 20px;
            font-family: 'Friz Quadrata', sans-serif;
            background-image: url('https://raw.communitydragon.org/latest/plugins/rcp-fe-lol-static-assets/global/default/images/lcu-article-backdrop.jpg');
            border: 0;
            color: #fff;
            letter-spacing: 3px;
            box-shadow: 6px 0px 0px #785A28;
            outline: transparent;
            position: relative;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            float: left;
            margin:-10px;
       
            }

            .button-49:after {
            --slice-0: inset(50% 50% 50% 50%);
            --slice-1: inset(80% -6px 0 0);
            --slice-2: inset(50% -6px 30% 0);
            --slice-3: inset(10% -6px 85% 0);
            --slice-4: inset(40% -6px 43% 0);
            --slice-5: inset(80% -6px 5% 0);
            
            content: 'INICIO';
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 3%, #00E6F6 3%, #00E6F6 5%, #FF013C 5%);
            text-shadow: -3px -3px 0px #F8F005, 3px 3px 0px #00E6F6;
            clip-path: var(--slice-0);
            }

            .button-49:hover:after {
            animation: 1s glitch;
            animation-timing-function: steps(2, end);
            }

            @keyframes glitch {
            0% {
                clip-path: var(--slice-1);
                transform: translate(-20px, -10px);
            }
            10% {
                clip-path: var(--slice-3);
                transform: translate(10px, 10px);
            }
            20% {
                clip-path: var(--slice-1);
                transform: translate(-10px, 10px);
            }
            30% {
                clip-path: var(--slice-3);
                transform: translate(0px, 5px);
            }
            40% {
                clip-path: var(--slice-2);
                transform: translate(-5px, 0px);
            }
            50% {
                clip-path: var(--slice-3);
                transform: translate(5px, 0px);
            }
            60% {
                clip-path: var(--slice-4);
                transform: translate(5px, 10px);
            }
            70% {
                clip-path: var(--slice-2);
                transform: translate(-10px, 10px);
            }
            80% {
                clip-path: var(--slice-5);
                transform: translate(20px, -10px);
            }
            90% {
                clip-path: var(--slice-1);
                transform: translate(-10px, 0px);
            }
            100% {
                clip-path: var(--slice-1);
                transform: translate(0);
            }
            }

            @media (min-width: 768px) {
            .button-49,
            .button-49:after {
                width: 200px;
                height: 86px;
                line-height: 88px;
            }
            }

        
		
		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
            text-align: left;
		}
		
		.profile-picture {
			width: 200px;
			height: 200px;
			border-radius: 50%;
			background-color: #1E1E1E;
			margin-bottom: 20px;
			overflow: hidden;
		}

		.profile-picture img {
			width: 100%;
		}
		
		.profile-name {
			font-size: 36px;
			font-weight: bold;
            margin-top:20px;
			margin-bottom: 30px;
            color:white;
		}

        .profile-level {
			font-size: 36px;
			font-weight: bold;
            margin-top:20px;
			margin-bottom: 30px;
            color:white;
		}
		
		.profile-info {
			display: flex;
			flex-direction: row;
			margin-bottom: 20px;
		}
		
		.info-section {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin: 50px 20px;
			padding: 20px;
			background-color: #F5F5F5;
			border-radius: 10px;
			box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
			text-align: center;
		}
		
		.section-header {
			font-size: 18px;
			font-weight: bold;
			margin-bottom: 10px;
		}
		
		.section-content {
			font-size: 24px;
			font-weight: bold;
		}
	</style>
</head>
<body>
    
	<header><button class="button-49" role="button" onclick="window.location.href = 'https://leagueofnexus.epizy.com/League_of_nexus-main/php/principal.php';">Volver al Inicio</button>Perfil de Invocador</header>
	<div class="container">
        <div class="profile-level">Nivel:</div>
		<div class="profile-picture"></div>
		<div class="profile-name"></div>
		<div class="profile-info">
            <div class="info-section elo">
				<div class="section-header">Elo</div>
				<div class="section-content"></div>
			</div>
			<div class="info-section mastery">
				<div class="section-header">Puntos de Maestría Totales</div>
				<div class="section-content"></div>
			</div>
		</div>
	</div>
	<script>
		function setProfile(){
			const xhttp = new XMLHttpRequest();
			xhttp.onload = function(){
				let respuesta = JSON.parse(this.responseText);
				console.log(respuesta);
				const numIcon = respuesta.profileIconId;
				$(".profile-name").text(respuesta.name);
				$(".profile-picture").html("<img src='https://ddragon.leagueoflegends.com/cdn/13.10.1/img/profileicon/" + numIcon + ".png'>");
				$(".profile-level").text("Nivel: " + respuesta.summonerLevel);

			}
			xhttp.open("GET", "https://euw1.api.riotgames.com/lol/summoner/v4/summoners/0y303SMUsJl2Hs04lQbINsPTHJ1J46YM1f-wBZR6U5M16_c?api_key=RGAPI-9f9b1872-10bc-4ea8-b546-296af538d1c2");
			xhttp.send();
		}
		function setElo(){
			const xhttp = new XMLHttpRequest();
			xhttp.onload = function(){
				let respuesta = JSON.parse(this.responseText);
				console.log(respuesta);
				$(".elo .section-content").text(respuesta[0].tier + " " + respuesta[0].rank);
			}
			xhttp.open("GET", "https://euw1.api.riotgames.com/lol/league/v4/entries/by-summoner/0y303SMUsJl2Hs04lQbINsPTHJ1J46YM1f-wBZR6U5M16_c?api_key=RGAPI-9f9b1872-10bc-4ea8-b546-296af538d1c2");
			xhttp.send();
		}
		function setMastery(){
			const xhttp = new XMLHttpRequest();
			xhttp.onload = function(){
				let respuesta = JSON.parse(this.responseText);
				console.log(respuesta);
				$(".mastery .section-content").text(respuesta);
			}
			xhttp.open("GET", "https://euw1.api.riotgames.com/lol/champion-mastery/v4/scores/by-summoner/0y303SMUsJl2Hs04lQbINsPTHJ1J46YM1f-wBZR6U5M16_c?api_key=RGAPI-9f9b1872-10bc-4ea8-b546-296af538d1c2");
			xhttp.send();
		}

		setProfile();
		setElo();
		setMastery();
	</script>
</body>
</html>

<?php


?>