<?php

require_once('constants.php');

get_currentuserinfo();

global $user_ID;
if ($user_ID == '') {
	header('Location:' . $base_url . '/wp-login.php');
	exit();
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php echo $theme_name; ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pace.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/admin.css">
	<?php wp_head(); ?>
</head>

<div class="wrapperMenu">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo $base_url; ?>/admin/" style="color: #fff">
					<img src="<?php echo get_template_directory_uri(); ?>/images/cochise.png" style="height: 45px; margin-top: -10px;" alt="">
				</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo $base_url; ?>/admin/">PRINCIPAL</a></li>
					<li><a href="<?php echo wp_logout_url(); ?>"><strong>SAIR</strong></a></li>
				</ul>
			</div>
		</div>
	</nav>
</div>

<div class="clearfix"></div>
<div style="padding-top:90px"></div>