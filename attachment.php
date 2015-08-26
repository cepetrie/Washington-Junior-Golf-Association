<?php get_header(); ?>

<div id="main">                
<!-- START CONTENT -->
<div id="content" class="attachment">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php $attachment_link = get_the_attachment_link($post->ID, true, array(523, 1000)); ?>
<?php $_post = &get_post($post->ID); $classname = ($_post->iconsize[0] <= 50 ? 'small' : '') . 'attachment'; ?>
		<div class="post" id="post-<?php the_ID(); ?>">
				<p class="<?php echo $classname; ?>"><?php echo $attachment_link; ?><?php ?></p>
				
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
                
                <nav id="nav-image">
                    <p class="alignleft"><?php previous_image_link( false, '&laquo; Previous Image' ); ?></p>
                    <p class="alignright"><?php next_image_link( false, 'Next Image &raquo;' ); ?></p>
                </nav>
				
		</div>      
	
	<?php endwhile; else: ?>
		<p>Sorry, no attachments available.</p>
	<?php endif; ?>
</div><!-- END CONTENT -->

<!-- START SIDEBAR -->


</div><!-- END MAIN -->


<!-- END SIDEBAR -->

<?php get_footer(); ?>
