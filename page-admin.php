<?php
/**
 * TEMPLATE NAME: Admin
 *
 */

get_header('admin'); ?>

<!-- these content will be looped -->
<div class="col-md-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Blog</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 text-center">
                    <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/blog/adicionar/">
                        <button class="btn btn-block btn-default">
                            Adicionar
                        </button>
                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <i class="fa fa-list-alt fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/blog/listar/">
                        <button class="btn btn-block btn-default">
                            Lisar
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<?php get_footer('admin'); ?>
