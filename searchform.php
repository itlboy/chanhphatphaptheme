<section class="custom_search_form">
	<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
		<label>
			<input type="search" class="search-field" id="myInput" 
			placeholder="<?php echo esc_attr_x( 'Tìm kiếm', 'placeholder' ) ?>"
			value="<?php echo get_search_query() ?>" name="s"
			/>
		</label>
		<input type="submit" class="search-submit " value="" />
		<i class="icon-search glyphicon glyphicon-search"></i>
	</form>
</section>