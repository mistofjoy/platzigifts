<?php

function init_template() {
    add_theme_support('post-thumnails');
    add_theme_support('title-tag');

    //menu
    register_nav_menus( 
        array(
            'top menu' => 'menu principal'
        )
    );
}

add_action('after_setup_theme', 'init_template');


function assets() {
    //Style libraries
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', '', '5.1.1', 'all');
    wp_register_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap', '', '1.1', 'all');
    
    wp_enqueue_style('estilos', get_stylesheet_uri(), array('bootstrap', 'montserrat'), '1.0', 'all');

    //script libraries
    wp_register_script('popperjs', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js', '', '2.10.1', true);
    wp_enqueue_script('bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js', array('popperjs'), '5.1.1', true);

    //My own scripts
    wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', '', '0.1', true);
}

add_action('wp_enqueue_scripts', 'assets');