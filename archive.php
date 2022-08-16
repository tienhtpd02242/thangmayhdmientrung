<?php
get_header();
$global_opt = get_fields('option');
get_template_part('page-template/hero-common-section');
?>
<section class="__ss_service_archive">
  <div class="container">
    <div class="wrap_service_archive">
      <div class="wrap_item">
        <?php
        if(have_posts()){
          while( have_posts()){
            the_post();
            ?>
            <div class="__item">
              <div class="__thumb">
                <a href="<?php the_permalink();?>">
                  <?php echo get_the_post_thumbnail();?>
                </a>
              </div>
              <a href="<?php the_permalink();?>"><h3 class="__title"><?php the_title();?></h3></a>
              <div class="__excerpt"><?php the_excerpt();?></div>
            </div>
            <?php
          }
        }
        ?>
      </div>
      <?php get_sidebar();?>
    </div>
  </div>
</section>
<?php
get_footer();
