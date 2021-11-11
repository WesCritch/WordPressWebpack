<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

   <!-- nav -->
   <div class="py-4 lg:py-0 bg-navy-900 lg:bg-navy-800">
      <div class="max-w-screen-xl px-6 mx-auto ">
         <?php wp_nav_menu(array('theme_location' => 'max_mega_menu_1')); ?>
      </div>
   </div>