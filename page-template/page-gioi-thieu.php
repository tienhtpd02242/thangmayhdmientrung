<?php
/**
* Template Name: Page Gioi Thieu
*
*/
get_header();
$global_opt = get_fields('option');
get_template_part('page-template/hero-common-section');
?>
<section class="ss_wrap-introduce">
  <div class="container">
    <div class="wrap-introduce">
      <div class="content_introduce">
        <h1 class="__heading_introduce"><?php the_title();?></h1>
        <div class="__content">
          <?php the_content(); ?>
        </div>
      </div>
      <?php get_sidebar();?>
    </div>
  </div>
</section>
<?php
get_footer();
