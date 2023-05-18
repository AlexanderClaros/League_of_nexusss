<?php
$usuario = $_POST['usuario'];
$apikey="RGAPI-9f9b1872-10bc-4ea8-b546-296af538d1c2";
$peticion="https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name/".$usuario ."?api_key=RGAPI-9f9b1872-10bc-4ea8-b546-296af538d1c2";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $peticion); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_HEADER, 0); 
$data = curl_exec($ch); 
curl_close($ch); 
$info= explode(",",$data);
$id_list= explode(":",$info[0]);
$id = str_replace("\"","",$id_list[1]);
$datos =[$usuario,$id];
setcookie('user',serialize($datos),time()+(60*10));
header("Location:principal.php");
?>