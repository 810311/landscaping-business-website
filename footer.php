<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Landscaping
 */

?>

	<footer id="colophon" class="site-footer">


	<?php wp_nav_menu( 
		array( 
			'theme_location' => 'secondary', 
			'menu_id'        => 'secondary-menu',
			'container'		 =>  false
			
			) 
		  ); 
		?>
	
	<?php dynamic_sidebar('social-1');?>

	</footer><!-- #colophon -->


<?php wp_footer(); ?>


</div><!-- #page -->

</body>
</html>
