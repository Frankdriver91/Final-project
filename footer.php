<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package finalworktheme
 */

?>

	<footer id="colophon" class="site-footer">
	<section class="footer">
  <div class="logo-footer">
	<a class="logo" href="#"><img src="<?php echo get_template_directory_uri() . '/assets/images/TravelGooblack.png' ?>"  alt=""></a>
	<p>Book your trip in minute, get full
Control for much longer.
</p>
	</div>

	<div class="menu-footer">
	<a href="">
		<ul>
		<li>Company</li>
		<li>About</li>
		<li>Careers</li>
		<li>Mobile</li>
	</ul>
	</a>
	<a href="">
	<ul>
		<li>Contact</li>
		<li>Help/FAQ</li>
		<li>Press</li>
		<li>Affilates</li>
	</ul>
	</a>
	<a href="">
	<ul>
		<li>More</li>
		<li>Airlinefees</li>
		<li>Airline</li>
		<li>Low fare tips</li>
	</ul>
	</a>
	</div>

	<div class="links-footer">
<a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/Outbound.png' ?>"  alt=""></a>
	</div>
</section>



		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'finalworktheme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'All rights reserved@travelgoo.co' ), 'WordPress' );
				?>
			</a>
				
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
