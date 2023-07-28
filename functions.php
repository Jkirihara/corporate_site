<?php
/* --------------------------------------------
 * 　scriptとcssを読み込む
 * -------------------------------------------- */
function my_theme_scripts()
{
	wp_enqueue_style('pc', get_theme_file_uri('/css/style.css'));
	wp_enqueue_script('allpage', get_theme_file_uri('/js/common.js'), ['jquery'], '1.0');
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');
