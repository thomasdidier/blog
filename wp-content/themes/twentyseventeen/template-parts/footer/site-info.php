<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyseventeen' ) ); ?>" class="imprint">
		<?php printf( __( 'Proudly powered by %s', 'twentyseventeen' ), 'WordPress' ); ?>
	</a>
	<ul class="ion-icon">
		<li><a href="#"><ion-icon class="icon" name="logo-github"></ion-icon></a></li>
		<li><a href="#"><ion-icon class="icon" name="logo-twitter"></ion-icon></a></li>
		<li><a href="#"><ion-icon class="icon" name="logo-facebook"></ion-icon></a></li>
		<li><a href="#"><ion-icon class="icon" name="logo-linkedin"></ion-icon></a></li>
	</ul>
</div><!-- .site-info -->
