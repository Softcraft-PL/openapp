<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#6377FE">
    <meta name="description" content="<?php if (is_single()) { single_post_title('', true); }
    else { bloginfo('name'); echo " - "; bloginfo('description'); }?>">

    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/openapp/img/icon-180.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/openapp/img/icon-16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/openapp/img/icon-32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/wp-content/themes/openapp/img/icon-96.png">

    <link rel="stylesheet" href="/wp-content/themes/openapp/style.css">

    <!--<link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <link rel="DNS-prefetch" href="//fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-XXXXXXXXXX');
    </script>-->
</head>

<body <?php body_class(); ?>>

<?php
    $homepage_url = '/';
    if (str_contains($_SERVER["REQUEST_URI"], '/dla-sklepu/')) { $homepage_url = '/dla-sklepu'; }
?>

<nav id="navbar" class="navbar">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <a href="<?php echo $homepage_url ?>">
            <h1 class="sr-only">Menu nawigacyjne</h1>
            <svg height="74" id="a" title="Navigation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 539.72 215.45"><defs><clipPath id="b"><path class="c" d="M261.07 79.11v-8.12h-18.76v61.21h18.76V98.96c0-8.34 4.61-12.95 11.74-12.95s11.74 4.61 11.74 12.95v33.24h18.65V96.44c0-16.45-9.43-26.11-23.59-26.11-8.23 0-14.81 3.62-18.54 8.78M118.91 101.6c0-9.76 6.36-15.14 13.38-15.14s13.49 5.27 13.49 15.03-6.36 15.25-13.49 15.25-13.38-5.37-13.38-15.14m.11-21.94v-8.67h-18.76v90.4h18.76v-37.74c3.4 5.16 9.87 9.44 18.87 9.44 15.03 0 26.99-12.29 26.99-31.59s-11.96-31.37-26.99-31.37c-9 0-15.47 4.17-18.87 9.54m82.71 5.48c6.25 0 11.52 3.84 11.52 10.53h-23.48c1.1-6.8 5.81-10.53 11.96-10.53m-30.72 16.46c0 19.42 12.94 31.48 30.94 31.48 15.25 0 26.11-9.22 29.07-21.17h-19.97c-1.53 3.29-4.5 5.92-9.76 5.92-6.03 0-10.97-3.73-11.63-11.74h42.45c.22-1.86.33-3.73.33-5.48 0-18.65-12.62-30.5-30.5-30.5S171 82.19 171 101.6M8.33 76.77h12.89V63.88H8.33v12.89Zm25.78 12.89H47V76.77h12.74v12.67h6.92c2.72 2.48 4.54 6.48 4.54 12.15 0 10.31-6.25 15.25-12.94 15.25s-12.12-4.64-12.47-14.29H34.12V89.66Zm0-38.67v25.78H21.22v25.78h5.48c.45 18.85 13.86 30.53 31.55 30.53s32.03-12.07 32.03-31.48-13.11-30.8-30.4-31.42v-6.29H46.99V51H34.1Z"/></clipPath><style>.c{fill:#fff}</style></defs><path class="c" d="M344.99 116.73c-7.02 0-13.38-5.48-13.38-15.25s6.36-15.03 13.38-15.03 13.38 5.38 13.38 15.14-6.25 15.14-13.38 15.14m13.38-37.08c-3.29-5.38-9.76-9.54-18.87-9.54-15.03 0-26.99 12.07-26.99 31.37s11.96 31.59 26.88 31.59c9.11 0 15.58-4.17 18.98-9.54v8.67h18.76V70.99h-18.76v8.67ZM422.76 116.73c-7.02 0-13.38-5.37-13.38-15.14s6.36-15.14 13.38-15.14 13.49 5.27 13.49 15.03-6.36 15.25-13.49 15.25m5.59-46.62c-9 0-15.47 4.17-18.87 9.54v-8.67h-18.76v90.39h18.76v-37.74c3.4 5.16 9.87 9.43 18.87 9.43 15.03 0 26.99-12.29 26.99-31.59S443.38 70.1 428.35 70.1M497.24 116.73c-7.02 0-13.38-5.37-13.38-15.14s6.36-15.14 13.38-15.14 13.49 5.27 13.49 15.03-6.36 15.25-13.49 15.25m5.59-46.62c-9 0-15.47 4.17-18.87 9.54v-8.67H465.2v90.39h18.76v-37.74c3.4 5.16 9.87 9.43 18.87 9.43 15.03 0 26.99-12.29 26.99-31.59S517.86 70.1 502.83 70.1M261.07 79.11v-8.12h-18.76v61.21h18.76V98.96c0-8.34 4.61-12.95 11.74-12.95s11.74 4.61 11.74 12.95v33.24h18.65V96.44c0-16.45-9.43-26.11-23.59-26.11-8.23 0-14.81 3.62-18.54 8.78M118.91 101.6c0-9.76 6.36-15.14 13.38-15.14s13.49 5.27 13.49 15.03-6.36 15.25-13.49 15.25-13.38-5.37-13.38-15.14m.11-21.94v-8.67h-18.76v90.4h18.76v-37.74c3.4 5.16 9.87 9.44 18.87 9.44 15.03 0 26.99-12.29 26.99-31.59s-11.96-31.37-26.99-31.37c-9 0-15.47 4.17-18.87 9.54m82.71 5.48c6.25 0 11.52 3.84 11.52 10.53h-23.48c1.1-6.8 5.81-10.53 11.96-10.53m-30.72 16.46c0 19.42 12.94 31.48 30.94 31.48 15.25 0 26.11-9.22 29.07-21.17h-19.97c-1.53 3.29-4.5 5.92-9.76 5.92-6.03 0-10.97-3.73-11.63-11.74h42.45c.22-1.86.33-3.73.33-5.48 0-18.65-12.62-30.5-30.5-30.5S171 82.19 171 101.6M8.33 76.77h12.89V63.88H8.33v12.89Zm25.78 12.89H47V76.77h12.74v12.67h6.92c2.72 2.48 4.54 6.48 4.54 12.15 0 10.31-6.25 15.25-12.94 15.25s-12.12-4.64-12.47-14.29H34.12V89.66Zm0-38.67v25.78H21.22v25.78h5.48c.45 18.85 13.86 30.53 31.55 30.53s32.03-12.07 32.03-31.48-13.11-30.8-30.4-31.42v-6.29H46.99V51H34.1Z"/><g style="clip-path:url(#b)"><path class="c" d="M7.55 50.37h522.92v111.68H7.55z"/><path class="c" d="M261.07 79.11v-8.12h-18.76v61.21h18.76V98.96c0-8.34 4.61-12.95 11.74-12.95s11.74 4.61 11.74 12.95v33.24h18.65V96.44c0-16.45-9.43-26.11-23.59-26.11-8.23 0-14.81 3.62-18.54 8.78M118.91 101.6c0-9.76 6.36-15.14 13.38-15.14s13.49 5.27 13.49 15.03-6.36 15.25-13.49 15.25-13.38-5.37-13.38-15.14m.11-21.94v-8.67h-18.76v90.4h18.76v-37.74c3.4 5.16 9.87 9.44 18.87 9.44 15.03 0 26.99-12.29 26.99-31.59s-11.96-31.37-26.99-31.37c-9 0-15.47 4.17-18.87 9.54m82.71 5.48c6.25 0 11.52 3.84 11.52 10.53h-23.48c1.1-6.8 5.81-10.53 11.96-10.53m-30.72 16.46c0 19.42 12.94 31.48 30.94 31.48 15.25 0 26.11-9.22 29.07-21.17h-19.97c-1.53 3.29-4.5 5.92-9.76 5.92-6.03 0-10.97-3.73-11.63-11.74h42.45c.22-1.86.33-3.73.33-5.48 0-18.65-12.62-30.5-30.5-30.5S171 82.19 171 101.6M8.33 76.77h12.89V63.88H8.33v12.89Zm25.78 12.89H47V76.77h12.74v12.67h6.92c2.72 2.48 4.54 6.48 4.54 12.15 0 10.31-6.25 15.25-12.94 15.25s-12.12-4.64-12.47-14.29H34.12V89.66Zm0-38.67v25.78H21.22v25.78h5.48c.45 18.85 13.86 30.53 31.55 30.53s32.03-12.07 32.03-31.48-13.11-30.8-30.4-31.42v-6.29H46.99V51H34.1Z"/></g></svg>
        </a>

        <div class="navbar__switcher navbar__switcher--desktop">
            <a href="/" class="navbar__switcher-button navbar__switcher-button--client">Aplikacja</a>
            <a href="/dla-sklepu/" class="navbar__switcher-button navbar__switcher-button--shop">Sklep</a>
        </div>

        <div class="navbar__nav-desktop hover-underline-animation">
            <?php wp_nav_menu(array('theme_location' => 'nav-menu', 'container' => false)); ?>
        </div>

        <div id="navbar__nav-mobile" class="navbar__nav-mobile">
            <div class="flex flex-col items-center">
                <div class="navbar__switcher navbar__switcher--mobile">
                    <a href="/" class="navbar__switcher-button navbar__switcher-button--client">Dla klienta</a>
                    <a href="/dla-sklepu/" class="navbar__switcher-button navbar__switcher-button--shop">Dla sklepu</a>
                </div>
                <?php wp_nav_menu(array('theme_location' => 'nav-menu', 'container' => false)); ?>
            </div>
        </div>

        <div id="navbar__toggle" class="navbar__toggle" onclick="slideToggle()"><i class="navbar__toggle-icon"></i></div>
    </div>
</nav>