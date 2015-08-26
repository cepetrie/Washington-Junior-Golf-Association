<?php
/*
Theme Name: Washington Junior Golf Association
Author: 
CLEMENT, BENJAMIN
KARLE, BRIANNA
MOISEENKO, VICTORIA
MURPHY, MICHAEL
PETRIE, CHRISTINA 
Author URI: http://www.wjga.christinapetrie.com/
Description: Theme for Washington Junior Golf Association
Version: 1.0
*/


//Register my menu
register_nav_menus(array(
'main-menu' => __( 'Main' ),
'Footer-menu' => __('Footer-menu')
));


//Register sidebars
add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	/* Register the primary sidebar. */
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
	/* Register the 'secondary' sidebar. */
	register_sidebar(
		array(
			'id' => 'secondary',
			'name' => __( 'Secondary Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
    	/* Register the 'events' sidebar. */
	register_sidebar(
		array(
			'id' => 'events',
			'name' => __( 'Events Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
    
        	/* Register the 'blog' sidebar. */
	register_sidebar(
		array(
			'id' => 'blog',
			'name' => __( 'Blog Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
		/* Register the 'tertiary' sidebar. */
	register_sidebar(
		array(
			'id' => 'gallery',
			'name' => __( 'Gallery Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
		/* Register the 'archives' sidebar. */
	register_sidebar(
		array(
			'id' => 'archive',
			'name' => __( 'Archive Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);


	/* Register the 'events' sidebar. */
	register_sidebar(
		array(
			'id' => 'blog',
			'name' => __( 'Blog Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
    
	/* Register the 'tertiary' sidebar. */
	register_sidebar(
		array(
			'id' => 'tertiary',
			'name' => __( 'Tertiary Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
		/* Repeat register_sidebar() code for additional sidebars. */

}
//create page excerpts
add_post_type_support('page', 'excerpt');
//
//Get my title tag
function get_my_title_tag() {

	global $post; 
	
	if(is_front_page()) {//the front page
		bloginfo('description');
	}
	elseif (is_page() || is_single()) {//page and postings
		the_title(); //title of page posting
	}
	
	else {
		bloginfo('description'); 
	}
	if ($post->post_parent) { //if there is a parent
		echo ' | ';
		echo get_the_title($post->post_parent); 
		}
	echo ' | '; //separator with space
	bloginfo('name'); //site name
	echo ' | ';
	echo 'Seattle, WA';
	}

function get_seo() {
	$myPosting = get_post(186);
	$mySEO = $myPosting->post_content;
	echo $mySEO;
}

// Get Child Pages 
function get_child_pages() {
	
	global $post;
	
	rewind_posts(); // stop any previous loops 
	query_posts(array('post_type' => 'page', 'posts_per_page' => -1, 'post_status' => publish,'post_parent' => $post->ID,'order' => 'ASC','orderby' => 'menu_order')); // query and order child pages 
    
	while (have_posts()) : the_post(); 
	
		$childPermalink = get_permalink( $post->ID ); // post permalink
		$childID = $post->ID; // post id
		$childTitle = $post->post_title; // post title
		$childExcerpt = $post->post_excerpt; // post excerpt
        
		echo '<article id="page-excerpt-'.$childID.'" class="box-left">';
		echo '<div class="section-box">';
		echo '<p id="button"><a href="'.$childPermalink.'">'.$childTitle.'</a></p>';
		echo '</div>';
		echo '<div class="section-boxes">';
		echo '<p id>'.$childExcerpt.' <a href="'.$childPermalink.'">'; ?> <i class="fa fa-arrow-circle-right"></i> <?php '</a></p>';
		echo '</div>';
		echo '</article>';
        
	endwhile;
	
	// reset query
	wp_reset_query();
        
}
//

//i am using Mike's Sinkula flexslider
function add_flexslider() {    
    $attachments = get_children(array('post_parent' => get_the_ID(), 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'attachment', 'post_mime_type' => 'image','caption' => $attachment->post_excerpt, ));
    if ($attachments) {        
        echo '<div class="flexslider">';
        echo '<ul class="slides">';
    
 // create the list items for images with captions
    
    foreach ( $attachments as $attachment_id => $attachment ) { 
	
		$theImage = wp_get_attachment_image($attachment_id, 'flexslider');
		$theBlockquote = get_post_field('post_excerpt', $attachment->ID);
		$theLink = get_post_field('post_content', $attachment->ID);
	
        echo '<li>';
		
		if (is_page('Home')) { // use full size image with blockquote for home page
			
        	echo $theImage;
			echo '<blockquote class="home">'.$theBlockquote. '&nbsp;</blockquote>';
			echo '<a href="'.$theLink.'"><button class="home">Find out more&nbsp;&raquo;</button></a>';
			
		}
		
		else { // use large size image with caption for all other pages and postings
			
			echo wp_get_attachment_image($attachment_id, 'flexslider');
			echo '<p>';
			echo get_post_field('post_excerpt', $attachment->ID);
			echo '</p>';
			
		}
      
        echo '</li>';
        
    } ?>
    
    </ul>
    </div>
    <!-- End Slider -->
        
	<?php }// end see if images
	
} // end add flexslideradd_shortcode( 'flexslider', 'add_flexslider' ); 

//Enable Feauture images and post thumbnails
add_theme_support('post-thumbnails');
//

add_image_size( 'feed-center', 300, 150, array (left, top) ); // 300 pixels wide by 150 pixels tall, hard left center crop mode
add_image_size( 'feed', 300, 150, false ); // 300 pixels wide by 150 pixels tall, soft proportional crop mode
add_image_size( 'feed-flexs', 940, 380, false ); // 940 pixels wide by 380 pixels tall, soft proportional crop mode
add_image_size( 'feed-fl', 940, 380, array (left, top) ); // 300 pixels wide by 150 pixels tall, hard left center crop mode
add_image_size( 'flexslider', 940, 380, array (left, top) ); // 300 pixels wide by 150 pixels tall, hard left center crop mode

add_filter( 'image_size_names_choose', 'my_custom_sizes' );
function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'feed-center' => __( 'feed center' ),
		'feed' => __( 'feed' ),
		'feed-flexs' => __( 'feed flexslider' ),
		'feed-fl' => __( 'flexslider2' ),
		'flexslider' => __( 'Flexs' ),

    ) );
}



?>