import { MostrarChamps } from "./MostrarChamps.js";
export function filterSelect(champList) {
    $(".orderChamp .option").click(function(){
        if(!$(this).hasClass("selected")){
            let val = $(this).attr("data-value");
            let valRol = $(".orderRol .selected").attr("data-value");

            $(".orderChamp .option").removeClass("selected");
            $(this).addClass("selected");
            $(".listCollection").empty();

            if(val == 0){
                if(valRol == 0){
                    MostrarChamps.mostrarPorDefecto(champList.list);
                }
                if(valRol == 1){
                    MostrarChamps.mostrarPorRol(champList.list);
                }
            }
            if(val == 1){
                if(valRol == 0){
                    MostrarChamps.mostrarPorDefecto(champList.masteryList);
                }
                if(valRol == 1){
                    MostrarChamps.mostrarPorRol(champList.masteryList);
                }
            }
        }
    });
    /*$(".orderRol .option").click(function(){
        if(!$(this).hasClass("selected")){
            let valRol = $(this).attr("data-value");
            let val = $(".orderChamp .selected").attr("data-value");

            $(".orderRol .option").removeClass("selected");
            $(this).addClass("selected");
            $(".listCollection").empty();

            if(val == 0){
                if(valRol == 0){
                    MostrarChamps.mostrarPorDefecto(champList.list);
                }
                if(valRol == 1){
                    MostrarChamps.mostrarPorRol(champList.list);
                }
            }
            if(val == 1){
                if(valRol == 0){
                    MostrarChamps.mostrarPorDefecto(champList.masteryList);
                }
                if(valRol == 1){
                    MostrarChamps.mostrarPorRol(champList.masteryList);
                }
            }
        }
    });*/
}