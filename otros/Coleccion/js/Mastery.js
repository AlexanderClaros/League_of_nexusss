export class Mastery {
    static setMastery(){
        this.getMastery().then((mastery) => {
            $(".totalPoints").text(mastery);
        });
    }
    static async getMastery(){
        const response = await fetch("https://euw1.api.riotgames.com/lol/champion-mastery/v4/scores/by-summoner/0y303SMUsJl2Hs04lQbINsPTHJ1J46YM1f-wBZR6U5M16_c?api_key=RGAPI-9f9b1872-10bc-4ea8-b546-296af538d1c2");
        const mastery = await response.text();
        return mastery;
    }

}