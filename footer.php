        </main>
        <!-- recruit -->
        <section class="c-recruit">
            <div class="l-container">
                <?php
                $recruit_obj = get_page_by_path('recruit');
                $post = $recruit_obj;
                setup_postdata($post);
                ?>
                <h2 class="c-title-level2 c-title-level2--center c-title-level2--white"><?php echo get_the_title(); ?></h2>
                <span class="c-title-level2-english c-title-level2-english--center c-title-level2-english--white">recruit</span>

                <div class="u-mt">
                    <p class="c-recruit-text"><?php echo get_the_excerpt(); ?></p>

                    <div class="c-recruit-button">
                        <a href="<?php echo esc_url(home_url('recruit')); ?>" class="c-button c-button--white"><?php echo get_the_title(); ?>一覧へ</a>
                    </div>
                </div>
                <?php wp_reset_postdata(); ?>
            </div>
        </section>
        <!-- end recruit -->

        <!-- footer -->
        <footer class="footer">
            <div class="footer-upper-inner">
                <div class="footer-company-info">
                    <div class="footer-logo">
                        <a href="<?php echo home_url();?>">
                            <img srcset="<?php echo get_template_directory_uri(); ?>/img/common/logo_white.png 1x, <?php echo get_template_directory_uri(); ?>/img/common/logo_white@2x.png 2x" width="290" height="46" src="<?php echo get_template_directory_uri(); ?>/img/common/logo_white@2x.png" alt="KAGU" decoding="async" loading="lazy">
                        </a>
                    </div>
                    <div class="footer-company-info-address">
                        <span>株式会社KAGU</span>
                        <span>愛知県名古屋市○○区○○町 XX-X</span>
                        <span class="footer-company-info-address-tel">TEL. 052-000-0000</span>
                    </div>
                </div>
                <nav class="footer-nav">
                    <ul class="footer-nav-list">
                        <li class="footer-nav-item"><a href="<?php echo get_template_directory_uri(); ?>/furniture/">取扱い家具</a></li>
                        <li class="footer-nav-item footer-nav-item--dropdown">
                            <span>販売店・展示場一覧</span>
                            <ul class="footer-nav-dropdown-list">
                                <li class="footer-nav-dropdown-item"><a href="<?php echo get_template_directory_uri(); ?>/store/shop.html">販売店一覧</a></li>
                                <li class="footer-nav-dropdown-item"><a href="<?php echo get_template_directory_uri(); ?>/store/showroom.html">展示場一覧</a></li>
                            </ul>
                        </li>
                        <li class="footer-nav-item"><a href="<?php echo get_template_directory_uri(); ?>/recruit/">採用情報</a></li>
                        <li class="footer-nav-item"><a href="<?php echo get_template_directory_uri(); ?>/news/">お知らせ</a></li>
                        <li class="footer-nav-item"><a href="<?php echo get_template_directory_uri(); ?>/contact/">お問い合わせ</a></li>
                    </ul>
                </nav>
            </div>

            <div class="footer-lower-inner">
                <a class="footer-privacy" href="<?php echo esc_url(get_template_directory_uri() .'/privacy'); ?>">プライバシーポリシー</a>
                <small class="footer-copyright">&copy; 2020 KAGU inc.</small>
            </div>
        </footer>
        <!-- end footer -->
        <?php wp_footer(); ?>
        </body>

        </html>