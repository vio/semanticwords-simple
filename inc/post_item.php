			<?php
			/**
			 * Post item - used inside the loop
			 */
			?>
			<li>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Read more ');?>"><?php the_title() ?></a></h2>
				
				<?php sw_include( 'post_meta' )?>
				
				<div class="summary">
					<?php the_content( 'Read the rest of this entry &raquo;' ); ?>
				</div>

				<?php sw_include( 'post_details' )?>
			</li>
