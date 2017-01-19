<footer>
	<div class="container">
		<p>&copy; <?php bloginfo ( 'name' ); ?> <?php echo date('Y'); ?>.</p> <?php the_field('footer', 5); ?>
		<?php dynamic_sidebar('footer-adress'); ?>
		<?php dynamic_sidebar('opening-hours'); ?>
		<!--<p><span>© 2012. Stilog AB - Enjoy Your Business</span>
<span>Stilog har bredden och kompetensen att hjälpa till med allt inom företagsekonomi.</span></p>-->
	</div>
</footer>
<script type="text/javascript">
	$(document).ready(function(){
		$('.menu-toggle').click(function(){
			$('.site_nav').slideToggle();
			console.log('click');
		})

		$('.dropbtn').click(function(){
			$('.dropdown-content').slideToggle();
		})
	});
</script>
<?php wp_footer(); ?>
</body>
</html>