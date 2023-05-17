var championName = "Aatrox";

fetch('http://ddragon.leagueoflegends.com/cdn/13.9.1/data/es_ES/champion/' + championName + '.json')
  .then(response => response.json())
  .then(data => {
    console.log(data);
    var name = data.data[championName].name;
    var title = data.data[championName].title;
    var description = data.data[championName].blurb;
    var champPassive = data.data[championName].passive.image.full;
    var champQ = data.data[championName].spells[0].image.full;
    var champW = data.data[championName].spells[1].image.full;
    var champE = data.data[championName].spells[2].image.full;
    var champR = data.data[championName].spells[3].image.full;
    
    var mainContainer = document.getElementById("main-container");
    var champName = document.getElementById("champ-name");
    var champTitle = document.getElementById("champ-title");
    var champDescription = document.getElementById("champ-description");
    var passive = document.getElementById("passive");
    var q = document.getElementById("q");
    var w = document.getElementById("w");
    var e = document.getElementById("e");
    var r = document.getElementById("r");
    
    champName.innerHTML = name;
    champTitle.innerHTML = title;
    champDescription.innerHTML = description;
    mainContainer.style.backgroundImage= "url('http://ddragon.leagueoflegends.com/cdn/img/champion/splash/" + championName + "_0.jpg')";
    passive.style.backgroundImage="url('http://ddragon.leagueoflegends.com/cdn/13.9.1/img/passive/" + champPassive + "')";
    q.style.backgroundImage="url('http://ddragon.leagueoflegends.com/cdn/13.9.1/img/spell/" + champQ + "')";
    w.style.backgroundImage="url('http://ddragon.leagueoflegends.com/cdn/13.9.1/img/spell/" + champW + "')";
    e.style.backgroundImage="url('http://ddragon.leagueoflegends.com/cdn/13.9.1/img/spell/" + champE + "')";
    r.style.backgroundImage="url('http://ddragon.leagueoflegends.com/cdn/13.9.1/img/spell/" + champR + "')";
    
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