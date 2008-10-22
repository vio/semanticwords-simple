	<div id="aside">
		
		<div class="pages">
			<h3>Pages</h3>
			<?php wp_list_pages('title_li=' ); ?>
		</div>

		<div class="about">
			<h3>About</h3>
			<p>Compellingly leverage existing premier outsourcing without distinctive processes.
			Quickly empower enterprise-wide experiences before high-payoff deliverables.</p>
			<a href="#">read more</a>
		</div>

		<form method="get" action="<?php bloginfo('url'); ?>/" class="search">
			<fieldset>
				<legend>Search</legend>
				<label><?php _e( "Search for:" ); ?></label>
				<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
				<button type="submit"><?php _e( "Search" ) ?></button>
			</fieldset>
		</form>

		<div class="categories">
			<h3>categories</h3>
			<?php wp_list_categories('show_count=1&title_li='); ?>
		</div>

		<div class="archives">
			<h3>Archives</h3>
			<ol>
				<?php wp_get_archives('type=monthly'); ?>
			</ol>
		</div>

		<div class="links">
			<h3>Links</h3>
			<?php wp_list_bookmarks( "title_li=&categorize=0" ); ?>
		</div>

		<div class="meta">
			<h3>Meta</h3>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
				<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
				<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
				<?php wp_meta(); ?>
			</ul>
		</div>
		
		
	</div>
	<hr />
