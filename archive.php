<?php

get_header() 

?>

<a href="#"><img src="<?php echo get_theme_file_uri() . "/assets/img/Banner-Energia.png" ?>" alt="Banner"></a>

<div class="contenedor-produtos">
    
        <div class="contenedor">
            
            <?php while(have_posts()):the_post();?> 
            
            
            <div>
                
                <a href="<?php the_permalink(); ?>"> 
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="Imagen de produto">
                </a>
                <a href="<?php the_permalink(); ?>">
                    <p><?php the_title(); ?></p>
                </a>
            

            </div>

            <?php endwhile; ?>
            <button></button>
        
        <div>
 
</div>

</body>


<?php

get_footer()

?>