<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
<div class="main">

  <div id="contact" class="page-contents">
    <h3>メールフォームからのお問い合わせ</h3>
    <p>見積もりのご依頼、制作協力などお気軽にご相談ください。ご送信後、２営業日以内にご返信いたします。</p>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </div>
</div>
<!--main-->
<?php get_footer(); ?>
