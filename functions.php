<?php

include( 'class/_cochise_post_type_class.php');
include('endpoints/landing.php');
include('endpoints/resume.php');
include('endpoints/portfolio.php');
include('endpoints/blog.php');

$landing = new Cochise_Post_Type('landing');
$resume = new Cochise_Post_Type('resume');
$about = new Cochise_Post_Type('about');
$portfolio = new Cochise_Post_Type('portfolio');
$blog = new Cochise_Post_Type('blog');

function filters( $valid_vars ) {
    $valid_vars = array_merge(
        $valid_vars,
        array('meta_key','meta_value' )
    );
    return $valid_vars;
}
add_filter( 'rest_query_vars', 'filters' );
add_filter('show_admin_bar', '__return_false');

