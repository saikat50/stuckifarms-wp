<?php 

if (have_posts()){
	while (have_posts()){
		the_post();

        page_title_block('Vacation At Stucki Farms');

        load_include('vacation-here-breadcrumbs', ['page' => $post]);
    }
}