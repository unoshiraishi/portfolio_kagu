<?php get_header(); ?>
<!-- shop -->
<section class="shop u-ptb">
    <div class="l-container-s">
        <h2 class="c-title-level2 c-title-level2--center">販売店一覧</h2>
        <span class="c-title-level2-english c-title-level2-english--center">store</span>

        <div class="shop-body u-mt">
            <ul class="shop-index-list">
                <li class="shop-index-item"><a href="#hokkaido">北海道</a></li>
                <li class="shop-index-item"><a href="#tohoku">東北</a></li>
                <li class="shop-index-item"><a href="#hokuriku">北陸</a></li>
                <li class="shop-index-item"><a href="#kanto">関東</a></li>
                <li class="shop-index-item"><a href="#kinki">近畿</a></li>
                <li class="shop-index-item"><a href="#tokai_koshin">東海・甲信</a></li>
                <li class="shop-index-item"><a href="#chugoku">中国</a></li>
                <li class="shop-index-item"><a href="#shikoku">四国</a></li>
                <li class="shop-index-item"><a href="#kyusyu_okinawa">九州・沖縄</a></li>
            </ul>

            <div class="shop-list">
                <?php
                $areas = get_terms(array('taxonomy' => 'area'));
                if (!empty($areas)) :
                    foreach ($areas as $area) :
                ?>
                        <section class="shop-place" id="<?php echo esc_attr($area->slug); ?>">
                            <h3 class="shop-place-title"><?php echo esc_html($area->name); ?></h3>
                            <div class="shop-place-list">
                                <?php
                                $area_posts = get_specific_posts('shop', 'area', $area->slug);
                                if ($area_posts->have_posts()) :
                                    while ($area_posts->have_posts()) : $area_posts->the_post(); ?>
                                        <section class="shop-place-item">
                                            <div class="shop-place-item-info">
                                                <h4 class="shop-place-item-title"><?php the_title(); ?></h4>
                                                <p class="shop-place-item-address">
                                                    <span>〒<?php the_field('postcode_shop'); ?></span>
                                                    <span>
                                                        <?php the_field('prefercture_shop');
                                                        the_field('municipalities_shop');
                                                        the_field('townarea_shop');
                                                        ?>
                                                    </span>
                                                    <span><?php the_field('address_shop'); ?></span>
                                                </p>
                                                <p class="shop-place-item-tel"><span>TEL：<?php the_field('tel_shop'); ?></span><span>FAX：<?php the_field('fax_shop'); ?></span></p>
                                            </div>
                                            <div class="shop-place-item-button">
                                                <a href="http://maps.google.com/maps?q=<?php the_field('prefercture_shop');
                                                                                        the_field('municipalities_shop');
                                                                                        the_field('townarea_shop'); ?>" target="_blank" class="c-button c-button--link-icon">Google Mapで見る</a>
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
<!-- end shop -->
<?php get_footer(); ?>