<footer>
  <div class="container">
        <div class="second-nav-wrap">
            <div class="second-nav-box">
                <?php 
                	wp_nav_menu( array(
                		'container' => false,
                		'theme_location' => 'secondary'	
                	) );
                 ?>
               
            </div>  
        </div>
        <div class="email-link-me">
            <div class="email-link-box">
             <a href="mailto:brad@bradleycarmichael.com">brad[at]bradleycarmichael.com</a>  
            </div>
        </div>
        <div class="footer-text">
            <div class="copy-right-box">
                <p class="copyright">&copy; Developed by Brad Carmichael <?php echo date('Y'); ?></p>
            </div>
            <div class="headshot-box">
                <p class="headshot">Headshot Credit Pam Lau</p>
            </div>
        </div>
  </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>