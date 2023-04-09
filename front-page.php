<?php

get_header() 

?>

<div class="banner"><a href="#"><img src="<?php echo get_theme_file_uri() . "/assets/img/Banner-Energia.png" ?>" alt="Banner"></a></div>


<section>
<div class="contenedor-produtos">

    <?php $argumentos = array(
        'post_type' => 'produto',
        'post_per_page' => 4,

    );
        $produtos1 = new Wp_query($argumentos);
    
    ?>
        <div class="contenedor-secundario-produtos">
            
            <?php while($produtos1 -> have_posts()):$produtos1 -> the_post();?> 

            
            
            <div>
                
                <a href="<?php the_permalink(); ?>"> 
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="Imagen de produto">
                </a>
                <a href="<?php the_permalink(); ?>">
                    <p><?php the_title(); ?></p>
                </a>

               
            

            </div>

            <?php endwhile; ?>
            
        
        <div>
 

</section>


<!-- Slider Container -->
<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
    <h2 class="titulo-slider">Nossas Maquinas</h2>
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="https://vlcmetalurgica.com.br/wp-content/uploads/2022/04/dobradeira_teste-removebg-preview-1.png" alt="Slider 1">
            <h2>Dobradeira Hidráulica Comando NU – CN125T4000</h2> <p>Dobradeira Hidráulica</p></div>
        <div class="swiper-slide"><img src="https://vlcmetalurgica.com.br/wp-content/uploads/2022/03/PLASMA-CNC-APRESENTA%C3%87%C3%83O.png" alt="Slider 2">
            <h2>Mesa de Corte Plasma CNC 1500x3000mm úteis</h2> <p>O corte a plasma é um processo que utiliza um bico com um <br> orifício para constringir o gás ionizado em alta temperatura até que <br> possa ser utilizado para cortar seções de metais, como o aço carbono, aço <br> inoxidável.</p></div>
        <div class="swiper-slide"><img src="https://vlcmetalurgica.com.br/wp-content/uploads/2022/03/laser_teste-removebg-preview.png" alt="Slider 3">
            <h2>Mesa de Corte Laser CNC 1000w 1500x3000mm úteis</h2> <p>Muito mais eficientes do que o tradicional CO2, sem complicados <br> espelhos e sem manutenção, as máquinas de corte por fibra garantem vida útil superior e alta qualidade de corte em metal.</p></div>
        ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: false,
  allowtouchmove: true,

//   // If we need pagination
//   pagination: {
//     el: '.swiper-pagination',
//   },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

//   // And if we need scrollbar
//   scrollbar: {
//     el: '.swiper-scrollbar',
//   },
});</script>

<div class="contenedor-orcamento">
    <div class="boton-orcamento">
        <button>Solicite agora seu orçamento!</button>
        <a href="#"><img src="<?php echo get_theme_file_uri() . "/assets/img/vector.png" ?>" alt="vector"></a>
    </div>
</div>


</body>

<?php

get_footer();

?>