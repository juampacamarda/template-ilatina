<?php
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
    $html = str_replace( 'custom-logo', 'img-fluid logosize', $html );

    return $html;
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
//abajo termina el php
?>