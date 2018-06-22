<?php
/**
 * TEMPLATE NAME: ADD
 */
acf_form_head();
get_header('admin');
$post_type = $_SERVER[REQUEST_URI];
    ?>
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1 class="panel-title">Posting new entry</h1>
            </div>
            <div class="panel-body">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php acf_form(array(
                        'post_id'   => 'new_post',
                        'new_post'    => array(
                            'post_type'   => basename($post_type),
                            'post_status'   => 'publish',
                        ),
                        'submit_value'    => 'Post',
                        'form' => true,
                        'post_title' => true,
                        'post_tags' => true,
                    )); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>


<?php get_footer('admin'); ?>