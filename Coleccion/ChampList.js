export class ChampList{
    constructor(){
        this.list = new Array();
        this.masteryList = new Array();
        this.numChamps = 0;
    }
    addChamp(champ){
        this.list.push(champ);
        this.numChamps++;
    }
    addMasteryChamp(champ){
        this.masteryList.push(champ);
    }
    setNumChamps(num){
        this.numChamps = num;
    }
    
}