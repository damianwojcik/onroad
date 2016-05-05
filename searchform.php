
<form role="search" method="get" class="searchbox-toggled" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					
	<input type="search" placeholder="Wpisz wyszukiwaną frazę..." name="search" value="<?php echo get_search_query() ?>" >

	<button type="submit" class="searchbox-toggled-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>"></button>

</form>
