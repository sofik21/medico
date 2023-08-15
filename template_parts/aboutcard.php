<div class="py-14 max-w-4xl mx-auto gap-5 flex">
    <?php 
        $button_one = get_field('journey_button');
    ?>
    <a target="_blank" href="<?php echo $button_one['url'];?>" class="bg-secondery text-white border-[2px] border-transparent transition-all duration-300 border-solid border-primary rounded-lg flex justify-center items-center h-12 w-36">
        <?php echo $button_one['title'];?>
    </a>
    <?php 
        $button_two = get_field('success_button');
    ?>
    <a target="_blank" href="<?php echo $button_two['url'];?>" class=" hover:bg-secondery hover:text-white border-[2px] hover:border-transparent transition-all duration-300 border-solid border-primary rounded-lg flex justify-center items-center h-12 w-36">
        <?php
            echo $button_two['title'];
        ?>
    </a>
</div>
<div class="prose pb-24">
    <?php the_content(); ?>
</div>


