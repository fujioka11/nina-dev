<!DOCTYPE html>
<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="format-detection" content="telephone=no,address=no,email=no">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=aEdge">
  <link rel="icon" href="/icon/favicon.ico">
  <link rel="apple-touch-icon" href="/icon/icon.png">
  <link rel="alternate" type="application/rss+xml" href="http://nina-archetype.com/feed">
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/ui/jquery-ui-1.8.12.custom.min.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.matchHeight-min.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/svg4everybody.legacy.min.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>
  <script>svg4everybody();</script>
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
  <?php if(is_home()): ?>
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/top.min.css">
<?php elseif(is_page()): ?>
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/page.min.css">
  <?php endif; ?>
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/hover-min.css">

  <title>
    <?php wp_title(''); ?>
  </title>

  <?php wp_head(); ?>
</head>
<body>
<script>
    $(function(){
      $('.service-detail').matchHeight();
      $('.workbox').matchHeight();
    });
  </script>
<div class="wrap">
<header>
  <?php if(is_home()): ?>
    <h1>東京・横浜を拠点とするフリーランスのUIプランナー[nina]。優れたUI設計から生まれるWEBサイト制作を通してクライアントの価値を最大化させます。</h1>
  <?php elseif(is_page()): ?>
  <h1><?php echo get_post_meta($post->ID, _aioseop_description, true); ?></h1>
    <?php endif; ?>
</header>
<nav>

<h2>
  <a href="<?php echo esc_url(home_url('/'));?>">
    <svg role="image" class="logo">
      <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/svg/icons.svg#logo" />
    </svg>
  </a>
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
        <a class="<?php if ( is_page('about') ) { echo 'active'; } ?>" href="/about">ABOUT</a>
      </li>
      <li style="color:#ccc;">SERVICE</li>
      <li>
        <a class="<?php if ( is_page('works') ) { echo 'active'; } ?>" href="/works">WORKS</a>
      </li>
      <li>
        <a class="<?php if ( is_page('contact') ) { echo 'active'; } ?>" href="/contact">CONTACT</a>
      </li>
    </ul>


    <p class="request">
      <a class="clip-btn" href="#">お仕事のご依頼
        <svg role="image" class="icon">
          <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/svg/icons.svg#request" />
        </svg>
      </a>
    </p>

    <ul class="sns-box">
      <li>
        <a href="#">
          <svg role="image" class="foot-icon">
            <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/svg/icons.svg#facebook" />
          </svg>
        </a>
      </li>
      <li>
        <a href="#">
          <svg role="image" class="foot-icon">
            <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/svg/icons.svg#twitter" />
          </svg>
        </a>
      </li>
    </ul>

</nav>
