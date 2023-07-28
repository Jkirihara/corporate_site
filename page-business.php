<!-- ============= 事業概要 ============= -->
<?php get_header(); ?>
<div id="container" class="container_business w_inner">
    <main>
        <p class="section_head">事業概要</p>
        <div class="business_list_wrap">
            <ul>
                <li>
                    <div class="img">
                        <img src="<?php echo esc_url(get_theme_file_uri('./img/business1.jpg')); ?>">
                    </div>
                    <div class="txtarea">
                        <h2 class="business_head">Web制作・マーケティング</h2>
                        <p>○○○○○○○○○○○○<br>○○○○○○○○○○○○</p>
                        <p>○○○○○○○○○○○○<br>○○○○○○○○○○○○</p>
                    </div>
                </li>
                <hr>
                <li>
                    <div class="img">
                        <img src="<?php echo esc_url(get_theme_file_uri('/img/business2.jpg')); ?>">
                    </div>
                    <div class="txtarea">
                        <h2 class="business_head">インターネットメディア事業</h2>
                        <p>○○○○○○○○○○○○<br>○○○○○○○○○○○○</p>
                        <p>○○○○○○○○○○○○<br>○○○○○○○○○○○○</p>
                    </div>
                </li>
                <hr>
                <li>
                    <div class="img">
                        <img src="<?php echo esc_url(get_theme_file_uri('/img/business3.jpg')); ?>">
                    </div>
                    <div class="txtarea">
                        <h2 class="business_head">ソーシャル企画・運営</h2>
                        <p>○○○○○○○○○○○○<br>○○○○○○○○○○○○</p>
                        <p>○○○○○○○○○○○○<br>○○○○○○○○○○○○</p>
                    </div>
                </li>
            </ul>
        </div>
    </main>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>