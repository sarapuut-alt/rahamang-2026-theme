<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<header>
    
    <div class="content-container top-bar-container">

        <div class="top-bar">


        <a href="<?php echo get_home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg">
        </a>

        <nav>
            <ul class="nav-list">
                <li><a href="#">Raamatust</a></li>
                <li><a href="#">Materjalid</a></li>
                <li><a href="#">Arvutus</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
         </nav>

            <a href="#" class="btn">
                Osta raamat
            </a>

        </div>

    </div>

</header>