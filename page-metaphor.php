<?php
/*
*
* Template Name: Metaphor
*
*/
get_header();

$m_title = get_field('m_section_title');
$m_tag = get_field('m_section_tagline');
$m_img = get_field('m_section_banner');
$m_tile = get_field('m_section_image');

?>

<div id="metaphor-banner" class="container-fluid banner-img overlay" style="background-image:url('<?php echo $m_img['url']; ?>');">
 	<div class="overlay"></div>
 	<div class="container">
 		<div class="row">
 			<div class="col-xs-12 col-sm-12">
 			<h1 class="page-title">
 				<?php echo $m_title; ?>
 				<span class="page-subtitle"><?php echo $m_tag; ?></span>
 			</h1>
 			</div>
 		</div>
 	</div>
 </div>

 <div class="container">
 	<div class="row">
 		<div class="col-xs-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
		 	<?php

		 		$query = new WP_Query( array( 'cat' => 45 ) );

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
