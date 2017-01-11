<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
<?php 
  wp_nav_menu(array(
    'menu' => 'Main Navigation', 
    'container_id' => 'cssmenu', 
    'walker' => new CSS_Menu_Walker()
  )); 
?> 

    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/what-input.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/foundation.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
    <?php wp_footer(); ?>
    <script>
$( document ).ready(function() {
  $('#cssmenu').prepend('<div id="menu-button">Menu</div>');
  $('#cssmenu #menu-button').on('click', function(){
    var menu = $(this).next('ul');
    if (menu.hasClass('open')) {
      menu.removeClass('open');
    } else {
      menu.addClass('open');
    }
  });
});
    </script>
  </body>
</html>
