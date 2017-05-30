<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Centro Cultural</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700" rel="stylesheet"> 
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/jquery.slides.min.js"></script>
    <script>
    $(function(){
      $("#slideshow").slidesjs({
        navigation: false,
        height: 300
      });
    });
  </script>
</head>
<body>
  <header>
    <div id="logo"><p>Centro cultural</p><span>Juventud Peronista</span></div>
    <nav>
      <?php wp_nav_menu(array(     
        'container' => 'false',     
        'items_wrap' => '<ul id="menu-top">%3$s</ul>',
        'theme_location' =>'menu',    
        )); 
      ?>
    </nav>
  </header>