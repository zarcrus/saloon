<?php
/*
Template Name: Regular Page without Sidebar
*/
?>
<?php get_header(); ?>

	<?php get_template_part( 'titlearea' ); ?>
    
    <?php get_template_part( 'breadcrumbs' ); ?>
    
    <div class="main-content">
    	<div class="container">
    		<div class="row">
    			
    			<div class="span12">
    				<div class="row">
    					
    					<?php if ( have_posts() ) :
								the_post();
						?>
    					<div class="span12">
    					    <?php
                               $subtitle = get_post_meta( get_the_ID(), 'subtitle', true );
                               if( strlen( $subtitle ) ) : ?> 
    						<div class="lined">
		    					<h2><?php the_title(); ?></h2>
		    					<?php
									if ( ! empty( $subtitle ) ) :
		    					?>
		    					<h5><?php echo $subtitle; ?></h5>
		    					<?php endif; ?>
		    					<span class="bolded-line"></span>
		    				</div>
		    				<?php endif; ?> 
		    				<?php the_content(); ?>
    					</div><!-- /service -->
    					
    					<div class="span12">
		    				<div class="divide-line">
		    					<div class="icon icons-<?php echo $content_divider; ?>"></div>
		    				</div>
		    			</div>
		    			
		    			<?php else : ?>
		    				<p><?php _e( 'Page not found' , 'proteusthemes'); ?></p>
	    				<?php endif; ?>
    					
    				</div>
    			</div>
    			
    		</div><!-- / -->
    	</div><!-- /container -->
    </div>

<?php get_footer(); ?>
