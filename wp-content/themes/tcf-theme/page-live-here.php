<?php
/*
 Template Name: Live Here Template
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
$live_here_page_id = 7;

// $terms = get_terms(array(
//     'taxonomy' => 'property_movein_cat',
//     'hide_empty' => false,
// ));

$liveHerePages = get_pages([
	'parent' => $live_here_page_id,
]);

if (have_posts()){
	while (have_posts()){
		the_post();
		$activePage = reset($liveHerePages);
		foreach($liveHerePages as $page){
			if($page->ID == get_the_ID()){
				$activePage = $page;
				break;
			}
		}

		page_title_block('Live at Stucki Farms');

		load_include('breadcrumbs-property', [
			'activePage' => $activePage,
			'liveHerePages' => $liveHerePages,
		]);

		load_include('archive-property', ['page' => $activePage]);
	}
}

?>


