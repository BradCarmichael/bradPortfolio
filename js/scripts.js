

$(function(){

	      window.sr = ScrollReveal();
            sr.reveal('.scroll-reveal', { duration: 700 });
      });

        $('a').smoothScroll({
            speed: 600,
      });

  		$('.hamburger').on('click', function(){
  			$('#menu-primary-nav-menu').slideToggle();
  		});

      $('#menu-primary-nav-menu li a').on('click',function(){
            var w = window.innerWidth
            || document.documentElement.clientWidth
            || document.body.clientWidth;

            var h = window.innerHeight
            || document.documentElement.clientHeight
            || document.body.clientHeight;

            if (w < 600) {             
             $('#menu-primary-nav-menu').slideUp('slow');
             console.log('its working!')  
            }
});


