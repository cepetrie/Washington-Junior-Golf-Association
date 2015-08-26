	<?php if ( is_active_sidebar( 'events' ) ) : ?>  

		<div id="events" class="sidebar">

		<?php dynamic_sidebar( 'events' ); ?>

	</div>

	<?php else : ?>
 <?php /*?> 
DEFAULT CODE: 
<?php */?>

      <h3>Events Calendar</h3>      
        <?php get_links_list(); ?>

	<?php endif; ?>



