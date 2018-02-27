<?php
/**
 * The template for displaying 404 pages (Zugriff nicht erlaubt).
 *
 * @package WordPress
 * @subpackage FAU
 * @since FAU 1.0
 */

get_header();
get_template_part('template-parts/hero', 'error');  

?>

	<section id="content">
		<div class="container">
		
			<div class="row">
			    <div class="error-notice">
				<p class="hinweis">
					<strong><?php _e('Es tut uns leid.','fau'); ?></strong>
				</p>
				<p>
					<?php _e('Leider dürfen Sie auf diese Seite nicht zugreifen.','fau'); ?>
				</p>
			    </div>
			    <div class="error-image"></div>
			    <div class="error-search">
				    <?php get_template_part('template-parts/search', 'try');  ?>
			    </div>
				
			</div>

			<?php get_template_part('template-parts/search', 'helper');  ?>

		</div>
	    	<?php get_template_part('template-parts/footer', 'social'); ?>	
	</section>

<?php 
get_footer();
