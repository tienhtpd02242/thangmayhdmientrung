<?php $homepage = get_fields();?>
<section class="construction-section">
  <div class="container">
    <h2 class="heading-construction"><?php echo $homepage['heading_ss_construction'];?></h2>
    <div class="wrap-construction owl-carousel">
      <?php
        $query = new WP_Query(array(
          'post_type' => 'duan',
          'posts_per_page' => -1,
        ));
        if( $query->have_posts()){
          while( $query->have_posts()){
            $query->the_post();
            ?>
            <div class="item-construction">
              <a href="<?php the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" class="thumb-construction">
              </a>
              <a class="name-construction" href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
            </div>
            <?php
          }
          wp_reset_postdata();
        }
      ?>
    </div>
  </div>
</section>
