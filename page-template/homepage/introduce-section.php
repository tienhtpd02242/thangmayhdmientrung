<?php $homepage = get_fields();?>
<section class="introduce-section">
  <div class="container">
    <div class="wrap-introduce">
      <div class="left-introduce">
        <h2 class="heading-introduce"><?php echo $homepage['heading_introduce'];?></h2>
        <p class="sub-hd-introduce"><?php echo $homepage['sub_heading_introduce'];?></p>
        <a class="btn-cta" href="<?php echo $homepage['button_cta_introduce'];?>">Xem Thêm</a>
        <a href="tel:<?php echo $homepage['phone_number'];?>" class="__phone"><i class="fa fa-phone-square"></i><?php echo $homepage['phone_number'];?></span></a>
      </div>
      <div class="right-introduce">
        <div class="list_intr">
          <?php foreach ($homepage['list_introduce'] as $key => $value) {
            ?>
            <div class="item-intr">
              <div class="headline"><?php echo $value['headline'];?></div>
              <div class="subheadline"><?php echo $value['content'];?></div>
            </div>
            <?php 
          } ?>
        </div>
      </div>
    </div>
  </div>
</section>
