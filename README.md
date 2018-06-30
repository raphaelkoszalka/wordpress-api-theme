# WP-REST-API Theme with admin panel outside of wp-admin

## how to

- each custom type is a instance of Cochise_Post_Type class at functions.php 
- create add, admin, list and edit pages at wp-admin with it's corresponding page template
- redirect admin login to /admin instead of /wp-admin
- each endpoint is a function within endpoints folder with the structure below

## structure of endpoint function

```
<?php

function FUNCTION_NAME( $data )
{
    // WP_QUERY FOR THE ENDPOINT
    $blog = get_posts(array(
        'post_type'	=> array('blog'),
        'posts_per_page'	=>	'1000'
    ));
    $posts_arr = array();
    // CREATE JSON ARRAY OF OBJECT
    foreach ( $blog as $p )
    {
        $posts_arr[] = array(
            'id' => $p->ID,
            'title' => $p->post_title,
            'sub_title' => $p->sub_title,
            'slug' => $p->post_name
        );
    }
    return $posts_arr;
}
// ADD ACTION HOOK TO REGISTER ENDPOINT
add_action( 'rest_api_init', function ()
{
    register_rest_route( 'raphael/v1', '/blog',
        array(
            'methods' => 'GET',
            'callback' => 'blog',
        )
    );
});
```


## todo
- internationalization of admin panel
- automatization of enpoint function creation

## requirements
- https://www.advancedcustomfields.com/
