<?php

function portfolio( $data )
{
    $portfolio = get_posts(array(
        'post_type'	=> array('portfolio'),
        'posts_per_page'	=>	'1000'
    ));

    foreach ( $portfolio as $p )
    {
        $image = get_field('job_picture', $p->ID);
        $gallery =  get_field('gallery', $p->ID);
        $posts_arr[] = array(
            'id' => $p->ID,
            'title' => $p->post_title,
            'sub_title' => $p->sub_title,
            'slug' => $p->post_name,
            'job_picture' => $image,
            'job_date' => $p->job_date,
            'job_link' => $p->job_link,
            'job_description' => $p->job_description
        );
    }

    return $portfolio;
}

add_action( 'rest_api_init', function ()
{
    register_rest_route( 'raphael/v1', '/portfolio',
        array(
            'methods' => 'GET',
            'callback' => 'portfolio',
        )
    );
});