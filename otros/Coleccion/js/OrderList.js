export class OrderList {
    static orderByMastery(champList){
        let masteryList = Array.from(champList);
        masteryList.sort(function(a, b){
            return b.mastery - a.mastery;
        });
        return masteryList;
    }
    static orderByTag(champList, tags){
        let tagList = new Map();
        for (const tag of tags) {
            tagList.set(tag, new Array());
            for (const champ of champList) {
                for (const tagChamp of champ.tags) {
                    if(tag == tagChamp){
                        tagList.get(tag).push(champ);
                        break;
                    }
                }
            }
        }
        return tagList;
    }
}