<div class="bg-gray hover:shadow-2xl transition-all duration-300 rounded-[20px]">
    <img src="assets/img/img.png" alt="" class="">
    <a href="">
        <?php 
            the_post_thumbnail( 'medium', [
                'class' => 'h-ful w-full rounded-[20px] object-cover'
            ] );
        ?>
    </a>
    <div class="program-card p-8">
        <h3 class="py-6"><?php the_title(); ?></h3>
        <div class="program-card-contect">
            <?php the_field('progerms_sin'); ?>
        </div>
        <div class="flex flex-wrap gap-3 pt-8">
            <?php 
                $enrollbutton = get_field('enroll_now');
            ?>
            <a href="<?php echo the_permalink();?>" class="btn-one">Details & Routine</a>
            <?php if($enrollbutton){ ?>
                <a target="_blank" href="<?php echo $enrollbutton['url']; ?>" class="btn-one bg-primary hover:bg-secondery transition-all duration-300 text-white">
                    <?php echo $enrollbutton['title']; ?>
                </a>
            <?php } ?>
        </div>
    </div>
</div>
