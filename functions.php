<?php

function init_template() {
    add_theme_support('post-thumnails');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'init_template');