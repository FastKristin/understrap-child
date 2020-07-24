<?php
/*
*
* Template Name: Dev Porfolio
*
*/

get_header();



?>

<div class="container-fluid">
 <div class="container my-3 mt-md-6">
   <div class="row">
     <div class="col-xs-12 col-sm-12">
     <h1 class="text-center mt-3 mt-md-5">
       <?php the_title(); ?>
     </h1>
     </div>
   </div>
 </div>
</div>

<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-12 col-md-10 col-xl-8">
      <?php the_content(); ?>
    </div>
  </div>
</div>


<div class="container mt-3 mt-md-5">
  <div class="row d-flex justify-content-center">
    <div class="col-12">
      <h2>Reaction Projects</h2>
    </div>
  </div>
  <div class="row d-flex justify-content-center">

      <?php

      $count = 1;
      // WP_Query arguments
      $args = array(
        'post_type'              => 'dev-projects',
        'tax_query'              => array(
          'relation' => 'AND',
          array(
            'taxonomy'         => 'project-types',
            'terms'            => 56,
          ),
        ),
      );

      // The Query
      $query = new WP_Query( $args );

      // The Loop
      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post();
          $post_id = get_the_ID();
          $link = get_field('project_link');
          $tagline = get_field('tagline');
          $descr = get_field('short_description');
          $terms = get_the_terms($post, 'project-types');
          $terms_class = '';
          foreach($terms as $term) {
            $named = $term->name;
            $array_named = 'array' . $named;
            $terms_class .= " " . $term->name;
            //array_push($array_named, $post_id);
          }
          ?>

          <div class="col-12 col-lg-6 mb-2">
            <div id="<?php echo get_the_ID(); ?>" class="card flex self <?php echo "item-" . $count; ?><?php echo $terms_class ?>">
              <div class="card-header project-item">
                <h3 class="card-title"><?php the_title(); ?></h3>
              </div>
              <div class="card-body">
                <h5 class="tagline"><?php echo $tagline; ?></h5>
                <p><?php the_content(); ?></p>
                <?php if(!empty($link)) { ?>
                  <a href="<?php echo $link['url']; ?>" target="_blank"><?php echo $link['title']; ?></a>
                <?php } ?>
              </div>
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

  <div class="container my-3 my-md-5">
    <div class="row d-flex justify-content-center">
      <div class="col-12">
        <h2>Personal Projects</h2>
      </div>
    </div>
    <div class="row d-flex justify-content-center">

    <?php

    $count = 1;
    // WP_Query arguments
    $args = array(
      'post_type'              => 'dev-projects',
      'tax_query'              => array(
        'relation' => 'AND',
        array(
          'taxonomy'         => 'project-types',
          'terms'            => 55,
        ),
      ),
    );

    // The Query
    $pers_query = new WP_Query( $args );

    // The Loop
    if ( $pers_query->have_posts() ) {
      while ( $pers_query->have_posts() ) {
        $pers_query->the_post();
        $post_id = get_the_ID();
        $link = get_field('project_link');
        $tagline = get_field('tagline');
        $descr = get_field('short_description');
        $terms = get_the_terms($post, 'project-types');
        $terms_class = '';
        foreach($terms as $term) {
          $named = $term->name;
          $array_named = 'array' . $named;
          $terms_class .= " " . $term->name;
          //array_push($array_named, $post_id);
        }
        ?>

        <div class="col-12 col-lg-6">
          <div id="<?php echo get_the_ID(); ?>" class="card flex self <?php echo "item-" . $count; ?><?php echo $terms_class ?>">
            <div class="card-header project-item">
              <h3 class="card-title"><?php the_title(); ?></h3>
            </div>
            <div class="card-body">
              <h5><?php echo $tagline; ?></h5>
              <p><?php the_content(); ?></p>
              <?php if(!empty($link)) { ?>
                <a href="<?php echo $link['url']; ?>" target="_blank"><?php echo $link['title']; ?></a>
              <?php } ?>
            </div>
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

<?php get_footer(); ?>
