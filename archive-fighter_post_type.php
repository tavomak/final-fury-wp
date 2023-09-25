<?php
    get_template_part('includes/header'); 
    bk_main_before();

    $args = array(
        'post_type' => 'fighter_post_type',
        'posts_per_page' => -1,
        'post_status' => 'publish',
    );
    $fighters = new WP_Query($args);
?>

<section class="container pt-5">
    <div class="row justify-content-center mt-5">
        <div class="col col-lg-7">
        <h1 class="pb-5">
            <picture class="project-picture-v2">
            <source media="(max-width: 768px)" srcSet="<?php echo bloginfo('template_directory');?>/assets/img/fighter-title-mobile.svg" />
            <img class="w-100" src="<?php echo bloginfo('template_directory');?>/assets/img/fighter-title-desktop.svg" alt="CHOOSE YOUR FIGHTER" />
            </picture>
        </h1>
        <p class="text-center">
            Meet the powerful combatants of Final Fury! Discover their stories, master their unique abilities, and forge your path to greatness in the galaxy’s ultimate fighting tournament.
        </p>
        </div>
    </div>
</section>

<section  class="container mt-5">

  <?php if ($fighters->have_posts()) : ?>
      <div class="row">
          <div class="col">
            <div class="d-flex flex-wrap">
                <?php while ($fighters->have_posts()) : $fighters->the_post(); 
                    $card = get_field('fighter_card');
                    $card_on = get_field('fighter_card_on');
                ?>
                <a href="<?php echo the_permalink();?>" class="position-relative fighter-card">
                    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );?>
                    <img
                        src="<?php echo $card_on;?>"
                        class="fighter-card--img fighter-card--img-on"
                    >
                    <img
                        src="<?php echo $card;?>"
                        class="fighter-card--img fighter-card--img-off"
                    >
                </a>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
          </div>
      </div>
  <?php endif; ?>

</section>

<?php 
    bk_main_after();
    get_template_part('includes/footer'); 
?>