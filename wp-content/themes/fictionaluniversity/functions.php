<?php


// Reusable Page Banner
function pageBanner($args = NULL)
{
    // PHP logic will live here
    if (!isset($args['title'])) {
        $args['title'] = get_the_title();
    }

    if (!isset($args['subtitle'])) {
        $args['subtitle'] = get_field('page_banner_subtitle');
    }

    if (!isset($args['photo'])) {
        if (get_field('page_banner_background_image')) {
            $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
        } else {
            $args['photo'] = get_theme_file_uri('/images/ocean.jpg');
        }
    }
?>
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(
            <?php
            // $pageBannerImage = get_field('page_banner_background_image');
            // echo $pageBannerImage['sizes']['pageBanner'];
            echo $args['photo'];
            ?>)">
        </div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title">
                <?php
                // the_title();
                echo $args['title'];
                ?>
            </h1>
            <div class="page-banner__intro">
                <p>
                    <?php
                    // the_field('page_banner_subtitle');
                    echo $args['subtitle'];
                    ?>
                </p>
            </div>
        </div>
    </div>

<?php
}

// Enqueueing Scripts
function university_files()
{
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'university_files');

// Adding Nav Menu on Header and Footer
function university_features()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('professorLandscape', 400, 260, true);
    add_image_size('professorPortrait', 480, 650, true);
    add_image_size('pageBanner', 1500, 350, true);
}

add_action('after_setup_theme', 'university_features');


// Add Custom Classes
function add_nav_menu_classes($classes, $item)
{
    // About Us Page
    if (wp_get_post_parent_id(0) == 12 && ($item->title == "About Us")) {
        $classes[] = 'current-menu-item';
    }
    // Programs post and Archives
    if ((is_post_type_archive('program') || get_post_type() == 'program' || is_page('programs')) && ($item->title == "Programs")) {
        $classes[] = 'current-menu-item';
    }
    // Blog Post and Archives
    if (get_post_type() == 'post' && ($item->title == 'Blog')) {
        $classes[] = 'current-menu-item';
    }
    // Event post and Archives
    if ((is_post_type_archive('event') || get_post_type() == 'event' || is_page('past-events')) && ($item->title == "Events")) {
        $classes[] = 'current-menu-item';
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_nav_menu_classes', 10, 2);



// Manipulate Default Queries
function university_adjust_queries($query)
{
    if (!is_admin() and is_post_type_archive('program') and $query->is_main_query()) {
        $query->set('posts_per_page', -1);
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }

    if (!is_admin() and is_post_type_archive('event') and $query->is_main_query()) {
        $today = date('Ymd');
        $query->set('meta_key', 'event_date');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        $query->set('meta_query', array(
            array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
            )
        ));
    }
}

add_action('pre_get_posts', 'university_adjust_queries');
