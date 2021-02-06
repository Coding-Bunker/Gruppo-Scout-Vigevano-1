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
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/front-page.css" type="text/css" media="all" />
        <!-- Definisce l'head del sito -->
        <?php wp_head(); ?>
    </head>
    <body>
        <header>

        </header>

        <main>