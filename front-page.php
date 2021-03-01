<?php 

include('template-parts/header-home.php')
?>
<section class="who-we-are">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <img src="assets/images/who-we-are.png" alt="Chi siamo" />
            </div>
            <div class="col">
                <h2>Chi siamo</h2>
                <h4>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                </h4>
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

<section class="where-we-are">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h2>Dove siamo</h2>
                <h4>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                </h4>
                <button type="button" class="btn btn-success">ENTRA NEL GRUPPO</button>
            </div>
            <div class="col-md-4 px-0">
                <img class="img-fluid" style="height: 75%;"src="https://www.google.com/maps/d/u/0/thumbnail?mid=1ksQvIlnDYIH3zAmUj3R-E0Goei4&hl=it" alt="Immagine dove siamo" />
            </div>
        </div>
    </div>
</section>

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

<section class="join-group bg-blue mt-5">
    <h2 class="text-center pt-5 mb-5">Entra nel gruppo</h2>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 align-self-center">
                <div class="info">
                    <p class="mb-0">Hai Ulteriori dubbi?</p>
                    <p>Contattaci qui</p>
                    <a class="c-green" href="mailto:info@scoutvigevano1.it">info@scoutvigevano1.it</a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="jumbotron">
                    <form id="join-group-form">
                        <div class="form-group">
                            <label for="name">NOME DEL BAMBINO*</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Mario">
                        </div>
                        <div class="form-group">
                            <label for="surname">COGNOME DEL BAMBINO*</label>
                            <input type="text" class="form-control" id="surname" name="surname" placeholder="Rossi">
                        </div>
                        <div class="form-group">
                            <label for="email">INDIRIZZO EMAIL DEL GENITORE*</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="mario.rossi22@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="phone">NUMERO DI TELEFONO DEL GENITORE*</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="+39 366 8694934">
                        </div>
                        <div class="form-group">
                            <label for="friends">CONOSCI QUALCUNO ALL'INTERNO DEL GRUPPO?</label>
                            <input type="email" class="form-control" id="friends" name="friends"
                                placeholder="Giuseppe Bianchi, Sara Verdi">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">INVIA ISCRIZIONE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    get_footer();
?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/front-page.js" ></script>
