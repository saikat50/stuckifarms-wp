<?php 

if (have_posts()){
	while (have_posts()){
		the_post();

        page_title_block('Buyer Tools');

        load_include('buyer-tools-breadcrumbs', ['page' => $post]);
    }
}