		<div id="comments">
			<h2><?php comments_number( 'No Comments', 'One Comment', '% Comments' );?></h2>
			<?php if( $comments) : ?>
			<ol>
				<?php foreach( $comments as $comment ):?>
				<li id="comment-<?php echo $comment->comment_ID ?>">

					<?php echo get_avatar( $comment, 32 ); ?>

					<h3><?php comment_author_link() ?> <?php _e('Says:') ?></h3>

					<?php 
					// if comment is moderated
					if ($comment->comment_approved == '0') : ?>
					<p class="moderation"><?php _e('Your comment is awaiting moderation.')?></p>
					<?php endif; ?>

					<div class="comment-meta">
						<h4>Comment meta</h4>
						<dl>
							<dt>Post date</dt>
								<dd><?php comment_date() ?></dd>
							<dt>Post time</dt>
								<dd><?php comment_time() ?></dd>
						</dl>
					</div>

					<div class="comment-content">
						<?php comment_text() ?>
					</div>
				</li>
				<?php endforeach; ?>
			</ol>
			<?php else : ?>

				<?php 
				// comments are open, but no comments yet
				if ( 'open' == $post->comment_status ) :
					// comments are closed 
				else: 
				?>
				<p><?php _e('Comments are closed.')?></p>
				<?php endif; ?>

			<?php endif; ?>
		</div>
