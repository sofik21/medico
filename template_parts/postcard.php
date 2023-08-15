<div id="post-16" class=" group hover:shadow-shadows  bg-[#F8F8F9] rounded-[20px] blog-card duration-300">
    <div class="overflow-hidden rounded-[20px]">
        <?php  if(has_post_thumbnail()){  ?>
            <a href="<?php the_permalink();?>">
                <?php
                    the_post_thumbnail('thumbnail',[
                    'class' => 'group-hover:scale-110 duration-500 w-full rounded-md',
                ]); 
                ?>
            </a>
        <?php } ?>
    </div>
    <div class="px-5 py-6 md:p-[30px]">
        <h4 class="font-semibold text-lg md:text-xl lg:text-2xl">
            <a class="text-underline" href="<?php the_permalink();?>">
                <?php the_title(); ?>
            </a>
        </h4>
        <ul class="text-base leading-none text-[#515A60] flex items-center gap-7 mt-5">
            <li>
                <?php echo get_the_date(); ?>
            </li>
            <li class="flex items-center gap-2">
                <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.9997 12.747C15.4367 12.747 19.6938 7.0069 19.8725 6.76249C20.0419 6.53085 20.0419 6.21613 19.8725 5.9843C19.6938 5.74013 15.4367 0 9.9997 0C4.56265 0 0.305385 5.74009 0.126912 5.9845C-0.0423039 6.21637 -0.0423039 6.53085 0.126912 6.76272C0.305385 7.0069 4.56265 12.747 9.9997 12.747ZM1.49919 6.37394C2.52601 5.12846 5.99473 1.31865 9.9997 1.31865C14.0133 1.31865 17.4747 5.12651 18.5002 6.37304C17.473 7.61919 14.0045 11.4283 9.9997 11.4283C5.98614 11.4283 2.52468 7.62052 1.49919 6.37394ZM6.04401 6.37364C6.04401 8.55492 7.8187 10.3296 9.99999 10.3296C12.1813 10.3296 13.956 8.55492 13.956 6.37364C13.956 4.19235 12.1813 2.41766 9.99999 2.41766C7.8187 2.41766 6.04401 4.19235 6.04401 6.37364ZM7.36269 6.37364C7.36269 4.91941 8.54572 3.73634 9.99999 3.73634C11.4543 3.73634 12.6373 4.91941 12.6373 6.37364C12.6373 7.82787 11.4542 9.01093 9.99999 9.01093C8.54576 9.01093 7.36269 7.82787 7.36269 6.37364Z" fill="#515A60"></path>
                </svg>
                <?php 
                    //Display total view count
                    echo da_get_post_views(get_the_ID());
                ?>
            </li>
            <li class="">
                <?php  
                    $cats = get_the_category(); 
                    $count = 0;
                    foreach( $cats as $cat){
                        $count++; 
                        ?>
                        <a href="<?php echo get_category_link($cat->term_id );?>" class="py-[15px] px-5 border rounded-full text-sm hover:bg-secondery hover:text-white transition-all duration-300 border-solid border-primary hover:border-transparent font-medium font-mukta">
                            <?php echo $cat->name; ?>
                        </a>
                        <?php 
                        if( $count == 1 ){
                            break;
                        }
                    }
                ?>
            </li>
        </ul>
    </div>
</div>
