<?php
   function css_styles() {
      wp_enqueue_style('main-css', get_theme_file_uri('css/main.css'));
   }

   add_action('wp_enqueue_scripts', 'css_styles');