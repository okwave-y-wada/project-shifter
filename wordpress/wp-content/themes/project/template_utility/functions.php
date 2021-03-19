<?php
// 投稿画面のカテゴリ階層維持
function terms_checklist_paternity_retention( $args, $post_id ){
    if ( $args['checked_ontop'] !== false ){
        $args['checked_ontop'] = false;
    }
    return $args;
}
add_filter('wp_terms_checklist_args', 'terms_checklist_paternity_retention',10,2);

// 特定のカテゴリかその子カテゴリに分類された投稿を判定する条件分岐
// https://takayakondo.com/conditional-branch-cat-1/
function post_is_in_descendant_category( $cats, $_post = null ){
    foreach ( (array) $cats as $cat ) {
        $descendants = get_term_children( (int) $cat, 'category');
            if ( $descendants && in_category( $descendants, $_post ) )
        return true;
    }
    return false;
}
// 参考：https://www.poroanet.com/blog/wordpress/37.html
// 参考：https://satoyan419.com/post/how-to-edit-wp_head/
// titleタグを出力しない（templateで個別に入れる）
remove_action( 'wp_head', '_wp_render_title_tag', 1 );
// RSSフィードを出力しない
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
// next・prevを削除（別ディレクトリの関係が表示）
// next・prevは、投稿の前後にある投稿のリンクです。SEOでクローラー等に前後の記事を伝えます。
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
// 絵文字変換スクリプトを出力しない
remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles',     'print_emoji_styles' );
remove_action( 'admin_print_styles',  'print_emoji_styles' );
// wp-jsonを削除
remove_action('wp_head','rest_output_link_wp_head');
// EditURIを削除
// EditURIは外部の投稿ツールからWordPressに記事を投稿する際に必要なタグ
remove_action('wp_head', 'rsd_link');
// wlwmanifestを削除
// マイクロソフトが開発したWindows Live Writer（ウインドウズ ライブ ライター）というブログ投稿ができるソフトウェアからの投稿を受け付けるための記述
remove_action('wp_head', 'wlwmanifest_link');
// generatorを削除
// generatorは、サイトがどのようなシステムを使って生成されたかを示すタグです。特段必要ないので消しましょう。
remove_action('wp_head', 'wp_generator');
// DNSプリフェッチを削除
add_filter( 'emoji_svg_url', '__return_false' );
// stortlinkを削除
// stortlinkは、投稿ページなどで短いURL(サイトのURL/?p=記事番号)を表示すタグ
remove_action('wp_head', 'wp_shortlink_wp_head');
// .recentcommentsを削除
function remove_recent_comments_style() { 
    global $wp_widget_factory;
    remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'remove_recent_comments_style' );
// wp-jsonにユーザー情報がでないようにする
// add_filter( 'rest_authentication_errors', function( $result ) {
//     if ( ! empty( $result ) ) {
//     return $result;
//     }
//     if ( ! is_user_logged_in() ) {
//     return new WP_Error( 'rest_not_logged_in', 'You are not currently logged in.', array( 'status' => 401 ) );
//     }
//     return $result;
// });
// Embed系の
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');

function denqueue_my_scripts() {
    $remove_styles = array( 'habakiri-assets', 'habakiri' );

    foreach( $remove_styles as $target ) {
        if( wp_style_is($target) ) {
            wp_dequeue_style($target);
        }
    }
}
add_action( 'wp_enqueue_scripts', 'denqueue_my_scripts', 11 );
wp_enqueue_style( 'habakiri-assets', get_stylesheet_uri() );



// デフォルトのcssを削除
// WordPress 5.x系以降から、新エディタ「Gutenberg」で出力されるHTMLに対応したスタイルシートが自動で挿入
add_action( 'wp_enqueue_scripts', 'remove_block_library_style' );
function remove_block_library_style() {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
}


// term_description() のPタグが邪魔
remove_filter('term_description','wpautop');

/* the_archive_title 余計な文字を削除 */
add_filter( 'get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('',false);
    } elseif (is_tag()) {
        $title = single_tag_title('',false);
    } elseif (is_tax()) {
        $title = single_term_title('',false);
    } elseif (is_post_type_archive() ){
    $title = post_type_archive_title('',false);
    } elseif (is_date()) {
        $title = get_the_time('Y年n月');
    } elseif (is_search()) {
        $title = '検索結果：'.esc_html( get_search_query(false) );
    } elseif (is_404()) {
        $title = '「404」ページが見つかりません';
    } else {}
    return $title;
});

// ぱんくず
function mytheme_breadcrumb() {
    //投稿記事ページとカテゴリーページでの、カテゴリーの階層を表示
    $cats = '';
    $cat_id = '';
    if ( is_single() ) {
        $cats = get_the_category();
        if( isset($cats[0]->term_id) ) $cat_id = $cats[0]->term_id;
    } else if ( is_category() ) {
        $cats = get_queried_object();
        $cat_id = $cats->parent;
    }
    
    $cat_list = array();
    while ($cat_id != 0){
        $cat = get_category( $cat_id );
        $cat_link = get_category_link( $cat_id );
        array_unshift( $cat_list, '<a href="'.$cat_link.'">'.$cat->name.'</a>' );
        $cat_id = $cat->parent;
    }
    foreach($cat_list as $value){
        echo '<li>'.$value.'</li>';
        echo $sep;
    }

    //現在のページ名を表示
    if ( is_singular() ) {
        if ( is_attachment() ) {
            previous_post_link( '<li>%link</li>' );
            echo $sep;
        }
        the_title( '<li>', '</li>' );
    }
    else if( is_archive() ) the_archive_title( '<li>', '</li>' );
    else if( is_search() ) echo '<li>検索 : '.get_search_query().'</li>';
    else if( is_404() ) echo '<li>ページが見つかりません</li>';
}

/**
 * 不要なページを無効化します。(404扱い)
 */
function custom_handle_404() {
    // 検索ページ、作成者ページ、添付ファイルページを無効化
    if ( is_search() || is_author() || is_attachment()|| is_attachment() || is_home() || is_front_page() ||is_category(array('utility','award')) ) {
        global $wp_query;
        $wp_query->set_404();
        status_header( 404 );
        nocache_headers();
    }
}
add_action( 'template_redirect', 'custom_handle_404' );


/* 投稿一覧にスラッグを追加 */
function add_post_column_title( $columns ) {
    $columns[ 'slug' ] = "スラッグ";
    return $columns;
  }
  function add_post_column( $column_name, $post_id ) {
    if( $column_name == 'slug' ) {
      $post = get_post( $post_id );
      $slug = $post->post_name;
      echo esc_attr( $slug );
    }
  }
  add_filter( 'manage_posts_columns', 'add_post_column_title' );
  add_action( 'manage_posts_custom_column', 'add_post_column', 10, 2 );
  

  /**
 * 投稿のスラッグの初期値をidにします。
 */
function set_slug_date() {
    // 投稿以外(固定ページなど)の場合は適用しない
    if ( 'post' != get_post_type() ) {
        return;
    }
    ?>
    <script>
        jQuery(function($){ $('#post_name').val("post-<?php the_ID(); ?>"); });
    </script>
<?php }
add_action( 'admin_head-post-new.php','set_slug_date' );
