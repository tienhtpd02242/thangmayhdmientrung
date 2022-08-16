<?php

get_header();
$global_opt = get_fields('option');
$contact_opt = get_fields();
get_template_part('page-template/hero-common-section');

?>
<div class="wrap_contact">
  <div class="container">
    <div class="content_contact">
      <div class="info_contact">
        <h1 class="__title"><?php the_title();?></h1>
        <div class="__google_map">
          <?php echo $contact_opt['google_map'];?>
        </div>
        <div class="bottom_contact">
          <div class="left__bottom">
            <h2 class="__company"><?php echo $contact_opt['name_company'];?></h2>
            <ul>
              <li><i class="fa fa-map-marker"></i><?php echo $contact_opt['address_contact'];?></li>
              <li><i class="fa fa-phone"></i><a href="tel:<?php echo $contact_opt['phone_number_contact'];?>"><?php echo $contact_opt['phone_number_contact'];?></a></li>
              <li><i class="fa fa-envelope-o"></i><a href="mailto:<?php echo $contact_opt['email_contact'];?>"><?php echo $contact_opt['email_contact'];?></a></li>
            </ul>
          </div>
          <div class="right__bottom">

          </div>
        </div>
      </div>
      <?php get_sidebar();?>
    </div>
  </div>
</div>
<?php
get_footer();
