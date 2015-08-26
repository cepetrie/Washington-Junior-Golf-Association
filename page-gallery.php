<?php /*Template Name: page-gallery.php*/ ?>
<?php get_header(); ?>


<div id="gallery">                    
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<h2><?php the_title(); ?></h2>
        
		<?php if ( has_post_thumbnail() ) {// check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail();
        } ?>
		<?php the_content(); ?>
 
	<?php endwhile; ?>
	<?php endif; ?>   
 </div>
<nav class="post-nav">
            <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
            <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
		</nav>
        
<?php get_sidebar( 'secondary' ); ?>



<!-- END SIDEBAR -->

<?php get_footer(); ?>