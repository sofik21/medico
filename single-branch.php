<?php 
/**
 * Single Branch Page Template
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


<div class="py-12 sm:py-16 lg:py-24 max-w-6xl mx-auto">
    <div class="container">
        <div class="">
            <div class="flex gap-5 sm:gap-8 lg:gap-12 flex-col sm:flex-row justify-between">
                <div class="max-w-[430px] w-full">
                    <h4 class="font-semibold text-xl sm:leading-none sm:text-2xl leading-none">
                        <?php the_title(); ?>
                    </h4>
                    <a href="" class="flex items-center gap-3 mt-4 sm:mt-5 sm:text-lg leading-none sm:leading-none text-[#515A60]">
                        <svg width="20" height="20" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.4859 15.215C16.7344 14.4731 15.7964 14.4731 15.0497 15.215C14.4802 15.7797 13.9107 16.3445 13.3507 16.9188C13.1975 17.0767 13.0683 17.1102 12.8817 17.005C12.5131 16.8039 12.1207 16.6412 11.7665 16.4211C10.1153 15.3825 8.73212 14.0472 7.50688 12.5443C6.89905 11.7977 6.35822 10.9984 5.98012 10.0986C5.90355 9.91677 5.9179 9.79712 6.06627 9.64875C6.63582 9.09835 7.191 8.5336 7.75097 7.96884C8.5311 7.18392 8.53111 6.26499 7.74619 5.47529C7.30108 5.0254 6.85598 4.58508 6.41087 4.13519C5.95141 3.67572 5.49673 3.21147 5.03248 2.7568C4.28107 2.02453 3.34299 2.02453 2.59637 2.76158C2.02204 3.32634 1.47164 3.90546 0.887735 4.46064C0.346908 4.97275 0.0741011 5.59973 0.0166681 6.332C-0.0742674 7.52373 0.217683 8.64846 0.629286 9.74447C1.47164 12.0131 2.75431 14.028 4.30978 15.8754C6.41087 18.3738 8.91878 20.3504 11.8526 21.7767C13.1736 22.418 14.5424 22.911 16.0309 22.9923C17.0551 23.0498 17.9453 22.7913 18.6585 21.9921C19.1466 21.4464 19.697 20.9487 20.2139 20.427C20.9797 19.6517 20.9845 18.7136 20.2235 17.9478C19.3141 17.0337 18.4 16.1243 17.4859 15.215Z" fill="#C4161C"></path>
                            <path d="M16.5709 11.4005L18.337 11.0989C18.0594 9.47647 17.2936 8.00714 16.1306 6.83934C14.9006 5.60931 13.3451 4.83397 11.6317 4.59467L11.3828 6.3703C12.7086 6.55696 13.9146 7.15522 14.8671 8.10765C15.7669 9.00743 16.3555 10.1465 16.5709 11.4005Z" fill="#C4161C"></path>
                            <path d="M19.3323 3.72357C17.2935 1.6847 14.7138 0.397245 11.8661 0L11.6172 1.77564C14.0772 2.12023 16.3075 3.23539 18.0688 4.99188C19.7392 6.66222 20.8352 8.77288 21.2324 11.0941L22.9985 10.7926C22.5342 8.10283 21.2659 5.66193 19.3323 3.72357Z" fill="#C4161C"></path>
                        </svg>
                        <span class="flex-1 text-graytext"><?php the_field('branch_contact'); ?></span>
                    </a>
                    <div class="flex items-start gap-3 mt-4 sm:mt-5">
                        <svg class="text-secondery w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd" d="M11.291 21.706L12 21l-.709.706zM12 21l.708.706a1 1 0 0 1-1.417 0l-.006-.007l-.017-.017l-.062-.063a47.708 47.708 0 0 1-1.04-1.106a49.562 49.562 0 0 1-2.456-2.908c-.892-1.15-1.804-2.45-2.497-3.734C4.535 12.612 4 11.248 4 10c0-4.539 3.592-8 8-8c4.408 0 8 3.461 8 8c0 1.248-.535 2.612-1.213 3.87c-.693 1.286-1.604 2.585-2.497 3.735a49.583 49.583 0 0 1-3.496 4.014l-.062.063l-.017.017l-.006.006L12 21zm0-8a3 3 0 1 0 0-6a3 3 0 0 0 0 6z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 text-graytext"><?php the_field('branch_location') ;?></span>
                    </div>
                </div>
                <div class="sm:w-[1px] h-[1px] sm:h-auto bg-black">
                </div>
                <div class="max-w-[714px] w-full prose prose-headings:font-semibold">
                    <?php the_field('about_us'); ?>
                </div>
            </div>
        </div>
        <div class="mt-10" width="100%" height="450">
            <?php the_field('branch_maph') ; ?>
        </div>
    </div>
</div>

<div class="pb-[50px] sm:pb-[70px] lg:pb-[100px] max-w-6xl  mx-auto">
    <div class="container">
        <div class="sec-title">
            <?php the_field('photo_gallery_text'); ?>
            <img class="mx-auto mt-5" src="<?php echo get_template_directory_uri() . '/assets/img/heart.png'; ?>" />
        </div>
        <div class="max-w-1366 mx-auto grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-5 md:gap-[30px]">
            <?php 
                $gallery_image = get_field('photo_gallery');

                foreach($gallery_image as $image){?>
                <div class=" group overflow-hidden">
                    <?php 
                        echo wp_get_attachment_image( $image, 'full', false, [
                        'class' => 'w-full h-full object-cover duration-300 transform group-hover:scale-110',
                    ]); ?>
                </div>

            <?php } ?>
        </div>
    </div>
</div>







<?php get_footer(); ?>