<?php
if (function_exists('register_nav_menus')){
	register_nav_menus (array('superior'=>'Menu Principal Superior'));
}
if ( function_exists( 'add_theme_support' ) ) { 
		add_theme_support( 'post-thumbnails' );
}
// Adding Shortcodes to the_excerpt() function
add_filter('the_excerpt', 'do_shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');
// Enable shortcodes in widgets
add_filter('widget_text', 'do_shortcode');
//hoja de estilos acá
    function theme_scripts() {
                wp_enqueue_style('style', get_stylesheet_uri() );
    }
    add_action('wp_enqueue_scripts', 'theme_scripts');
//mostrar barra admin
if (is_user_logged_in()) {
    show_admin_bar(true);
}#end if

//custom logo
function mytheme_setup() {
    add_theme_support('custom-logo', array(
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );}

 
add_action('after_setup_theme', 'mytheme_setup');
//cambiar la clase del logo
add_filter( 'get_custom_logo', 'change_logo_class' );

function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo-link', 'navbar-brand', $html );
		$html = str_replace( 'custom-logo', 'img-fluid', $html );

    return $html;
}
//customfooter
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'footerlogo',
            'name'          => __( 'footer' ),
						'description'   => __( 'A short description of the sidebar.' ),
						'class'					=> 'img-fluid footerlogo',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">', 
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
//clase para a navbar
add_filter('nav_menu_link_attributes', 'clase_menu_ilatina', 10, 3);
 function clase_menu_ilatina  ($atts, $item, $args) {
            $class = 'nav-link';
            $atts['class'] = $class;
            return $atts;
}
//post-type libros
if ( ! function_exists('libros_post_type') ) {

// Register Custom Post Type
function libros_post_type() {

	$labels = array(
		'name'                  => _x( 'libro', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'libro', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Libros', 'text_domain' ),
		'name_admin_bar'        => __( 'Libros', 'text_domain' ),
		'archives'              => __( 'Catálogo Libros', 'text_domain' ),
		'attributes'            => __( 'Atributo de Libro', 'text_domain' ),
		'parent_item_colon'     => __( 'padre de Libro:', 'text_domain' ),
		'all_items'             => __( 'Catálogo Completo de Libros', 'text_domain' ),
		'add_new_item'          => __( 'Añadir Nuevo Libro', 'text_domain' ),
		'add_new'               => __( 'Nuevo Libro', 'text_domain' ),
		'new_item'              => __( 'Nuevo Libro', 'text_domain' ),
		'edit_item'             => __( 'Editar Libro', 'text_domain' ),
		'update_item'           => __( 'Actualizar Libro', 'text_domain' ),
		'view_item'             => __( 'Ver Libro', 'text_domain' ),
		'view_items'            => __( 'Ver Libros', 'text_domain' ),
		'search_items'          => __( 'Buscar Libro', 'text_domain' ),
		'not_found'             => __( 'Libro No Encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'Libro no Encontrado', 'text_domain' ),
		'featured_image'        => __( 'Imagen Destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Elegir Imagen Destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar Imagen Destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar Imagen Destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en Libro', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en Libro', 'text_domain' ),
		'items_list'            => __( 'Lista de Libros', 'text_domain' ),
		'items_list_navigation' => __( 'Lista Navegable de Libros', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de lista de Libros', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'libro', 'text_domain' ),
		'description'           => __( 'catálogo de libros', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => false,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'libros', $args );

}
add_action( 'init', 'libros_post_type', 0 );

}

// Show posts of 'post', 'page' and 'libro' post types on home page
function add_my_post_types_to_query( $query ) {
  if ( is_home() && $query->is_main_query() )
    $query->set( 'post_type', array( 'post', 'page', 'libros' ) );
  return $query;
}
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

//empezo nuevo post_type
//post-type Auteur
if ( ! function_exists('auteur_post_type') ) {

// Register Custom Post Type
function auteur_post_type() {

	$labels = array(
		'name'                  => _x( 'auteur', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'auteur', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'auteurs', 'text_domain' ),
		'name_admin_bar'        => __( 'auteurs', 'text_domain' ),
		'archives'              => __( 'Catálogo auteurs', 'text_domain' ),
		'attributes'            => __( 'Atributo de auteur', 'text_domain' ),
		'parent_item_colon'     => __( 'padre de auteur:', 'text_domain' ),
		'all_items'             => __( 'Catálogo Completo de auteurs', 'text_domain' ),
		'add_new_item'          => __( 'Añadir Nuevo auteur', 'text_domain' ),
		'add_new'               => __( 'Nuevo auteur', 'text_domain' ),
		'new_item'              => __( 'Nuevo auteur', 'text_domain' ),
		'edit_item'             => __( 'Editar auteur', 'text_domain' ),
		'update_item'           => __( 'Actualizar auteur', 'text_domain' ),
		'view_item'             => __( 'Ver auteur', 'text_domain' ),
		'view_items'            => __( 'Ver auteurs', 'text_domain' ),
		'search_items'          => __( 'Buscar auteur', 'text_domain' ),
		'not_found'             => __( 'auteur No Encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'auteur no Encontrado', 'text_domain' ),
		'featured_image'        => __( 'Imagen Destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Elegir Imagen Destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar Imagen Destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar Imagen Destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en auteur', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en auteur', 'text_domain' ),
		'items_list'            => __( 'Lista de auteurs', 'text_domain' ),
		'items_list_navigation' => __( 'Lista Navegable de auteurs', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de lista de auteurs', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'auteur', 'text_domain' ),
		'description'           => __( 'catálogo de auteurs', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => false,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'auteur', $args );

}
add_action( 'init', 'auteur_post_type', 0 );

}
//post collections
if ( ! function_exists('collection_post_type') ) {

// Register Custom Post Type
function collection_post_type() {

	$labels = array(
		'name'                  => _x( 'collection', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'collection', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'collections', 'text_domain' ),
		'name_admin_bar'        => __( 'collections', 'text_domain' ),
		'archives'              => __( 'Catálogo collections', 'text_domain' ),
		'attributes'            => __( 'Atributo de collection', 'text_domain' ),
		'parent_item_colon'     => __( 'padre de collection:', 'text_domain' ),
		'all_items'             => __( 'Catálogo Completo de collections', 'text_domain' ),
		'add_new_item'          => __( 'Añadir Nuevo collection', 'text_domain' ),
		'add_new'               => __( 'Nuevo collection', 'text_domain' ),
		'new_item'              => __( 'Nuevo collection', 'text_domain' ),
		'edit_item'             => __( 'Editar collection', 'text_domain' ),
		'update_item'           => __( 'Actualizar collection', 'text_domain' ),
		'view_item'             => __( 'Ver collection', 'text_domain' ),
		'view_items'            => __( 'Ver collections', 'text_domain' ),
		'search_items'          => __( 'Buscar collection', 'text_domain' ),
		'not_found'             => __( 'collection No Encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'collection no Encontrado', 'text_domain' ),
		'featured_image'        => __( 'Imagen Destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Elegir Imagen Destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar Imagen Destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar Imagen Destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en collection', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en collection', 'text_domain' ),
		'items_list'            => __( 'Lista de collections', 'text_domain' ),
		'items_list_navigation' => __( 'Lista Navegable de collections', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de lista de collections', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'collection', 'text_domain' ),
		'description'           => __( 'catálogo de collections', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => false,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'collection', $args );

}
add_action( 'init', 'collection_post_type', 0 );

}

  //abajo termina el php
?>