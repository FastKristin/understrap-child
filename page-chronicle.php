<?php
/*
*
* Template Name: Chronicle
*
*/

get_header();

$ch_title = get_field('ch_section_title');
$ch_tag = get_field('ch_section_tagline');
$ch_img = get_field('ch_banner_image');
$ch_tile = get_field('ch_section_img');

 ?>

 <div id="chronicles-banner" class="container-fluid banner-img overlay" style="background-image:url('<?php echo $ch_img['url']; ?>');">
  	<div class="overlay"></div>
 	<div class="container">
 		<div class="row">
 			<div class="col-xs-12 col-sm-12">
 			<h1 class="page-title">
 				<?php echo $ch_title; ?>
 				<span class="page-subtitle"><?php echo $ch_tag; ?></span>
 			</h1>
 			</div>
 		</div>
 	</div>
 </div>

 <div class="container">
 	<div class="row">
 		<div class="col-xs-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">

		 	<?php

		 		$query = new WP_Query( array( 'cat' => 44 ) );

		 		if ($query->have_posts()) {
		 			while($query->have_posts()) {
		 				$query->the_post();
		 				?>
		 				<div class="post-block">
		 				<h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		 				<?php the_content(); ?>
		 				</div>

		 				<?php

			 			}
			 		}

			 	 ?>
		</div>
 	</div>
 </div>

 <?php get_footer(); ?>
