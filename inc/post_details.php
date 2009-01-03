				<?php 
				/* 
					Post details
					Included by post_item on posts loop 
				*/
				?>
				
				<div class="details">
					<h3><?php _e('Post details')?></h3>
					<ul>
						<li>
							<h4><?php _e('Tags') ?></h4>
							<?php the_tags('<ul><li>', '</li><li>', '</li></ul>') ?>
						</li>
						<li>
							<h4><?php _e('Categories') ?></h4>
							<?php the_category(', ') ?>
						</li>
						<li>
							<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
						</li>
						<li>
							<?php edit_post_link('Edit', '', ''); ?>
						</li>
					</ul>
				</div>
