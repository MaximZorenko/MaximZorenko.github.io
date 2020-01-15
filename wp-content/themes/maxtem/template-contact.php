<?php
/*
**Template name: Page Contact
*/
?>
<?php get_header(); ?>
<?php if(have_posts())	:	while(have_posts())	:	the_post(); ?>
<section class="iglesiass__page--Contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="col-md-12">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="iglesiass__page--Contact-info">
			<div class="row">
				<div class="col-md-4">
					<span class="page--Contact-phone">
						<i class="fas fa-phone"></i>
						<?php if(get_post_meta($post->ID,'max_contact_phone',true)){
							echo esc_attr(get_post_meta($post->ID, 'max_contact_phone', true));
						}?>

					</span>
				</div>
				<div class="col-md-4">
					<span class="page--Contact-adress">
						<i class="fas fa-globe-europe"></i>
						<?php if(get_post_meta($post->ID,'max_contact_address',true)){
							echo esc_attr(get_post_meta($post->ID, 'max_contact_address', true));
						}?>
					</span>
				</div>
				<div class="col-md-4">
					<span class="page--Contact-email">
						<?php if(get_post_meta($post->ID,'max_contact_email',true)){?>
							<a href="<?php echo esc_attr(get_post_meta($post->ID, 'max_contact_email', true)); ?>">
							<?php echo esc_attr(get_post_meta($post->ID, 'max_contact_email', true)); ?>
							</a>	
						<?}?>	
					</span>
				</div>
			</div>
		</div>
		<div class="iglesiass__page--Contact-form">
			<div class="row">
				<div class="col-md-12">
					<h2>Contact form</h2>
					<?php echo do_shortcode('[contact-form-7 id="20" title="Contact 1"]');?>
				</div>
			</div>
		</div>
		


	</div>
	
	
</section>




<?php endwhile; endif; ?>
<?php get_footer(); ?> 
