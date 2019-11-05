<?php 
get_header();
?>
<h1>search page</h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	
<?php 
endwhile;?>
<?php else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php
endif;
get_footer();
?>
