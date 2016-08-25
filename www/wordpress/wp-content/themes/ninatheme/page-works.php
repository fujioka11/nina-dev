<?php
/*
Template Name: Works
*/
?>

<?php get_header(); ?>
<div class="main">

  <div id="works" class="page-contents">
    <h3>この他にも多く実績がございますので<a href="/contact">CONTACT</a>からお気軽にお問い合わせください。</h3>

    <div class="work-contents">

      <?php
  $wp_query = new WP_Query();
  $param = array(
      'posts_per_page' => '-1', //表示件数。-1なら全件表示
      'post_type' => 'work', //カスタム投稿タイプの名称を入れる
      'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
      'orderby' => 'ID', //ID順に並び替え
      'order' => 'DESC'
  );

  $wp_query->query($param);
  if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
?>
      <section class="workbox">

        <p class="thumnail">
          <?php the_post_thumbnail('800_thum'); ?>
        </p>

        <div class="workbox-detail">
          <h4><?php the_title(); ?></h4>

          <p class="jobname">
              <?php echo esc_html( $post->hobfield ); ?>
          </p>

        </div>

      </section>
      <?php endwhile; endif; ?>

    </div>
  </div>





</div>
<!--main-->
<?php get_footer(); ?>
