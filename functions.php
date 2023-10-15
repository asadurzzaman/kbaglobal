<?php
/**
 * kbaglobal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kbaglobal
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kbaglobal_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on kbaglobal, use a find and replace
		* to change 'kbaglobal' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'kbaglobal', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'kbaglobal' ),
			'menu-2' => esc_html__( 'Mobile Menu', 'kbaglobal' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'kbaglobal_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'kbaglobal_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kbaglobal_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kbaglobal_content_width', 640 );
}
add_action( 'after_setup_theme', 'kbaglobal_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kbaglobal_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'kbaglobal' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kbaglobal' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar Four', 'kbaglobal' ),
			'id'            => 'footer-sidebar-4',
			'description'   => esc_html__( 'Add widgets here.', 'kbaglobal' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'kbaglobal_widgets_init' );

/**
 * URL Rewrite.
 */
require get_template_directory() . '/inc/url-rewrite.php';

/**
 * Enqueue Style and Js file.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*****************************************/
/***************team cpt********************/
add_action( 'init', 'team_members_post_type' );
function team_members_post_type() {
    $labels = array(
        'name' => 'Team Members',
        'singular_name' => 'Team Member',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Team Member',
        'edit_item' => 'Edit Team Member',
        'new_item' => 'New Team Member',
        'view_item' => 'View Team Member',
        'search_items' => 'Search TeamMember',
        'not_found' =>  'No Members  found',
        'not_found_in_trash' => 'No Members in the trash',
        'parent_item_colon' => '',
    );

    register_post_type( 'team_members', array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => false,
        'show_ui' => true,
        'exclude_from_search' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 10,
        'supports' => array( 'title','editor','thumbnail' ), 
    ) );
}
add_action( 'init', 'testimonials_post_type' );
function testimonials_post_type() {
    $labels = array(
        'name' => 'Testimonials',
        'singular_name' => 'Testimonial',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Testimonial',
        'edit_item' => 'Edit Testimonial',
        'new_item' => 'New Testimonial',
        'view_item' => 'View Testimonial',
        'search_items' => 'Search Testimonials',
        'not_found' =>  'No Testimonials found',
        'not_found_in_trash' => 'No Testimonials in the trash',
        'parent_item_colon' => '',
    );

    register_post_type( 'testimonials', array(
        'labels' => $labels,
        'public' => false,
        'publicly_queryable' => false,
        'show_ui' => true,
        'exclude_from_search' => false,
        'query_var' => false,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => 10,
        'supports' => array( 'title','editor' ), 
		
        //'register_meta_box_cb' => 'testimonials_meta_boxes', // Callback function for custom metaboxes
    ) );
}

add_action( 'init', 'universities_post_type' );
function universities_post_type() {
    $labels = array(
        'name' => 'Universities',
        'singular_name' => 'University',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New University',
        'edit_item' => 'Edit University',
        'new_item' => 'New University',
        'view_item' => 'View University',
        'search_items' => 'Search Universities',
        'not_found' =>  'No Universities found',
        'not_found_in_trash' => 'No Universities in the trash',
        'parent_item_colon' => '',
    );

    register_post_type( 'universities', array(
        'labels' => $labels,
        'public' => false,
        'publicly_queryable' => false,
        'show_ui' => true,
        'exclude_from_search' => false,
        'query_var' => false,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => 10,
        'supports' => array( 'title','editor','thumbnail' ), 
		
        //'register_meta_box_cb' => 'testimonials_meta_boxes', // Callback function for custom metaboxes
    ) );
}


/**
 * Registers a custom post type 'all_offices'.
 *
 * @since 1.0.0
 *
 * @return void
 */
function offices_post_type() : void {
	$labels = [
		'name' => _x( 'Offices', 'kbaglobal' ),
		'singular_name' => _x( 'Office', 'kbaglobal' ),
		'menu_name' => __( 'Offices', 'kbaglobal' ),
		'name_admin_bar' => __( 'Offices', 'kbaglobal' ),
		'archives' => __( 'Offices Archives', 'kbaglobal' ),
		'attributes' => __( 'Offices Attributes', 'kbaglobal' ),
		'parent_item_colon' => __( 'Parent All office:', 'kbaglobal' ),
		'all_items' => __( 'Offices', 'kbaglobal' ),
		'add_new_item' => __( 'Add New office', 'kbaglobal' ),
		'add_new' => __( 'Add New', 'kbaglobal' ),
		'new_item' => __( 'New office', 'kbaglobal' ),
		'edit_item' => __( 'Edit office', 'kbaglobal' ),
		'update_item' => __( 'Update office', 'kbaglobal' ),
		'view_item' => __( 'View office', 'kbaglobal' ),
		'view_items' => __( 'View offices', 'kbaglobal' ),
		'search_items' => __( 'Search offices', 'kbaglobal' ),
		'not_found' => __( 'All office Not Found', 'kbaglobal' ),
		'not_found_in_trash' => __( 'office Not Found in Trash', 'kbaglobal' ),
		'featured_image' => __( 'Featured Image', 'kbaglobal' ),
		'set_featured_image' => __( 'Set Featured Image', 'kbaglobal' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'kbaglobal' ),
		'use_featured_image' => __( 'Use as Featured Image', 'kbaglobal' ),
		'insert_into_item' => __( 'Insert into office', 'kbaglobal' ),
		'uploaded_to_this_item' => __( 'Uploaded to this office', 'kbaglobal' ),
		'items_list' => __( 'Offices List', 'kbaglobal' ),
		'items_list_navigation' => __( 'Offices List Navigation', 'kbaglobal' ),
		'filter_items_list' => __( 'Filter offices List', 'kbaglobal' ),
	];
	$labels = apply_filters( 'all_offices-labels', $labels );

	$args = [
		'label' => __( 'All office', 'kbaglobal' ),
		'labels' => $labels,
		'supports' => [
			'title',
			'editor',
			'thumbnail',
			'page-attributes',
		],
		'taxonomies' => [
			'office_category',
		], 
         
		'hierarchical' => true,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 10,
		'menu_icon' => 'dashicons-buddicons-forums',
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'publicly_queryable' => true, 
		'has_archive' => true, 
		'capability_type' => 'page', 
		// 'rewrite' => [
		// 	'slug' => '',
		// 	'with_front' => false, 
		// ]
	];
	$args = apply_filters( 'all_offices-args', $args );

	register_post_type( 'all_offices', $args );
}
add_action( 'init', 'offices_post_type', 0 );


/**
 * Registers the 'office_category' taxonomy.
 * 
 * @return void
 */
function register_office_taxonomy() : void {
	$labels = [
		'name' => _x( 'Categories',  'kbaglobal' ),
		'singular_name' => _x( 'Category', 'kbaglobal' ),
		'menu_name' => __( 'Categories ', 'kbaglobal' ),
		'all_items' => __( 'All Categories ', 'kbaglobal' ),
		'parent_item' => __( 'Parent Category ', 'kbaglobal' ),
		'parent_item_colon' => __( 'Parent Category: ', 'kbaglobal' ),
		'new_item_name' => __( 'New Category ', 'kbaglobal' ),
		'add_new_item' => __( 'Add New Category ', 'kbaglobal' ),
		'edit_item' => __( 'Edit Category ', 'kbaglobal' ),
		'update_item' => __( 'Update Category ', 'kbaglobal' ),
		'view_item' => __( 'View Category ', 'kbaglobal' ),
		'add_or_remove_items' => __( 'Add or Remove Categories ', 'kbaglobal' ),
		'choose_from_most_used' => __( 'Choose from most used Categories ', 'kbaglobal' ),
		'popular_items' => __( 'Popular Categories ', 'kbaglobal' ),
		'search_items' => __( 'Search Categories ', 'kbaglobal' ),
		'not_found' => __( 'Not Found ', 'kbaglobal' ),
		'no_terms' => __( 'No Categories ', 'kbaglobal' ),
		'items_list' => __( 'Categories List ', 'kbaglobal' ),
		'items_list_navigation' => __( 'Categories List Navigation ', 'kbaglobal' ),
	];

	$args = [
		'labels' => $labels,
		'hierarchical' => true,
        'show_admin_column' => true,
		'public' => true,
		'show_ui' => true,   
		// 'rewrite' => array(
        //     'slug' => 'offices',
        //     'with_front' => true
        // )
	];

	register_taxonomy( 'office_category', ['all_offices'], $args );
}
add_action( 'init', 'register_office_taxonomy' );

//create a function

function menu_set_dropdown( $items, $args ) {
	
	$parents = array();
    foreach ( $items as $item ) {
        //Check if the item is a parent item
        if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
            $parents[] = $item->menu_item_parent;
        }
    }
    
    foreach ( $items as $item ) {
        if ( in_array( $item->ID, $parents ) ) {
            //Add "menu-parent-item" class to parents
            $item->classes[] = 'dropdown';
        }
    }

	/*echo '<pre>';
	print_r($sorted_menu_items);
	
    $last_top = 0;
    foreach ( $sorted_menu_items as $key => $obj ) {
        // it is a top lv item?
        if ( 0 == $obj->menu_item_parent ) {
            // set the key of the parent
            $last_top = $key;
        } else {
            $sorted_menu_items[$last_top]->classes['dropdown'] = 'dropdown';
        }
    }*/
    return $items;
}
add_filter( 'wp_nav_menu_objects', 'menu_set_dropdown', 10, 2 );


/*************blog rewrite rule***************/
/**
 * Add new rewrite rule
 */
/**
 * Add new rewrite rule
 */
function create_new_url_querystring() {
    add_rewrite_rule(
        'blog/([^/]*)$',
        'index.php?name=$matches[1]',
        'top'
    );

    add_rewrite_tag('%blog%','([^/]*)');
}
add_action('init', 'create_new_url_querystring', 999 );


/**
 * Modify post link
 * This will print /blog/post-name instead of /post-name
 */
function append_query_string( $url, $post, $leavename ) {

	if ( $post->post_type != 'post' )
        	return $url;
	
	
	if ( false !== strpos( $url, '%postname%' ) ) {
        	$slug = '%postname%';
	}
	elseif ( $post->post_name ) {
        	$slug = $post->post_name;
	}
	else {
		$slug = sanitize_title( $post->post_title );
	}
    
	$url = home_url( user_trailingslashit( 'blog/'. $slug ) );

	return $url;
}
add_filter( 'post_link', 'append_query_string', 10, 3 );


/**
 * Redirect all posts to new url
 * If you get error 'Too many redirects' or 'Redirect loop', then delete everything below
 */
function redirect_old_urls() {

	if ( is_singular('post') ) {
		global $post;

		if ( strpos( $_SERVER['REQUEST_URI'], '/blog/') === false) {
		   wp_redirect( home_url( user_trailingslashit( "blog/$post->post_name" ) ), 301 );
		   exit();
		}
	}
}
add_filter( 'template_redirect', 'redirect_old_urls' );

add_filter( 'wp_enqueue_scripts', 'change_default_jquery', PHP_INT_MAX );


function wpb_widgets_init() {
 	
	$sidebars['sidebar-right']["name"]  =  'Page Right Sidebar';
	$sidebars['migration-agents']["name"]  =  'Migration Agents';
	
	foreach($sidebars as $key=>$sidebar){
		
		$args = array('id'=>$key,'name'=>$sidebar['name']);
		$default_args=array(
			//'name' => __( 'Page Right Sidebar', 'wpb' ),
			//'id' => 'sidebar-right',
			//'description' => __( '', 'wpb' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) ;
		
		register_sidebar(array_merge($args,$default_args));
	
  
    }
}
add_action( 'widgets_init', 'wpb_widgets_init' );


//shortodes
add_shortcode('blogs_grid', 'display_blogs_grid');
function display_blogs_grid(){
	
					  $args = array(
						'posts_per_page' => 3, /* how many post you need to display */
						'offset' => 0,
						'orderby' => 'post_date',
						'order' => 'DESC',
						'post_type' => 'post', /* your post type name */
						'post_status' => 'publish'
					  );
					  $query = new WP_Query($args);
					  if ($query->have_posts()) :
						while ($query->have_posts()) : $query->the_post();
							?>
							<div class="blog-box">
								<div class="img-left">
									 <a href="<?php the_permalink(); ?>" aria-label="<?php the_title(); ?>">
										<?php if ( has_post_thumbnail() ) : ?>	
												 <?php the_post_thumbnail( 'large' ) ?>	 
										<?php else : ?>
									  		<img src="https://media.istockphoto.com/id/1147544807/vector/thumbnail-image-vector-graphic.jpg?s=612x612&w=0&k=20&c=rnCKVbdxqkjlcs3xH87-9gocETqpspHFXu5dIGB4wuM=" />
										<?php endif; ?>
									 </a>	 
								</div>
								<div class="right-blog">  
									<p class="post_date">
										<span><i class="fa-solid fa-calendar-days"></i></span> <?php echo get_the_date( 'l, j M Y' ); ?>
									</p> 
									 <h2 class="post-title"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2> 
									 <!-- <p><?php //echo wp_trim_words(get_the_content(), 15); ?></p>  -->
									 <ul class="meta_data">
										<li><i class="fa-solid fa-tags"></i></li>
										<?php 
										$categories = get_the_category(); 
										foreach( $categories as $category){ 
										?> 
										<li><a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"><?php echo esc_html( $category->name ); ?></a></li>
										<?php }?>
									</ul>
								</div>
							</div>
					   <?php
					endwhile;
				  endif;
				
}
/******************METABOX***********************/
/**
* Plugin Name: Metabox 
*
*/

add_action( 'add_meta_boxes', 'so_custom_meta_box' );

function so_custom_meta_box($post){
	
	$template_path = get_post_meta(get_the_ID(), '_wp_page_template', true);
	
	if("template_page_rightsidebar.php" == $template_path)
    	add_meta_box('so_meta_box', 'Choose the Sidebar to Display', 'kbaglobal_custom_sidebar', $post->post_type, 'normal' , 'high');
}

add_action('save_post', 'so_save_metabox');

function so_save_metabox(){ 
    global $post;
    if(isset($_POST["kbaglobal_custom_sidebar"])){
         //UPDATE: 
        $meta_element_class = $_POST['kbaglobal_custom_sidebar'];
        //END OF UPDATE

        update_post_meta($post->ID, 'kbaglobal_custom_sidebar', $meta_element_class);
        //print_r($_POST);
    }
}

function kbaglobal_custom_sidebar($post){
    $meta_element_class = get_post_meta($post->ID, 'kbaglobal_custom_sidebar', true); //true ensures you get just one value instead of an array
    ?>   
    <label>Choose the Sidebar :  </label>
	<?php global $wp_registered_sidebars;

    if ( empty( $wp_registered_sidebars ) )
        return;

    //$name = empty( $name ) ? false : ' name="' . esc_attr( $name ) . '"';
    $current = $meta_element_class ? esc_attr( $meta_element_class ) : false;     
    $selected = '';
    ?>
    <select name="kbaglobal_custom_sidebar">
    <?php foreach ( $wp_registered_sidebars as $sidebar ) : ?>
        <?php 
        if ( $current ) 
            $selected = selected( $current === $sidebar['id'], true, false ); ?>    
				<option value="<?php echo $sidebar['id']; ?>"<?php echo $selected; ?>><?php echo $sidebar['name']; ?></option>
			<?php endforeach; ?>
    </select>
    <?php
}

// Pagination function
function kba_pagination(){
    global $wp_query;
 	$prev_arrow1 = is_rtl() ? '<span class="arrow-right"></span><span class="direction-text">Next</span>' : '<span class="arrow-left"></span><span class="direction-text">Prev</span>';
	$next_arrow2 = is_rtl() ? '<span class="arrow-left"></span><span class="direction-text">Prev</span>' : '<span class="arrow-right"></span><span class="direction-text">Next</span>';  

	$links = paginate_links( array(
		'current'  => max( 1, get_query_var( 'paged' ) ),
		'total'    => $wp_query->max_num_pages,
		'type'     => 'list',
		'mid_size' => apply_filters( "conskip_pagination_mid_size", 7 ),
        'prev_text' => $prev_arrow1,
        'next_text' => $next_arrow2,
	) );
	 
    $links = str_replace( "<ul class='page-numbers'>", "<ul class='pagination justify-content-center'>", $links );
    $links = str_replace( "<li>", "<li class='page-item'>", $links );
    
	echo wp_kses_post( $links );
}



