<?php 
get_header(); 

if(get_field('banner')): ?>
	<div class="banner-top" style="background-image: url('<?php echo get_field('banner')['sizes']['large']; ?>');"></div>
<?php endif; ?>

<div class="container-fluid">
	<div class="archive-blog">
		<h1 class="title-2">Blog</h1>
		<div class="row">
			<div class="col-md-8 col-lg-9">
				<div class="list-blog">
					<?php while(have_posts()): the_post(); ?>
						<div class="list-blog-item">
							<div class="picture">
								<a href="<?php the_permalink(); ?>" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>');">
									<span class="sr-only"><?php the_title();; ?></span>
								</a>
							</div>
							<div class="content">
								<h2>
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h2>
								<p><?php echo wp_trim_words( get_the_content(), 20, '[...]' ); ?></p>
								<a class="read-more" href="<?php the_permalink(); ?>"><span>Leia Mais</span></a>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
				<?php
				$big = 999999999; // need an unlikely integer
				$args = array(
					'base' 			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format'		=> '/pagina/%#%',
					'current' 		=> max( 1, get_query_var('paged') ),
					'total'			=> $wp_query->max_num_pages,
					'prev_text'		=> __('<i class="fa fa-angle-left" aria-hidden="true"></i>anterior'),
					'next_text'		=> __('próximo<i class="fa fa-angle-right" aria-hidden="true"></i>'),
				); ?>
				<div class="paginate h-centralize">
					<?php echo paginate_links( $args ); ?>
				</div>
			</div>
			<div class="col-md-4 col-lg-3">
				<?php get_template_part('parts/sidebar-blog'); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
