<?php 
/**
 * The main template file
 */
get_header();
$chilly_remove_banner_image = get_theme_mod('remove_banner_image',false);
if($chilly_remove_banner_image !=true)
{
			   get_template_part('index','slider');
		
}
spicepress_breadcrumbs();
?>
<!-- Blog & Sidebar Section -->
<div id="content">
<section class="blog-section">
	<div class="container">
		<div class="row">	
			<!--Blog Section-->
			<?php if ( class_exists( 'WooCommerce' ) ) {
					
					if( is_account_page() || is_cart() || is_checkout() ) {
						echo '<div class="col-md-'.( !is_active_sidebar( "woocommerce" ) ?"12" :"8" ).' col-sm-'.( !is_active_sidebar( "woocommerce" ) ?"12" :"7" ).' col-xs-12">'; 
					}
					else{ 
				
					echo '<div class="col-md-'.( !is_active_sidebar( "sidebar-1" ) ?"12" :"8" ).' col-sm-'.( !is_active_sidebar( "sidebar-1" ) ?"12" :"7" ).' col-xs-12">'; 
					
					}
					
				}
				else{ 
				
					echo '<div class="col-md-'.( !is_active_sidebar( "sidebar-1" ) ?"12" :"8" ).' col-sm-'.( !is_active_sidebar( "sidebar-1" ) ?"12" :"7" ).' col-xs-12">';
					
					}
					?>
				<?php
				if ( class_exists( 'WooCommerce' ) ) {
					
					if( is_account_page() || is_cart() || is_checkout() ) {
						
					while ( have_posts() ) : the_post();
					// Include the page
					get_template_part( 'content','page' );
					
					endwhile;	
				
				} 
				else
				{
					while ( have_posts() ) : the_post();
					// Include the page
					get_template_part( 'content','page' );
					
					
				endwhile;
					
				}
				
				}
				else 
				{
					while ( have_posts() ) : the_post();
					// Include the page
					get_template_part( 'content','page' );
					
					comments_template( '', true ); // show comments 
					
					
				endwhile;
				}
				
				// Start the Loop.
				?>
			</div>	
			<!--/Blog Section-->
			<?php if ( class_exists( 'WooCommerce' ) ) {
					
					if( is_account_page() || is_cart() || is_checkout() ) {
							get_sidebar('woocommerce'); 
					}
					else{ 
				
					get_sidebar(); 
					
					}
					
				}
					else{ 
				
					get_sidebar(); 
					
					}?>
		</div>
	</div>
</section>
</div>
<!-- /Blog & Sidebar Section -->

<?php get_footer(); ?>