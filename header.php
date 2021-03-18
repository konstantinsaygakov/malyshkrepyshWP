<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="yandex-verification" content="e24852ac5680a5a1" />
    <meta name="yandex-verification" content="20e84baa9264593b" />
    <!-- Google Tag Manager -->
    <meta name="google-site-verification" content="OMbrc_HSyhhUuUWv9Rhvz6-SKmvRvwuSuJUtDfy28Vc" />
    <title>
        <?php
            bloginfo('name'); echo " | "; bloginfo('description');
        ?>
    </title>
    <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
    <?php 
        wp_head();
    ?>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KNQBCNZ');</script>
    <!-- End Google Tag Manager -->
</head>
<body id="main" class="main">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KNQBCNZ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="header">
        <div class="logo"><img src="<?php echo bloginfo('template_url');?>/assets/icons/mk.svg" alt="malyshkrepysh"></div>
            <nav class="header__navigate">
                <?php 
                    wp_nav_menu( [
                        'menu'            => 'main', 
                        'container'       => 'false', 
                        'menu_class'      => 'header__list', 
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul class="header__list">%3$s</ul>',
                        'depth'           => 1,
                        'walker'          => '',
                    ] );
                ?>
            </nav>
        <div class="header__contact">
            <a href="tel:<?php the_field('number', 23) ?>" class="header__phone"><?php the_field('number', 23) ?></a>
            <button data-modal="consultation" class="button">ЗАКАЗАТЬ ЗВОНОК</button>
        </div>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>