<?php $homepage = get_fields();?>
<section class="hero-section">
  <div class="wrap-hero">
    <div class="slider-hero owl-carousel">
        <?php
        $slider = $homepage['slider_hero'];
        if( $slider ) {
          foreach( $slider as $item ) {
              echo '<div class="item-slider">';
              ?><img src="<?php echo $item['background_slider'];?>"><?php
              echo '</div>';
          }
        }
        ?>
    </div>
  </div>
</section>
