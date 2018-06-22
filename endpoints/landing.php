<?php

function landing( $data )
{
   $landing = get_posts(array(
        'post_type'	=> array('landing'),
        'posts_per_page'	=>	'1000'
    ));

    foreach ( $landing as $p )
    {
        $imagem = get_field('main_image', $p->ID);
        $gallery =  get_field('gallery', $p->ID);
        $posts_arr[] = array(
            'id' => $p->ID,
            'title' => $p->post_title,
            'sub_title' => $p->sub_title,
            'slug' => $p->post_name,
            'cover' => $imagem,
            'description' => $p->date,
            'gallery' => $gallery
        );
    }

    return array($landing);
}

add_action( 'rest_api_init', function ()
{
    register_rest_route( 'raphael/v1', '/landing',
        array(
            'methods' => 'GET',
            'callback' => 'landing',
        )
    );
});