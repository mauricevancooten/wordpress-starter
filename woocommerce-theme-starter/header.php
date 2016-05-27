<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php wp_title() ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?> 
  </head>

  <body>

    <header>

      <h1><?php echo get_bloginfo( 'name' ); ?></h1>

      <nav>
        <?php wp_nav_menu(); ?>
      </nav>
      
    </header>