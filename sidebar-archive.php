<div id="archives" class="archives"><!--START SIDEBAR PRIMARY-->

	<?php if ( is_active_sidebar( 'archive' ) ) : ?>
	<?php dynamic_sidebar( 'archive' ); ?>

	<?php else : ?>
    
     <div class="widget">
		<h3>Search</h3>
		<?php get_search_form(); ?>
	 </div>
        
        
     <div class="widget">	
		<h3>Categories</h3>
   		<ul>
      	<?php wp_list_categories('title_li='); ?>
   		</ul>
     </div>

	<?php endif; ?>

</div><!--END SIDEBAR PRIMARY-->


