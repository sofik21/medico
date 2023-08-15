<?php 
/**
 * Single Programs Page Template
 * @package wpmedico
 * 
 */
get_header();

?>


<div class="pt-32 details-page">
    <div class="container">
        <div class="grid grid-cols-2 gap-10">
            <div class="flex flex-col gap-8 ">
                <h4 class=" text-secondery text-2xl font-semibold">
                    <?php echo esc_html__( 'ঢাকা শাখা', 'wpmedico' ) ?>
                </h4>
                <h1 class="leading-[65px]">
                    <?php the_title() ?>
                </h1>
                <div class="text-lg">
                    <?php the_content(); ?>
                </div>
                <div class="flex flex-wrap gap-4">
                    <label class="service-input flex gap-2 items-center">
                        <input type="radio" checked="checked" name="radio">
                        <span><?php echo esc_html__('Regular Course','wpmedico'); ?></span>
                    </label>
                    <label class="service-input flex gap-2 items-center">
                        <input type="radio" name="radio">
                        <span><?php echo esc_html__('Exam Batch','wpmedico'); ?></span>
                    </label>
                </div>
                <div class="">
                    <?php     
                        $enro_single_button = get_field('enroll_now');
                    ?>
                    <?php if($enro_single_button){ ?>
                        <a target="_blank" href="<?php echo $enro_single_button['url']; ?>" class="btn-one hover:bg-secondery bg-primary transition-all duration-300 text-white inline-block">
                            <?php echo $enro_single_button['title']; ?>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <?php 
                if( ! have_rows('progerms_single_slider')){
                    the_post_thumbnail( 'full', [ 'class' => 'w-full' ] );
                }else{
                    get_template_part('template_parts/gallery');
                }
            ?>
            
        </div>
    </div>
</div>
<div class="pb-32">
    <div class="container">
        <div class="programs-details-sec">
            <ul class="programs-details-list flex max-w-[580px] justify-around border-b-[3px] border-primary/[.07]">
                <li data-tab=".program-detail-tab" class="nav-link programs-heading duration-300 active pb-5 relative w-full flex justify-center">
                    <h5 class="text-xl cursor-pointer">
                        <?php echo esc_html__('প্রোগ্রাম ডিটেইলস','wpmedico'); ?>
                    </h5>
                </li>
                <li data-tab=".program-material-tab" class="nav-link programs-heading duration-300 pb-5 relative w-full flex justify-center">
                    <h5 class="text-xl cursor-pointer">
                        <?php echo esc_html__('স্টাডি ম্যাটেরিয়ালস','wpmedico'); ?>
                    </h5>
                </li>
            </ul>
        </div>
        <div class="flex flex-col gap-8 programs-details-blog tab-content active program-detail-tab mt-10">
            <?php 
                while(have_rows('programs_details_sec')){
                the_row();
            ?>
            <div class="max-w-[580px]">
                <div class="programs-details-one cursor-pointer py-6 bg-gray relative">
                    <span class="p-3"><?php the_sub_field('title'); ?></span>
                </div>
                <div class="programs-details-content-one mobile-menu hidden prose mt-7">
                    <?php the_sub_field('content'); ?>
                </div>
            </div>
            <?php } ?>
            
        </div>
        <div class="tab-content program-material-tab mt-10 grid md:grid-cols-3 sm:grid-cols-2 lg:grid-cols-4 gap-5 md:gap-[30px] ">
            <?php 
                while(have_rows('program_materials')){
                the_row();
            ?>
            <div class="relative overflow-hidden group bg-[#EBF6F6] flex items-center justify-center">
                <?php 
                    $book_image = get_sub_field('material_cover_image');
                    if( $book_image ) {
                        echo wp_get_attachment_image( $book_image, 'full', false,[
                            'class' => 'w-full transform group-hover:-translate-y-7 duration-300 py-10 px-5',
                        ]);
                    }
                ?>
                <div class=" absolute w-full flex justify-center left-0 bottom-6 z-[10]transform translate-y-10 opacity-0 group-hover:opacity-100 group-hover:translate-y-0 duration-300 ">
                    <?php $button = get_sub_field('material_attachment');
                    ?>
                    <a target="_blank" href="<?php echo $button['url']; ?>" class="btn-one text-white bg-secondery">
                        <?php echo $button['title']; ?>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>




<?php get_footer(); ?>