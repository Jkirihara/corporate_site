<?php get_header(); ?>
<div id="container" class="container_single w_inner">
	<main>
		<article class="article">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div id="updatedate">
							<p>更新日：</p><?php the_date('Y.m.d') ?>
						</div>
						<p class="manual_title_p"><?php the_title(); ?></p>
						<?php if (is_singular('post')) : ?>
							<div class="post_category">カテゴリー：<?php the_category(''); ?></div>
						<?php elseif (is_singular('blog')) : ?>
							<div class="post_category">カテゴリー：
								<?php
								$terms = get_the_terms($post->ID, 'category');
								foreach ($terms as $term) {
									echo '<a href="' . get_term_link($term) . '">' . $term->name . '</a>';
								}
								?>
							</div>
						<?php endif; ?>

						<div class="container">
							<?php the_content(); ?>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</article>
	</main>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>