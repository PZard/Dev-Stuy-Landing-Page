function addFadeIn (element) {
    $(document).ready(function() {
        var alturaViewport  = $(window).height();
        var alturaElemento  = $(element).height();
        var diferenca       = alturaElemento - alturaViewport;
        var chegou          = false;
    
        $(window).scroll(function() {
    
            var posicaoScroll   = $(window).scrollTop();
    
            if(!chegou){
                if (posicaoScroll >= (diferenca)) {
                    $(element).addClass("fadein");
                    chegou = true;
                }
            }
        });
    });
}

addFadeIn('.qualities-items');