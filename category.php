<!-- ============= お知らせカテゴリーページ ============= -->
<?php get_header(); ?>
<div id="container" class="w_inner">
	<main>
		<p class="section_head">お知らせ</p>
		<hr>
		<div><?php single_term_title('カテゴリー：'); ?></div>
		<div class="manual_list_wrap">
			<?php if (have_posts()) : ?>
				<ul>
					<?php while (have_posts()) : the_post(); ?>
						<li>
							<a class="manual_link" href="<?php the_permalink() ?>">
								<div class="txtarea">
									<div class="date">
										<p>更新日:<?php echo get_the_date('Y.m.d'); ?></p>
									</div>
									<div><?php the_title(); ?></div>
									<div><?php the_excerpt(); ?></div>
									<div class="btn_read">続きをみる</div>
									<hr>
								</div>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
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