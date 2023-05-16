import { ChampList } from "./ChampList.js";
import { Champ } from "./Champ.js";
import { SplashChamp } from "./SplashChamp.js";
id = "0y303SMUsJl2Hs04lQbINsPTHJ1J46YM1f-wBZR6U5M16_c";
accountID = "H7kyqu-jNSPUnoEhP1v59x2rq3fL0WoZed4E2TByWiZSlng";
puuid = "ylIV5OR4l0hThkcBtCYZEEK90-STDkegpZW6osr-MqMlzNx4X4D9FImcMqe5BO9GDpOwhMyfGmF8ZQ";
function showChampList(champList){
    for(let campeon of champList.list.values()){
        let splashChamp = new SplashChamp(campeon);
        $(".listCollection").append(splashChamp);
    }
}

function solicitarMaestriaCampeones(list){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
        let champList = createChamps(list, JSON.parse(this.responseText));
        showChampList(champList);
    }
    xhttp.open("GET", "https://euw1.api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-summoner/0y303SMUsJl2Hs04lQbINsPTHJ1J46YM1f-wBZR6U5M16_c?api_key=RGAPI-9f9b1872-10bc-4ea8-b546-296af538d1c2");
    xhttp.send();
}

function solicitudListaCampeones(champList){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
        let champList = JSON.parse(this.responseText).data;
        solicitarMaestriaCampeones(champList);
    }
    xhttp.open("GET", "http://ddragon.leagueoflegends.com/cdn/13.9.1/data/en_US/champion.json");
    xhttp.send();
}

function createChamps(list, masteryList){
    let champList = new ChampList();
    for (let [key, val] of Object.entries(list)) {
        let masteryAsoc = masteryList.find(function(mastery){
            return mastery.championId == val.key;
        });
        console.log(masteryAsoc);
        let champ = new Champ(val, masteryAsoc);
        champList.addChamp(champ);
    }
    return champList;
}


solicitudListaCampeones();



