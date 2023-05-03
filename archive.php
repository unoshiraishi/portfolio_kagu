<?php get_header(); ?>
<!-- news -->
<section class="news u-ptb">
    <div class="l-container-s">


        <div class="news-filter <?php echo esc_attr(get_news_filter_active_class());?>">
            <div class="news-filter-item">
                <?php
                $cat_news = get_category_by_slug('news');
                ?>
                <a href="<?php echo esc_attr(get_category_link($cat_news->cat_ID)); ?>" class="news-filter-label">すべて</a>
            </div>

            <?php
            $tags = get_tags(array('hide_empty' => 0));
            foreach($tags as $tag):
            ?>
                <div class="news-filter-item">
                    <a href="<?php echo esc_attr(get_tag_link($tag->term_id)); ?>" class="news-filter-label"><?php echo esc_attr($tag->name); ?></a>
                </div>
            <?php endforeach; ?>

        </div>

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <div class="news-list">
                    <article class="news-item">
                        <a href="<?php the_permalink(); ?>" class="news-item-link">
                            <div class="c-meta">
                                <time datetime="<?php the_time('Y-m-d') ?>" class="c-date"><?php the_time('Y.m.d') ?></time>
                                <span class="c-label c-label--news"><?php echo esc_html(get_tag_name()); ?></span>
                            </div>
                            <p class="news-item-text"><?php the_title(); ?></p>
                        </a>
                    </article>
        <?php
            endwhile;
        endif;
        ?>
                </div>

                <!-- pagenation -->
                <?php
                the_posts_pagination(
                    array(
                        'mid_size' => '2',
                        'prev_next' => true,
                        'prev_text' => '',
                        'next_text' => '',
                    )
                ); ?>
                <!-- end pagenation -->
</section>
<!-- end news -->
<?php get_footer(); ?>