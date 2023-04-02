<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-Compatible"
    content="IE=Edge">
    <meta name="viewport"
    content="Width=device-width, initial-scale=1.0">
    <title>VCL</title>
    <?php wp_head() ?>
</head>
<body>
    

    <header>
        <div>
            <a href="#"><img src="<?php echo get_theme_file_uri() . "/assets/img/Logo.png" ?>" alt="Logo"></a>
            <?php wp_nav_menu('menu-principal'); ?>
            
            <button class="boton">Webmail</button>
            
        </div>
    </header>