<div class="owl-carousel"
    data-autoheight="true"
    data-items="1"
    data-loop="true"
    data-dots="true"
    data-animateout="fadeOut"
    data-smartSpeed="400"
    data-nav="true"
    data-autoplay="true" >
    <?php 
        while(have_rows('progerms_single_slider')){
            the_row();
    ?>
    <div class="relative">
        <div class="relative w-full h-[530px]"></div>
        <?php 
            $single_image = get_sub_field('single_slider_image');
            if( $single_image ) {
                echo wp_get_attachment_image( $single_image, 'full', false,[
                    'class' => 'absolute object-cover w-full h-full top-0 left-0 rounded-sm',
                ]);
            }
        ?>
    </div>
    <?php }
        wp_reset_postdata();
    ?>
</div>