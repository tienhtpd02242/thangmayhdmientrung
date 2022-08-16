<?php $homepage = get_fields();?>
<section class="service-section" style="background-image: url(<?php echo $homepage['background_service'];?>);">
  <div class="container">
    <h2 class="heading-service"><?php echo $homepage['heading_service'];?></h2>
    <div class="wrap-service owl-carousel owl-theme">
      <?php
        $query = new WP_Query(array(
          'post_type' => 'dichvu',
          'posts_per_page' => 8,
        ));
        if( $query->have_posts()){
          while( $query->have_posts()){
            $query->the_post();
            ?>
            <div class="item-service">
              <a href="<?php the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" class="thumb-service">
              </a>
              <a class="name-service" href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
            </div>
            <?php
          }
          wp_reset_postdata();
        }
      ?>
    </div>
  </div>
</section>
