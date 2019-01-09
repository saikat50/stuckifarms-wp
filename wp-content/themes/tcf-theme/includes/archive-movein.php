<section class="section">
    <div class="container">
        <h2 class="heading-alt">Find the perfect home</h2>

        <?php 
        $category = get_field('page_category', $page->ID);
        $posts_per_page = 6;
        $posts_per_row = 3;

        $the_query = new WP_Query([
            'post_type' => 'property_movein',
            'posts_per_page' => $posts_per_page, 
            'paged' => get_query_var('paged'),
            'tax_query' => array(                     //(array) - use taxonomy parameters (available with Version 3.1).
                'relation' => 'AND',                      //(string) - Possible values are 'AND' or 'OR' and is the equivalent of running a JOIN for each taxonomy
                array(
                    'taxonomy' => 'property_movein_cat',                //(string) - Taxonomy.
                    'field' => 'id',                    //(string) - Select taxonomy term by ('id' or 'slug')
                    'terms' => array( $category->term_id ),    //(int/string/array) - Taxonomy term(s).
                    'include_children' => true,           //(bool) - Whether or not to include children for hierarchical taxonomies. Defaults to true.
                    'operator' => 'IN'                    //(string) - Operator to test. Possible values are 'IN', 'NOT IN', 'AND'.
                ),    
            ),
        ]);

        if ( $the_query->have_posts() ) {
            $count = 0;
            echo "<div class='row'>";
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                
                echo "<div class='col-lg-4'>";
                    load_include('property-movein', ['property' => $post]);
                echo "</div>";

                $count++;
                if( strpos($count/$posts_per_row, '.') === false){
                    echo "<div class='w-100 mb-4'></div>";
                }
            }
            echo "</div>";

            if($the_query->found_posts > $posts_per_page){
               tcf_page_navi($the_query);
            }
        }else{
            echo "<div class='alert alert-danger'>No Posts Found</div>";
        }
        wp_reset_postdata();
        ?>
    </div>
</section>