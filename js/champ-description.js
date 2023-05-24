function getCookie(cname) {
  const name = cname + "=";
  const decodedCookie = decodeURIComponent(document.cookie);
  const cookieArray = decodedCookie.split(';');

  for(let i = 0; i < cookieArray.length; i++) {
    let cookie = cookieArray[i];
    while (cookie.charAt(0) === ' ') {
      cookie = cookie.substring(1);
    }
    if (cookie.indexOf(name) === 0) {
      return cookie.substring(name.length, cookie.length);
    }
  }
  return "";
}
var championName =''; 

  var valor=getCookie('campeon');
  
  if (typeof valor !== 'undefined') {
    championName = valor;
  }else{
    window.location='./principal';
  }
  



fetch('http://ddragon.leagueoflegends.com/cdn/13.9.1/data/es_ES/champion/' + championName + '.json')
  .then(response => response.json())
  .then(data => {
    var name = data.data[championName].name;
    var title = data.data[championName].title;
    var description = data.data[championName].blurb;
    var champPassive = data.data[championName].passive;
    var champQ = data.data[championName].spells[0];
    var champW = data.data[championName].spells[1];
    var champE = data.data[championName].spells[2];
    var champR = data.data[championName].spells[3];
    var body = document.getElementsByTagName('body')[0];
    var mainContainer = document.getElementById("main-container");
    var champName = document.getElementById("champ-name");
    var champTitle = document.getElementById("champ-title");
    var champDescription = document.getElementById("champ-description");
    var passive = document.getElementById("passive");
    var q = document.getElementById("q");
    var w = document.getElementById("w");
    var e = document.getElementById("es");
    var r = document.getElementById("r");
    var abilityDescr = document.getElementById("descr");

    
    champName.innerHTML = name;
    champTitle.innerHTML = title;
    champDescription.innerHTML = description;
    body.style.backgroundImage= "url('http://ddragon.leagueoflegends.com/cdn/img/champion/splash/" + championName + "_0.jpg')";
    //mainContainer.style.backgroundImage= "url('http://ddragon.leagueoflegends.com/cdn/img/champion/splash/" + championName + "_0.jpg')";
    passive.style.backgroundImage="url('http://ddragon.leagueoflegends.com/cdn/13.9.1/img/passive/" + champPassive.image.full + "')";
    q.style.backgroundImage="url('http://ddragon.leagueoflegends.com/cdn/13.9.1/img/spell/" + champQ.image.full + "')";
    w.style.backgroundImage="url('http://ddragon.leagueoflegends.com/cdn/13.9.1/img/spell/" + champW.image.full + "')";
    e.style.backgroundImage="url('http://ddragon.leagueoflegends.com/cdn/13.9.1/img/spell/" + champE.image.full + "')";
    r.style.backgroundImage="url('http://ddragon.leagueoflegends.com/cdn/13.9.1/img/spell/" + champR.image.full + "')";
    
    var info = data.data[championName].info;
    var attack = info.attack;
    var defense = info.defense;
    var magic = info.magic;
    var difficulty = info.difficulty;

    var champAttack = document.getElementById("attack");
    var champDefense = document.getElementById("defense");
    var champMage = document.getElementById("mage");
    var champDifficulty = document.getElementById("difficulty");

    champAttack.style.width = (attack / 10) * 100 + "%";
    champDefense.style.width = (defense / 10) * 100 + "%";
    champMage.style.width = (magic / 10) * 100 + "%";
    champDifficulty.style.width = (difficulty / 10) * 100 + "%";

    
  })
  .catch(error => {
    console.log('Error:', error);
  });