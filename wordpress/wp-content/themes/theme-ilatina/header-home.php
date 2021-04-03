<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		
		<?php wp_head();?>
		
		<script>
				jQuery( document ).ready(function( $ ) {
				// Your code here
				jQuery('.carousel').carousel({
						interval: 5000
						})
				});
				
		
		</script>

		<link rel="stylesheet" href="print-style.css" type="text/css" media="print" />

		<title><?php the_title(); ?> - ilatina </title>
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="wrapper" class="bgblanco">
		<div id="main">
				<section class="cabecera">
								<nav class="navbar navbar-expand-lg navbar-light bgblanco fixed-top">
														<?php
																// Display the Custom Logo
																the_custom_logo();

																// No Custom Logo, just display the site's name
																if (!has_custom_logo()) {
																		?>
																		<h1><?php bloginfo('name'); ?></h1>
														<?php
																}?>

										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
										</button>

										<!--menu dinamico-->
										<?php wp_nav_menu(array(
										'theme_location' => 'superior',
										'container' =>'div',
										'container_class' => 'collapse navbar-collapse',
										'container_id' => 'navbarSupportedContent',
										'items_wrap' => '<ul class="navbar-nav ml-auto pt-5 textofondoblanco typo">%3$s</ul>',
										'menu_class' => 'nav-item'
										) ); ?>
										<!--menu dinamico-->
								</nav>
								<div class="home margen-postnav bghome">
										<?php get_template_part('inc/slide')?>
								</div>
								<!--carrousel-->
			


				</section>
		<!--fin cabecera-->