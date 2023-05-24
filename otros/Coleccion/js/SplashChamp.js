export class SplashChamp extends HTMLElement{
    constructor(campeon){
        super();
        this.campeon = campeon;
        this.setAttributes();
        this.setImage(campeon.id);
        this.setNombre(campeon.name);
        this.setMastery(campeon);
    }
    setAttributes(){
        $(this).attr("class", "champFrame");
    }
    setImage(id){
        let img = $("<img/>");
        img.attr("src", "https://ddragon.leagueoflegends.com/cdn/img/champion/loading/" + id + "_0.jpg");
        $(this).append(img);
    }
    setNombre(name){
        let div = $("<div></div>");
        div.attr("class", "bannerNameChamp");
        $(this).append(div);
        let p = $("<p></p>");
        p.text(name.toUpperCase());
        div.append(p);
    }
    setMastery(campeon){
        let div = $("<div></div>");
        div.attr("class", "bannerMasteryChamp");
        $(this).append(div);
        let p = $("<p></p>");
        p.attr("class", "pMasteryPoints");
        p.text(campeon.mastery.toLocaleString('en-US').replace(/,/g, ".") + " pts");
        div.append(p);
        this.setMasteryIcon(div, campeon.masteryIcon);
    }
    setMasteryIcon(div, icon) {
        if(icon){
            let divMasteryIcon = $("<div></div>");
            divMasteryIcon.attr("class", "divMasteryIcon");
            let masteryIcon = $("<img/>");
            masteryIcon.attr("src", icon);
            divMasteryIcon.append(masteryIcon);
            div.append(divMasteryIcon);
        }
    }
}
customElements.define("splash-champ", SplashChamp);