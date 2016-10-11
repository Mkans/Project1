<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Benevolent
 */

    if( !is_page_template( 'template-home.php' ) ) echo '</div></div></div>' ; //<!-- .row --><!-- #content --><!-- .container -->

?>
	<footer id="colophon" class="site-footer" role="contentinfo">

        <?php if( is_page_template( 'template-home.php' ) ) do_action( 'benevolent_promotional' ); ?>


        <?php if( is_active_sidebar( 'footer-one' ) || is_active_sidebar( 'footer-two' ) || is_active_sidebar( 'footer-three' ) || is_active_sidebar( 'footer-four' ) ){ ?>
        <div class="container">
			<div class="footer-t">
				<div class="row">
					<?php

                        if( is_active_sidebar( 'footer-one') ) dynamic_sidebar( 'footer-one' );

                        if( is_active_sidebar( 'footer-two') ) dynamic_sidebar( 'footer-two' );

                        if( is_active_sidebar( 'footer-three') ) dynamic_sidebar( 'footer-three' );

                        if( is_active_sidebar( 'footer-four' ) ) dynamic_sidebar( 'footer-four' );

                    ?>
				</div>
			</div>
		</div>
        <?php }

            do_action( 'benevolent_footer' );

        ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
