<!-- ============= サイドバー ============= -->
<aside class="container_side" id="sidebar">
	<div class="container_side_item">
		<div class="head">お知らせ</div>
		<div class="container_side_category">
			<div class="label">カテゴリー</div>
			<div class="category_list">
				<ul>
					<?php
					$args = [
						'taxonomy' => 'category'
					];
					$categories = get_terms($args);
					foreach ($categories as $category) {
						echo '<li><a href="' . get_category_link($category->term_id) . '">';
						echo $category->name;
						echo '</a></li>';
					}
					?>
				</ul>
			</div>
		</div>
	</div>
</aside>