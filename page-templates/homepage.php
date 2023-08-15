<?php 
/**
 * Template Name: HomePage
 */
get_header();
?>



<!-- home slider sec -->

<div class="owl-carousel"
    data-autoheight="true"
    data-items="1"
    data-loop="true"
    data-dots="true"
    data-animateout="fadeOut"
    data-smartSpeed="400"
    data-nav="true"
    >

    <?php 
        while(have_rows('slider_all_items')){
            the_row();
     ?>
    <div class="home-slider-sec relative pt-80 pb-32">
        <?php 
            $image = get_sub_field('slider_items');
            if( $image ) {
                echo wp_get_attachment_image( $image, 'full', false,[
                    'class' => 'object-cover w-full h-full absolute bottom-0 left-0',
                ]);
            }
        ?>
        <div class="container">
            <div class="relative z-10">
                <div class="text-fild text-center text-white pt-16">
                    <?php echo get_sub_field('slider_text');  ?>
                </div>
            </div>
        </div>
    </div>
    <?php }
        wp_reset_postdata();
    ?>
</div>




 <!-- progrem section -->
 <div class="progrem-sec py-32 ">
    <div class="container">
        <div class="sec-title">
            <?php the_field('program_section_title'); ?>
            <img class="mx-auto" src="<?php echo get_template_directory_uri() . '/assets/img/heart.png'; ?>" />
            
        </div>
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
            <?php 
                $program_col = new WP_Query([
                    'post_type' => 'progerms',
                    'posts_per_page' => 4,
                ]);

                while($program_col->have_posts()){
                    $program_col->the_post();
                    get_template_part( 'template_parts/programcard');
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

<!-- Serivice section -->
<div class="service-sec pb-32">
    <div class="container">
        <div class="sec-title">
            <?php the_field('service_section_content');?>
            <img class="mx-auto" src="<?php echo get_template_directory_uri() . '/assets/img/heart.png'; ?>" /> 
        </div>
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
            <?php get_template_part( 'template_parts/servicecard'); ?>
        </div>
    </div>
</div>

<!-- Our Success section -->

<div class="our-success-sec pb-32 max-w-6xl mx-auto">
    <div class="container">
        <div class="sec-title">
            <?php the_field( 'our_success_title' ); ?>
            <img class="mx-auto" src="<?php echo get_template_directory_uri() . '/assets/img/heart.png'; ?>" />
        </div>
        <div class="flex gap-5 flex-wrap justify-center">
            <?php
                $categores = get_categories([
                    'taxonomy' => 'success-type'
                ]);
                foreach($categores as $category ){
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






<!-- Exam Section -->

<div class="exan-sec pb-32">
    <div class="container">
        <div class="grid lg:grid-cols-2 ">
            <div class="lg:mb-0 mb-12">
                <?php 
                    $image = get_field('exam_image');
                    if( $image ) {
                        echo wp_get_attachment_image( $image, 'full', false,[
                            'class' => 'mx-auto',
                        ]);
                    }
                ?>
            </div>
            <div class="max-w-xl flex flex-col gap-8">
                <div class="exam-text-sec">
                    <?php the_field( 'exam_text' ); ?>
                </div>
                <?php 
                    $link = get_field('enroll_button');
                ?>
                <div class="">
                    <a target="_blank" href="<?php echo $link['url'];?>" class="inline-block btn-one bg-secondery transition-all duration-300 text-white font-mukta">
                        <?php echo $link['title'];?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!------------- Recent Blog  ------------>

<div class="recen-blog">
    <div class="container">
        <div class="sec-title">
            <?php the_field('recent_blog_text'); ?>
            <img class="mx-auto" src="<?php echo get_template_directory_uri() . '/assets/img/heart.png'; ?>" />
        </div>
        <div class="py-12 sm:py-16 lg:py-6">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                    $recent_blog = new WP_Query([
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                    ]); 
                    while( $recent_blog->have_posts()){
                        $recent_blog->the_post();
                        get_template_part("template_parts/postcard");
                    }
                    wp_reset_postdata();
                ?>
            </div>
            <div class="">
                <?php 
                    the_posts_pagination([
                        'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"></path></svg>',
                        'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path></svg>'
                    ]);
                ?>
            </div>
        </div>
    </div>
</div>







<?php get_footer(); ?>