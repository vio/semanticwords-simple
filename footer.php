	</div>

	<div id="footer">
		<p>
			<?php echo get_option( "blogname" ); ?> is proudly powered by <a href="http://wordpress.org/" rel="external">WordPress</a>. 
			Theme <a href="#" rel="external">SemanticWords</a>.
		</p>

		<div class="">
			<h3>Subscribe</h3>
			<ul>
				<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
				<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
			</ul>
		</div>
		<!-- <p><?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. </p>-->
	</div>

	<?php wp_footer(); ?>

</body>
</html>
