<?php
  function scodev_styles() {
    //************** Style ***************************//

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


 //**************** Link Javascript ************************/

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
  wp_register_script( 'our_work', get_template_directory_uri() . '/js/our_work.js',  array('Jquery'),'',true );
  wp_register_script( 'jquery.themepunch', get_template_directory_uri() . '/js/slideshow/jquery.themepunch.plugins.min.js',  array('Jquery'),'',true );
  wp_register_script( 'jquery.themepunch.revo', get_template_directory_uri() . '/js/slideshow/jquery.themepunch.revolution.js',  array('Jquery'),'',true );
  wp_register_script( 'jquery.themepunch.revo.min', get_template_directory_uri() . '/js/slideshow/jquery.themepunch.revolution.min.js',  array('Jquery'),'',true );



  //Llamar Js
  wp_enqueue_script('Jquery');
  wp_enqueue_script('jquery-1');
  wp_enqueue_script('jquery-2');
  wp_enqueue_script('bootstrap');
  wp_enqueue_script('theme');
    wp_enqueue_script('our_work');
  //wp_enqueue_script('theme-all');
  wp_enqueue_script('theme-home');
  wp_enqueue_script('owl.carousel');
  wp_enqueue_script('Chart');
  wp_enqueue_script('doughnutit');
  wp_enqueue_script('jquery.animateSlider');
  wp_enqueue_script('jquery.jscrollpane');
  wp_enqueue_script('jquery.mousewheel');
  //wp_enqueue_script('detail');
//  wp_enqueue_script('faq-theme');
  wp_enqueue_script('jquery.subscribe-better');
  wp_enqueue_script('modernizr.custom');
  wp_enqueue_script('modernizr');
  wp_enqueue_script('jquery.themepunch');
  wp_enqueue_script('jquery.themepunch.revo');
  wp_enqueue_script('jquery.themepunch.revo.min');
}


  //Tamaños de imagenes
  add_theme_support( 'post_thumbnails');
  add_image_size('slider_header', 1920, 598, true);



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

//************************Filtro para darle al menu**************************//
  function agregar_clases_li($classes, $item, $args, $depth) {
      if($args->theme_location == 'header-menu') {
          $classes[] = 'level0 parent col1 all-product hd-pd';
      }
      return $classes;
  }
  add_filter('nav_menu_css_class', 'agregar_clases_li', 1, 4);

//*************************Filtro para las categorias***************************//




//************** Custom after theme confirgure**********//

function custom_theme_setup(){

  add_theme_support( 'post-thumbnails' );

}
add_action('after_setup_theme', 'custom_theme_setup');

//************* Custom Post Type Slider ************* //

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

//******** Custom Post Type Testimoniales *************//
if ( ! function_exists('our_category') ) {

// Register Custom Post Type
function our_category() {

	$labels = array(
		'name'                  => _x( 'Categorias', 'Post Type General Name', 'scodev' ),
		'singular_name'         => _x( 'Categoria', 'Post Type Singular Name', 'scodev' ),
		'menu_name'             => __( 'Categoria', 'scodev' ),
		'name_admin_bar'        => __( 'Categoria', 'scodev' ),
		'archives'              => __( 'Categoria', 'scodev' ),
		'attributes'            => __( 'Item Attributes', 'scodev' ),
		'parent_item_colon'     => __( '', 'scodev' ),
		'all_items'             => __( 'Todas las categorias', 'scodev' ),
		'add_new_item'          => __( 'Nueva categoria', 'scodev' ),
		'add_new'               => __( 'Agregar una categoria', 'scodev' ),
		'new_item'              => __( 'Nueva categoria', 'scodev' ),
		'edit_item'             => __( 'Editar categoria', 'scodev' ),
		'update_item'           => __( 'Actualizar categoria', 'scodev' ),
		'view_item'             => __( 'Ver categoria', 'scodev' ),
		'view_items'            => __( 'Ver categorias', 'scodev' ),
		'search_items'          => __( 'Buscar categoria', 'scodev' ),
		'not_found'             => __( 'Not found', 'scodev' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'scodev' ),
		'featured_image'        => __( 'Featured Image', 'scodev' ),
		'set_featured_image'    => __( 'Set featured image', 'scodev' ),
		'remove_featured_image' => __( 'Remove featured image', 'scodev' ),
		'use_featured_image'    => __( 'Use as featured image', 'scodev' ),
		'insert_into_item'      => __( 'Insert into item', 'scodev' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'scodev' ),
		'items_list'            => __( 'Items list', 'scodev' ),
		'items_list_navigation' => __( 'Items list navigation', 'scodev' ),
		'filter_items_list'     => __( 'Filter items list', 'scodev' ),
	);
	$args = array(
		'label'                 => __( 'Categorias', 'scodev' ),
		'description'           => __( 'Nuestras categorias', 'scodev' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-status',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'our_category', $args );

}
add_action( 'init', 'our_category', 0 );

}







//******** Custom Post Type de Servicios *************//
if ( ! function_exists('category_service') ) {

// Register Custom Post Type
function category_service() {

	$labels = array(
		'name'                  => _x( 'Servicios', 'Post Type General Name', 'scodev' ),
		'singular_name'         => _x( 'Servicio', 'Post Type Singular Name', 'scodev' ),
		'menu_name'             => __( 'Servicios', 'scodev' ),
		'name_admin_bar'        => __( 'Servicios', 'scodev' ),
		'archives'              => __( 'Servicios', 'scodev' ),
		'attributes'            => __( 'Item Attributes', 'scodev' ),
		'parent_item_colon'     => __( '', 'scodev' ),
		'all_items'             => __( 'Todos los servicios', 'scodev' ),
		'add_new_item'          => __( 'Nuevo servicio', 'scodev' ),
		'add_new'               => __( 'Agregar nuevo servicio', 'scodev' ),
		'new_item'              => __( 'New service', 'scodev' ),
		'edit_item'             => __( 'Edit service', 'scodev' ),
		'update_item'           => __( 'Update service', 'scodev' ),
		'view_item'             => __( 'View service', 'scodev' ),
		'view_items'            => __( 'View services', 'scodev' ),
		'search_items'          => __( 'Search service', 'scodev' ),
		'not_found'             => __( 'Not found', 'scodev' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'scodev' ),
		'featured_image'        => __( 'Featured Image', 'scodev' ),
		'set_featured_image'    => __( 'Set featured image', 'scodev' ),
		'remove_featured_image' => __( 'Remove featured image', 'scodev' ),
		'use_featured_image'    => __( 'Use as featured image', 'scodev' ),
		'insert_into_item'      => __( 'Insert into item', 'scodev' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'scodev' ),
		'items_list'            => __( 'Items list', 'scodev' ),
		'items_list_navigation' => __( 'Items list navigation', 'scodev' ),
		'filter_items_list'     => __( 'Filter items list', 'scodev' ),
	);
	$args = array(
		'label'                 => __( 'Servicio', 'scodev' ),
		'description'           => __( 'Los Servicios que ofrecemos', 'scodev' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'service_category', $args );

}
add_action( 'init', 'category_service', 0 );

}


//******** Custom Post Type Capacidades *************//
if ( ! function_exists('our_capacity') ) {

// Register Custom Post Type
function our_capacity() {

	$labels = array(
		'name'                  => _x( 'Capacidades', 'Post Type General Name', 'scodev' ),
		'singular_name'         => _x( 'Capacidad', 'Post Type Singular Name', 'scodev' ),
		'menu_name'             => __( 'Capacidades', 'scodev' ),
		'name_admin_bar'        => __( 'Capacidades', 'scodev' ),
		'archives'              => __( 'Capacidad', 'scodev' ),
		'attributes'            => __( 'Item Attributes', 'scodev' ),
		'parent_item_colon'     => __( '', 'scodev' ),
		'all_items'             => __( 'Todas las capacidades', 'scodev' ),
		'add_new_item'          => __( 'Nueva capacidad', 'scodev' ),
		'add_new'               => __( 'Agregar una capacidad', 'scodev' ),
		'new_item'              => __( 'Nuevo capacidad', 'scodev' ),
		'edit_item'             => __( 'Editar capacidad', 'scodev' ),
		'update_item'           => __( 'Actualizar capacidad', 'scodev' ),
		'view_item'             => __( 'Ver capacidad', 'scodev' ),
		'view_items'            => __( 'Ver capacidades', 'scodev' ),
		'search_items'          => __( 'Buscar capacidad', 'scodev' ),
		'not_found'             => __( 'Not found', 'scodev' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'scodev' ),
		'featured_image'        => __( 'Imagen destacada', 'scodev' ),
		'set_featured_image'    => __( 'Set featured image', 'scodev' ),
		'remove_featured_image' => __( 'Remove featured image', 'scodev' ),
		'use_featured_image'    => __( 'Use as featured image', 'scodev' ),
		'insert_into_item'      => __( 'Insert into item', 'scodev' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'scodev' ),
		'items_list'            => __( 'Items list', 'scodev' ),
		'items_list_navigation' => __( 'Items list navigation', 'scodev' ),
		'filter_items_list'     => __( 'Filter items list', 'scodev' ),
	);
	$args = array(
		'label'                 => __( 'Capacidad', 'scodev' ),
		'description'           => __( 'Nuestras capacidades', 'scodev' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-performance',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'capacity_our', $args );

}
add_action( 'init', 'our_capacity', 0 );

}


//******** Custom Post Type Testimoniales *************//
if ( ! function_exists('our_testimoniales') ) {

// Register Custom Post Type
function our_testimoniales() {

	$labels = array(
		'name'                  => _x( 'Testimoniales', 'Post Type General Name', 'scodev' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'scodev' ),
		'menu_name'             => __( 'Testimoniales', 'scodev' ),
		'name_admin_bar'        => __( 'Testimoniales', 'scodev' ),
		'archives'              => __( 'Testimonial', 'scodev' ),
		'attributes'            => __( 'Item Attributes', 'scodev' ),
		'parent_item_colon'     => __( '', 'scodev' ),
		'all_items'             => __( 'Todos los testimonios', 'scodev' ),
		'add_new_item'          => __( 'Nuevo testimonio', 'scodev' ),
		'add_new'               => __( 'Agregar un testimonio', 'scodev' ),
		'new_item'              => __( 'Nueva testimonio', 'scodev' ),
		'edit_item'             => __( 'Editar testimonio', 'scodev' ),
		'update_item'           => __( 'Actualizar testimonio', 'scodev' ),
		'view_item'             => __( 'Ver testimonio', 'scodev' ),
		'view_items'            => __( 'Ver testimonio', 'scodev' ),
		'search_items'          => __( 'Buscar testimonio', 'scodev' ),
		'not_found'             => __( 'Not found', 'scodev' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'scodev' ),
		'featured_image'        => __( 'Featured Image', 'scodev' ),
		'set_featured_image'    => __( 'Set featured image', 'scodev' ),
		'remove_featured_image' => __( 'Remove featured image', 'scodev' ),
		'use_featured_image'    => __( 'Use as featured image', 'scodev' ),
		'insert_into_item'      => __( 'Insert into item', 'scodev' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'scodev' ),
		'items_list'            => __( 'Items list', 'scodev' ),
		'items_list_navigation' => __( 'Items list navigation', 'scodev' ),
		'filter_items_list'     => __( 'Filter items list', 'scodev' ),
	);
	$args = array(
		'label'                 => __( 'Capacidad', 'scodev' ),
		'description'           => __( 'Nuestras capacidades', 'scodev' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimoniales_our', $args );

}
add_action( 'init', 'our_testimoniales', 0 );

}


//***************************Advanced custom fields*******************************
define( 'ACF_LITE', true );

  include_once('advanced-custom-fields/acf.php');

  if(function_exists("register_field_group"))
  {
  	register_field_group(array (
  		'id' => 'acf_anexar-informacion-al-slider',
  		'title' => 'Anexar información al Slider',
  		'fields' => array (
  			array (
  				'key' => 'field_59fa76173d11e',
  				'label' => 'Titulo',
  				'name' => 'titulo',
  				'type' => 'text',
  				'required' => 1,
  				'default_value' => '',
  				'placeholder' => '',
  				'prepend' => '',
  				'append' => '',
  				'formatting' => 'none',
  				'maxlength' => '',
  			),
  			array (
  				'key' => 'field_59fa6fedf6803',
  				'label' => 'Información ',
  				'name' => 'informacion_',
  				'type' => 'text',
  				'required' => 1,
  				'default_value' => '',
  				'placeholder' => 'Información a presentar junto con la imagen',
  				'prepend' => '',
  				'append' => '',
  				'formatting' => 'none',
  				'maxlength' => '',
  			),
  			array (
  				'key' => 'field_59fa706cf6804',
  				'label' => 'Accion',
  				'name' => 'accion',
  				'type' => 'text',
  				'instructions' => 'Link para acccion',
  				'default_value' => '',
  				'placeholder' => '',
  				'prepend' => '',
  				'append' => '',
  				'formatting' => 'html',
  				'maxlength' => '',
  			),
  			array (
  				'key' => 'field_59fa70abf6805',
  				'label' => 'imagen destacada',
  				'name' => 'imagen_destacada',
  				'type' => 'image',
  				'required' => 1,
  				'save_format' => 'id',
  				'preview_size' => 'thumbnail',
  				'library' => 'all',
  			),
  		),
  		'location' => array (
  			array (
  				array (
  					'param' => 'post_type',
  					'operator' => '==',
  					'value' => 'slider',
  					'order_no' => 0,
  					'group_no' => 0,
  				),
  			),
  		),
  		'options' => array (
  			'position' => 'acf_after_title',
  			'layout' => 'default',
  			'hide_on_screen' => array (
  				0 => 'custom_fields',
  				1 => 'discussion',
  				2 => 'comments',
  				3 => 'revisions',
  				4 => 'send-trackbacks',
  			),
  		),
  		'menu_order' => 0,
  	));
  	register_field_group(array (
  		'id' => 'acf_capacidad',
  		'title' => 'Capacidad',
  		'fields' => array (
  			array (
  				'key' => 'field_59ff9745dc007',
  				'label' => 'color ',
  				'name' => 'color_',
  				'type' => 'text',
  				'required' => 1,
  				'default_value' => '',
  				'placeholder' => '',
  				'prepend' => '',
  				'append' => '',
  				'formatting' => 'html',
  				'maxlength' => '',
  			),
  			array (
  				'key' => 'field_59ff9751dc008',
  				'label' => 'porcentaje ',
  				'name' => 'porcentaje_',
  				'type' => 'number',
  				'required' => 1,
  				'default_value' => '',
  				'placeholder' => '',
  				'prepend' => '',
  				'append' => '',
  				'min' => '',
  				'max' => '',
  				'step' => '',
  			),
  		),
  		'location' => array (
  			array (
  				array (
  					'param' => 'post_type',
  					'operator' => '==',
  					'value' => 'capacity_our',
  					'order_no' => 0,
  					'group_no' => 0,
  				),
  			),
  		),
  		'options' => array (
  			'position' => 'normal',
  			'layout' => 'no_box',
  			'hide_on_screen' => array (
  			),
  		),
  		'menu_order' => 0,
  	));
  	register_field_group(array (
  		'id' => 'acf_servicios',
  		'title' => 'Servicios',
  		'fields' => array (
  			array (
  				'key' => 'field_59fcfae76f0a4',
  				'label' => 'Link',
  				'name' => 'link_',
  				'type' => 'text',
  				'instructions' => 'Nombre del servicio',
  				'required' => 1,
  				'default_value' => '',
  				'placeholder' => '',
  				'prepend' => '',
  				'append' => '',
  				'formatting' => 'none',
  				'maxlength' => '',
  			),
  			array (
  				'key' => 'field_59fcfb126f0a5',
  				'label' => 'imagen destacada',
  				'name' => 'imagen_destacada',
  				'type' => 'image',
  				'required' => 1,
  				'save_format' => 'url',
  				'preview_size' => 'thumbnail',
  				'library' => 'all',
  			),
  		),
  		'location' => array (
  			array (
  				array (
  					'param' => 'post_type',
  					'operator' => '==',
  					'value' => 'service_category',
  					'order_no' => 0,
  					'group_no' => 0,
  				),
  			),
  		),
  		'options' => array (
  			'position' => 'normal',
  			'layout' => 'no_box',
  			'hide_on_screen' => array (
  				0 => 'featured_image',
  			),
  		),
  		'menu_order' => 0,
  	));
  	register_field_group(array (
  		'id' => 'acf_testimonios',
  		'title' => 'Testimonios',
  		'fields' => array (
  			array (
  				'key' => 'field_5a00d814cea09',
  				'label' => 'prof',
  				'name' => 'prof_',
  				'type' => 'text',
  				'required' => 1,
  				'default_value' => '',
  				'placeholder' => '',
  				'prepend' => '',
  				'append' => '',
  				'formatting' => 'html',
  				'maxlength' => '',
  			),
  			array (
  				'key' => 'field_59ff951517ca9',
  				'label' => 'proyecto_1',
  				'name' => 'proyecto_1',
  				'type' => 'image',
  				'required' => 1,
  				'save_format' => 'url',
  				'preview_size' => 'thumbnail',
  				'library' => 'all',
  			),
  			array (
  				'key' => 'field_59ff952e17caa',
  				'label' => 'proyecto_2',
  				'name' => 'proyecto_2',
  				'type' => 'image',
  				'required' => 1,
  				'save_format' => 'url',
  				'preview_size' => 'thumbnail',
  				'library' => 'all',
  			),
  			array (
  				'key' => 'field_59ff95580e7e4',
  				'label' => 'proyecto_3',
  				'name' => 'proyecto_3',
  				'type' => 'image',
  				'required' => 1,
  				'save_format' => 'url',
  				'preview_size' => 'thumbnail',
  				'library' => 'all',
  			),
  			array (
  				'key' => 'field_59ff953a17cab',
  				'label' => 'proyecto_4',
  				'name' => 'proyecto_4',
  				'type' => 'image',
  				'save_format' => 'object',
  				'preview_size' => 'thumbnail',
  				'library' => 'all',
  			),
  		),
  		'location' => array (
  			array (
  				array (
  					'param' => 'post_type',
  					'operator' => '==',
  					'value' => 'testimoniales_our',
  					'order_no' => 0,
  					'group_no' => 0,
  				),
  			),
  		),
  		'options' => array (
  			'position' => 'normal',
  			'layout' => 'no_box',
  			'hide_on_screen' => array (
  			),
  		),
  		'menu_order' => 0,
  	));
  }








 ?>
