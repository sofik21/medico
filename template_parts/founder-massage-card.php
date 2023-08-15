<div class="">
    <div class="mask-image relative h-full w-full top-0 translate-y-[300px]">
        <?php 
            $image = get_field('founder_image');
                echo wp_get_attachment_image( $image, 'full', false, [
                    'class' =>  'mx-auto',
                ])
        ?>
        <div class=" absolute h-full w-full object-cover">
            <?php 
                $image = get_field('mask_image');
                echo wp_get_attachment_image( $image, 'full', false, [
                    'class' =>  'mx-auto',
                ])
            ?>
        </div>
    </div>
    
</div>
<div class="prose">
    <?php the_field('massage_content'); ?>
</div>