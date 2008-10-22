			<?php
			/*
			 * Post item - is used inside posts loop
			*/
			
			$_title = the_title( '', '', false );
			$_link	= get_permalink( $post->ID );
			
			?>
			<li>
				<h2>
					<a href="<?php echo $_link ?>" rel="bookmark" title="<?php _e('Read more about '); echo '\''.$_title.'\''?>"><?php echo $_title ?></a>
				</h2>

				<p class="date"><?php _e( 'Posted on' ) ?> <?php the_time('F jS, Y') ?> by <?php the_author() ?> </p>

				<?php the_content('Read the rest of this entry &raquo;'); ?>

				<div class="details">
					<h3>Post details</h3>
					<ul>
						<li>
							<h4>Tags</h4>
							<?php the_tags('', ', ', '<br />'); ?>
						</li>
						<li>
							<h4>Posted in</h4>
							<?php the_category(', ') ?>
						</li>
						<li><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></li>
						<li><?php edit_post_link('Edit', '', ''); ?></li>
					</ul>
				</div>
			</li>
