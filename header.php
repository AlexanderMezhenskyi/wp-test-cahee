<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name')?></title>
    <link rel="icon" href="<?php bloginfo('template_url'); ?> favicon.png">
    <!-- Bootstrap -->

    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>
<header class="ba-fresh">
    <section class="ba-container">
        <header>
            <a class="ba-logo ba-float-left" href="<?php echo home_url(); ?>">
                <img class="ba-logo__image" src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="Cahee">
            </a>
            <nav class="ba-float-right">
                <ul class="ba-menu">
                    <li class="ba-menu__item">
                        <a href="" class="ba-menu__link
                        ba-menu__link--active">HOME</a>
                    </li>
                    <li class="ba-menu__item">
                        <a href="#ba-about" class="ba-menu__link">ABOUT</a>
                    </li>
                    <li class="ba-menu__item">
                        <a href="#servicees" class="ba-menu__link">SERVICES</a>
                    </li>
                    <li class="ba-menu__item">
                        <a href="#gallery" class="ba-menu__link">GALLERY</a>
                    </li>
                    <li class="ba-menu__item">
                        <a href="#blog" class="ba-menu__link">BLOG</a>
                    </li>
                    <li class="ba-menu__item">
                        <a href="#contact" class="ba-menu__link">CONTACT</a>
                    </li>
                </ul>
            </nav>
        </header>
        <section class="ba-banner">
            <header class="ba-banner__header">
                <h2 class="ba-banner__title">Fresh Life</h2>
            </header>
            <section class="ba-banner__description">
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis
                    nostrud exercitation ullamco.
                </p>
            </section>
            <footer>
                <a class="ba-button" href="#">
                    Get Free Now
                </a>
            </footer>
        </section>
        <footer>
            <a href="#ba-about" class="ba-scroll"></a>
        </footer>
    </section>
</header>