<?php get_header() ?>
	
	<div id="content">

		<?php 
			if( have_posts()) :
			while (have_posts()) :  the_post(); 
		?>
		<h1><?php the_title() ?></h1>

		<?php sw_include( 'post_meta' ) ?>

		<?php the_content() ?>
		
		<?php sw_include( 'post_details' ) ?>

		<?php sw_include( 'add_comment' ) ?>
				
		<?php 
		endwhile; 
		else: 

			// If nothing to show, include ui/not_found.php
			sw_include( 'not_found' ); 
		
		endif; 
		?>
	</div>
	<hr />

	<?php get_sidebar() ?>
	
<?php get_footer() ?>
