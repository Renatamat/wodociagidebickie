<?php

/* This file is part of WodociagiStrona, twentytwenty child theme.

  All functions of this file will be loaded before of parent theme functions.
  Learn more at https://codex.wordpress.org/Child_Themes.

  Note: this function loads the parent stylesheet before, then child theme stylesheet
  (leave it in place unless you know what you are doing.)
 */

if ( ! function_exists('suffice_child_enqueue_child_styles') ) {

    function WodociagiStrona_enqueue_child_styles() {
        $parent_style = get_template_directory_uri() . '/style.css';
        $child_style  = get_stylesheet_directory_uri() . '/style.css';

        // Wersje generowane na podstawie daty modyfikacji plików
        $parent_ver = filemtime( get_template_directory() . '/style.css' );
        $child_ver  = filemtime( get_stylesheet_directory() . '/style.css' );

        wp_enqueue_style('parente2-style', $parent_style, [], $parent_ver);
        wp_enqueue_style('childe2-style', $child_style, ['parente2-style'], $child_ver);
    }

    add_action('wp_enqueue_scripts', 'WodociagiStrona_enqueue_child_styles');
}



/* Write here your own functions */
/* Write here your own functions */

function wodociagistrona_sidebar_registration() {

    // Arguments used in all register_sidebar() calls.
    $shared_args = array(
        'before_title' => '<h2 class="widget-title subheading heading-size-3">',
        'after_title' => '</h2>',
        'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
        'after_widget' => '</div></div>',
    );


    // Footer #3.
    register_sidebar(
            array_merge(
                    $shared_args,
                    array(
                        'name' => __('Footer #3', 'twentytwenty'),
                        'id' => 'sidebar-3',
                        'description' => __('Widgets in this area will be displayed in the second column in the footer.', 'twentytwenty'),
                    )
            )
    );

    // Footer #4.
    register_sidebar(
            array_merge(
                    $shared_args,
                    array(
                        'name' => __('Footer #4', 'twentytwenty'),
                        'id' => 'sidebar-4',
                        'description' => __('Widgets in this area will be displayed in the 4 column in the footer.', 'twentytwenty'),
                    )
            )
    );

    // Dodatkowe menu na górze
    register_sidebar(
            array_merge(
                    $shared_args,
                    array(
                        'name' => __('Menu pomocnicze', 'twentytwenty'),
                        'id' => 'menu_pomocnicze',
                        'description' => __('Dodatkowe menu w górnej części nagłówka', 'twentytwenty'),
                    )
            )
    );
        // Dodatkowe menu na górze
    register_sidebar(
            array_merge(
                    $shared_args,
                    array(
                        'name' => __('Widgety w sidebar', 'twentytwenty'),
                        'id' => 'widgety_sidebar',
                        'description' => __('Dodatkowe elementy sidebar', 'twentytwenty'),
                    )
            )
    );
}

add_action('widgets_init', 'wodociagistrona_sidebar_registration');

function wodociagistrona_register_styles() {


    // Add print CSS.
    wp_enqueue_style('wodociagistrona-style', get_stylesheet_directory_uri() . '/assets/css/simple-line-icons.css');
}

add_action('wp_enqueue_scripts', 'wodociagistrona_register_styles');

function wodociagistrona_register_scripts() {

    wp_enqueue_script('wodociagistrona-js', get_stylesheet_directory_uri() . '/assets/js/custom.js');

    wp_register_script('DataTables', get_stylesheet_directory_uri() . '/assets/js/DataTables/datatables.min.js', array('jquery'), '1.8.0'); // Slick
    wp_enqueue_script('DataTables'); // Enqueue it!
}

add_action('wp_enqueue_scripts', 'wodociagistrona_register_scripts');

function wodociagistrona_header_scripts() {
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        wp_register_script('slick', get_stylesheet_directory_uri() . '/assets/js/slick/slick.js', array('jquery'), '1.8.0'); // Slick
        wp_enqueue_script('slick'); // Enqueue it!

        wp_register_script('use-fa', 'https://use.fontawesome.com/d63ce539aa.js', array(), '1'); // Map resizer 
        wp_enqueue_script('use-fa'); // Enqueue it!
    }
}

add_action('init', 'wodociagistrona_header_scripts'); // Add Custom Scripts to wp_head

function wodociagistrona_styles() {

    wp_register_style('slick', get_stylesheet_directory_uri() . '/assets/js/slick/slick.css', array(), '1.8.0', 'all');
    wp_enqueue_style('slick'); // Enqueue it!

    wp_register_style('slicktheme', get_stylesheet_directory_uri() . '/assets/js/slick/slick-theme.css', array(), '1.8.0', 'all');
    wp_enqueue_style('slicktheme'); // Enqueue it!

    wp_register_style('DataTables', get_stylesheet_directory_uri() . '/assets/js/DataTables/datatables.min.css', array(), '1.8.0', 'all');
    wp_enqueue_style('DataTables'); // Enqueue it!
}

add_action('wp_enqueue_scripts', 'wodociagistrona_styles'); // Add Theme Stylesheet+

function wpb_custom_new_menu() {
    register_nav_menu('bip-menu', __('BIP Menu'));
    register_nav_menu('strefa-klienta-menu', __('Strefa klienta menu'));
    register_nav_menu('o-firmie', __('O firmie menu'));
    register_nav_menu('jakosc-wody', __('Jakosc wody menu'));
    register_nav_menu('badanie-wody', __('Badanie wody menu'));
    register_nav_menu('widget-sidebar', __('Menu boczne pomocnicze'));
    register_nav_menu('projekty', __('Projekty unijne menu'));
}

add_action('init', 'wpb_custom_new_menu');

function allow_file_types($mime_types) {
    $mime_types['ppsx'] = 'application/vnd.openxmlformats-officedocument.presentationml.slideshow';
    return $mime_types;
}

add_filter('upload_mimes', 'allow_file_types', 1, 1);

function get_breadcrumb() {
    /* === OPTIONS === */
    $text['home'] = __('Strona główna', 'projectic'); // text for the 'Home' link 
    $text['category'] = '%s'; // text for a category page
    $text['search'] = 'Wyniki wyszukiwania dla: %s'; // text for a search results page
    $text['tag'] = '%s'; // text for a tag page
    $text['author'] = '%s'; // text for an author page
    $text['404'] = 'Błąd 404'; // text for the 404 page
    $text['page'] = '%s'; // text 'Page N'
    $text['cpage'] = '%s'; // text 'Comment Page N'
    $wrap_before = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><ol>'; // the opening wrapper tag 
    $wrap_after = '</ol></div><!-- .breadcrumbs -->'; // the closing wrapper tag
    $sep = ''; // separator between crumbs
    $sep_before = '<li><i class="fas fa-arrow-right"></i>'; // tag before separator
    $sep_after = '</li>'; // tag after separator
    $show_home_link = 1; // 1 - show the 'Home' link, 0 - don't show
    $show_on_home = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $show_current = 1; // 1 - show current page title, 0 - don't show
    $before = '<li class="current"><span>'; // tag before the current crumb
    $after = '</span></li>'; // tag after the current crumb
    /* === END OF OPTIONS === */
    global $post;
    $home_url = home_url('/');
    $link_before = '<li><div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
    $link_after = '</div></li>';
    $link_attr = ' itemprop="item"';
    $link_in_before = '<span itemprop="name">';
    $link_in_after = '</span>';
    $link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
    $frontpage_id = get_option('page_on_front');
    $parent_id = ($post) ? $post->post_parent : '';
    $sep = ' ' . $sep_before . $sep . $sep_after . ' ';
    $home_link = '<li><span>' . $text['home'] . '</span></li>';
    if (is_home() || is_front_page()) {
        if ($show_on_home)
            echo $wrap_before . $home_link . $wrap_after;
    } else {
        echo $wrap_before;
        if ($show_home_link)
            echo $home_link;
        if (is_category()) {
            $cat = get_category(get_query_var('cat'), false);
            if ($cat->parent != 0) {
                $cats = get_category_parents($cat->parent, TRUE, $sep);
                $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats);
                if ($show_home_link)
                    echo $sep;
                echo $cats;
            }

            if ($cat->term_id == 12) {
                if ($show_home_link)
                    echo $sep;
                echo '<li><a href="/bip/" itemprop="item" role="link"><span itemprop="name">BIP</span></a></li>';
            }
            if (get_query_var('paged')) {
                $cat = $cat->cat_ID;
                echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current)
                    echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
            }
        } elseif (is_search()) {
            if (have_posts()) {
                if ($show_home_link && $show_current)
                    echo $sep;
                if ($show_current)
                    echo $before . sprintf($text['search'], get_search_query()) . $after;
            } else {
                if ($show_home_link)
                    echo $sep;
                echo $before . sprintf($text['search'], get_search_query()) . $after;
            }
        } elseif (is_single() && !is_attachment()) {

            if ($show_home_link)
                echo $sep;
            if (get_post_type() == 'post') {
                $cat = get_the_category();
                $cat = isset($cat) ? $cat[0] : '';
                if ($cat) {
                    if ($cat->term_id == 12) {                          
                        echo '<li><a href="/bip/" itemprop="item" role="link"><span itemprop="name">BIP</span></a></li>';
                        echo $sep;
                    }
                        $cats = get_category_parents($cat, TRUE, $sep);
                        if (!$show_current || get_query_var('cpage'))
                            $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats);
                        echo $cats;
                        if (get_query_var('cpage')) {
                            echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
                        } else {
                            if ($show_current)
                                echo $before . get_the_title() . $after;
                        }
                    
                } else {
                    if ($showCurrent == 1) {
                        $breadcrumb_html .= $before . esc_html(strip_tags(get_the_title())) . $after;
                    }
                }
            }
            // custom post type
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            if (get_query_var('paged' && get_post_type() != 'ulice')) {
                echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) {
                    echo $sep . $before . $post_type->label . $after;
                }
            }
        } elseif (is_attachment()) {
            if ($show_home_link)
                echo $sep;
            $parent = get_post($parent_id);
//            $cat = get_the_category($parent->ID);
//            $cat = $cat[0];
//            if ($cat) {
//                $cats = get_category_parents($cat, TRUE, $sep);
//                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats);
//                echo $cats;
//            }
            printf($link, get_permalink($parent), $parent->post_title);
            if ($show_current)
                echo $sep . $before . get_the_title() . $after;
        } elseif (is_page() && !$parent_id) {
            if ($show_current)
                echo $sep . $before . get_the_title() . $after;
        } elseif (is_page() && $parent_id) {
            if ($show_home_link)
                echo $sep;
            if ($parent_id != $frontpage_id) {
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_page($parent_id);
                    if ($parent_id != $frontpage_id) {
                        $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                    }
                    $parent_id = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                for ($i = 0; $i < count($breadcrumbs); $i++) {
                    echo $breadcrumbs[$i];
                    if ($i != count($breadcrumbs) - 1)
                        echo $sep;
                }
            }
            if ($show_current)
                echo $sep . $before . get_the_title() . $after;
        } elseif (is_tag()) {
            if (get_query_var('paged')) {
                $tag_id = get_queried_object_id();
                $tag = get_tag($tag_id);
                echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current)
                    echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
            }
        } elseif (is_author()) {
            global $author;
            $author = get_userdata($author);
            if (get_query_var('paged')) {
                if ($show_home_link)
                    echo $sep;
                echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_home_link && $show_current)
                    echo $sep;
                if ($show_current)
                    echo $before . sprintf($text['author'], $author->display_name) . $after;
            }
        } elseif (is_404()) {
            if ($show_home_link && $show_current)
                echo $sep;
            if ($show_current)
                echo $before . $text['404'] . $after;
        } elseif (has_post_format() && !is_singular()) {
            if ($show_home_link)
                echo $sep;
            echo get_post_format_string(get_post_format());
        }
        echo $wrap_after;
    }
    
}

add_filter( 'body_class','my_body_classes' );
function my_body_classes( $classes ) {
     if (is_single() || is_category()) {
       global $post;
       foreach((get_the_category($post->ID)) as $category) {
         $classes[] = 'category-'.$category->category_nicename;
       }
     }
    
    return $classes;
     
}

if (function_exists('add_theme_support')) {
    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');

    //TODO - do przemyslenia czy ustalac height
    add_image_size('timeline-express', 300, 200);
   

}
// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function new_pagination() {
//    var_dump('jest');
    global $wp_query;
    $big = 999999999;
    //    var_dump('jest');
    return paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_text' => __('<div class="default-arrow pagination-arrow pagination-arrow-prev"></div>'),
        'next_text' => __('<div class="default-arrow pagination-arrow pagination-arrow-next"></div>')
    ));
}
add_action('init', 'new_pagination'); // Add our projectic Pagination

function custom_timeline_express_announcement_image_size( $image_size, $post_id ) {
    $image_size = 'timeline-express';
    return $image_size;
}
add_filter( 'timeline-express-announcement-img-size' , 'custom_timeline_express_announcement_image_size', 10, 2 );

add_filter( 'single_template', function( $template ) {
    // sprawdź, czy to pojedynczy wpis i czy należy do kategorii 'projekty-unijne'
    if ( is_single() && in_category( array( 'projekty-unijne', 'projekty-unijne-kpo' ) ) ) {
        $custom_template = locate_template( 'templates/template-projekty.php' );
        if ( $custom_template ) {
            return $custom_template;
        }
    }

    return $template;
});

add_filter( 'category_template', function( $template ) {
    if ( is_category( 'projekty-unijne' ) or  is_category( 'projekty-unijne-kpo' )) {
        $custom_template = locate_template( 'templates/template-projekty.php' );
        if ( $custom_template ) {
            return $custom_template;
        }
    }
    return $template;
});

add_action( 'template_redirect', function() {
    if ( is_category( 'projekty-unijne' ) ) {
        wp_redirect( '/projekty-unijne/feniks/aktualnosci/', 301 );
        exit;
    }
    if ( is_category( 'projekty-unijne-kpo' ) ) {
        wp_redirect( '/projekty-unijne/kpo-cyberbezpieczne-wodociagi/aktualnosci-kpo/', 301 );
        exit;
    }
});
