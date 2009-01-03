				<?php 
				/* 
					Post meta 
					Included by post_item on posts loop 
				*/
				?>
				
				<div class="meta">
					<h3><?php _e('Post meta')?></h3>
					<dl>
						<dt><?php _e('Posted on') ?></dt>
							<dd title="<?php sw_the_time_ddp()?>">
								<?php sw_the_time() ?>
							</dd>
						<dt><?php _e('Posted by')?></dt>
							<dd><?php the_author() ?></dd>
					</dl>
				</div>

