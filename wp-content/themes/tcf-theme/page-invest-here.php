<?php 

if (have_posts()){
	while (have_posts()){
		the_post();

        page_title_block('Invest At Stucki Farms');

        load_include('invest-here-breadcrumbs', ['page' => $post]);
    }
}