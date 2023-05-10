var slider=$('.slider');
        var siguiente=$('#btn-next');
        var anterior=$('#btn-prev');
        $(document).ready(function(){
            $('.slider div:last').insertBefore('.slider div:first');
            $('.slider').css('margin-left','-'+100+'%');
                function moverD() {
                    $('.slider').animate({
                        marginLeft:'-200%'
                    },700,function(){
                        $('.slider div:first').insertAfter('.slider div:last');
                        $('.slider').css('margin-left','-'+100+'%');
                    });
                }
                function moverI() {
                    $('.slider').animate({
                        marginLeft:0
                    },700,function(){
                        $('.slider div:last').insertBefore('.slider div:first');
                        $('.slider').css('margin-left','-'+100+'%');
                    });
                }
            $('#btn-next').click(function(){
                moverD();
            });
            $('#btn-prev').click(function(){
                moverI();
            });
           
        });