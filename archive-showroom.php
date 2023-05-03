<?php get_header(); ?>
<!-- showroom -->
<section class="showroom u-ptb">
            <div class="l-container-s">
                <h2 class="c-title-level2 c-title-level2--center">展示場一覧</h2>
                <span class="c-title-level2-english c-title-level2-english--center">showroom</span>

                <div class="showroom-body u-mt">
                    <div class="showroom-list">
                        <?php
                        $prefectures = get_terms(array('taxonomy' => 'prefecture'));
                        if(!empty($prefectures)):
                            foreach($prefectures as $prefecture):
                        ?>
                        <section class="showroom-place">
                            <h3 class="showroom-place-title"><?php echo esc_html($prefecture->name); ?></h3>
                            <div class="showroom-place-list">
                                <?php
                                $prefecture_posts = get_specific_posts('showroom', 'prefecture', $prefecture->slug);
                                if($prefecture_posts->have_posts()):
                                    while($prefecture_posts->have_posts()): $prefecture_posts->the_post(); ?>
                                <section class="showroom-place-item">
                                    <div class="showroom-place-item-inner">
                                        <div class="showroom-place-item-img">
                                            <img src="<?php the_field('img_showroom'); ?>" alt="">
                                        </div>
                                        <div class="showroom-place-item-info">
                                            <h4 class="showroom-place-item-title"><?php the_title()?></h4>
                                            <p class="showroom-place-item-address">
                                                <span>〒<?php the_field('postcode_showroom'); ?></span>
                                                <span>
                                                    <?php the_field('prefercture_showroom');
                                                          the_field('municipalities_showroom');
                                                          the_field('townarea_showroom');
                                                    ?>
                                                </span>
                                                <span><?php the_field('address_showroom'); ?></span>
                                            </p>
                                            <p class="showroom-place-item-tel">
                                                <span>TEL：<?php the_field('tel_showroom'); ?></span>
                                                <span>FAX：<?php the_field('fax_showroom'); ?></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="showroom-place-item-button">
                                        <a href="http://maps.google.com/maps?q=<?php the_field('prefercture_showroom');
                                                                                        the_field('municipalities_showroom');
                                                                                        the_field('townarea_showroom'); ?>" target="_blank" class="c-button c-button--link-icon">Google Mapで見る</a>
                                    </div>
                                </section>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                                ?>
                            </div>
                        </section>
                        <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- end showroom -->
<?php get_footer(); ?>