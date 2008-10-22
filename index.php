<?php get_header() ?>
	
	<div id="content">	
		<h1>Latest posts</h1>
		
		<?php if( have_posts) : ?>
		<ol class="posts">	
			
			<?php 
			sw_timer_start(); 
			while (have_posts()) :  the_post();
				sw_include( 'post_item' );
			endwhile; 
			sw_timer_stop(); 
			?>

		</ol>

		<div class="post-nav">
			<h3>Posts navigation</h3>
			<ul>
				<li><?php next_posts_link('&laquo; Older Entries') ?></li>
				<li><?php previous_posts_link('Newer Entries &raquo;') ?></li>
			</ul>
		</div>
		
		<?php else: ?>
		
			<h2>Not Found</h2>
			<p>Sorry, but you are looking for something that isn't here.</p>

		<?php endif; ?>
		
	</div>
	<hr />

	<?php get_sidebar() ?>
	
<?php get_footer() ?>
