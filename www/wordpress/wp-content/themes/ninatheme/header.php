<!DOCTYPE html>
<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="description" content="東京・横浜を拠点とするwebデザイン＆フリーランスUI/UXデザイナー｜nina&nbsp;ARCHETYPE（ニナ・アーキタイプ）｜ホームページ・アプリデザイン・UI デザイン">
  <meta name="format-detection" content="telephone=no,address=no,email=no">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=aEdge">
  <link rel="canonical" href="http://nina-archetype.com">
  <link rel="icon" href="/icon/favicon.ico">
  <link rel="apple-touch-icon" href="/icon/icon.png">
  <link rel="alternate" type="application/rss+xml" href="http://nina-archetype.com/feed">
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/ui/jquery-ui-1.8.12.custom.min.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.matchHeight-min.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/svg4everybody.legacy.min.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>
  <script src="https://use.typekit.net/elp6vvj.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <script>svg4everybody();</script>
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/top.min.css">
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/hover-min.css">
  <title>
    <?php if(is_home()): ?>
    <?php bloginfo('name'); ?>
    <?php elseif(is_page()): ?>
    <?php wp_title(''); ?>｜
    <?php bloginfo('name'); ?>
    <?php elseif(is_single()): ?>
    <?php wp_title(''); ?>｜
    <?php bloginfo('name'); ?>
    <?php elseif(is_category()): ?>
    <?php single_cat_title() ?>の記事一覧 ｜
    <?php bloginfo('name'); ?>
    <?php elseif(is_month()): ?>
    <?php the_time("Y年m月") ?>の記事一覧 ｜
    <?php bloginfo('name'); ?>
    <?php elseif(is_year()): ?>
    <?php the_time("Y年") ?>の記事一覧 ｜
    <?php bloginfo('name'); ?>
    <?php elseif(is_search()): ?>検索結果 ｜
    <?php bloginfo('name'); ?>
    <?php else: ?>
    <?php bloginfo('name'); ?>
    <?php endif; ?>
  </title>
  <?php wp_head(); ?>
</head>
<body>
<script>
    $(function(){
      $('.service-detail').matchHeight();
    });
  </script>
<div class="wrap">
<header>
  <h1>東京・横浜を拠点とするホームページ制作・webデザイン＆フリーランスUI/UXデザイナー</h1>
</header>
<nav>
<h2>
  <svg role="image" class="logo">
    <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/svg/icons.svg#logo" />
  </svg>
</h2>
<!--mobile-->
<div class="nav-toggle">
<a class="menu-trigger" href="#">
  <span></span>
  <span></span>
  <span></span>
</a>
</div>
    <!--pc-->
    <ul class="main-navi">
      <li>
        <a href="#">ABOUT</a>
      </li>
      <li>
        <a href="#">SERVICE</a>
      </li>
      <li>
        <a href="#">WORKS</a>
      </li>
      <li>
        <a href="#">CONTACT</a>
      </li>
    </ul>


    <p class="request">
      <a class="clip-btn" href="#">仕事のご依頼
        <svg role="image" class="icon">
          <use xlink:href="svg/icons.svg#request" />
        </svg>
      </a>
    </p>
</nav>
