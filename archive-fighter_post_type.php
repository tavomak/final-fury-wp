<?php
    get_template_part('includes/header'); 
    bk_main_before();

    $args = array(
        'post_type' => 'fighter_post_type',
        'posts_per_page' => -1,
        'post_status' => 'publish',
    );
    $query = new WP_Query($args);
?>

<?php include( locate_template( './includes/loops/fighters.php', false, false) ); ?>

<?php 
    bk_main_after();
    get_template_part('includes/footer'); 
?>