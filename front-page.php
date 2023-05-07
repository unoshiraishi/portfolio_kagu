<?php get_header(); ?>
        <!-- top-news -->
        <section class="top-news">
            <div class="top-news-wrapper">
                <?php $term_obj = get_term_by('slug', 'news', 'category'); ?>
                <h2 class="c-title-level2 c-title-level2--center"><?php echo $term_obj->name; ?></h2>
                <span class="c-title-level2-english c-title-level2-english--center">news</span>

                <div class="top-news-body u-mt">
                    <div class="top-news-list">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'category_name' => 'news',
                            'posts_per_page' => 4,
                        );
                        $news_posts = new WP_Query($args);
                        if($news_posts->have_posts()):
                            while($news_posts->have_posts()): $news_posts->the_post();
                        ?>
                        <article class="top-news-item">
                            <a href="<?php the_permalink(); ?>" class="top-news-item-link">
                                <div class="c-meta">
                                    <time datetime="<?php the_time('Y-m-d'); ?>" class="c-date"><?php the_time('Y.m.d'); ?></time>
                                    <span class="c-label">ニュースリリース</span>
                                </div>
                                <p class="top-news-item-text"><?php the_title(); ?></p>
                            </a>
                        </article>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    </div>

                    <div class="top-news-button">
                        <a href="<?php echo esc_url(get_term_link($term_obj)); ?>" class="c-button"><?php echo $term_obj->name; ?>一覧へ</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end top-news -->

        <!-- top-furniture -->
        <section class="top-furniture">
            <div class="l-container">
                <?php
                $furniture_obj = get_page_by_path('furniture');
                $post = $furniture_obj;
                setup_postdata($post);
                ?>
                <h2 class="c-title-level2 c-title-level2--center"><?php echo get_the_title(); ?></h2>
                <span class="c-title-level2-english c-title-level2-english--center">furniture</span>

                <div class="top-furniture-body u-mt">
                    <section class="top-furniture-item top-furniture-item--flex">
                        <div class="top-furniture-item-img">
                            <img srcset="<?php echo get_template_directory_uri(); ?>/img/top/img_furniture_01.jpg 1x, <?php echo get_template_directory_uri(); ?>/img/top/img_furniture_01@2x.jpg 2x" width="" height="" src="<?php echo get_template_directory_uri(); ?>/img/top/img_furniture_01@2x.jpg" alt="" decoding="async" loading="lazy">
                        </div>
                        <div class="top-furniture-item-text">
                            <h3 class="top-furniture-item-title">テーマで探す</h3>
                            <p class="top-furniture-description">モダン、ナチュラル、北欧、ヴィンテージ、和風、ハワイアン、アメリカン、ミニマルなど、テーマごとに家具をお探しいただけます。</p>
                            <div class="top-furniture-button">
                                <a href="<?php esc_url(home_url('furniture')); ?>" class="c-button" target="_blank" rel="noopener noreferrer"><?php echo get_the_title(); ?>の一覧へ</a>
                            </div>
                        </div>
                    </section>
                    <section class="top-furniture-item top-furniture-item--flex">
                        <div class="top-furniture-item-img">
                            <img srcset="<?php echo get_template_directory_uri(); ?>/img/top/img_furniture_02.jpg 1x, <?php echo get_template_directory_uri(); ?>/img/top/img_furniture_02@2x.jpg 2x" width="" height="" src="<?php echo get_template_directory_uri(); ?>/img/top/img_furniture_02@2x.jpg" alt="" decoding="async" loading="lazy">
                        </div>
                        <div class="top-furniture-item-text">
                            <h3 class="top-furniture-item-title">カラーで探す</h3>
                            <p class="top-furniture-description">レッド、ブルー、グリーン、イエロー、オレンジ、ピンク、パープル、ベージュ・アイボリー、ブラウン、ブラック、グレー、ホワイトなど、好みのカラーごとに家具をお探しいただけます。</p>
                            <div class="top-furniture-button">
                                <a href="<?php esc_url(home_url('furniture')); ?>" class="c-button" target="_blank" rel="noopener noreferrer"><?php echo get_the_title(); ?>の一覧へ</a>
                            </div>
                        </div>
                    </section>
                    <section class="top-furniture-item">
                        <div class="top-furniture-item-img">
                            <img srcset="<?php echo get_template_directory_uri(); ?>/img/top/img_furniture_03.jpg 1x, <?php echo get_template_directory_uri(); ?>/img/top/img_furniture_03@2x.jpg 2x" width="" height="" src="<?php echo get_template_directory_uri(); ?>/img/top/img_furniture_03@2x.jpg" alt="" decoding="async" loading="lazy">
                        </div>
                        <div class="top-furniture-item-text">
                            <h3 class="top-furniture-item-title">シーンで探す</h3>
                            <p class="top-furniture-description">「リビング」や「ダイニング」、「寝室・ベッドルーム」、「キッチン」、「玄関・エントランス」、「書斎・ホームオフィス」などのシーンから、それぞれのシーンで使用する家具をお探しいただけます。</p>
                            <div class="top-furniture-button top-furniture-button--english">
                                <a href="" class="c-button c-button--link-icon" target="_blank" rel="noopener noreferrer">online store</a>
                            </div>
                        </div>
                    </section>
                    <section class="top-furniture-item">
                        <div class="top-furniture-item-img">
                            <img srcset="<?php echo get_template_directory_uri(); ?>/img/top/img_furniture_04.jpg 1x, <?php echo get_template_directory_uri(); ?>/img/top/img_furniture_04@2x.jpg 2x" width="" height="" src="<?php echo get_template_directory_uri(); ?>/img/top/img_furniture_04@2x.jpg" alt="" decoding="async" loading="lazy">
                        </div>
                        <div class="top-furniture-item-text">
                            <h3 class="top-furniture-item-title">ブランドで探す</h3>
                            <p class="top-furniture-description">他では出会えないソファやチェアが見つかります。当社ブランド以外でも、セレクトラインアップの中で多数のブランドをお取扱いしております。</p>
                            <div class="top-furniture-button top-furniture-button--english">
                                <a href="" class="c-button c-button--link-icon" target="_blank" rel="noopener noreferrer">online store</a>
                            </div>
                        </div>
                    </section>
                    <section class="top-furniture-item">
                        <div class="top-furniture-item-img">
                            <img srcset="<?php echo get_template_directory_uri(); ?>/img/top/img_furniture_05.jpg 1x, <?php echo get_template_directory_uri(); ?>/img/top/img_furniture_05@2x.jpg 2x" width="" height="" src="<?php echo get_template_directory_uri(); ?>/img/top/img_furniture_05@2x.jpg" alt="" decoding="async" loading="lazy">
                        </div>
                        <div class="top-furniture-item-text">
                            <h3 class="top-furniture-item-title">素材で探す</h3>
                            <p class="top-furniture-description">チークやパイン、マカボニーやウォールナットなどの木材から、ファブリックやラタンなどの布・繊維、ステンレスやロートアイアンのような金属まで、あらゆる素材を試用した家具を取り揃えております。</p>
                            <div class="top-furniture-button top-furniture-button--english">
                                <a href="" class="c-button c-button--link-icon" target="_blank" rel="noopener noreferrer">online store</a>
                            </div>
                        </div>
                    </section>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
            <!-- top-furniture-shop -->
            <div class="top-furniture-shop">
                <div class="l-container">
                    <div class="top-furniture-shop-list">
                        <section class="top-furniture-shop-item">
                            <div class="top-furniture-shop-item-img">
                                <img srcset="<?php echo get_template_directory_uri(); ?>/img/top/img_store.jpg 1x, <?php echo get_template_directory_uri(); ?>/img/top/img_store@2x.jpg 2x" width="" height="" src="<?php echo get_template_directory_uri(); ?>/img/top/img_store@2x.jpg" alt="" decoding="async" loading="lazy">
                            </div>
                            <div class="top-furniture-shop-item-text">
                                <?php
                                $store_obj = get_page_by_path('store');
                                $post = $store_obj;
                                setup_postdata($post);
                                ?>
                                <h3 class="top-furniture-shop-item-title"><?php echo get_the_title(); ?></h3>
                                <p class="top-furniture-shop-item-desctription"><?php echo get_the_excerpt(); ?></p>
                                <div class="top-furniture-shop-item-link">
                                    <a href="<?php esc_url(home_url('store')); ?>" class="c-link c-link--arrow"><?php echo get_the_title(); ?>を見る</a>
                                </div>
                                <?php wp_reset_postdata(); ?>
                            </div>
                        </section>
                        <section class="top-furniture-shop-item">
                            <div class="top-furniture-shop-item-img">
                                <img srcset="<?php echo get_template_directory_uri(); ?>/img/top/img_online.jpg 1x, <?php echo get_template_directory_uri(); ?>/img/top/img_online@2x.jpg 2x" width="" height="" src="<?php echo get_template_directory_uri(); ?>/img/top/img_online@2x.jpg" alt="" decoding="async" loading="lazy">
                            </div>
                            <div class="top-furniture-shop-item-text">
                                <h3 class="top-furniture-shop-item-title top-furniture-shop-item-title--english">online store</h3>
                                <p class="top-furniture-shop-item-desctription">KAGUの家具はオンラインストアでもご購入いただけます。</p>
                                <div class="top-furniture-shop-item-link">
                                    <a href="<?php echo get_template_directory_uri(); ?>/store/" class="c-link c-link--arrow">オンラインストアを見る</a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- end top-furniture -->
<?php get_footer(); ?>