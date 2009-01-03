<?php get_header() ?>
	
	<div id="content">	
		<h1><?php echo single_cat_title() ?></h1>

		<?php if( have_posts()) : ?>
			<ol class="posts">	
				
				<?php 
				while (have_posts()) :  the_post();
					// include ui/post_item.php
					sw_include( 'post_item' );
				endwhile; 
				?>

			</ol>

			<?php 
			// include ui/post_nav.php
			sw_include( 'post_nav' ); 
			?>

		<?php 
		else: 

			// If nothing to show, include ui/not_found.php
			sw_include( 'not_found' ); 
		
		endif; ?>
	</div>
	<hr />

	<?php get_sidebar() ?>
	
<?php get_footer() ?>
