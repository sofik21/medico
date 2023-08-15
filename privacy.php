<?php 
/**
 
 * Template Name:Privacy & Policy  
 * @package wpmedico
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


<div class="">
    <div class="container">
        <?php 
            $privacy = new WP_Query([
                'post_type' => 'page',
                'posts_per_page' => 1,
            ]);
            while($privacy->have_posts()){
                $privacy->the_post();
                get_template_part( 'template_parts/privacycard' );
            } 
            wp_reset_postdata(); 
        ?>
    </div>
</div>

<?php get_footer(); ?>