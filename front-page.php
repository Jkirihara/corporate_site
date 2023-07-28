<!-- ============= トップページ ============= -->
<?php get_header(); ?>
<div id="container" class="w_inner">
	<main>
		<p class="section_head">お知らせ</p>
		<hr>
		<div class="news_list_wrap">
			<?php if (have_posts()) :
			?>
				<ul>
					<?php while (have_posts()) : the_post();
					?>
						<li>
							<a class="manual_link" href="<?php the_permalink() ?>">
								<div class="ttl">
									<div class="cat">
										<?php
										$terms = get_the_terms($post->ID, 'category');
										foreach ($terms as $term) {
											echo '<span>' . $term->name . '</span>';
										}
										?>
									</div>
									<?php the_title();
									?>
									<div class="date">
										<p>更新日：</p><?php echo get_the_date('Y.m.d');
													?>
									</div>
								</div>
							</a>
						</li>
					<?php endwhile;
					?>
				</ul>
			<?php endif;
			?>
			<!-- ============= ページング ============= -->
			<?php
			$args = [
				'mid_size' => 2,
				'prev_text' => '前',
				'next_text' => '後',
				'screen_reader_text' => 'ページャー'
			];
			the_posts_pagination($args);
			?>
		</div>
	</main>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>