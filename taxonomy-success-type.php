<?php 
/**
 * Single Category Page Template
 * @package wpmedico
 * 
 */
 
 get_header();
 ?>
 

<div class="bg-gray py-20 sm:py-24 relative">
    <?php get_template_part( 'template_parts/branchsvg'); ?>
    <div class="container">
        <h1 class="text-center">
            <?php single_post_title(); ?>
        </h1>
    </div>
</div>


<?php 

    $query_object = get_queried_object();
    $taxonomy = $query_object->taxonomy;
    $term_id = $query_object->term_id;
    $image_id = get_field('catagory_image', $taxonomy . '_' . $term_id);
    
    //echo wp_get_attachment_image( $image_id, false );



?>


<div class="pt-12">
    <div class="container">
        <div class="flex gap-5 flex-wrap justify-center ">
            <?php
                $terms = get_terms([
                    'taxonomy' => 'success-type'
                ]);
                var_dump($terms);

                foreach($terms as $category ){
            ?>
                <div class="flex items-center gap-3 text-xl w-[127px] h-[64px] bg-slate justify-center rounded-xl hover:bg-secondery hover:text-white transition-all duration-300">
                    <i class="hover:text-white fa-solid fa-star"></i>
                    <a class="font-mukta" href="<?php echo get_category_link($category->term_id );?>">
                        <?php 
                            echo $category->name;
                        ?>
                    </a>
                </div>
            <?php 
                }
            ?>
        </div>
    </div>
</div>

<div class="pt-12 pb-24">
    <div class="container">
        <div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2 pt-12">
            <?php 
                $program_col = new WP_Query([
                    'post_type' => 'success',
                    'posts_per_page' => 3,
                ]);

                while($program_col->have_posts()){
                    $program_col->the_post();
                    get_template_part( 'template_parts/successcard');
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>





<?php get_footer(); ?>