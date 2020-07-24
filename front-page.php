<?php

/**
 * Custom front-page.php template
 *
 * Used to display the homepage of your
 * WordPress site.
 *
 * @package understrap
 */


get_header(); ?>

<?php
$banner = get_field('bckgrnd_image');
$banner_words = get_field('words_img_overlay');

$m_title = get_field('m_section_title');
$m_tag = get_field('m_section_tagline');
$m_img = get_field('m_section_image');
$m_tile = get_field('m_section_banner');

$ch_title = get_field('ch_section_title');
$ch_tag = get_field('ch_section_tagline');
$ch_img = get_field('ch_section_img');
$ch_tile = get_field('ch_banner_image');

?>


<!-- Hero Banner -->
<div id="hero-banner" class="container-fluid" style="background-image: url('<?php echo $banner['url']; ?>');">
	<div class="white-gradient"></div>
	<div class="white-block"></div>
	<!-- <img src="http://kf.local/wp-content/uploads/2017/03/Words_colour_scaled_1350.png" alt="words conjure worlds" /> -->

</div>
<div class="hero-text">
	<h1 class="hero">Words. <span class="wam">Words are magic.</span> <span class="wcw">Words conjure worlds.</span> <span class="beg">'In the beginning was the word...'</span> <span class="rem"> Remember?</span></h1>
</div>

<!-- Latest Posts -->
<div class="container-fluid blocks">
	<div class="row justify-content-center">
		<div class="col-12">
			<h2 class="text-center mb-4">Recent Writing</h2>
		</div>
	</div>
	<div class="row justify-content-center">
		<?php
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 3,
			'orderby' => 'date',
			'order' => 'DESC'
		);

		$recent = new WP_Query($args);

		if($recent->have_posts()) {
			while($recent->have_posts()) {
				$recent->the_post(); ?>

				<div class="col-12 col-sm-6 col-md-4">
					<a href="<?php the_permalink(); ?>">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title"><?php the_title(); ?></h3>
								<p class="card-subtitle"><?php the_date('j M Y'); ?></p>
							</div>
							<div class="card-body">
								<?php the_excerpt(); ?>
							</div>
						</div>
					</a>
				</div>


		<?php	}
		}
		?>
	</div>
</div>

<!-- Feature Row -->
<!--
<div class="container-fluid blocks">
	<div class="row justify-content-center">
		<div class="col-sm-6 col-md-5 col-xl-4">
			<div id="chronicles-home" style="background-image: url('<?php echo $ch_tile['url']; ?>');">
				<div class="overlay"></div>
				<a href="<?php echo get_site_url(); ?>/chronicles">
					<div class="home-box">
						<h2 class="home-name"><?php echo $ch_title; ?></h2>
						<h4 class="home-tagline"><?php echo $ch_tag; ?></h4>
					</div>
				</a>
			</div>
		</div>
		<div class="col-sm-6 col-md-5 col-xl-4">
			<div id="metaphor-home" style="background-image: url('<?php echo $m_tile['url']; ?>');">
				<div class="overlay"></div>
				<a href="<?php echo get_site_url(); ?>/metaphor">
					<div class="home-box">
						<h2 class="home-name"><?php echo $m_title; ?></h2>
						<h4 class="home-tagline"><?php echo $m_tag; ?></h4>
					</div>
				</a>
			</div>
		</div>
	</div>
</div> -->



<?php get_footer(); ?>
