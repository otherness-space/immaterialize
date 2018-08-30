<?php
/**
 * Immaterialize functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Immaterialize
 */

if (! function_exists('immaterialize_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function immaterialize_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Immaterialize, use a find and replace
         * to change 'immaterialize' to the name of your theme in all the template files.
         */
        load_theme_textdomain('immaterialize', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'immaterialize'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('immaterialize_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'immaterialize_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function immaterialize_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('immaterialize_content_width', 640);
}
add_action('after_setup_theme', 'immaterialize_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function immaterialize_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'immaterialize'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'immaterialize'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'immaterialize_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function immaterialize_scripts()
{
    wp_enqueue_style('immaterialize-style', get_stylesheet_uri());
    wp_register_style('immaterialize-scss', get_template_directory_uri() . '/sass/style.scss', 'null', 'all');
    wp_enqueue_style('materialize-scss', get_stylesheet_uri(), '', 'null', 'all');

    wp_enqueue_script('immaterialize-navigation', get_template_directory_uri() . '/assets/js/navigation.min.js', array(), '20151215', true);

    wp_enqueue_script('immaterialize-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.min.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'immaterialize_scripts');

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
 * Enqueue Materialize scripts and styles.
 */
function materialize_scripts()
{
    /**	wp_register_style( 'materialize', get_template_directory_uri() . '/assets/css/materialize.css', 'null', 'all' ); */
    wp_register_style('materialize-min', get_template_directory_uri() . '/assets/css/materialize.min.css', 'null', 'all');
    wp_register_style('materialize-scss', get_template_directory_uri() . '/sass/materialize.scss', '', 'all');

    /**	wp_enqueue_style( 'materialize', get_stylesheet_uri(), '', 'null', 'all' ); */
    wp_enqueue_style('materialize-min', get_stylesheet_uri(), '', 'null', 'all');
    wp_enqueue_style('materialize-scss', get_stylesheet_uri(), '', '', 'all');

    /**	wp_register_script( 'materialize-js', get_template_directory_uri() . '/assets/js/materialize.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-min-js', get_template_directory_uri() . '/assets/js/materialize.min.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-bin-js', get_template_directory_uri() . '/assets/js/bin/materialize.js', array(), '1.0.0.', '' ); */
    wp_register_script('materialize-bin-min-js', get_template_directory_uri() . '/assets/js/bin/materialize.min.js', array(), '1.0.0.', '');

    /**	wp_enqueue_style( 'materialize', get_stylesheet_uri(), '', 'null', 'all' ); */
    /**	wp_enqueue_style( 'materialize-min', get_stylesheet_uri(), '', 'null', 'all' ); */
    wp_enqueue_style('materialize-scss', get_stylesheet_uri(), '', 'null', 'all');

    /**	wp_register_script( 'materialize-anime-min-js', get_template_directory_uri() . '/assets/js/anime.min.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-autocomplete-js', get_template_directory_uri() . '/assets/js/autocomplete.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-buttons-js', get_template_directory_uri() . '/assets/js/buttons.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-cards-js', get_template_directory_uri() . '/assets/js/cards.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-carousel-js', get_template_directory_uri() . '/assets/js/carousel.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-cash-js', get_template_directory_uri() . '/assets/js/cash.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-characterCounter-js', get_template_directory_uri() . '/assets/js/characterCounter.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-chips-js', get_template_directory_uri() . '/assets/js/chips.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-collapsible-js', get_template_directory_uri() . '/assets/js/collapsible.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-component-js', get_template_directory_uri() . '/assets/js/component.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-datepicker-js', get_template_directory_uri() . '/assets/js/datepicker.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-dropdown-js', get_template_directory_uri() . '/assets/js/dropdown.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-forms-js', get_template_directory_uri() . '/assets/js/forms.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-global-js', get_template_directory_uri() . '/assets/js/global.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-materialbox-js', get_template_directory_uri() . '/assets/js/materialbox.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-modal-js', get_template_directory_uri() . '/assets/js/modal.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-parallax-js', get_template_directory_uri() . '/assets/js/parallax.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-pushpin-js', get_template_directory_uri() . '/assets/js/pushpin.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-range-js', get_template_directory_uri() . '/assets/js/range.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-scrollspy-js', get_template_directory_uri() . '/assets/js/scrollspy.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-select-js', get_template_directory_uri() . '/assets/js/select.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-sidenav-js', get_template_directory_uri() . '/assets/js/sidenav.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-slider-js', get_template_directory_uri() . '/assets/js/slider.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-tabs-js', get_template_directory_uri() . '/assets/js/tabs.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-tapTarget-js', get_template_directory_uri() . '/assets/js/tapTarget.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-timepicker-js', get_template_directory_uri() . '/assets/js/timepicker.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-toasts-js', get_template_directory_uri() . '/assets/js/toasts.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-tooltip-js', get_template_directory_uri() . '/assets/js/tooltip.js', array(), '1.0.0.', '' ); */
    /**	wp_register_script( 'materialize-waves-js', get_template_directory_uri() . '/assets/js/waves.js', array(), '1.0.0.', '' ); */

    /**	wp_enqueue_script( 'materialize-anime-min-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-autocomplete-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-buttons-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-cards-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-carousel-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-cash-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-characterCounter-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-chips-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-collapsible-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-component-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-datepicker-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-dropdown-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-forms-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-global-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-materialbox-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-modal-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-parallax-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-pushpin-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-range-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-scrollspy-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-select-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-sidenav-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-slider-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-tabs-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-tapTarget-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-timepicker-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-toasts-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-tooltip-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-waves-js', get_theme_file_uri() . '', array(), '1.0.0.', '' ); */

    /**	wp_enqueue_script( 'materialize-js', get_theme_file_uri() . '/assets/js/materialize.js', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-min-js', get_theme_file_uri() . '/assets/js/materialize.min.js', array(), '1.0.0.', '' ); */
    /**	wp_enqueue_script( 'materialize-bin-js', get_theme_file_uri() . '/assets/js/bin/materialize.js', array(), '1.0.0.', '' ); */
    wp_enqueue_script('materialize-bin-min-js', get_theme_file_uri() . '/assets/js/bin/materialize.min.js', array(), '1.0.0.', '');

    /**	wp_register_script( string $handle, string $src, array $deps = array(), string|bool|null $ver = false, bool $in_footer = false ) */

/**
*To reduce payload
*/
/** wp_enqueue_script( 'jquery-cycle', plugins_url( '/js/jquery.cycle.min.js', __FILE__ ), array( 'jquery' ), '2.9999.8', true ); */
/** wp_enqueue_script( 'the-neverending-homepage', plugins_url( 'infinity.min.js', __FILE__ ), array( 'jquery' ), '4.0.0', true ); */
}
add_action('wp_enqueue_scripts', 'materialize_scripts');

/**
    * Materialize Icons
    * function adapted from https://www.pressmate.io/adding-google-fonts-to-wordpress-theme-manually/
    */

function add_material_icons()
{
    wp_enqueue_style('material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', false);
}
add_action('wp_enqueue_scripts', 'add_material_icons');

/**
    * HOW TO IMPLEMENT PRISM.JS SYNTAX HIGHLIGHTING INTO YOUR WORDPRESS SITE
    * http://crambler.com/how-to-implement-prism-js-syntax-highlighting-into-your-wordpress-site/
    */

    // Function to add prism.css and prism.js to the site
function add_prism()
{
    /** Register prism.css file, handle name for the style so we can register,
    * de-register, etc., location of the prism.css file
    */
    wp_register_style(
    'prismCSS',
    get_stylesheet_directory_uri() . '/assets/css/prism.min.css'
    );
    /** Register prism.js file, handle name for the script so we can register,
    * de-register, etc., location of the prism.js file
    */
    wp_register_script(
    'prismJS',
    get_stylesheet_directory_uri() . '/assets/js/bin/prism.min.js'
    );
    /**
    * Enqueue the registered style and script files
    */
    wp_enqueue_style('prismCSS');
    wp_enqueue_script('prismJS');
}
add_action('wp_enqueue_scripts', 'add_prism');

/**
    * Additionals.css
    */

function add_additionals_scripts()
{
    wp_register_style('additionals-min', get_template_directory_uri() . '/assets/css/additionals.min.css', 'null', 'all');
    wp_enqueue_style('additionals-min', get_stylesheet_uri(), '', '', 'all');
}
add_action('wp_enqueue_scripts', 'add_additionals_scripts');

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Will prevent the Toolbar from rendering on the front end of site
 * https://codex.wordpress.org/Function_Reference/show_admin_bar
 */
show_admin_bar(false);
