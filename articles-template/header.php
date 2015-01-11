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

  <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/articles-template/public/assets/css/styles.css" >

</head>

<body>

  

  <header>
    <h1><?php the_title() ?></h1>
  </header> 

  <nav>
      
    <ul>
      <li><a href="<?php echo site_url(); ?>">Home</a></li>
      <li><a href="<?php echo site_url(); ?>/sample-page">Sample Page</a></li>
      <li><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
    </ul>

  </nav>