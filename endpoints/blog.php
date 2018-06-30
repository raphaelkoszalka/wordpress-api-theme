<?php
function blog( $data ) {
  
  $blog = get_posts(array(
      'post_type'	=> array('blog'),
      'posts_per_page'	=>	'1000'
  ));
  
  $posts_arr = array();
  
  foreach ($blog as $p) {
      $imagem = get_field('cover', $p->ID);
      $gallery =  get_field('gallery', $p->ID);
      $posts_arr[] = array(
          'id' => $p->ID,
          'title' => $p->post_title,
          'sub_title' => $p->sub_title,
          'slug' => $p->post_name,
          'cover' => $imagem,
          'date' => $p->date,
          'intro' => $p->intro,
          'full_content' => $p->full_content,
          'gallery' => $gallery
      );
  }

  $blog_return = $posts_arr;
  return $blog_return;
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'cochise/v1', '/blog',
        array(
            'methods' => 'GET',
            'callback' => 'blog',
        )
    );
});
