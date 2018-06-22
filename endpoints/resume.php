<?php

function resume( $data )
{
    $resume = get_posts(array(
        'post_type'	=> array('resume'),
        'posts_per_page'	=>	'1000'
    ));

    foreach ( $resume as $p )
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
            'job_description' => $p->job_description
        );
    }

    return $resume;
}

add_action( 'rest_api_init', function ()
{
    register_rest_route( 'raphael/v1', '/resume',
        array(
            'methods' => 'GET',
            'callback' => 'resume',
        )
    );
});