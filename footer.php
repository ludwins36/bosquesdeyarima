<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>


		</div><!-- #content -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			
				<?php
				
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				get_template_part( 'template-parts/footer/site', 'info' );
				?>

		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->

	<!-- Modal Sppinner -->
		<div class="modal fullscreen-modal fade" id="modalSpinner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-body">
		        <div class="load">
		           <div class="dot"></div>
		           <div class="outline"><span></span></div>
		        </div>		        
		      </div>
		    </div>
		  </div>
		</div>
	<!-- /.modal-dialog -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
