<?php
/*
Template name: Produkter
*/

get_header();
?>

<section class="banner"class="parallax-window" data-iosFix="false" data-parallax="scroll" data-image-src="<?php the_post_thumbnail_url( 'full' ); ?>">
<div class="overlay"></div>
<div class="container">
	<div class="header-logo">


</div>
</div>


</section>

<section class="section-white single">
<div class="container-wrap">
	<div class="container">
		
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); ?>
			<h1>
				<?php the_title(); ?>			
			</h1>

			<div class="row">
				<article class="col-xs-12 produkter-content">
					<?php the_content(); ?>
				</article>
			</div>
			<?php
			}
		}
		?>

		<div class="row">
			<?php 
			$the_query = new WP_Query(array('post_type' => 'produkt', 'cat' => 3, 'post_per_page' => -1, 'order' => 'ASC'));
			if ( $the_query->have_posts() ) : ?>

				<h2>
					Eldningsolja
				</h2>

				<div class="product-wrapper">
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						
						<article class="col-sm-4 col-xs-6 product-container">
							<h3>
								<?php the_title(); ?>
							</h3>

							<?php the_content(); ?>
						</article>

						<?php 
					endwhile; 
					wp_reset_postdata(); ?>
				</div>
			<?php endif; ?>

			<?php 
			$the_query = new WP_Query(array('post_type' => 'produkt', 'cat' => 4, 'post_per_page' => -1, 'order' => 'ASC'));
			if ( $the_query->have_posts() ) : ?>

				<h2>
					Diesel
				</h2>

				<div class="product-wrapper">
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						
						<article class="col-sm-4 col-xs-6 product-container">
							<h3>
								<?php the_title(); ?>
							</h3>

							<?php the_content(); ?>
						</article>

						<?php 
					endwhile; 
					wp_reset_postdata(); ?>
				</div>
			<?php endif; ?>

			<?php 
			$the_query = new WP_Query(array('post_type' => 'produkt', 'cat' => 5, 'post_per_page' => -1, 'order' => 'ASC'));
			if ( $the_query->have_posts() ) : ?>

				<h2>
					Bunker
				</h2>

				<div class="product-wrapper">
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						
						<article class="col-sm-4 col-xs-6 product-container">
							<h3>
								<?php the_title(); ?>
							</h3>

							<?php the_content(); ?>
						</article>

						<?php 
					endwhile; 
					wp_reset_postdata(); ?>
				</div>
			<?php endif; ?>	

			<?php 
			$the_query = new WP_Query(array('post_type' => 'produkt', 'cat' => 6, 'post_per_page' => -1, 'order' => 'ASC'));
			if ( $the_query->have_posts() ) : ?>

				<h2>
					Smörjmedel
				</h2>

				<div class="product-wrapper">
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						
						<article class="col-sm-4 col-xs-6 product-container">
							<h3>
								<?php the_title(); ?>
							</h3>

							<?php the_content(); ?>
						</article>

						<?php 
					endwhile; 
					wp_reset_postdata(); ?>
				</div>
			<?php endif; ?>

			<?php 
			$the_query = new WP_Query(array('post_type' => 'produkt', 'cat' => 7, 'post_per_page' => -1, 'order' => 'ASC'));
			if ( $the_query->have_posts() ) : ?>

				<h2>
					Hyrtankar
				</h2>

				<div class="product-wrapper">
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						
						<article class="col-sm-4 col-xs-6 product-container">
							<h3>
								<?php the_title(); ?>
							</h3>

							<?php the_content(); ?>
						</article>

						<?php 
					endwhile; 
					wp_reset_postdata(); ?>
				</div>
			<?php endif; ?>									
		</div>
	</div>
	</div>
</section>
<?php get_footer(); ?>
