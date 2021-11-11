<?php

   function isDev() {
      if (preg_match('/\.local$/', $_SERVER['SERVER_NAME'])) {
         echo 'yesss';
         return true;
      }
      if (preg_match("/dev\.wizbit\.net/", $_SERVER['SERVER_NAME'])) {
         return true;
      }
      echo 'no';
      return false;

   }

   function css_styles() {
      wp_enqueue_style('main-css', get_theme_file_uri('./css/main.css'));
      if (isDev()) {
         wp_enqueue_style('tailwind-dev', get_theme_file_uri('./css/tailwind.css'));
      } else {
         wp_enqueue_style('tailwind-min', get_theme_file_uri('./css/tailwind.min.css'));
      }
   }

   add_action('wp_enqueue_scripts', 'css_styles');