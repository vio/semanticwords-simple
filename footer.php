	</div>

	<div id="footer">
		<p>
			<?php echo get_option( "blogname" ); ?> is proudly powered by <a href="http://wordpress.org/" rel="external">WordPress</a>. 
			SemanticWords Simple theme by <a href="http://semanticthoughts.com" rel="external">Viorel Cojocaru</a>.
		</p>

		<div class="subscribe">
			<h3>Subscribe:</h3>
			<ul>
				<li><a href="<?php bloginfo('rss2_url'); ?>" rel="feed">Entries (RSS)</a></li>
				<li><a href="<?php bloginfo('comments_rss2_url'); ?>" rel="feed">Comments (RSS)</a></li>
			</ul>
		</div>
		<!-- <p><?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. </p>-->
	</div>

	<?php wp_footer(); ?>

</body>
</html>
