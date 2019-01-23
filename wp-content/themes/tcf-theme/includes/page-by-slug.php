<?php 
$map = [
    'cottages' => 'coming-soon',
    'cottages-court' => 'coming-soon',
    'villas' => 'coming-soon',
];

$slug = isset($map[$post->post_name]) ? $map[$post->post_name] : 'page-' . $post->post_name; 

if(has_include($slug)){
    load_include($slug);
}else{
    ?>
    <section class="section">
        <div class="container">
            <?php the_content($post->ID); ?>
        </div>
    </section>
    <?php 
}
