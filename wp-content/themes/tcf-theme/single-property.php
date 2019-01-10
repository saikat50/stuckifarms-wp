<?php
/*
 * CUSTOM POST TYPE TEMPLATE
 *
 * This is the custom post type post template. If you edit the post type name, you've got
 * to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is "register_post_type( 'bookmarks')",
 * then your single template should be single-bookmarks.php
 *
 * Be aware that you should rename 'custom_cat' and 'custom_tag' to the appropiate custom
 * category and taxonomy slugs, or this template will not finish to load properly.
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/

if(have_posts()){
	while(have_posts()){
		the_post(); 

		echo "<div class='section'>";
			echo "<div class='container'>";
				echo "<h1 class='heading-alt'>". get_the_title() ."</h1>";
			echo "</div>";

			load_include('property-slider', ['property' => $post]);

		echo "</div>";

		load_include('property-info', ['property' => $post]);
	}
}else{
	?>
	<div class="container">
		<h1><?php _e( 'Oops, Post Not Found!' ); ?></h1>
		<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.' ); ?></p>
		<p><?php _e( 'This is the error message in the single-custom_type.php template.' ); ?></p>
	</div>
	<?php 
}