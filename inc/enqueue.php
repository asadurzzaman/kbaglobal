<?php 
/**
 * Enqueue scripts and styles.
 */
if (site_url() == "landandleasent.com.au") {
    define("VERSION", time());
} else {
    define("VERSION", wp_get_theme()->get("Version"));
}

/**
 * Enqueue scripts and styles.
 */
function kbaglobal_scripts() {

    //wp_enqueue_style('kba-google-fonts', kba_google_fonts_url());
    wp_enqueue_style('kba-google-fonts', '//fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap');
    wp_enqueue_style('kbglobal-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('kbglobal-owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
    wp_enqueue_style('kbglobal-all', get_template_directory_uri() . '/assets/css/all.min.css', array(), VERSION);
    wp_enqueue_style('kbglobal-all-font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('kbglobal-slick-carousel', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
    wp_enqueue_style('kbglobal-slick', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css');
	wp_enqueue_style( 'kbaglobal-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style('kbglobal-theme-style', get_template_directory_uri() . '/assets/css/theme-style.css'); 
    wp_enqueue_style('kbglobal-theme-responsive', get_template_directory_uri() . '/assets/css/responsive.css');
    wp_style_add_data( 'kbaglobal-style', 'rtl', 'replace' );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('kba-slick', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js' , 'jQuery', _S_VERSION, false);
    wp_enqueue_script('kba-owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js',  'jQuery', _S_VERSION, false);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', 'jQuery', _S_VERSION, false );

	wp_enqueue_script( 'kbaglobal-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, false );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kbaglobal_scripts' );


/**
 * Load google fonts.
 */
// if ( ! function_exists( 'kba_google_fonts_url' ) ) {
//     function kba_google_fonts_url()
//     {
//         $fonts_url = '';
//         $fonts     = array();
//         $subsets   = 'latin';
//         if ('off' !== _x('on', 'PT+Sans font: on or off', 'kbaglobal')) {
//             $fonts[] = 'PT+Sans:400;0,700;1,400;1,700';
//         } 
//         // if ('off' !== _x('on', 'Roboto font: on or off', 'kbaglobal')) {
//         //     $fonts[] = 'Roboto: ital,wght@0,400;0,700;1,400;1,700';
//         // } 
//         if ($fonts) {
//             $fonts_url = add_query_arg(array(
//                 'family' => urlencode(implode('|', $fonts)),
//                 'subset' => urlencode($subsets),
//             ), '//fonts.googleapis.com/css');
//         }

//         return $fonts_url;
//     }
// }
?>