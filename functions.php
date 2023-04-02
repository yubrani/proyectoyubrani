<?php
	/**
	 * @author Yubraní Yaguaramay
	 * @package Minha Empresa
	 * @subpackage Meu Site
	 * @since 1.0.0
	*/

function theme_scripts() {
        wp_enqueue_script('jquery-main', get_template_directory_uri() . '/assets/vendor/jquery/jquery-1.11.0.min.js', '1.0', true);
    
        // DOT DOT DOT
        wp_enqueue_script('js-dotdotdot', get_template_directory_uri() . '/assets/vendor/dotdotdot/jquery.dotdotdot.js', '1.0', true );
    
        // THEME
        wp_enqueue_style('css-main', get_template_directory_uri() . '/assets/css/style.min.css', wp_get_theme()->get( 'Version'));
        wp_enqueue_script('js-main', get_template_directory_uri() . '/assets/js/scripts.min.js', wp_get_theme()->get( 'Version'));
    
        //SLICK SLIDER
        if(is_home()){
            wp_enqueue_style('css-slick', get_template_directory_uri() . '/assets/vendor/slick/slick.css', '1.0', true);
            wp_enqueue_script('js-slick', get_template_directory_uri() . '/assets/vendor/slick/slick.min.js', '1.0', true);
            wp_enqueue_script('js-slider-home', get_template_directory_uri() . '/assets/js/slider-home.min.js', wp_get_theme()->get( 'Version'));
        }

    };

    add_action( 'wp_enqueue_scripts', 'theme_scripts' );

    function vlc_scripts () {

        wp_enqueue_style( 'css-vlc', get_template_directory_uri() . '/assets/css/style.min.css', wp_get_theme()->get(' Version '));




    }

    add_action( 'wp_enqueue_scripts', 'vlc_scripts' );







//Registro de menu de navegacion //
    function theme_setup() {


        function register_vlc_menu() {

            register_nav_menu('menu-principal' ,__('Menu-Primario'));

        }

        add_action( 'init', 'register_vlc_menu' );

    }


    add_action('after_setup_theme', 'theme_setup' );


    function register_produtos_post_types() {

            $labels = array( 

                'name'  => __('Produtos'),
                'singular_name' => __( 'Produto'),
                'add_new' => __('Agregar nuevo produto'),
                'edit_item' => __('Editar produto'),
                'new_item' => __('Nuevo produto'),
                'all_items' => __('Mostrar todos los produtos'),
                'view_item' => __('Ver produto anterior'),
                'search_items' => __('Buscar'),
                'featured_image' => __('Imagen destacada'),
                'set_featured_image' => __ ('Agregar imagen'),

            );

            $arg = array(

                'show_in_rest' => true,
                'rewrite' => array('slug'=>'produtos'),
                'labels' => $labels,
                'description' => '',
                'public' => true,
                'menu_position' => 30,
                'supports' => array('title', 'editor', 'thumbnail',),
                'has_archive' => true,
                'show_in_admin_bar' => true,
                'show_in_nav_menus' => true,
                'menu_icon' => 'dashicons-products',




            );
        
            register_post_type('produto', $arg );
    
    
    };

add_action('init', 'register_produtos_post_types');


$defaults = array (
	'default_color'					=> 'ffffff',
	'default-repeat'				=> 'no-repeat',
	'default-position-x'			=> 'center',
	'default-attachment'			=> 'fixed'

);

add_theme_support( 'custom-backgrond', $defaults );

// ADD SUPPORT FOR RESPNSIVE EMBEDDED CONTENT
add_theme_support('responsive-embeds');

// ADD THUMBNAIL TO POST THEME
add_theme_support('post-thumbnails');
add_image_size( 'post-tumb', 320, 190, true );
add_image_size( 'blog-thumb', 370, 250, true );

if(function_exists('acf_add_options_page')){
	acf_add_options_page(array(
		'page_title' => 'SITE_NAME',
		'menu_title' => 'SITE_NAME',
		'menu_slug'  => 'site_name',
		'capability' => 'manage_options',
		'post_id'    => 'options',
		'position'   => 3,
		'redirect'	 => false
	));
}