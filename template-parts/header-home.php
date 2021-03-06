<!DOCTYPE html>
<!-- Definisce la lingua del sito web -->
<html <?php language_attributes(); ?>>
    <head>
        <!-- Definisce il nome del sito, lo si cambia nelle impostazioni di WordPress -->
        <title><?php bloginfo( 'name' ); wp_title(); ?></title>
        <!-- Definisce la descrizione del sito, la si cambia nelle impostazioni di WordPress -->
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <!-- Definisce il charset del sito, lo si cambia nelle impostazioni di WordPress -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <!-- Viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- ATTENZIONE: Nello sviluppo WordPress, per includere delle immagini o qualsiasi altro media o file presente nella cartella
        del progetti è necessario inserire nell'attributo href o scr, a seconda del tag che si sta usando, prima
        'echo get_stylesheet_directory_uri(); dentro i tag PHP di apertura e chiusura e poi inserire uno slash e il percorso dove si trova
        il file che si sta includendo -->

        <!-- Definisce le favicon che ci saranno correlate al sito -->
        <link href="" rel="shortcut icon" type="image/x-icon">
        <link href="" rel="apple-touch-icon-precomposed">
        <link href="" sizes="114x114" rel="apple-touch-icon-precomposed">
        <link href="" sizes="72x72" rel="apple-touch-icon-precomposed">
        <link href="" sizes="144x144" rel="apple-touch-icon-precomposed">
        <!-- Link a tutti i fogli di stile -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/front-page.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/fontawesome.min.css" type="text/css" media="all" />
        <!-- Definisce l'head del sito -->
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <div class="img-header">
                <div class="announcement text-center">
                    <span>TESTO DA AGGIUNGERE IN BE</span>
                </div>
                <nav class="container nav navbar navbar-expand-lg navbar-dark">
                    <a href="/" class="navbar-brand">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_bianco.svg" width="75" height="75" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Chi siamo <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown link
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Braci<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Blog <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contatti <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-outline-light" href="#">Entra nel gruppo</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class=" mb-5 mt-5 container">
                    <h1 class="header-title">Benvenuti sul sito del Gruppo Scout Vigevano 1</h1>
                </div>
            </div>
        </header>

        <main>