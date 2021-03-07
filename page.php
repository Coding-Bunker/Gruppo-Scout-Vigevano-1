<?php get_header(); ?>

  <?php
    if ( is_page('chi-siamo') ) {
      get_template_part( 'template-parts/page', 'chi-siamo' );
    }
  ?>
  <?php
    if ( is_page('contatti') ) {
      get_template_part( 'template-parts/page', 'contatti' );
    }
  ?>

<?php get_footer(); ?>