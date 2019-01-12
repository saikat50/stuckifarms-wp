<?php
/*
 Template Name: Custom Made Homess
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
        page_title_block('Live at Stucki Farms');

		load_include('property-breadcrumb', ['page' => $post]);

		?>
        <section class="section">
            <div class="container">
                <h1 class="heading-alt">
                    <?php the_field('page_subheading'); ?>
                </h1>
                <br>
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title(); ?>">
                    </div>
                    <div class="col-lg-6">
                        <div class="big-text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>

                <div class="property-buttons">
                    <a href="" class="btn btn-link btn-arrow">Button</a>
                    <a href="" class="btn btn-link btn-arrow">Button</a>
                    <a href="" class="btn btn-link btn-arrow">Button</a>
                    <a href="" class="btn btn-link btn-arrow">Button</a>
                    <a href="" class="btn btn-link btn-arrow">Button</a>
                    <a href="" class="btn btn-link btn-arrow">Button</a>
                    <a href="" class="btn btn-link btn-arrow">Button</a>
                    <a href="" class="btn btn-link btn-arrow">Button</a>
                    <a href="" class="btn btn-link btn-arrow">Button</a>
                    <a href="" class="btn btn-link btn-arrow">Button</a>
                </div>
            </div>
        </section>
        <?php
    } 
    
}
