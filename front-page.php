<?php 

include('template-parts/header-home.php')
?>
<section class="who-we-are">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <img src="http://via.placeholder.com/300x500" alt="Immagine chi siamo" />
            </div>
            <div class="col">
                <h2>Chi siamo</h2>
                <h3>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                </h3>
                <button type="button" class="btn btn-success">ENTRA NEL GRUPPO</button>
            </div>
        </div>
    </div>
</section>
<section class="branches bg-blue mt-5">
    <h2 class="text-center pt-5">Branche</h2>
    <div class="container d-flex justify-content-center">
        <div class="row ">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-5">
                <div class="card text-center bc-orange">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/LC_NEW1.png" />
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-title">Card sub-title</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <a href="#" class="btn btn-warning">SCOPRI DI PIU'</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-5">
                <div class="card text-center bc-green">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/EG_logo.png" />

                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-title">Card sub-title</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk
                            of the card's content.</p>
                        <a href="#" class="btn btn-success">SCOPRI DI PIU'</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-5">
                <div class="card text-center bc-red">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/RS-web.png" />
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-title">Card sub-title</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk
                            of the card's content.</p>
                        <a href="#" class="btn btn-danger">SCOPRI DI PIU'</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<?php get_footer(); ?>