<?php
/**
 * Template Name: About
  *
  *
 *
 */
get_header('play');

 ?>
<div id="content" class="site-content">
 <div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <div class="entry-content flex row justify-center">
        <?php the_content(); ?>
      </div>

    <?php endwhile; ?>

    <div class="wrapper">
      <div class="tax flex row justify-center">
        <?php
        $terms = get_terms([
            'taxonomy' => 'interests',
            'hide_empty' => false,
        ]);

        $terms_array = array();
        ?>
        <ul id="tax-nav">
          <li id="all-nav">All</li>
          <?php
            foreach($terms as $term) {
              $name = $term->name;
              $array . '_' . $name = [];

              echo "<li id='" . $term->name . "-nav'>" . $term->name . "</li>";
            }
            print_r($array_dance);
           ?>
        </ul>
      </div>
      <div class="tiles flex row">


        <?php

        $count = 1;
        // WP_Query arguments
        $args = array(
        	'post_type'              => array( 'about' ),
        	'post_status'            => array( 'published' ),
          'posts_per_page'        => -1,
        );

        // The Query
        $query = new WP_Query( $args );

        // The Loop
        if ( $query->have_posts() ) {
        	while ( $query->have_posts() ) {
        		$query->the_post();
            $post_id = get_the_ID();
            $terms = get_the_terms($post, 'interests');
            $terms_class = '';
            foreach($terms as $term) {
              $named = $term->name;
              $array_named = 'array' . $named;
              $terms_class .= " " . $term->name;
              //array_push($array_named, $post_id);
            }
            ?>

            <div id="<?php echo get_the_ID(); ?>" class="tile flex self <?php echo "item-" . $count; ?><?php echo $terms_class ?>">
              <div class="about-item">
                <h3><?php the_title(); ?></h3>
                <?php foreach($terms as $term) { ?>
                  <span class="tax-item"><?php echo $term->name; ?></span>
                <?php } ?>
                <p><?php the_content(); ?></p>
              </div>
            </div>

        <?php
          $count++;
          }
        } else {
        	// no posts found
        }

        // Restore original Post Data
        wp_reset_postdata();

        ?>


      </div>
    </div>

    <div id="trialForm">
      <h3 class="t-center">Formless Things</h3>
      <div class="elemental">
        <form action="" method="post">
          <label for="name">How may I call you?</label>
          <input type="text" id="name" name="name">
          <label for="phone">How may I reach you?</label>
          <input type="number" id="phone" name="phone">
          <label for="email">How may I address you?</label>
          <input type="email" id="email" name="email">
          <button type="submit">Submit</button>
        </form>
      </div>
    </div>

    </main><!-- #main -->
  </div><!-- #primary -->
</div>


 <?php get_footer(); ?>
