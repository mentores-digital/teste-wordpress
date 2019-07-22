<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" dir="ltr" lang="pt-BR">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" dir="ltr" lang="pt-BR">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" dir="ltr" lang="pt-BR">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html dir="ltr" lang="pt-BR">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title(); ?></title>	
	<?php wp_head(); ?>

	<link rel="icon" type="image/png" href="<?php echo get_field('favicon', 'options')['sizes']['thumbnail']; ?>"/>

</head>
<body <?php body_class(); ?>>
<!-- Custom Admin Theme Config -->
<?php get_template_part('parts/theme-config'); ?>
