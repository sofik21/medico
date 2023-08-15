<?php 
/*
*Index Template
*@package wpmedico

*/
get_header(); 
?>
<div class="bg-gray py-20 sm:py-24 relative">
    <?php get_template_part( 'template_parts/branchsvg'); ?>
    <div class="container">
        <h1 class="text-center">
            <?php single_post_title(); ?>
        </h1>
        <h2 class="text-center text-[40px]">
            <?php
                if( is_category() || is_taxonomy('success-type') ){
                    single_cat_title();
                }else{
                    single_post_title();
                }
            ?>
        </h2>
    </div>
</div>

<div class="">
    <div class="container">
        <div class="py-12 sm:py-16 lg:py-24">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php 
                    while( have_posts()){
                        the_post();
                        get_template_part("template_parts/postcard");
                    }
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