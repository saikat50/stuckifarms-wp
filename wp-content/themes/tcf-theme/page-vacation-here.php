<?php 

/*
 Template Name: Vacation Here Page
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

if (have_posts()){
	while (have_posts()){
		the_post();

        page_title_block('Vacation At Stucki Farms');

        load_include('vacation-here-breadcrumbs', ['page' => $post]);

        ?>
        <div class="section">
            <div class="container">
                <?php the_content(); ?>
            </div>
        </div>
        <?php 
    }
}