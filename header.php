<!DOCTYPE html>
<html lang="ja">
<!-- ============= ヘッダー ============= -->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<title>
		<?php
		wp_title('|', true, 'right');
		bloginfo('name');
		?>
	</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header>
		<div class="img">
			<a href="<?php echo esc_url(home_url('/')); ?>">
				<h1 id="title">Corporate Site</h1>
			</a>
		</div>
		<nav id="navi">
			<ul class="wrapper">
				<li><a href="<?php echo esc_url(home_url('/business/')); ?>">事業概要</a></li>
				<li><a href="<?php echo esc_url(home_url('/company/')); ?>">会社概要</a></li>
				<li><a href="<?php echo esc_url(home_url('/bldg/')); ?>">オフィス</a></li>
				<li><a href="<?php echo esc_url(home_url('/recruit/')); ?>">採用情報</a></li>
				<li><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
			</ul>
		</nav>
	</header>
	<div id="wrapper">
		<div id="top_visual"></div>
		<?php if (!is_front_page()) { ?>
			<?php if (function_exists('bcn_display')) { ?>
				<div id="breadcrumb" class="w_inner" vocab="http://schema.org/" typeof="BreadcrumbList">
					<?php bcn_display(); ?>
				</div>
			<?php } ?>
		<?php } ?>