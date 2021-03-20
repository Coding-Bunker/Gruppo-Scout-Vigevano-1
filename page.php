  <?php
  get_header();
  if (is_page('chi-siamo')) {
    get_template_part('template-parts/page', 'chi-siamo');
  }
  if (is_page('contatti')) {
    get_template_part('template-parts/page', 'contatti');
  }
  if (is_page('entra-nel-gruppo')) {
    get_template_part('template-parts/page', 'entra-nel-gruppo');
  }
  if (is_page('lupetti')) {
    get_template_part('template-parts/page', 'lupetti');
  }
  if (is_page('esploratori-e-guide')) {
    get_template_part('template-parts/page', 'esploratori-e-guide');
  }
  if (is_page('rover-e-scolte')) {
    get_template_part('template-parts/page', 'rover-e-scolte');
  }
  get_footer();
?>