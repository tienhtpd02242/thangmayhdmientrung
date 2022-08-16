<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo();?></title>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XBNWH1V4KG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XBNWH1V4KG');
</script>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
  <?php
  $global = get_fields('option');
  ?>
  <div class="site-main">
    <header class="header">
      <div class="container">
        <div class="wrap_header">
          <div class="logo">
            <a href="<?php echo home_url();?>">
              <img src="<?php echo $global['logo_header'];?>" alt="">
            </a>
          </div>
          <?php
          wp_nav_menu('main_menu');
          ?>
          <div class="menu-trigger">
            <span></span>
          </div>
        </div>
      </div>
    </header>
