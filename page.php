<?php get_header(); ?>

  <?php
    if ( is_page('chi-siamo') ) {
      get_template_part( 'template-parts/page', 'chi-siamo' );
    }
    if ( is_page('contatti') ) {
      get_template_part( 'template-parts/page', 'contatti' );
    }
    if ( is_page('entra-nel-gruppo') ) {
      get_template_part( 'template-parts/page', 'entra-nel-gruppo' );
    }
  ?>
<?php get_footer(); ?>