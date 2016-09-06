

$(function(){

	      window.sr = ScrollReveal();
            sr.reveal('scroll-reveal', { duration: 700 });
            // sr.reveal('.bar');
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


      // smooth scroll
      $('a[href*="#"]:not([href="#"])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                  $('html, body').animate({
                      scrollTop: target.offset().top
                  }, 1000);
                  return false;
              }
          }
      });
// });

