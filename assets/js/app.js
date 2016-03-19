$(function(){
    /*********************
    Menu Responsive
    *********************/
    var menu = "oculto";
    $(".menu-responsive a").click(function(e){
        if(menu == "oculto")
        {
            $(".menu-responsive a span").removeClass("icon-menu");
            $(".menu-responsive a span").addClass("icon-cross");
            $("#menu").css({
                "display" : "block"
            });
            menu = "desplegado";
        }
        else
        {
            $("#menu").css({
                "display": "none"
            });
            menu = "oculto";
            $(".menu-responsive a span").addClass("icon-menu");
            $(".menu-responsive a span").removeClass("icon-cross");
        }
        e.preventDefault();
    });
    /*********************
    Boton de ir arriba
    *********************/ 
    $('.ir-arriba').click(function(){
        $('body, html').animate({
            scrollTop: '0px'
        }, 1000, 'easeInQuart');
    });

    $(window).scroll(function(){
        if( $(this).scrollTop() > 0 )
        {
            $('.ir-arriba').slideDown(300);
        }
        else
        {
            $('.ir-arriba').slideUp(300);
        }
    });
});