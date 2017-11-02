<?php
  function scodev_styles() {
    //Style

    //Registrar los estilos
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_register_style('jquery-slider', get_template_directory_uri() . '/css/jquery.animateSlider.css');
    wp_register_style('jquery-jscrollpane', get_template_directory_uri() . '/css/jquery.jscrollpane.css');
    wp_register_style('newsletter', get_template_directory_uri() . '/css/newsletter.css');
    wp_register_style('owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_register_style('owl.theme', get_template_directory_uri() . '/css/owl.theme.css');
    wp_register_style('owl.transitions', get_template_directory_uri() . '/css/owl.transitions.css');
    wp_register_style('settings', get_template_directory_uri() . '/css/settings.css');
    wp_register_style('subscribe-better', get_template_directory_uri() . '/css/subscribe-better.css');
    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css');
    wp_register_style('theme-default', get_template_directory_uri() . '/css/theme-default.css');
    wp_register_style('style', get_template_directory_uri() . '/style.css');

    //Llamar a los estilos
    wp_enqueue_style('normalize');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style( 'font-awesome');
    wp_enqueue_style( 'owl.carousel');
    wp_enqueue_style( 'settings');
    wp_enqueue_style( 'jquery-jscrollpane');
    wp_enqueue_style( 'subscribe-better');
    wp_enqueue_style( 'owl.transitions');
    wp_enqueue_style( 'theme-default');
    wp_enqueue_style( 'newsletter');
    wp_enqueue_style( 'jquery-slider');
    wp_enqueue_style( 'owl.theme');
    wp_enqueue_style( 'responsive');
    wp_enqueue_style('style');

}

function scodev_scripts(){
  //Registrar Js

  wp_register_script( 'Jquery', get_template_directory_uri() . '/js/jquery/jquery-1.11.1.min.js', '', '', true);
  wp_register_script( 'jquery-1', get_template_directory_uri() . '/js/jquery/jquery-1.11.3.min.js', '', '', true);
  wp_register_script( 'jquery-2', get_template_directory_uri() . '/js/jquery/jquery-migrate-1.2.1.min.js', '', '', true);
  wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('Jquery'), '', true);
  wp_register_script( 'theme', get_template_directory_uri() . '/js/theme.js', array('Jquery'),'',true );
  wp_register_script( 'theme-all', get_template_directory_uri() . '/js/theme-all.js',  array('Jquery'),'',true );
  wp_register_script( 'theme-home', get_template_directory_uri() . '/js/theme-home.js',  array('Jquery'),'',true );
  wp_register_script( 'owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js',  array('Jquery'),'',true );
  wp_register_script( 'Chart', get_template_directory_uri() . '/js/Chart.js',  array('Jquery'),'',true );
  wp_register_script( 'detail', get_template_directory_uri() . '/js/detail.js',  array('Jquery'),'',true );
  wp_register_script( 'doughnutit', get_template_directory_uri() . '/js/doughnutit.js',  array('Jquery'),'',true );
  wp_register_script( 'faq-theme', get_template_directory_uri() . '/js/faq-theme.js',  array('jquery'),'',true );
  wp_register_script( 'jquery.animateSlider', get_template_directory_uri() . '/js/jquery.animateSlider.min.js',  array('Jquery'),'',true );
  wp_register_script( 'jquery.jscrollpane', get_template_directory_uri() . '/js/jquery.jscrollpane.min.js',  array('Jquery'),'',true );
  wp_register_script( 'jquery.mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.js',  array('Jquery'),'',true );
  wp_register_script( 'jquery.subscribe-better', get_template_directory_uri() . '/js/jquery.subscribe-better.js',  array('Jquery'),'',true );
  wp_register_script( 'modernizr.custom', get_template_directory_uri() . '/js/modernizr.custom.js',  array('Jquery'),'',true );
  wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js',  array('Jquery'),'',true );
  wp_register_script( 'jquery.themepunch', get_template_directory_uri() . '/js/slideshow/jquery.themepunch.plugins.min.js',  array('Jquery'),'',true );
  wp_register_script( 'jquery.themepunch.revo', get_template_directory_uri() . '/js/slideshow/jquery.themepunch.revolution.js',  array('Jquery'),'',true );
  wp_register_script( 'jquery.themepunch.revo.min', get_template_directory_uri() . '/js/slideshow/jquery.themepunch.revolution.min.js',  array('Jquery'),'',true );



  //Llamar Js
  wp_enqueue_script('Jquery');
  wp_enqueue_script('jquery-1');
  wp_enqueue_script('jquery-2');
  wp_enqueue_script('bootstrap');
  wp_enqueue_script('theme');
  wp_enqueue_script('theme-all');
  wp_enqueue_script('theme-home');
  wp_enqueue_script('owl.carousel');
  wp_enqueue_script('Chart');
  wp_enqueue_script('doughnutit');
  wp_enqueue_script('jquery.animateSlider');
  wp_enqueue_script('jquery.jscrollpane');
  wp_enqueue_script('jquery.mousewheel');
  wp_enqueue_script('detail');
  wp_enqueue_script('faq-theme');
  wp_enqueue_script('jquery.subscribe-better');
  wp_enqueue_script('modernizr.custom');
  wp_enqueue_script('modernizr');
  wp_enqueue_script('jquery.themepunch');
  wp_enqueue_script('jquery.themepunch.revo');
  wp_enqueue_script('jquery.themepunch.revo.min');
}




  //hokes style and js
  add_action('wp_enqueue_scripts', 'scodev_styles');
  add_action('wp_enqueue_scripts', 'scodev_scripts');


  //Creacion de menu
  function scodev_menus(){
    register_nav_menus(array(
      'header-menu' => __('Header Menu', 'scodev'),
      'social-menu' => __('Social Menu', 'scodev')
    ));
  }

  add_action( 'init', 'scodev_menus');

//Filtro para darle al menu
  function agregar_clases_li($classes, $item, $args, $depth) {
      if($args->theme_location == 'header-menu') {
          $classes[] = 'level0 parent col1 all-product hd-pd';
      }
      return $classes;
  }
  add_filter('nav_menu_css_class', 'agregar_clases_li', 1, 4);


// Custom Post Type Slider

if ( ! function_exists('slider_header') ) {

// Register Custom Post Type
function slider_header() {

	$labels = array(
		'name'                  => _x( 'Sliders', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Slider', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Slider Header', 'text_domain' ),
		'name_admin_bar'        => __( 'Silder Header', 'text_domain' ),
		'archives'              => __( 'Archivo de imagenes', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Padre', 'text_domain' ),
		'all_items'             => __( 'Todos las imagenes', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nuevo imagen', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo Imagen', 'text_domain' ),
		'edit_item'             => __( 'Editar imagen', 'text_domain' ),
		'update_item'           => __( 'Actualizar imagen', 'text_domain' ),
		'view_item'             => __( 'Ver imagen', 'text_domain' ),
		'view_items'            => __( 'Ver imagenes', 'text_domain' ),
		'search_items'          => __( 'Buscar imagenes', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Uscar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar imagen', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar la imagen', 'text_domain' ),
		'items_list'            => __( 'Listado de Slider', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Slider', 'text_domain' ),
		'description'           => __( 'Gestionar nuestro propio contenido en los slider', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Slider', $args );

}
add_action( 'init', 'slider_header', 0 );

}




 ?>
