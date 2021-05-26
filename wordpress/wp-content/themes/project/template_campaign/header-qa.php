<?php
/**
 * template  : キャンペーン
 */
?>
<?php
  $category = get_the_category();
  $cat_id   = $category[0]->cat_ID;
  $cat_name = $category[0]->cat_name;
  $cat_slug = $category[0]->category_nicename;
?>
<title><?php if( is_single() ) { ?><?php the_title(); ?> | <?php } else { ?><?php } ?><?php bloginfo( 'description' ); ?></title>
<meta name="description" content="<?php echo get_the_excerpt(); ?>">
<meta property="og:type" content="article">
<meta property="og:url" content="<?php echo ( 'https://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'REQUEST_URI' ] ); ?>">
<meta property="og:site_name" content="<?php bloginfo( 'description' ); ?>">
<?php /* og:image（アイキャッチ画像がないページ用に専用画像を用意） */ ?>
<?php if( has_post_thumbnail() ) { ?>
  <meta property="og:image" content="<?php the_post_thumbnail_url( 'full' ); ?>">
<?php } else { ?>
  <meta property="og:image" content="https://gazo.okwave.jp/okwave/images/logo/facebook_okwave.jpg">
<?php } ?>
<meta property="og:title" content="<?php the_title(); ?> | <?php bloginfo( 'description' ); ?>">
<meta property="og:description" content="<?php echo get_the_excerpt(); ?>">
<?php /* og:locale（日本語を指定）  */ ?>
<meta property="og:locale" content="ja_JP">
<meta name="twitter:widgets:csp" content="on">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@OKWAVE">
<link href="https://gazo.okwave.jp/okwave/images/favicon.ico" type="image/vnd.microsoft.icon" rel="icon">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;500;700;900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/aab1dc9e0b.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/common_base.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/campaign_qa.css" type="text/css" />
<!-- service header -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<?php
      $cp_howto = get_field('cp_qa_content_type');
  ?>
<?php if ($cp_howto == 'cp_qa_type_ans') {  ?>
<script>
  jQuery(function($){
    const randRange = (min, max) => Math.floor(Math.random() * (max - min + 1) + min);//ランダム関数
    let html = '';
    let speach = $('.speach');
    for(let i = 0; i < 1; i++) {
      html += '<p style="animation-duration:'+ randRange(20,45) +'s;animation-delay:'+ randRange(1,12) +'s;">Ctrl+Alt+Deleteを同時に押して、タスクマネージャーを起動して下さい。....</p>'
      + '<p style="animation-duration:'+ randRange(22,47) +'s;animation-delay:'+ randRange(4,16) +'s;">詐欺ウォールは必ずしも付属ソフトを使う必要はありませんが、他のソフトを使う場合...</p>'
      + '<p style="animation-duration:'+ randRange(24,49) +'s;animation-delay:'+ randRange(8,20) +'s;">メモリ不足には、ＨＤＤは関係ありませんよ。この文面からして、...</p>'
      + '<p style="animation-duration:'+ randRange(26,50) +'s;animation-delay:'+ randRange(12,25) +'s;">印刷のためのデータ生成準備作業に必要な、Cドライブの空きがないと推測されます。....</p>'
      + '<p style="animation-duration:'+ randRange(28,51) +'s;animation-delay:'+ randRange(15,35) +'s;">メーカー仕様書には記載がないのでおそらくですが...</p>'
      + '<p style="animation-duration:'+ randRange(30,53) +'s;animation-delay:'+ randRange(18,45) +'s;">IPV6は、IPV4アドレスの枯渇による弊害を防ぎ、安定...</p>'
      + '<p style="animation-duration:'+ randRange(32,75) +'s;animation-delay:'+ randRange(20,55) +'s;">テレビの主電源を切ってなかったですか？　待機電力にしてお...</p>'
      + '<p style="animation-duration:'+ randRange(34,57) +'s;animation-delay:'+ randRange(1,65) +'s;">WiFiルーターが原因の可能性もありますが、おそらく...</p>'
      + '<p style="animation-duration:'+ randRange(36,40) +'s;animation-delay:'+ randRange(2,75) +'s;">ご加入時に設置させていただいた機器の返却が必要です...</p>'
      + '<p style="animation-duration:'+ randRange(38,52) +'s;animation-delay:'+ randRange(3,10) +'s;">100人となるとそこそこの大きさのスペースになりますよね。屋外か...</p>'
      + '<p style="animation-duration:'+ randRange(40,55) +'s;animation-delay:'+ randRange(4,50) +'s;">念の為に　ページ８～１０の接続を再確認後、ページ１１の基本操作...</p>'
      + '<p style="animation-duration:'+ randRange(42,58) +'s;animation-delay:'+ randRange(5,70) +'s;">インターネットバンキング「アクセスジェイ」は、常陽銀...</p>'
      + '<p style="animation-duration:'+ randRange(44,59) +'s;animation-delay:'+ randRange(6,25) +'s;">とりあえず印鑑と身分証明書を持ってその銀行に行けば、色々教え....</p>'
      + '<p style="animation-duration:'+ randRange(46,80) +'s;animation-delay:'+ randRange(7,35) +'s;">スマホ通帳（＝通帳アプリ？）はすぐに入出金内....</p>'
      + '<p style="animation-duration:'+ randRange(48,62) +'s;animation-delay:'+ randRange(8,45) +'s;">ここで、外貨を売る(円に換える)→総合口座に入金...</p>'
      + '<p style="animation-duration:'+ randRange(20,40) +'s;animation-delay:'+ randRange(9,55) +'s;">バイトしながらは、私も経験しましたが、大変です。何より...</p>'
      + '<p style="animation-duration:'+ randRange(22,36) +'s;animation-delay:'+ randRange(10,65) +'s;">知人に「院卒の人って頭は良いんだけど、ちょっと変わった人が...</p>'
      + '<p style="animation-duration:'+ randRange(24,38) +'s;animation-delay:'+ randRange(1,75) +'s;">分野によるのかもしれませんが、私の周りでは、殆どの人が３年...</p>'
      + '<p style="animation-duration:'+ randRange(26,44) +'s;animation-delay:'+ randRange(2,85) +'s;">こんにちは何か所かあるようで2月の初旬から3月の初旬に咲くよ...</p>'
      + '<p style="animation-duration:'+ randRange(28,47) +'s;animation-delay:'+ randRange(12,20) +'s;">住民票を移動しないのなら１/１現在での住所で税金納入になるよう...</p>'
      + '<p style="animation-duration:'+ randRange(30,49) +'s;animation-delay:'+ randRange(3,10) +'s;">鹿児島から95分の離島！ 種子島・西之表港を起点にレンタカ...</p>'
      + '<p style="animation-duration:'+ randRange(32,85) +'s;animation-delay:'+ randRange(4,40) +'s;">礼をありがとうございます。推察すると、都会にお住いのかた...</p>'
      + '<p style="animation-duration:'+ randRange(34,95) +'s;animation-delay:'+ randRange(5,15) +'s;">ルーターを交換したいのですが...</p>'
      + '<p style="animation-duration:'+ randRange(36,80) +'s;animation-delay:'+ randRange(6,25) +'s;">元気がでるKPOPのMV教えてください！</p>'
      + '<p style="animation-duration:'+ randRange(38,60) +'s;animation-delay:'+ randRange(7,35) +'s;">マンションのインターホンやチャイムが鳴ると切断</p>'
      + '<p style="animation-duration:'+ randRange(40,75) +'s;animation-delay:'+ randRange(8,45) +'s;">写真印刷で真ん中が印刷されません</p>'
      + '<p style="animation-duration:'+ randRange(42,90) +'s;animation-delay:'+ randRange(1,55) +'s;">ネットワークカメラが繋がらない</p>'
      + '<p style="animation-duration:'+ randRange(44,90) +'s;animation-delay:'+ randRange(14,65) +'s;">大学院の選び方</p>'
      + '<p style="animation-duration:'+ randRange(46,80) +'s;animation-delay:'+ randRange(11,75) +'s;">休眠口座？をネットで確認したい。</p>'
      + '<p style="animation-duration:'+ randRange(48,90) +'s;animation-delay:'+ randRange(14,85) +'s;">オンライン授業</p>'
      + '<p style="animation-duration:'+ randRange(23,6) +'s;animation-delay:'+ randRange(17,20) +'s;">大学院文系トップと理系トップの選び方</p>'
      + '<p style="animation-duration:'+ randRange(25,80) +'s;animation-delay:'+ randRange(12,50) +'s;">飯綱町の春は、袖の山の枝垂れ桜の他にも、色々桜のスポットも...</p>'
      + '<p style="animation-duration:'+ randRange(27,60) +'s;animation-delay:'+ randRange(22,80) +'s;">筆王のバージョンにもよりますが、古いのパソコンで筆王...</p>'
      + '<p style="animation-duration:'+ randRange(29,50) +'s;animation-delay:'+ randRange(3,25) +'s;">VideoStudio Pro シリーズは、プロキシ環境の場合...</p>'
      + '<p style="animation-duration:'+ randRange(31,80) +'s;animation-delay:'+ randRange(1,35) +'s;">基本的にwifiに接続するための暗号キーはwifiル...</p>'
      + '<p style="animation-duration:'+ randRange(33,90) +'s;animation-delay:'+ randRange(9,45) +'s;">PDFファイルを2つ入れたフォルダをLhaplusを使って...</p>'
      + '<p style="animation-duration:'+ randRange(35,100) +'s;animation-delay:'+ randRange(14,55) +'s;">ンターネットの利用の大半がダウンロードでアップロードの利用...</p>';
    }
    speach.append(html);
    let item = speach.find('p');
    let cont_h = speach.height();
    item.each(function(index) {
      $(this).css({
        top: randRange(0,cont_h),
        'font-size': randRange(10,18) + 'px',
      });
    });
  });
</script>
<?php } else { ?>
  <script>
  jQuery(function($){
    const randRange = (min, max) => Math.floor(Math.random() * (max - min + 1) + min);//ランダム関数
    let html = '';
    let speach = $('.speach');
    for(let i = 0; i < 1; i++) {
      html += '<p style="animation-duration:'+ randRange(20,45) +'s;animation-delay:'+ randRange(1,12) +'s;">端末からの接続待ちとでます</p>'
      + '<p style="animation-duration:'+ randRange(22,47) +'s;animation-delay:'+ randRange(4,16) +'s;">投資信託について</p>'
      + '<p style="animation-duration:'+ randRange(24,49) +'s;animation-delay:'+ randRange(8,20) +'s;">キャッシュバック案内メールについて</p>'
      + '<p style="animation-duration:'+ randRange(26,50) +'s;animation-delay:'+ randRange(12,25) +'s;">マスクを二重にすると効果が高まるの？</p>'
      + '<p style="animation-duration:'+ randRange(28,51) +'s;animation-delay:'+ randRange(15,35) +'s;">なぜ、こんなに料金が高い？</p>'
      + '<p style="animation-duration:'+ randRange(30,53) +'s;animation-delay:'+ randRange(18,45) +'s;">(新規)開通工事を完了したが、ネットが繋がれない</p>'
      + '<p style="animation-duration:'+ randRange(32,55) +'s;animation-delay:'+ randRange(20,55) +'s;">多重言語対応について</p>'
      + '<p style="animation-duration:'+ randRange(34,57) +'s;animation-delay:'+ randRange(1,65) +'s;">院卒は変わった人が多い？</p>'
      + '<p style="animation-duration:'+ randRange(36,40) +'s;animation-delay:'+ randRange(2,75) +'s;">メールの文字を大きくしたい！</p>'
      + '<p style="animation-duration:'+ randRange(38,52) +'s;animation-delay:'+ randRange(3,10) +'s;">毎月口座から指定の個人口座へ張り込みたい</p>'
      + '<p style="animation-duration:'+ randRange(40,55) +'s;animation-delay:'+ randRange(4,50) +'s;">解約の連絡先</p>'
      + '<p style="animation-duration:'+ randRange(42,78) +'s;animation-delay:'+ randRange(5,70) +'s;">滞納してましたがいつ頃再開しますか。</p>'
      + '<p style="animation-duration:'+ randRange(44,59) +'s;animation-delay:'+ randRange(6,25) +'s;">光テレビどうやって接続する</p>'
      + '<p style="animation-duration:'+ randRange(46,80) +'s;animation-delay:'+ randRange(7,35) +'s;">ビジネスプロジェクターの光源を直視しました</p>'
      + '<p style="animation-duration:'+ randRange(48,62) +'s;animation-delay:'+ randRange(8,45) +'s;">宅飲みについて</p>'
      + '<p style="animation-duration:'+ randRange(20,40) +'s;animation-delay:'+ randRange(9,55) +'s;">複数枚名刺のscanで、名刺が区別されない</p>'
      + '<p style="animation-duration:'+ randRange(22,36) +'s;animation-delay:'+ randRange(10,65) +'s;">PCやWEBブラウザのメールはログインできるのに</p>'
      + '<p style="animation-duration:'+ randRange(24,38) +'s;animation-delay:'+ randRange(1,75) +'s;">カートリッジ交換後認識できません</p>'
      + '<p style="animation-duration:'+ randRange(26,44) +'s;animation-delay:'+ randRange(2,85) +'s;">無線LANの環境に入れません。</p>'
      + '<p style="animation-duration:'+ randRange(28,47) +'s;animation-delay:'+ randRange(12,20) +'s;">資産運用パッケージプランの積立投信の銘柄変更</p>'
      + '<p style="animation-duration:'+ randRange(30,49) +'s;animation-delay:'+ randRange(3,10) +'s;">セキュリティソフトのダウンロードについての質問です</p>'
      + '<p style="animation-duration:'+ randRange(32,85) +'s;animation-delay:'+ randRange(4,40) +'s;">引き落としについて</p>'
      + '<p style="animation-duration:'+ randRange(34,95) +'s;animation-delay:'+ randRange(5,15) +'s;">ルーターを交換したいのですが...</p>'
      + '<p style="animation-duration:'+ randRange(36,80) +'s;animation-delay:'+ randRange(6,25) +'s;">元気がでるKPOPのMV教えてください！</p>'
      + '<p style="animation-duration:'+ randRange(38,60) +'s;animation-delay:'+ randRange(7,35) +'s;">マンションのインターホンやチャイムが鳴ると切断</p>'
      + '<p style="animation-duration:'+ randRange(40,75) +'s;animation-delay:'+ randRange(8,45) +'s;">写真印刷で真ん中が印刷されません</p>'
      + '<p style="animation-duration:'+ randRange(42,90) +'s;animation-delay:'+ randRange(10,55) +'s;">ネットワークカメラが繋がらない</p>'
      + '<p style="animation-duration:'+ randRange(44,90) +'s;animation-delay:'+ randRange(14,65) +'s;">大学院の選び方</p>'
      + '<p style="animation-duration:'+ randRange(46,80) +'s;animation-delay:'+ randRange(11,75) +'s;">休眠口座？をネットで確認したい。</p>'
      + '<p style="animation-duration:'+ randRange(48,90) +'s;animation-delay:'+ randRange(14,85) +'s;">オンライン授業</p>'
      + '<p style="animation-duration:'+ randRange(23,6) +'s;animation-delay:'+ randRange(17,20) +'s;">大学院文系トップと理系トップの選び方</p>'
      + '<p style="animation-duration:'+ randRange(25,80) +'s;animation-delay:'+ randRange(12,50) +'s;">医療関係者に報酬を差し上げることは出来ないの？</p>'
      + '<p style="animation-duration:'+ randRange(27,60) +'s;animation-delay:'+ randRange(22,80) +'s;">コロナが終息したら何をしますか？</p>'
      + '<p style="animation-duration:'+ randRange(29,50) +'s;animation-delay:'+ randRange(3,25) +'s;">プリンターが応答しない</p>'
      + '<p style="animation-duration:'+ randRange(31,80) +'s;animation-delay:'+ randRange(6,35) +'s;">文字入力ができない</p>'
      + '<p style="animation-duration:'+ randRange(33,900) +'s;animation-delay:'+ randRange(9,45) +'s;">動作が遅くて困っています。</p>'
      + '<p style="animation-duration:'+ randRange(35,100) +'s;animation-delay:'+ randRange(14,55) +'s;">Windows Updateができません</p>'
      + '<p style="animation-duration:'+ randRange(37,90) +'s;animation-delay:'+ randRange(11,72) +'s;">VPN接続後にインターネットが利用不可となります</p>';
    }
    speach.append(html);
    let item = speach.find('p');
    let cont_h = speach.height();
    item.each(function(index) {
      $(this).css({
        top: randRange(0,cont_h),
        'font-size': randRange(10,18) + 'px',
      });
    });
  });
  </script>
<?php } ?>

<?php wp_head(); ?>

