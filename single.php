<?php get_header(); ?>
<!-- single -->
<div class="single u-ptb">
    <div class="l-container-s">
        <article class="single-article">
        <?php
        if(have_posts()):
            while(have_posts()): the_post();
        ?>
                <div class="c-meta">
                    <time datetime="<?php the_time('Y-m-d'); ?>" class="c-date"><?php the_time('Y.m.d'); ?></time>
                    <span class="c-label c-label--single"><?php echo esc_html(get_tag_name()); ?></span>
                </div>
                <h1 class="single-title"><?php the_title(); ?></h1>

                <div class="single-contents u-mt">
                    <?php the_content(); ?>
                </div>
        </article>

        <?php
        $cat = get_the_category();
        $cat_id = $cat[0]->cat_ID;
        $link = get_category_link($cat_id);
        $cat_name = $cat[0]->cat_name;
        ?>
        <a class="single-return-link" href="<?php echo $link; ?>"><?php echo $cat_name; ?>一覧に戻る</a>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</div>
<!-- end single -->
<?php get_footer(); ?>