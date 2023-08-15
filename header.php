<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>


    <div class="header-sec ">
        <div class="container py-3">
            <div class="flex justify-between items-center max-w-6xl mx-auto">
                <?php 
                    if(has_custom_logo()){
                        the_custom_logo();
                    }else{
                        ?>
                            <a href="<?php echo home_url();?>" class="text-xl"><?php echo bloginfo('site_title') ?></a>
                        <?php
                    }
                ?>
                <ul class="flex gap-7 text-2xl">
                    <li class="group">
                        <a href="" class="group-hover:text-secondery duration-300 transition-all"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li class="group">
                        <a href="" class="group-hover:text-secondery duration-300 transition-all"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li class="group">
                        <a href="" class="group-hover:text-secondery duration-300 transition-all"><i class="fa-brands fa-youtube"></i></a>
                    </li>
                    <li class="group">
                        <a href="" class="group-hover:text-secondery duration-300 transition-all"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                </ul>
                <div class="flex gap-4">
                    <button class="font-medium text-center px-4 text-white py-2 rounded bg-primary text-2xl"><i class="fa-solid fa-headphones"></i></button>
                    <button class="btn btn-primary">Admission</button>
                </div>
            </div>
        </div>
        <div class="">
            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'header_menu',
                    'menu_class'     => 'py-4 flex-wrap flex gap-12 text-white bg-primary items-center justify-center ',
                ));
            ?>
        </div>
    </div>

<main>