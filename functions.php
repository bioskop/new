<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
  exit;
}

/*
===============================
Remove wordpress Meta Tags
===============================
*/
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action ('wp_head', 'rsd_link');

/*
===============================
Include Scripts
===============================
*/

function palilula_script_enqueue(){
  //CSS
wp_enqueue_style( 'bootsrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '','all' );
wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/palilula.css', array(), '', 'all' );
wp_enqueue_style( 'owlCarousel', get_template_directory_uri() . '/owl-carousel/owl.carousel.css', array(), '',  'all' );
wp_enqueue_style( 'owlTheme', get_template_directory_uri() . '/owl-carousel/owl.theme.css', array(), '', 'all' );
wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/lightbox.css', array(), '', 'all' );

  //JS
wp_enqueue_script( 'js', get_template_directory_uri() . '/js/jquery-1.11.0.min.js', array(), '', false );
wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
wp_enqueue_script( 'lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js', array(), '', true );
wp_enqueue_script( 'owljs', get_template_directory_uri() . '/owl-carousel/owl.carousel.min.js', array(), '', true );
}

add_action( "wp_enqueue_scripts", palilula_script_enqueue );


//doctype for Open Graph
function doctype_opengraph($output) {
    return $output . ' xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'doctype_opengraph');

//metadata for Open Graph
function fb_opengraph() {
    global $post;

    if(is_single()) {
        if(has_post_thumbnail($post->ID)) {
            $img_src = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'large');
        } else {
            $img_src = get_stylesheet_directory_uri() . '/img/opengraph_image.jpg';
        }
        if($excerpt = $post->post_excerpt) {
            $excerpt = strip_tags($post->post_excerpt);
            $excerpt = str_replace("", "'", $excerpt);
        } else {
            $excerpt = get_bloginfo('description');
        }
        ?>

    <meta property="og:title" content="<?php echo the_title(); ?>"/>
    <meta property="og:description" content="<?php echo $excerpt; ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
    <meta property="og:image" content="<?php echo $img_src[0]; ?>"/>

<?php
    } else {
        return;
    }
}
add_action('wp_head', 'fb_opengraph', 5);
// END FACEBOOK



/*
===============================
Main Menu
===============================
*/
function palilula_theme_setup() {

	add_theme_support('menus');
	register_nav_menu('primary', 'Primary Header Navigation');

}
add_action('init', 'palilula_theme_setup');

/*
===============================
Include walker file
===============================
*/

require get_template_directory() . '/inc/walker.php';

//SIDEBAR
function palilulars_widgets_init() {
    register_sidebar( array(
        'id' => 'topsidebar',
        'name' => __( 'Top sidebar', 'palilulars' ),
        'description' => __( 'Sidebar u headeru.', 'palilulars' )
    ));
    register_sidebar( array(
            'id' => 'firstsidebar',
            'name' => __( 'Prvi sidebar', 'palilulars' ),
            'description' => __( 'Prvi sidebar u drugoj koloni.', 'palilulars' )
        ));
    register_sidebar( array(
        'id' => 'secondsidebar',
        'name' => __( 'Drugi sidebar', 'palilulars' ),
        'description' => __( 'Drugi sidebar u drugoj koloni.', 'palilulars' )
    ));
     register_sidebar( array(
        'id' => 'thirdsidebar',
        'name' => __( 'Treci sidebar', 'palilulars' ),
        'description' => __( 'Treci sidebar u drugoj koloni.', 'palilulars' )
    ));
     register_sidebar( array(
        'id' => 'baneri',
        'name' => __( 'Baneri', 'palilulars' ),
        'description' => __( 'Sidebar za banere.', 'palilulars' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>'
    ));
      register_sidebar( array(
        'id' => 'infoBar',
        'name' => __( 'infoBar', 'palilulars' ),
        'description' => __( 'Sidebar za informacije.', 'palilulars' )
    ));
}

add_action( 'widgets_init', 'palilulars_widgets_init' );

/*SUPPORT FOR THUMBNAIL*/
 add_theme_support( 'post-thumbnails' );
 add_theme_support('custom-header');

if(function_exists('add_image_size')){
 add_image_size('homepage-slider', 460, 308, true);
}


/*// Changing excerpt more
   function new_excerpt_more($more) {
   global $post;
   return '… <a href="'. get_permalink($post->ID) . '">' . 'Детаљније &raquo;' . '</a>';
   }
   add_filter('excerpt_more', 'new_excerpt_more');
//Change excerpt word count lenght
function new_excerpt_length($length) {
return 45;
}
add_filter('excerpt_length', 'new_excerpt_length');*/

function _category_dropdown_filter( $cat_args ) {
        $cat_args['show_option_none'] = __('Вести');
        return $cat_args;
}
add_filter( 'widget_categories_dropdown_args', '_category_dropdown_filter' );

//PAGINATION
function palilula_pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo "<div class='navigacija'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}
?>
