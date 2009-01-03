			<?php global $post; ?>
			<div id="add-comment">
				<h2>Add comment</h2>
				
				<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
					<p>You must be 
					<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a>
					to post a comment.</p>
				<?php else: ?>
		
				<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
					
					<?php 
					// If user is logged in
					if ( $user_ID ) : 
					?>
						<p>
							Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. 
							<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a>
						</p>
					<?php else : ?>

						<div>
							<label>Name:</label>
							<input type="text" name="author" value="<?php echo $comment_author; ?>"/>
						</div>

						<div>
							<label>Email:</label>
							<input type="text" name="email" value="<?php echo $comment_author_email; ?>"/>
						</div>

						<div>
							<label>Website:</label>
							<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>"/>
						</div>

					<?php endif; ?>

					<div class="comment">
						<label>Message:</label>
						<textarea name="comment" cols="20" rows="10"></textarea>
					</div>

					<div class="actions">
						<button type="submit">Send message</button>
						<input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" />
					</div>
					
					<?php do_action('comment_form', $post->ID); ?>
					
				</form>

				<?php endif;?>

			</div>
