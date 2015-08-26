<div id="gallery-sidebar" class="gallery-sidebar"><!--START SIDEBAR PRIMARY-->

	<?php if ( is_active_sidebar( 'gallery' ) ) : ?>
	<?php dynamic_sidebar( 'gallery' ); ?>

	<?php else : ?>
            
     <div class="widget">
		<h3>Search</h3>
		<?php get_search_form(); ?>
	 </div>
        
        

	<?php endif; ?>

</div><!--END SIDEBAR PRIMARY-->


