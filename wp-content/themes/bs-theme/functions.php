<?php


add_theme_support( 'post-thumbnails' );


function bold_register_stylesheets()
{

    wp_register_style('googlemetricalicons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), 1, 'all');
    wp_enqueue_style('googlemetricalicons');

    if(is_front_page())
    {
        wp_register_style('fullpagecss', get_template_directory_uri() . '/css/fullpage.css', array(), 1, 'all');
        wp_enqueue_style('fullpagecss');
    }

    wp_register_style('themecss', get_template_directory_uri() . '/css/theme.css', array(), 1, 'all');
    wp_enqueue_style('themecss');



    wp_register_style('themestyles', get_template_directory_uri() . '/style.css', array(), 1, 'all');
    wp_enqueue_style('themestyles');

    wp_register_style('customcss', get_template_directory_uri() . '/css/custom.css', array(), 1, 'all');
    wp_enqueue_style('customcss');

}

function bolt_register_scripts()
{

    wp_deregister_script( 'jquery' );

    /*

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.slim.min.js', array(), 1,1,0);
    wp_enqueue_script('jquery');

    https://code.jquery.com/jquery-3.2.1.min.js

    */

    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(), 1,1,0);
    wp_enqueue_script('jquery');



    /*
     * /js/jquery.slimscroll.js
     * */

    wp_register_script('slimscroll', get_template_directory_uri() . '/js/jquery.slimscroll.js', array(), 1,1,1);
    wp_enqueue_script('slimscroll');

    wp_register_script('scrolloverflow', get_template_directory_uri() . '/js/scrolloverflow.js', array(), 1,1,1);
    wp_enqueue_script('scrolloverflow');



    wp_register_script('fullpageextensions', get_template_directory_uri() . '/js/fullpage.extensions.min.js', array(), 1,1,1);
    wp_enqueue_script('fullpageextensions');

    wp_register_script('fullpagejs', get_template_directory_uri() . '/js/fullpage.js', array(), 1,1,1);
    wp_enqueue_script('fullpagejs');

    wp_register_script('frontpageJS', get_template_directory_uri() . '/js/front-page.js', array(), 1,1,1);
    wp_enqueue_script('frontpageJS');

    wp_register_script('customJS', get_template_directory_uri() . '/js/custom.js', array(), 1,1,1);
    wp_enqueue_script('customJS');

}

add_action('wp_enqueue_scripts', 'bold_register_stylesheets');

add_action('wp_enqueue_scripts', 'bolt_register_scripts');


add_theme_support('menus');

function wpbolt_registerMenus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu' ),
            'mobile-menu' => __( 'Mobile Menu' )
        )
    );
}

add_action( 'init', 'wpbolt_registerMenus');

function contactFormAjax()
{

    echo "route is working";

    /*
     * PROCESS CONTACT FORM HERE...
     * */

    wp_die();

    $inputJSON = file_get_contents('php://input');
    $_POST = json_decode($inputJSON, TRUE); //convert JSON into array
    $sender_company = $_POST['sender_company'];
    $sender_name = $_POST['sender_name'];
    $sender_email = $_POST['sender_email'];
    $sender_number = $_POST['sender_number'];
    $sender_message = $_POST['sender_message'];
    $found_via = $_POST['found_via'];



    wp_mail('salmaniz.82@gmail.com', 'testinf from ajax', 'this is just a test message');


}


add_action("wp_ajax_nopriv_contact_form", "contactFormAjax");

add_action("wp_ajax_contact_form", "contactFormAjax");






add_action( 'phpmailer_init', 'send_smtp_email' );

function send_smtp_email( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = SMTP_HOST;
    $phpmailer->SMTPAuth   = SMTP_AUTH;
    $phpmailer->Port       = SMTP_PORT;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->Username   = SMTP_USER;
    $phpmailer->Password   = SMTP_PASS;
    $phpmailer->From       = SMTP_FROM;
    $phpmailer->FromName   = SMTP_NAME;
}

if ( !function_exists( 'yourtheme_setup' ) ) {
    function yourtheme_setup() {
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );
    }

    add_action( 'after_setup_theme', 'yourtheme_setup' );
}

function limit_text($text, $limit) {
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos = array_keys($words);
        $text = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}