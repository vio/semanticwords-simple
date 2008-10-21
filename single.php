<?php get_header() ?>
	
	<div id="content">	
		
		<?php if( have_posts) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></a></h1>

			<p>Posted on <?php the_time('F jS, Y') ?> by <?php the_author() ?> </p>

			<?php the_content('Read the rest of this entry &raquo;'); ?>

			<div class="metadata">
				<h3>Post metadata</h3>
				<ul>
					<li>
						<h4>Tags</h4>
						<?php the_tags('Tags: ', ', ', '<br />'); ?>
					</li>
					<li>
						<h4>Posted in</h4>
						<?php the_category(', ') ?>
					</li>
					<li><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></li>
					<li><?php edit_post_link('Edit', '', ''); ?></li>
				</ul>
			</div>

			<?php endwhile; ?>

		<?php else: ?>
		
			<h2>Not Found</h2>
			<p>Sorry, but you are looking for something that isn't here.</p>

		<?php endif; ?>
		
	</div>
	<hr />

	<?php get_sidebar() ?>
	
<?php get_footer() ?>
