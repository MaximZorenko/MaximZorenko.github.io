<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maxtem
 */

global $redux_demo;
?>
<footer class="iglesiass__footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-2">
				<div class="iglesiass__footer-logo">
					<a href="<?php echo home_url('/'); ?>">
					<?php if($redux_demo['footer_logo_logo']['url']){?>
						<img src="<?php echo esc_url($redux_demo['footer_logo_logo']['url']) ?>" alt="alt">
						<?}?>
					</a>
				</div>
			</div>
			<div class="col-lg-2">
				<h5>Infirmation</h5>
				<p>
					Home Page <br>
					404 Page <br>
					Information <br>
					Abaut
				</p>
			</div>
			<div class="col-lg-4">
				<h5>Contacts</h5>
				<p>
					<?php if($redux_demo['footer_contacts_phone']){ ?>
						<span><?php echo $redux_demo['footer_contacts_phone'] ?>
						</span>
					<?php } ?>
					<br>
					<?php if($redux_demo['footer_contacts_adress']){ ?>
						<span><?php echo $redux_demo['footer_contacts_adress'] ?>
						</span>
					<?php } ?>
					<br>
					<?php if($redux_demo['footer_contacts_email']){ ?>
						<a href="<?php echo $redux_demo['footer_contacts_email'] ?>"><?php echo $redux_demo['footer_contacts_email'] ?>
						</a>
					<?php } ?>
				</p>
			</div>
			<div class="col-lg-4">
				<div class="iglesiass__footer-icons">
					<?php if($redux_demo['footer_icons_vimoe_logo']['url']){ ?>
						<a href="#"><img src="<?php echo esc_url($redux_demo['footer_icons_vimoe_logo']['url'])?>" alt="alt"></a>
					<?php } ?>
					<?php if($redux_demo['footer_icons_instagram_logo']['url']){ ?>
						<a href="#"><img src="<?php echo esc_url($redux_demo['footer_icons_instagram_logo']['url'])?>" alt="alt"></a>
					<?php } ?>
					<?php if($redux_demo['footer_icons_twitter_logo']['url']){ ?>
						<a href="#"><img src="<?php echo esc_url($redux_demo['footer_icons_twitter_logo']['url'])?>" alt="alt"></a>
					<?php } ?>
					<?php if($redux_demo['footer_icons_facebook_logo']['url']){ ?>
						<a href="#"><img src="<?php echo esc_url($redux_demo['footer_icons_facebook_logo']['url'])?>" alt="alt"></a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
