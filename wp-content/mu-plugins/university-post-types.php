<?php

// Adding Custom Post Types
function university_post_types()
{
    // Register Event post type
    register_post_type('event', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array(
            'slug' => 'events'
        ),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-welcome-widgets-menus',
        'labels' => array(
            'name' => 'Events',
            'add_new' => 'Add New Event',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singuar_name' => 'Event',
        ),
    ));

    // Register Program post type
    register_post_type('program', array(
        'show_in_rest' => true,
        'supports' => array(
            'title', 'editor', 'excerpt'
        ),
        'rewrite' => array(
            'slug' => 'programs'
        ),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-tickets',
        'labels' => array(
            'name' => 'Program',
            'add_new' => 'Add New Program',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singuar_name' => 'Program',
        ),
    ));


    // Register Professor post type
    register_post_type('professor', array(
        'show_in_rest' => true,
        'supports' => array(
            'title', 'editor', 'thumbnail'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'labels' => array(
            'name' => 'Professor',
            'add_new' => 'Add New Professor',
            'add_new_item' => 'Add New Professor',
            'edit_item' => 'Edit Professor',
            'all_items' => 'All Professors',
            'singuar_name' => 'Professor',
        ),
    ));
}


add_action('init', 'university_post_types');
