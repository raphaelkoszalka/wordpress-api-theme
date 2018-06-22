<?php
/**
 * TEMPLATE NAME: Edição
 */
acf_form_head();
get_header('admin'); ?>

<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">Edit</h1>
        </div>
        <div class="pane-body">
            <?php
            $args = array(
                'post_id' => $_GET["id"],
                'post_title'	=> true,
                'submit_value' => 'SAVE'
            );
            acf_form($args);

            ?>
        </div>
    </div>
</div>

<?php get_footer('admin'); ?>