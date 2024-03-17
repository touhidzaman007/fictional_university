<?php

// Adding Custom Post Types
function university_post_types()
{
    // Register Event post type
    register_post_type('event', array(
        'capability_type' => 'event',
        'map_meta_cap' => true,
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
            'singular_name' => 'Event',
        ),
    ));

    // Register Program post type
    register_post_type('program', array(
        'show_in_rest' => true,
        'supports' => array(
            'title', 'excerpt'
        ),
        'rewrite' => array(
            'slug' => 'programs'
        ),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-tickets',
        'labels' => array(
            'name' => 'Programs',
            'add_new' => 'Add New Program',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Program', // corrected typo
        ),
    ));


    // Register Professor post type
    register_post_type('professor', array(
        'show_in_rest' => true,
        'supports' => array(
            'title', 'editor', 'thumbnail'
        ), // added missing comma
        'public' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'labels' => array(
            'name' => 'Professors',
            'add_new' => 'Add New Professor',
            'add_new_item' => 'Add New Professor',
            'edit_item' => 'Edit Professor',
            'all_items' => 'All Professors',
            'singular_name' => 'Professor',
        ),
    ));

    // Register Campus post type
    register_post_type('campus', array(
        'capability_type' => 'campus',
        'map_meta_cap' => true,
        'show_in_rest' => true,
        'supports' => array(
            'title', 'editor', 'excerpt'
        ),
        'rewrite' => array(
            'slug' => 'campuses'
        ),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-location-alt',
        'labels' => array(
            'name' => 'Campuses',
            'add_new' => 'Add New Campus',
            'add_new_item' => 'Add New Campus',
            'edit_item' => 'Edit Campus',
            'all_items' => 'All Campuses',
            'singular_name' => 'Campus', // added missing comma
        ),
    ));

    // Register Note post type
    register_post_type('note', array(
        'show_in_rest' => true,
        'supports' => array(
            'title', 'editor'
        ),
        'public' => false,
        'show_ui' => true,
        'menu_icon' => 'dashicons-welcome-write-blog',
        'labels' => array(
            'name' => 'Notes',
            'add_new' => 'Add New Note',
            'add_new_item' => 'Add New Note',
            'edit_item' => 'Edit Note',
            'all_items' => 'All Notes',
            'singular_name' => 'Note', // added missing comma
        ),
    ));
}

add_action('init', 'university_post_types');
