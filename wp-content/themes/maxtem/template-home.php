<?php 
/*
**Template name: Page-Home
*/
?>
<?php get_header(); ?>



<main class="iglesiass__main">
	<div class="wow bounceInUp">
  	Hellow Reveal Here
  </div>
	<div class="iglesiass__slide">
		<section class="iglesiass__slider--item">
			<?php
				echo do_shortcode('[smartslider3 slider=2]');//Slider
			?>
		</section>
		<section class="iglesiass__slider--item">
			<?php
				echo do_shortcode('[smartslider3 slider=3]');
			?>
		</section>
	</div>
</main>




<?php get_footer(); ?>