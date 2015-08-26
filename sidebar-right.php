<div id="left_col">
<?php if(is_page()) : ?>          
<nav id="nav_side">
<ul>
  <?php if ($post->post_parent) { //if page has a parent
wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); 
} else { //if page doesnt have a parent
wp_list_pages(array('child_of' => $post->ID, 'title_li' => __('')));
} ?>
</ul>
</nav>
</div> <!-- closed LEFT_DIV -->
<?php endif; ?> 
<?php if(!(is_page())) : ?>       
<?php endif; ?>
