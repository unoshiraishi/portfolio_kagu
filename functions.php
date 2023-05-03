<?php
//外部ファイル読み込み
function my_enqueue_scripts() {
    if(!is_admin()) {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', get_template_directory_uri(). '/js/jquery-3.6.3.min.js', array());
    }
    wp_enqueue_script('slick_js', get_template_directory_uri(). '/js/slick.min.js', array('jquery'));
    wp_enqueue_style('slick_css', get_template_directory_uri(). '/css/slick.css', array() );
    wp_enqueue_style('slick_theme', get_template_directory_uri(). '/css/slick-theme.css', array('slick_css') );
    wp_enqueue_style('my_styles', get_template_directory_uri(). '/css/style.css', array('slick_css','slick_theme') );
    wp_enqueue_script('main_js', get_template_directory_uri(). '/js/main.js', array('jquery', 'slick_js'));
    wp_enqueue_script('font_awesome', 'https://kit.fontawesome.com/3ca0833ecf.js', array());
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts');

//管理画面で郵便番号検索ライブラリ読み込み
function custom_admin_enqueue_scripts() {
    if('shop' == get_post_type()):
        wp_enqueue_script('admin_postcode_script1','https://yubinbango.github.io/yubinbango/yubinbango.js', array('admin_postcode_script_shop'));
        wp_enqueue_script('admin_postcode_script_shop', get_template_directory_uri().'/js/admin-postcode-shop.js', array('jquery'));
    elseif('showroom' == get_post_type()):
        wp_enqueue_script('admin_postcode_script1','https://yubinbango.github.io/yubinbango/yubinbango.js', array('admin_postcode_script_showroom'));
        wp_enqueue_script('admin_postcode_script_showroom', get_template_directory_uri().'/js/admin-postcode-showroom.js', array('jquery'));
    endif;
}
add_action('admin_enqueue_scripts', 'custom_admin_enqueue_scripts');

//投稿編集画面のタグをチェックボックス化
function change_tag_to_checkbox() {
    $args = get_taxonomy('post_tag');
    $args->hierarchical = true;
    register_taxonomy('post_tag', 'post', $args);
}
add_action('init', 'change_tag_to_checkbox');

//現在の投稿のタグ名を取得する関数
function get_tag_name() {
    if( !empty(get_the_tags())):
        $tags = get_the_tags();
        $tag_name = $tags[0]->name;
        return $tag_name;
    else:
        return '未分類';
    endif;
}
//現在の投稿のタグのスラッグを取得する関数
function get_tag_slug() {
    if( !empty(get_the_tags())):
        $tags = get_the_tags();
        $tag_slug = $tags[0]->slug;
        return $tag_slug;
    else:
        return null;
    endif;
}

//ヘッダー、フッターのカスタムメニュー化
register_nav_menus(
    array(
        'place_hamburger' => 'ハンバーガーメニュー',
        'place_global' => 'グローバル',
    )
);

//wp_nav_menu()のulタグを削除
function remove_ul($menu) {
    return preg_replace(array('#^<ul[^>]*>#', '#</ul>$#'), '', $menu);
}
add_filter('wp_nav_menu', 'remove_ul');


//メイン画像上にテンプレートごとの文字列を表示
function get_main_title() {
    if(is_singular('post') || is_tag(array('info', 'news', 'recruit')) ):
        $category_obj = get_the_category();
        return $category_obj[0]->name;
    elseif(is_page()):
        return get_the_title();
    elseif(is_category()):
        return single_cat_title();
    elseif(is_post_type_archive(array('shop', 'showroom'))):
        $store_title = get_the_title(24);
        return $store_title;
    endif;
}

//メイン画像上にテンプレートごとの英語タイトルを表示
function get_main_en_title() {
    if(is_category()):
        $term_obj = get_queried_object();
        $english_title = get_field('english_title', $term_obj->taxonomy. '_'. $term_obj->term_id);
        return $english_title;
    elseif(is_singular('post') || is_tag(array('info', 'news', 'recruit')) ):
        $term_obj = get_the_category();
        $english_title = get_field('english_title', $term_obj[0]->taxonomy. '_'. $term_obj[0]->term_id);
        return $english_title;
    elseif(is_page()):
        return get_field('english_title');
    elseif(is_post_type_archive(array('shop', 'showroom'))):
        $store_english_title = get_field('english_title', 24);
        return $store_english_title;
    endif;
}

//子ページを取得する関数
function get_child_pages() {
    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'page',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'post_parent' => get_the_ID(),
    );
    $child_pages = new WP_Query($args);
    return $child_pages;
}

//アイキャッチ画像を有効化
add_theme_support('post-thumbnails');

//トップページのメイン画像用のサイズ設定

//the_posts_pagination()出力のCSSクラス変更
function custom_the_posts_pagination($template) {
    $template = '
    <nav class="navigation %1$s" aria-label="%4$s">
        <h2 class="screen-reader-text">%2$s</h2>
        <div class="c-pagination">%3$s</div>
    </nav>';
    return $template;
}
add_filter('navigation_markup_template', 'custom_the_posts_pagination');

//固定ページの抜粋機能を有効化
add_post_type_support('page','excerpt');

//get_the_excerpt()で取得する文字列に改行タグ挿入
function apply_excerpt_br($value) {
    return nl2br($value);
}
add_filter('get_the_excerpt', 'apply_excerpt_br');

// 特定の記事を抽出する関数
function get_specific_posts($post_type, $taxonomy, $term) {
    $args = array(
        'post_type' => $post_type,
        'tax_query' => array(
            array(
                'taxonomy' => $taxonomy,
                'field' => 'slug',
                'terms' => $term,
            ),
        ),
        'posts_per_page' => -1,
        'order' => 'ASC',
    );
    $specific_posts = new WP_Query($args);
    return $specific_posts;
}

// Contact Form 7 に確認用メールアドレスの検証を追加
function custom_email_confirmation_validation_filter($result, $tag) {
  if('your_email_confirm' == $tag->name) {
    $your_email = isset($_POST['your_email']) ? trim($_POST['your_email']) : '';
    $your_email_confirm = isset($_POST['your_email_confirm']) ? trim($_POST['your_email_confirm']) : '';

    if($your_email != $your_email_confirm) {
        $result->invalidate($tag, "確認用のメールアドレスが一致していません。");
    }
  }
  return $result;
}
add_filter('wpcf7_validate_email*', 'custom_email_confirmation_validation_filter', 20, 2);

//お知らせページのフィルターのアクティブなページを装飾するクラス付与関数
function get_news_filter_active_class() {
    if(is_category()):
        return 'is_category';
    elseif(is_tag('info')):
        return 'is_info';
    elseif(is_tag('news')):
        return 'is_news';
    elseif(is_tag('recruit')):
        return 'is_recruit';
    endif;
}