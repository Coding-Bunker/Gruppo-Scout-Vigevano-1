<?php get_header(); ?>

<div class="page-container"> <!-- o qualsiasi container tu voglia mettere (main, div, classe diversa, ecc) -->
  <?php
    if ( is_page('chi-siamo') ) {
      get_template_part( 'template-parts/page', 'chisiamo' );
    }
  ?>
</div><!-- .page-container -->

<?php get_footer(); ?>