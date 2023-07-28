<!-- ============= 会社概要 ============= -->
<?php get_header(); ?>
<div id="container" class="container_com_ w_inner">
    <main>
        <p class="section_head">会社概要</p>
        <div id="company_profile">
            <div id="company_profile_img">
                <img src="<?php echo esc_url(get_theme_file_uri('/img/company.jpg')); ?>">
            </div>
            <div id="company_profile_txtarea">
                <p>社名:〇〇〇株式会社</p>
                <p>本社:〒107-0000<br>
                    東京都港区青山1-99-99 青山ビル
                </p>
                <p>代表:〇〇〇〇〇〇</p>
                <p>資本金:---,---,---円</p>
                <p>社員数:-----人</p>
            </div>
        </div>
    </main>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>