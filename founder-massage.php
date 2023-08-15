<?php 
/**
 
 * Template Name:Founder & CEO Page 
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
        <div class="grid grid-cols-2 gap-6 mt-24">
            <?php 
                $massage = new WP_Query([
                    'post_type' => 'page',
                    'posts_per_page' => -1,
                ]);

                while($massage->have_posts()){
                    $massage->the_post();
                    get_template_part( 'template_parts/founder-massage-card');
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>


















<?php get_footer(); ?>