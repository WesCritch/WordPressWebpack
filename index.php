<?php
get_header();
?>
<div>
   <h1>Hello</h1>
   <p>Peter</p>
   <h2 class="text-4xl italic text-blue-500">hello</h2>
   <p class="font-semibold">Hi</p>
   <h2>hi</h2>
   <p>test</p>
</div>

<div>
   <h1>Hello</h1>
   <p>Peter</p>
   <h2 class="text-4xl italic text-blue-500">hello</h2>
   <p class="font-semibold">Hi</p>
   <?php
   $args = [
      'posts_per_page' => 3,
      'order' => 'ASC',
   ];
   $posts = new WP_Query($args);
   while ($posts->have_posts()) : $posts->the_post();
   ?>
      <h2>hi</h2>
      <p>test</p>
   <?php endwhile; ?>
</div>

<?php
get_footer();
?>