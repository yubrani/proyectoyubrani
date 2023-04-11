<html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UFT-8">
        <meta http-equiv="X-UA-Compatible"
        content="IE=Edge">
        <meta name="viewport"
        content="Width=device-width, initial-scale=1.0">
        <title>VLC</title>
        <?php wp_head(); ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
        <style>
           .swiper {
            width: 600px;
            height: 300px;
           }
        </style>
    </head>

    

    <header>
        <div>
            <a href="#"><img src="<?php echo get_theme_file_uri() . "/assets/img/Logo.png" ?>" alt="Logo"></a>
            <?php wp_nav_menu('menu-principal'); ?>
            
            <button class="boton">Webmail</button>
            
        </div>
    </header>
