<?php get_header(); ?>
    <!-- store -->
    <div class="store">
        <div class="l-container">
            <div class="u-ptb">
                <section class="store-item">
                    <div class="store-item-img">
                        <img srcset="<?php echo get_template_directory_uri(); ?>/img/store/img_store.jpg 1x, <?php echo get_template_directory_uri(); ?>/img/store/img_store@2x.jpg 2x" width="1220" height="1220" src="<?php echo get_template_directory_uri(); ?>/img/store/img_store@2x.jpg" alt="">
                    </div>
                    <div class="store-item-text">
                        <h2 class="c-title-level2">販売店</h2>
                        <p class="store-item-desctiption"><span>KAGUの販売店をご覧いただけます。</span><span>お客様の「実物を見たい！」を叶えるため、北海道から九州まで、どこにでもKAGUはあります。</span></p>
                        <div class="store-item-button">
                            <a href="<?php echo get_post_type_archive_link('shop'); ?>" class="c-button">販売店一覧へ</a>
                        </div>
                    </div>
                </section>
                <section class="store-item">
                    <div class="store-item-img">
                        <img srcset="<?php echo get_template_directory_uri(); ?>/img/store/img_showroom.jpg 1x, <?php echo get_template_directory_uri(); ?>/img/store/img_showroom@2x.jpg 2x" width="1220" height="1220" src="<?php echo get_template_directory_uri(); ?>/img/store/img_showroom@2x.jpg" alt="">
                    </div>
                    <div class="store-item-text">
                        <h2 class="c-title-level2">展示場</h2>
                        <p class="store-item-desctiption"><span>KAGUの家具は全国のショールームにてご覧いただけます。</span><span>事前にご予約いただきますと、スタッフがショールームをご案内致します。</span></p>
                        <div class="store-item-button">
                            <a href="<?php echo get_post_type_archive_link('showroom'); ?>" class="c-button">展示場一覧へ</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- end store -->
<?php get_footer(); ?>