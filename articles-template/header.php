<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  
  <meta charset="utf-8">
  <title><?php wp_title() ?></title>
  <meta name="robots" content="index, follow, noodp, noydir">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/starting-template/public/assets/css/styles.css" >

</head>

<body>

  

  <header>
    <h1><?php the_title() ?></h1>
  </header> 

  <?php
      $main_menu = array(
      'theme_location' => 'main-menu',
      'container' => '',
      'items_wrap' => '<ul>%3$s</ul>'
      );
    ?>

  <nav><?php wp_nav_menu($main_menu); ?></nav>