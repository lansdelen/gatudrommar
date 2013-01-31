<?php
	/**
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 */
	register_sidebar(array(
		'name'	=>	'Blogg Sidebar',
        'before_widget' => '<div class="widget-stripe"></div>',
        'after_widget' => '',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
		'name'	=>	'Footer vänster',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
	    register_sidebar(array(
		'name'	=>	'Footer mitten',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
		register_sidebar(array(
		'name'	=>	'Footer höger',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
	
	
	function change_excerpt($content) {
	$content = str_replace('[...]','...',$content); // remove [...], replace with ...
	$content = strip_tags($content); // remove HTML
	return $content;
}
add_filter('the_excerpt','change_excerpt');

function custom_excerpt_length( $length ) {
	return 60;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
    register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */



	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {
		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );

		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}	

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}
	