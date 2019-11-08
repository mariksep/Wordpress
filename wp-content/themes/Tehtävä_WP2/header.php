<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <meta charset ="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.1">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/css/fonts/foundation-icons.css " rel="stylesheet">
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class ="main-container">
    <header class="main-header">

               <div class="tunnus">
                    <a class="logo" href="<?php echo get_home_url(); ?>">Uppopallon naisten maajoukkue</a>
                    <?php get_sidebar();?>
               </div>
</div>
  <div class="jumbotron">
    <p>"Muistetaan oma peli. Ja pidetään hauskaa!"<br>
       Heli Koskinen, kapteeni</p>
   </div>
</header>