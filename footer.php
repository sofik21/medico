
</main>

<div class="bg-gray">
    <div class="container py-12">
        <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1  gap-12">
            <div class="sidebar-one md:col-span-2 col-span-0 flex flex-col gap-4">
                <?php 
                    dynamic_sidebar('sidebar_1');
                ?>
                <div class="">
                    <ul class="flex flex-wrap gap-6">
                        <li class="hover:text-secondery transition-all duration-300">
                            <a href=""><i class="text-[26px] fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li class="hover:text-secondery transition-all duration-300">
                            <a href=""><i class="text-[26px] fa-brands fa-twitter"></i></a>
                        </li>
                        <li class="hover:text-secondery transition-all duration-300">
                            <a href=""><i class="text-[26px] fa-brands fa-youtube"></i></a>
                        </li>
                        <li class="hover:text-secondery transition-all duration-300">
                            <a href=""><i class="text-[26px] fa-brands fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-two flex flex-col gap-4">
                <?php 
                    dynamic_sidebar('sidebar_2');
                ?>
            </div>
            <div class="sidebar-three">
                <?php 
                    dynamic_sidebar('sidebar_3');
                ?>
            </div>
        </div>
    </div>
    <p class="py-5 text-center text-base border-t-[1px] border-solid border-primary  border-opacity-20">Copyright © Medico Academic & Admission Care. All rights reserved. 2023</p>
</div>


    
  
    <?php wp_footer(); ?>
</body>
</html>