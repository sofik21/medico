<?php 
/**
 * Template Name:Branch Page
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

<div class="py-24">
    <div class="container">
        <div class="max-w-1366 mx-auto grid lg:grid-cols-2 gap-8 ">
            <?php 
                $branchcard = new WP_Query([
                    'post_type' => 'branch',
                    'posts_per_page' => 6,
                ]);

                while($branchcard->have_posts()){
                    $branchcard->the_post();
                    get_template_part( 'template_parts/branchcard');
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>






<?php get_footer(); ?>