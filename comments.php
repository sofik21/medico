
<h2>
    <?php 
        $comment_num = get_comments_number();
        if( 1 == $comment_num ){
            echo esc_html__("1 comment", "wpzarek");
        }else{
            echo $comment_num ." " . esc_html__("1 comment", "wpzarek");
        }

    ?>
</h2>

<?php 
    comment_form(  );
    wp_list_comments();
    the_comments_pagination([
        'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6"><path strokeLinecap="round" strokeLinejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        ',
        'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6"><path strokeLinecap="round" strokeLinejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        '
    ]);
    
?> 