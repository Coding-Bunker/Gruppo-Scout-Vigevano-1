<?php 

include('template-parts/header-home.php')
?>





<?php 
    include('template-parts/sections/who-we-are.php')
?>
<?php 
    include('template-parts/sections/branches.php')
?>


<?php 
    include('template-parts/sections/always-ready.php')
?>
<?php 
    include('template-parts/sections/where-we-are.php')
?>

<div class="container gallery-container">

    <h1>Specialità…
        Fotografo!</h1>
    
    <div class="tz-gallery">

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="assets/images/scout6.png">
                    <img class="gallery rounded" src="assets/images/scout6.png" alt="Scout Image 1">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="assets/images/scout5.png">
                    <img class="gallery rounded" src="assets/images/scout5.png" alt="Scout Image 2">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="assets/images/scout4.png">
                    <img class="gallery rounded" src="assets/images/scout4.png" alt="Scout Image 3">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox gallery" href="assets/images/scout3.png">
                    <img class="gallery rounded" src="assets/images/scout3.png" alt="Scout Image 4">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="assets/images/scout2.png">
                    <img class="gallery rounded" src="assets/images/scout2.png" alt="Scout Image 5">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="assets/images/scout1.png">
                    <img class="gallery rounded" src="assets/images/scout1.png" alt="Scout Image 5">
                </a>
            </div>
            
        </div>

    </div>

</div>
<?php 
    include('template-parts/sections/join-group.php')
?>

<?php
    get_footer();
?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/front-page.js" ></script>
