import { SplashChamp } from "./SplashChamp.js";

export class MostrarChamps {
    static mostrarPorDefecto(lista){
        for(let campeon of lista.values()){
            let splashChamp = new SplashChamp(campeon);
            $(".listCollection").append(splashChamp);
        }
    }
    static mostrarPorRol(lista){
        
    }
}