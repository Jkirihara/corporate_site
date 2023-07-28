<!-- ============= オフィス ============= -->
<?php get_header(); ?>
<div id="container" class="container_com_bldg w_inner">
    <main>
        <p class="section_head">オフィス</p>
        <div class="company_list_wrap">
            <ul>
                <li>
                    <div class="img">
                        <img src="<?php echo esc_url(get_theme_file_uri('/img/tokyo.jpg')); ?>">
                    </div>
                    <div class="txtarea">
                        <h2 class="head">東京本社</h2>
                        <p class="address">
                            〒107-0000<br>
                            東京都港区青山1-99-99 青山ビル
                        </p>
                    </div>
                </li>
                <li>
                    <div class="img">
                        <img src="<?php echo esc_url(get_theme_file_uri('/img/yokohama.jpg')); ?>">
                    </div>
                    <div class="txtarea">
                        <h2 class="head">横浜支社</h2>
                        <p class="address">
                            〒220-0000<br>
                            神奈川県横浜市西区みなとみらい1-99-99 みらいビル
                        </p>
                    </div>
                </li>
                <li>
                    <div class="img">
                        <img src="<?php echo esc_url(get_theme_file_uri('/img/hukuoka.jpg')); ?>">
                    </div>
                    <div class="txtarea">
                        <h2 class="head">福岡支社</h2>
                        <p class="address">
                            〒810-0000<br>
                            福岡県福岡市天神南1-99-99 天神ビル
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </main>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>