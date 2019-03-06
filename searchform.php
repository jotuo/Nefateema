<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'nefateema' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( ' &hellip;', 'placeholder', 'nefateema' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
    <button type="submit" class="search-submit"><i class="fas fa-search fa-1x"></i></button>
</form>