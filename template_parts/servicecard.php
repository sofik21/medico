<div class="serivice-sec-card bg-gray hover:shadow-2xl rounded-[20px] p-10 flex flex-col gap-8">
    <?php the_field('services_col_one'); ?>
</div>
<div class="bg-gray hover:shadow-2xl rounded-[20px] p-16 ">
    <img class="mx-auto" src="<?php echo get_template_directory_uri() . '/assets/img/pdf.png'; ?>" />
    <h4 class="my-9">
        <?php the_field('services_col_two'); ?>
    </h4>
    <?php 
        $file = get_field('service_col2_file');
    ?>
    <button>
        <a target="_blank" href="<?php echo $file['url']; ?>" class="btn-one hover:text-white hover:bg-secondery transition-all duration-300 font-mukta"><?php echo esc_html__( 'Download PDF', 'wpmedico' ) ?></a>
    </button>
</div>
<div class="bg-gray hover:shadow-2xl rounded-[20px] p-16 ">
    <img class="mx-auto" src="<?php echo get_template_directory_uri() . '/assets/img/pdf.png'; ?>" />
    <h4 class="my-9">
        <?php the_field('services_col_three'); ?>
    </h4>
    <?php 
        $filetwo = get_field('coloumn_three_file');
    ?>
    <button>
        <a target="_blank" href="<?php echo $filetwo['url']; ?>" class="btn-one hover:text-white hover:bg-secondery transition-all duration-300 font-mukta"><?php echo esc_html__( 'Download PDF', 'wpmedico' ) ?></a></a>
    </button>
</div>
<div class="relative group overflow-hidden rounded-[20px]">
    <div class=" bg-linear h-full w-full absolute object-cover z-10 left-0 bottom-0 rounded-[20px]"></div>
    <?php 
        $image = get_field('services_col_four');
        if( $image ) {
            echo wp_get_attachment_image( $image, 'medium', false,[
                'class' => 'group-hover:scale-110 absolute object-cover h-full w-full rounded-[20px] transition-all duration-500',
            ]);
        }
    ?>
    <div class=" z-30 absolute bottom-[15%] -translate-x-1/2 left-1/2">
        <div class="flex gap-3 items-center">
            <a href="<?php the_field('you_tube_url'); ?>">
                <i class="text-red-600 text-4xl fa-brands fa-youtube"></i>
            </a>
            <h4 class="font-semibold text-white font-mukta">
                <a href="<?php the_field('you_tube_url'); ?>">
                    <?php echo esc_html__( 'Medico', 'wpmedico' ); ?>
                </a>
            </h4>
        </div>
        <a target="_blank" href="<?php the_field('you_tube_url'); ?>" class=" text-[15px] text-white font-mukta font-medium underline">
            <?php echo esc_html__( 'Subscribe on Youtube', 'wpmedico' ); ?>
        </a>
    </div>
</div>