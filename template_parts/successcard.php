<div class="group bg-gray hover:bg-white hover:shadow-2xl p-12 text-center rounded-[20px] transition-all duration-300">
    <div class="w-[170px] h-[170px] rounded-full mx-auto relative flex justify-center items-center">
        <?php the_post_thumbnail('full',[
            'class' => 'rounded-full h-44 w-44 mx-auto'
        ]) ?>
        <div class="absolute top-[58%] left-[80%]">
            <svg class="fill-current group-hover:text-secondery duration-300" width="53" height="52" viewBox="0 0 53 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M45.678 3.52995C51.8303 8.34924 54.2614 19.0205 52.376 29.2984C50.4907 39.6255 44.2888 49.51 36.4 51.5754C28.5608 53.6408 18.9851 47.7888 12.2375 42.281C5.44021 36.7733 1.37178 31.5114 0.280245 25.9053C-0.76167 20.2991 1.17332 14.2996 4.89444 10.0704C8.61557 5.79206 14.0732 3.28406 21.7636 1.51371C29.5035 -0.305823 39.4761 -1.33853 45.678 3.52995Z"></path>
            </svg>
            <span class="absolute top-1/2 left-1/2 text-2xl font-medium text-white -translate-x-1/2 -translate-y-1/2"><?php the_field('took_place'); ?></span>
        </div>
    </div>
    <div class="mt-5">
        <h5><?php the_title(); ?></h5>
        <p class=" mt-2 mb-7 text-[15px] max-w-[240px] mx-auto"><?php the_field('institute_name'); ?></p>
    </div>
    <svg class="fill-current duration-300 mx-auto group-hover:text-secondery mt-5 md:mt-[30px]" width="48" height="42" viewBox="0 0 48 42" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.5165 20.118H3.33712C3.52781 8.98646 5.72078 7.15104 12.5619 3.09882C13.3485 2.62209 13.6107 1.62096 13.1339 0.810514C12.6811 0.0239076 11.6561 -0.238295 10.8695 0.238437C2.81271 5.00575 0 7.91381 0 21.7628V34.6107C0 38.6867 3.31328 41.9762 7.3655 41.9762H14.5165C18.7117 41.9762 21.882 38.8059 21.882 34.6107V27.4597C21.882 23.2883 18.7117 20.118 14.5165 20.118Z"></path>
        <path d="M40.304 20.118H29.1246C29.3153 8.98646 31.5083 7.15104 38.3494 3.09882C39.136 2.62209 39.3982 1.62096 38.9215 0.810514C38.4447 0.0239076 37.4436 -0.238295 36.6331 0.238437C28.5764 5.00575 25.7637 7.91381 25.7637 21.7866V34.6345C25.7637 38.7106 29.077 42 33.1292 42H40.2801C44.4754 42 47.6456 38.8297 47.6456 34.6345V27.4835C47.6695 23.2883 44.4992 20.118 40.304 20.118Z"></path>
    </svg>
    <p class="mt-9 text-lg"><?php the_field('profile_description'); ?></p>
</div>