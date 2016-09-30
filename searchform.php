<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
	<input type="text" name="s" id="s" value="<?php the_search_query(); ?>" />
	<input type="submit" value="Pretraga" id="searchsubmit" />
</form>