		<?php
		global $paged,  $wp_query;

		// check if we have pages. Navigation will be show only if we have more than two pages
		if( $wp_query->max_num_pages > 1 ) :
		?>
		<div class="post-nav">
			<h3>Posts navigation</h3>
			<?php posts_nav_link(); ?>
			<ul>
				<li><?php next_posts_link('&laquo; Older Entries') ?></li>
				<li><?php previous_posts_link('Newer Entries &raquo;') ?></li>
			</ul>
		</div>
		<?php endif; ?>
