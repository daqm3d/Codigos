/*****************************************************************************************************************************/
/*   Pagina Web Creada en el Proyecto de Practica Profecionales  de la Carera de Analisis y Diceño de Sistemas de la UNEFA   */
/*                     Creador: Deivy Armando Quintero Martinez, uvicanos a traves de: DAQM3D@GMAIL.COM                      */
/*****************************************************************************************************************************/

//*********************************   menu responsive   ********************************/
$(document).ready(main); /* cargado de toda la pantalla */
var contador = 1;  

function main() { 
	$('.menu_bar').click(function(){
		if(contador == 1){
            $("body").addClass("noscroll"); 
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
            $("body").removeClass("noscroll");
			$('nav').animate({
				left: '-100%'
			});
		}
	});
    
//************************************   sub menu   ************************************/
    $('.submenu').click(function(){
        $(this).children('.children').slideToggle();
    });
    
//**********************************   menu pegajoso   *********************************/
    $(document).ready(function(){
        var altura= $('header').offset().top;
        
        $(window).on('scroll', function(){
            if($(window).scrollTop() > altura ){
               $('.menu').addClass('menu-fixed'); 
               }else{
                   $('.menu').removeClass('menu-fixed');
               }
        });
    });
    
//******************************   Slideshow principal   ******************************/
    var slider=$('.slider');
    var siguiente=$('.btn-next'); 
    var anterior=$('.btn-prev');
    
    $('.slider section:last').insertBefore('.slider section:first');
    slider.css('margin-left','-'+100+'%');
    function moverD() {
        slider.animate({marginLeft:'-'+200+'%'} ,700, function(){
            $('.slider section:first').insertAfter('.slider section:last');
            slider.css('margin-left','-'+100+'%');
        });
    }
    function moverI() {
        slider.animate({marginLeft:0} ,700, function(){
            $('.slider section:last').insertBefore('.slider section:first');
            slider.css('margin-left','-'+100+'%');
        });
    }
    siguiente.on('click',function(){
        moverD();
    });
    anterior.on('click',function(){
        moverI();
    });
    
//*****************************   Slideshow automatico   *****************************/
    function autoplay(){
        interval= setInterval(function(){
            moverD()
        }, 12000);
    }
    autoplay();
    
/**/
    
}

/*****************************************************************************************************************************/
/*   Pagina Web Creada en el Proyecto de Practica Profecionales  de la Carera de Analisis y Diceño de Sistemas de la UNEFA   */
/*                     Creador: Deivy Armando Quintero Martinez, uvicanos a traves de: DAQM3D@GMAIL.COM                      */
/*****************************************************************************************************************************/