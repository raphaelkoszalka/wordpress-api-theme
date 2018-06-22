<div class="container">
	<div class="col-md-12 text-center">
		<hr>
		<div class="pad35"></div>
		<a href="https://www.raphael.website" style="color: #333" target="_blank">https://raphael.website</a>
		<div class="pad35"></div>
	</div>
</div>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/pace.js"></script>
<script>
    $('input').addClass('form-control');
    $('select').addClass('form-control');
    $('textarea').addClass('form-control');
	$('.button-primary').toggleClass('btn btn-success').css("float", "right");
	$('.acf-label label:first').html('Nome');
	$('.search').attr('placeholder', "Buscar Endereço");
	$('.add-attachment').html('Adicionar Imagem');
	$('.bulk-actions').hide();
	$('*[data-filter="post_type"]').hide();
	$('*[data-filter="taxonomy"]').hide();
</script>
</body>
</html>
