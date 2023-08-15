<?php 
/**
 
 * Template Name:About Us 
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


<div class="about-us">
    <div class="container">
        <?php 
            $about = new WP_Query([
                'post_type' => 'page',
                'posts_per_page' => 1,
            ]);
            while($about->have_posts()){
                $about->the_post();
                get_template_part( 'template_parts/aboutcard' );
            } 
            wp_reset_postdata(); 
        ?>
    </div>
</div>

<?php get_footer(); ?>