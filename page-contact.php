<!-- ============= お問い合わせ ============= -->
<?php get_header(); ?>
<div id="container" class="container_contact w_inner">
    <main>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                    <p class="page_head_title"><?php the_title(); ?></p>
                    <div class="text"><?php the_content(); ?></div>
                    <div>
                        <?php
                        $get_form = get_posts(array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1, 'name' => 'コンタクトフォーム 1'))[0];
                        echo do_shortcode('[contact-form-7 id="21" title="コンタクトフォーム 1"]');
                        ?>
                    </div>
                </article>
        <?php endwhile;
        endif; ?>
    </main>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>