<?php 

include('header.php')
?>
<section class="error-page">
    <div class="container">
        <div class="row justify-content-center">
            <img alt="ERRORE" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/404_img.png"/>
        </div>
        <div class="row justify-content-center">
            <span class="text-error">ERRORE 404</span>
        </div>
        <div class="row justify-content-center">
            <span class="text-title">Ti sei perso nel bosco?</span>
        </div>
        <div class="row justify-content-center">
            <span class="text-title">Torna al sentiero</span>
        </div>
        <div class="row justify-content-center">
            <a href="/" class="btn btn-lg btn-success bg-green">Homepage</a>
        </div>
    </div>
</section>
<?php
    get_footer();
?>