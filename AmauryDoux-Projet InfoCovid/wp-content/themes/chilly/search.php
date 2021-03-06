<?php 
/**
 * Archive page template
 */
get_header();
$chilly_remove_banner_404_image = get_theme_mod('remove_banner_404_image',false);
if($chilly_remove_banner_404_image !=true)
{
get_template_part('index','slider');
}
spicepress_breadcrumbs(); ?>
<!-- Blog & Sidebar Section -->
<div id="content">
<section class="blog-section">
	<div class="container">
		<div class="row">	
			<!--Blog Section-->
			<div class="col-md-<?php echo ( !is_active_sidebar( 'sidebar-1' ) ? '12' :'8' ); ?> col-sm-<?php echo ( !is_active_sidebar( 'sidebar-1' ) ? '12' :'7' ); ?> col-xs-12">
				<?php 
				if ( have_posts() ) :
					// Start the Loop.
					while ( have_posts() ) : the_post();
						// Include the post format-specific template for the content.
						get_template_part( 'content','');
					endwhile;
					
					// Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
						'next_text'          => '<i class="fa fa-angle-double-right"></i>'
					) );
					
				else : ?>
				<h2><?php esc_html_e('Nothing found', 'chilly'); ?></h2>
				<p><?php esc_html_e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.','chilly'); ?></p>
				<?php endif; ?>
			</div>	
			<!--/Blog Section-->
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
</div>
<!-- /Blog & Sidebar Section -->
<?php get_footer(); ?>