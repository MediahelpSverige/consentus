<?php
/*
Template name: kontakt
*/
get_header();
?>
<script src="<?php bloginfo( 'template_url' ); ?>/dist/js/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGCZgUR-m108imr_y_SsntCRvQ8MgHcP0&libraries=places&callback=initMap"
    async defer></script>
<div class="map-banner">
	<div id="map"></div>

<div class="container">
	<div class="header-logo">


</div>
</div>


</div>
<section class="section-white single">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-title"><?php the_field('page-title'); ?></h1>
				<div class="page-text"><?php the_field('page_text'); ?></div>
			</div>
			<div class="col-md-12">
					<div class="kontakt-info">
			<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						//
						// Post Content here
						the_content();
						//
					} // end while
				} // end if
			?>
		</div>
		<div class="employee-wrap">
				<?php $query8 = new WP_Query(array( 'post_type' => 'arbetare', 'post_per_page' => -1) );
				//print_r($query8);
				while ( $query8->have_posts() ) : $query8->the_post(); ?>
				<div class="coworker col-md-4 col-sm-4 col-xs-6">
					<div class="coworker-img" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>')">
					</div>
					<div class="coworker-content">
					<?php the_title('<h4 class="coworker-title">', '</h4>');  ?>
					<?php the_content();?>
				</div>
				</div>
				<?php endwhile; wp_reset_postdata();?>
				<div class="clearfix"></div>
			</div>

			</div>

			<div class="col-md-4">
        <div class="box-wrap">
          <h3 class="kontakt-title">Kontaktinformation</h3>
          <?php the_field('kontaktinformation'); ?>
        </div>
        <div class="box-wrap">
          <h3 class="kontakt-title">Post- och besöksadress</h3>
          <?php the_field('post_och_besoksadress'); ?>
        </div>
			</div>
		<div class="col-md-4">
      <div class="box-wrap">
        <h3 class="kontakt-title">Fakturaadress</h3>
        <?php the_field('fakturaadress'); ?>
      </div>
      		</div>
      <div class="col-md-4">
        <div class="box-wrap">
          <div class="form">
            <h3 class="kontakt-title">Kontaktformulär</h3>
            <?php echo do_shortcode(the_field('kontaktformular'));?>
          </div>
        </div>
      </div>

		</div>
	</div>
</section>
<?php get_footer(); ?>
