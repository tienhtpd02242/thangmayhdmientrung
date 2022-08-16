<?php $global_opt = get_fields('option');?>
  </div>
  <footer class="footer">
    <div class="container">
      <div class="wrap-ft">
        <div class="left-ft">
          <h3 class="name_company"><?php echo $global_opt['name_company'];?></h3>
          <p class="__address">Địa chỉ: <?php echo $global_opt['address'];?></p>
          <a href="tel:<?php echo $global_opt['hotline'];?>" class="__hotline">Hotline: <?php echo $global_opt['hotline'];?></a><br>
          <a href="mailto:<?php echo $global_opt['email'];?>" class="__email">Email: <?php echo $global_opt['email'];?></a>
        </div>
        <div class="right-ft">
          <a href="tel:<?php echo $global_opt['hotline'];?>" class="__hotline">Hotline: <?php echo $global_opt['hotline'];?></a><br>
          <div class="__facebook">
            <?php echo $global_opt['facebook'];?>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
