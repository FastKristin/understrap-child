<?php
/**
 * * The template for displaying all pages.
  *
  * This is the template that displays all pages by default.
  * Please note that this is the WordPress construct of pages
  * and that other 'pages' on your WordPress site will use a
  * different template.
 *
 */
get_header();

 ?>
<div id="content" class="site-content">
 <div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <div class="entry-content">
        <?php the_content(); ?>
      </div>

    <?php endwhile; ?>

    </main><!-- #main -->
  </div><!-- #primary -->
</div>


 <?php get_footer(); ?>
