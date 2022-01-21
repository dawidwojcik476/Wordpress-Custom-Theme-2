<?php



if( function_exists('acf_add_options_page') ) {
	

    acf_add_options_page(array(
		'page_title' 	=> 'Opcje motywu',
		'menu_title'	=> 'Opcje motywu',
		'menu_slug' 	=> 'theme-header-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	
	
}

function pomorskie_register_nav_menu(){
	register_nav_menus( array(
		'primary-menu' => __( 'Górne Menu', 'text_domain' ),
		'second-header-menu'  => __( 'Górne Menu Wysuwane', 'text_domain' ),
	) );
}
add_action( 'after_setup_theme', 'pomorskie_register_nav_menu', 0 );


function theme_scripts() {





    wp_enqueue_style( 'scss', get_theme_file_uri( '/public/css/app.css' ), array(), file_exists( get_theme_file_path('/public/css/app.css') ) ? filemtime( get_theme_file_path('/public/css/app.css') ) : '0.0' );

     wp_enqueue_style( 'twd-googlefonts', 'https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;700;800;900&display=swap', array(), null );
     
    
     wp_enqueue_script( 'js', get_theme_file_uri( '/public/js/app.js' ), array('jquery'), '0.0.0', false );

	 wp_enqueue_script( 'googlemap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhiZi8t4tNB0i8AU1wpxOsgwl21LG0_c', NULL, '1.0.0', true);

     wp_enqueue_script( 'samplejs', get_theme_file_uri( '/public/js/header.js' ), array(), file_exists( get_theme_file_path('/public/js/header.js') ) ? filemtime( get_theme_file_path('/public/js/header.js') ) : '0.0', true );
	 
	 wp_enqueue_script( 'googlemapjs', get_theme_file_uri( '/public/js/googlemap.js' ), array(), file_exists( get_theme_file_path('/public/js/googlemap.js') ) ? filemtime( get_theme_file_path('/public/js/googlemap.js') ) : '0.0', true );

	 wp_enqueue_style( 'lightbox-style', get_theme_file_uri( '/bower_components/lightbox2/dist/css/lightbox.min.css' ), array(), file_exists( get_theme_file_path('/bower_components/lightbox2/dist/css/lightbox.min.css') ) ? filemtime( get_theme_file_path('/bower_components/lightbox2/dist/css/lightbox.min.css') ) : '0.0' );

	wp_enqueue_script( 'lightbox', get_theme_file_uri( '/bower_components/lightbox2/dist/js/lightbox.min.js' ), array(), file_exists( get_theme_file_path('/bower_components/lightbox2/dist/js/lightbox.min.js') ) ? filemtime( get_theme_file_path('/bower_components/lightbox2/dist/js/lightbox.min.js') ) : '0.0', true );


}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function pomorskie_post_type() {
    

        $labels = array(
            'name'                  => 'Zapytania ofertowe',
            'singular_name'         => 'Zapytanie ofertowe',
            'menu_name'             => 'Zapytania ofertowe',
            'name_admin_bar'        => 'Zapytanie ofertowe',
            'archives'              => 'Archiwum Zapytań ofertowych',
            'attributes'            => 'Atrybuty Zapytania ofertowe',
            'parent_item_colon'     => 'Parent Item:',
            'all_items'             => 'Wszystkie Zapytania ofertowe',
            'add_new_item'          => 'Nowe Zapytanie ofertowe',
            'add_new'               => 'Nowe Zapytanie ofertowe',
            'new_item'              => 'Nowe Zapytanie ofertowe',
            'edit_item'             => 'Edytuj Zapytanie ofertowe',
            'update_item'           => 'Edytuj Zapytanie ofertowe',
        );
        $args = array(
            'label'                 => 'Zapytanie ofertowe',
            'description'           => 'Post Type Description',
            'labels'                => $labels,
			'show_in_rest' => true,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ),
            'taxonomies'            => array(),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'menu_icon'           => 'dashicons-format-chat',
            'capability_type'       => 'post',
        );
        register_post_type( 'zapytanie', $args );

}

add_action('init', 'pomorskie_post_type');

flush_rewrite_rules( false );

function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyDnhiZi8t4tNB0i8AU1wpxOsgwl21LG0_c');
}

add_action('acf/init', 'my_acf_init');