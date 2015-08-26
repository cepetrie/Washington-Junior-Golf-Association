<?php get_header(); ?>
<!-- Begin flexslider -->
<?php add_flexslider(); ?>
<div id="widgets">
<section class="widgets-item">
<a href="/membership" title="Learn more about membership">
<i class="fa fa-user fa-5x"></i>
</a>
<h3>Become a Member</h3>
<?php
$page_id = 183;
$page_data = get_page ( $page_id );
$page_link = get_permalink ($page_id);
$content = $page_data->post_excerpt;
$title = $page_data->post_title;
?>
<p>
<?php echo wp_trim_words($content, 35); ?>
</p>
<?php echo '<a href="'.$page_link.'" class="button">Join Now&nbsp;&raquo;</a>'
?>
</section>

<section class="widgets-item">
<a href="/tournaments" title="Learn more about tournament">
<i class="fa  fa-calendar fa-5x"></i>
</a>
<h3>Find a Tournament</h3>
<?php
$page_id = 186;
$page_data = get_page ( $page_id );
$page_link = get_permalink ($page_id);
$content = $page_data->post_excerpt;
$title = $page_data->post_title;
?>
<p>
<?php echo wp_trim_words($content, 35); ?>
</p>
<?php echo '<a href="'.$page_link.'" class="button">Schedule&nbsp;&raquo;</a>'; ?>
<!--apply_filters( 'the_content', $page_data->post_excerpt );
'<a href="'.$page_link.'" class="button">Schedule&nbsp;&raquo;</a>' -->
</section>

<section class="widgets-item">
<a href="/points" title="Learn more about points">
<i class="fa fa-trophy fa-5x"></i>
</a>
<h3>Where do you stand?</h3>
<?php
$page_id = 98;
$page_data = get_page ( $page_id );
$page_link = get_permalink ($page_id);
$content = $page_data->post_excerpt;
$title = $page_data->post_title;
?>
<p>
<?php echo wp_trim_words($content, 35); ?>
</p>
<?php echo '<a href="'.$page_link.'" class="button">Points&nbsp;&raquo;</a>';
?>
</section>
</div>
<!-- news section -->
<div id="news">
<div class="news-widgets">
<div id="latest">
<h3>Latest News</h3>
</div>
<?php rewind_posts(); //stop loop 1?> 
<?php query_posts('showposts=4'); // show 4 latest posts ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<article class="news-item" id="news-item-<?php the_ID(); ?>">
<div class="info">
<div class="dates">
<div class="month"><?php the_time('M') ?></div>
<div class="data"><?php the_time('j') ?></div>
</div><!-- end date div -->
<div class="headline">
<div class="head-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></div>
<div class="author">Authored by <?php the_author(); //get author name ?>| <?php the_category(', ') ?></div>
</div><!-- end headline div -->
</div><!-- end info div -->
<div class="im-news">
<?php /* if ( has_post_thumbnail($page->ID, 'feed') ) {
	the_post_thumbnail($page->ID, 'feed');
} */ ?>
<?php echo get_the_post_thumbnail($page->ID, 'feed-center'); ?>
 </div>
 <div class="text-content">
<p class="post-excerpt"><?php echo substr(get_the_excerpt(), 0,150); // get page or posting written excerpt with a character count ?>... <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Read More</a></p>  
</div>
</article>
<?php endwhile; ?>
<?php endif; ?>
<?php get_child_pages(); ?>
</div>

<div id="calendar">
	<?php get_sidebar('tertiary'); ?>
</div>
<p class="read-more-1"><a href="/blog-2">More News &raquo;</a></p>
</div>
</div> <!-- end middle -->

<!-- end news section -->
<?php get_footer(); ?>