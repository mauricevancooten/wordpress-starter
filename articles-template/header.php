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
      
    </header> 

      <nav class="site-navigation">
          <?php wp_nav_menu(array(
            'theme_location' => 'main-menu', 
            'container' => false,
            'menu_id' => false,
            'items_wrap' => '<ul>%3$s</ul>'
            )
          ); ?>
      </nav>