<?php
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>

	<?php echo 123; ?>

	<?php
get_footer();
get_footer();
?>