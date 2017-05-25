<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );

// Change login logo and url
function inhabitent_logo() { ?>
	<style type="text/css">
		#login h1 a, .login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/inhabitent-logo-text-dark.svg);
			height: 65px;
			width: 320px;
			background-size: 320px 65px;
			background-repeat: no-repeat;
			padding-bottom: 30px;
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'inhabitent_logo' );

function inhabitent_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_logo_url' );

function inhabitent_login_title() {
	return 'Inhabitent';
}
add_filter( 'login_headertitle', 'inhabitent_login_title' );

// Add css to About Hero
function add_about_css() {
	if ( !is_page_template('about.php') ) {
		return;
	} else {
		$hero_image = CFS()->get('banner_image');
		$css = ".about-hero { background: url('$hero_image') center / cover no-repeat; }";
	}
	wp_add_inline_style( 'inhabitent-style', $css );
}
add_action( 'wp_enqueue_scripts', 'add_about_css' );


// Add the title to the Shop page
add_filter( 'get_the_archive_title', function ( $title ) {
    if( is_archive() ) {
        $title = 'Shop Stuff';
    }
    return $title;
});

// Change order and number of archive posts
add_action( 'pre_get_posts', 'change_archive_posts');

function change_archive_posts($query) {
	if ( is_post_type_archive( 'product' ) ) {
    $query->set( 'posts_per_page', 16 );
		$query->set( 'orderby', 'title' );
    $query->set( 'order', 'ASC' );
    return;
  }
}

// Decrease excerpt length
function decrease_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'decrease_excerpt_length');