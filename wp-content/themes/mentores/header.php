<?php get_template_part('parts/head'); ?>

<header class="main-header">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h1>
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php echo get_field('logotipo', 'options')['sizes']['large']; ?>" alt="<?php bloginfo('name'); ?>">
					</a>
				</h1>
			</div>
			<div class="col-md-9">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu-principal' ) ); ?>
			</div>
		</div>
	</div>
</header>