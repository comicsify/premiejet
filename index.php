<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
			<?php
        if(have_posts()):          
          while (have_posts()):
            the_post();
            the_content();
          endwhile;
        else :
          e_('no posts :(');
        endif;
			?>


  </body>

</html>
