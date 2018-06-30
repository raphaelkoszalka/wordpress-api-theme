<?php

include( 'class/_cochise_post_type_class.php');
include('endpoints/blog.php');

$blog = new Cochise_Post_Type('blog');

function filters( $valid_vars ) {
    $valid_vars = array_merge(
        $valid_vars,
        array('meta_key','meta_value' )
    );
    return $valid_vars;
}

function my_acf_google_map_api( $api ) {
    $api['key'] = 'GOOGLE_MAPS_API_KEY';
    return $api;
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
add_filter( 'rest_query_vars', 'filters' );
add_filter('show_admin_bar', '__return_false');

