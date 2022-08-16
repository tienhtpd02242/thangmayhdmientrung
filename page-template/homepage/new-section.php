<?php $homepage = get_fields();?>
<section class="news-section" style="background-image: url(<?php echo $homepage['background_news'];?>)">
  <div class="container">
    <h2 class="heading-news"><?php echo $homepage['heading_news_ss'];?></h2>
    <div class="wrap-news">
      <?php
      $query = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 4,
      ));

      if( $query->have_posts()){
        $index = 0;
        while( $query->have_posts()){
          $query->the_post();
          if( $index == 0 ){
            ?>
            <div class="big_news">
              <a class="__link" href="<?php the_permalink();?>">
                <img class="img_thumb" src="<?php echo get_the_post_thumbnail_url();?>">
              </a>
              <div class="__title">
                <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
              </div>
            </div>
            <?php
            echo "<div class='wrap_news_mini'>";
          }else{
              ?>
              <div class="news_mini">
                <div class="left_mini">
                  <a class="__link_mini" href="<?php the_permalink();?>">
                    <img src="<?php echo get_the_post_thumbnail_url();?>" class="thumb_news_mini">
                  </a>
                </div>
                <div class="right_news_mini">
                  <a class="__link_mini" href="<?php the_permalink();?>"><h4 class="__title_mini"><?php the_title();?></h4></a>
                  <?php the_excerpt();?>
                </div>
              </div>
              <?php
          }
          $index++;
        }
        echo "</div>";
      }
      ?>
    </div>
  </div>
</section>
