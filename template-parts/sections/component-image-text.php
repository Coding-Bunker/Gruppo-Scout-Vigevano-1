<section class="component-image-text mt-5 mb-5 pt-5 pb-5">
    <div class="container">
        <div class="row">
            <?php if ($data['left']) : ?>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 order-sm-1 order-1 order-md-1 order-lg-1 order-xl-1">
                    <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() . $data['img']; ?>" alt="Chi siamo" />
                </div>
            <?php endif; ?>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 order-sm-2 order-2 order-md-2 order-lg-2 order-xl-2">
                <h2 class="text-center"><?php echo $data['title'] ?></h2>
                <h3 class="mt-3"><?php echo $data['description'] ?>
                </h3>
                <?php if ($data['showBtn']) : ?>
                    <button type="button" class="btn btn-success">ENTRA NEL GRUPPO</button>
                <?php endif; ?>
            </div>
            <?php if (!$data['left']) : ?>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 order-1 order-sm-1 order-md-1 order-lg-2 order-xl-2">
                    <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() . $data['img']; ?>" alt="Chi siamo" />
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>