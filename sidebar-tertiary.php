<div id="tertiary" class="teriary"><!--START SIDEBAR PRIMARY-->

	<?php if ( is_active_sidebar( 'tertiary' ) ) : ?>
	<?php dynamic_sidebar( 'tertiary' ); ?>

	<?php else : ?>
    
     <div class="widget">
<ul>
<?php wp_get_archives('type=monthly'); ?>
</ul>	
 </div>
        
        
	<?php endif; ?>

</div><!--END SIDEBAR PRIMARY-->


