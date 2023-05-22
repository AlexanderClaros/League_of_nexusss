<?php

$usuario = $_POST['usuario'];
$region=$_POST['region'];
$apikey="RGAPI-9f9b1872-10bc-4ea8-b546-296af538d1c2";
$peticion="https://".$region.".api.riotgames.com/lol/summoner/v4/summoners/by-name/".$usuario ."?api_key=RGAPI-9f9b1872-10bc-4ea8-b546-296af538d1c2";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $peticion); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_HEADER, 0); 
$data = curl_exec($ch); 
curl_close($ch); 
$info= explode(",",$data);
echo($info[1]);
if (str_contains($info[1],"\"status_code\":404" ) == true) {
    header("Location:../index.php");
}else{
    $id_list= explode(":",$info[0]);
    $id = str_replace("\"","",$id_list[1]);
    $iconlist= explode(":",$info[4]);
    $datos =[$usuario,$iconlist[1],$id];
    setcookie('user',serialize($datos),time()+(60*20));
    header("Location:principal.php");
}


?>