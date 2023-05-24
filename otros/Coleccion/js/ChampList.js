import { OrderList } from "./OrderList.js";
export class ChampList{
    constructor(){
        this.list = new Array();
        this.masteryList = new Array();
        this.tagList = new Map();
        this.tags = new Array();
        this.numChamps = 0;
    }
    addChamp(champ){
        this.list.push(champ);
        this.validateTag(champ.tags);
        this.numChamps++;
    }
    addMasteryChamp(champ){
        this.masteryList.push(champ);
    }
    setNumChamps(num){
        this.numChamps = num;
    }
    complete(){
        this.createMasteryList();
        this.createTagList();
    }
    createMasteryList(){
        this.masteryList = OrderList.orderByMastery(this.list);
    }
    createTagList(){
        this.tagList = OrderList.orderByTag(this.list, this.tags);
    }
    validateTag(tags){
        for (const i of tags) {
            if(!this.tags.includes(i)){
                this.addNewTag(i);
            }
        }
    }
    addNewTag(tag){
        this.tags.push(tag);
    }
}