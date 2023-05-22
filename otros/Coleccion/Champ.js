export class Champ {
    constructor(champ, mastery){
        this.name = champ.name;
        this.id = champ.id;
        this.key = champ.key;
        this.info = champ.info;
        this.stats = champ.stats;
        this.tags = champ.tags;
        this.blurb = champ.blurb;
        this.title = champ.title;
        this.setMastery(mastery);
    }
    setMastery(mastery){
        if(mastery != undefined) {
            this.mastery = mastery.championPoints;
            this.level = mastery.championLevel;
            this.chestGranted = mastery.chestGranted;
        }
        if(mastery === undefined) {
            this.mastery = 0;
            this.level = 0;
            this.chestGranted = 0;
        }
        this.setMasteryIcon(this.level);
    }
    setMasteryIcon(level){
        if (level<4) {
            this.masteryIcon = null;
        }
        if (level>=4) {
            this.masteryIcon = "./img/masteryIcon/mastery_icon_" + level + ".png";
        }
    }
}