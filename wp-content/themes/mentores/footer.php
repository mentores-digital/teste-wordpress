<footer>
	<div class="container">
		<div class="col-sm-4">
			<?php if(have_rows('redes_social', 'option')): ?>
				<div class="redes-sociais">
					<h2>Redes Sociais</h2>
					<ul>
						<?php while (have_rows('redes_social', 'option')) : the_row(); ?>
							<li>
								<a href="<?php echo get_sub_field('url'); ?>">
									<i class="fab fa-<?php echo get_sub_field('qual_rede'); ?>"></i>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
				</div>
			<?php endif; ?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<?php get_template_part('parts/codigos-externos'); ?>

</body>
</html>
