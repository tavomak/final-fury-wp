<?php
    get_template_part('includes/header'); 
    bk_main_before();

    $character = get_field( 'character' );
    $stats = get_field( 'stats' );
?>
<section
  class="container-fluid px-0 py-5"
  style="background: url(<?php echo bloginfo('template_directory');?>/assets/img/fighter-bg.png); background-size: cover;"
>
  <div class="container pt-5">
    <div class="row justify-content-center align-items-center">

      <div class="col-lg-4 order-lg-2">
          <img class="w-100" src="<?php echo the_post_thumbnail_url();?>" alt="<?php echo the_title();?>">
      </div>

      <div class="col-lg-4 order-lg-1">
        <div class="px-lg-5">
          <ul class="d-flex">
            <?php if ($character['voice']): ?>
              <li class="text-uppercase">
                Voice
                <img src="<?php  echo bloginfo('template_directory');?>/assets/img/sound.svg" alt="<?php echo the_title();?> voice">
              </li>
            <?php endif; ?>
            <?php if ($character['theme']): ?>
              <li class="text-uppercase">
                theme
                <img src="<?php  echo bloginfo('template_directory');?>/assets/img/sound.svg" alt="<?php echo the_title();?> theme">
              </li>
            <?php endif; ?>
          </ul>
          <h1 class="fw-title-italic text-uppercase" style="font-size: 64px;"><?php the_title();?></h1>
          <p><?php echo $character['short_description'];?></p>
        </div>
      </div>

      <div class="col-lg-4 order-lg-3">
        <div class="px-lg-5 text-uppercase">
          <h2 class="fw-bold">Archetype</h2>
          <p><?php echo $character['archetype'];?></p>
          <h2 class="fw-bold">Stats</h2>
          <ul>
            <li class="mt-2">
              <p class="mb-0">Power</p>
              <ul class="d-flex stats-bar">
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                  <li class="stats-bar--item-<?php echo $i;?>">
                    <?php if($i <= $stats['power']): ?>
                      <img src="<?php echo bloginfo('template_directory');?>/assets/img/icon-stat-active.png" alt="<?php echo the_title();?> Power">
                    <?php else: ?>
                      <img src="<?php echo bloginfo('template_directory');?>/assets/img/icon-stat.png" alt="<?php echo the_title();?> Power">
                    <?php endif; ?>
                  </li>
                <?php endfor; ?>
              </ul>
            </li>
            <li class="mt-2">
              <p class="mb-0">Health</p>
              <ul class="d-flex stats-bar">
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                  <li class="stats-bar--item-<?php echo $i;?>">
                    <?php if($i <= $stats['health']): ?>
                      <img src="<?php echo bloginfo('template_directory');?>/assets/img/icon-stat-active.png" alt="<?php echo the_title();?> Power">
                    <?php else: ?>
                      <img src="<?php echo bloginfo('template_directory');?>/assets/img/icon-stat.png" alt="<?php echo the_title();?> Power">
                    <?php endif; ?>
                  </li>
                <?php endfor; ?>
              </ul>
            </li>
            <li class="mt-2">
              <p class="mb-0">Mobility</p>
              <ul class="d-flex stats-bar">
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                  <li class="stats-bar--item-<?php echo $i;?>">
                    <?php if($i <= $stats['mobility']): ?>
                      <img src="<?php echo bloginfo('template_directory');?>/assets/img/icon-stat-active.png" alt="<?php echo the_title();?> Power">
                    <?php else: ?>
                      <img src="<?php echo bloginfo('template_directory');?>/assets/img/icon-stat.png" alt="<?php echo the_title();?> Power">
                    <?php endif; ?>
                  </li>
                <?php endfor; ?>
              </ul>
            </li>
            <li class="mt-2">
              <p class="mb-0">Range</p>
              <ul class="d-flex stats-bar">
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                  <li class="stats-bar--item-<?php echo $i;?>">
                    <?php if($i <= $stats['range']): ?>
                      <img src="<?php echo bloginfo('template_directory');?>/assets/img/icon-stat-active.png" alt="<?php echo the_title();?> Power">
                    <?php else: ?>
                      <img src="<?php echo bloginfo('template_directory');?>/assets/img/icon-stat.png" alt="<?php echo the_title();?> Power">
                    <?php endif; ?>
                  </li>
                <?php endfor; ?>
              </ul>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="container move-list--container py-5">
  <div class="row align-items-center">
    <div class="col-md-6 order-md-2">
      <h2 class="fw-title-italic text-uppercase d-md-none" style="font-size: 32px;">Move List</h2>
      <img class="move-list--image w-100 mb-3" src="" alt="">
    </div>
    <div class="col-md-6 order-md-1">
      <h2 class="fw-title-italic text-uppercase d-none d-md-block" style="font-size: 64px;">Move List</h2>
      <ul class="d-flex flex-wrap move-list--icons" style="max-width: 500px;"></ul>
      <ul class="move-list--text">
          <li class="move-list--text-title text-uppercase fs-3"></li>
          <li class="move-list--text-description"></li>
      </ul>
    </div>
  </div>
</section>

<section class="container py-5">
  <div class="row align-items-center">
    <div class="col-md-6">
      <img class="w-100 mb-3" src="<?php echo $character['bio_image'];?>" alt="<?php echo the_title();?>">
    </div>
    <div class="col-md-6">
      <h2 class="fw-title-italic text-uppercase" style="font-size: 64px;">Biography</h2>
      <p><?php the_content();?></p>
    </div>
  </div>
</section>

<section class="container py-4 my-5">
  <div class="row align-items-center justify-content-center">
    <div class="col-lg-5">
      <h1 class="fs-4 fw-title-italic">Sign up for our Closed Beta on Quest 2</h1>
      <p>
        Join us in shaping the development of Final Fury before the game’s official release! By signing up you agree to receive communication about Final Fury from Kluge Interactive.
      </p>
      <?php get_template_part('includes/form/sign-up'); ?>
    </div>
    <div class="col-lg-5 d-none d-lg-block">
      <img class="w-100" src="<?php echo bloginfo('template_directory');?>/assets/img/home-1.png" alt="" />
    </div>
  </div>
</section>

<?php
  $args = array(
    'post_type' => 'fighter_post_type',
    'posts_per_page' => -1,
    'post_status' => 'publish',
  );
  $fighters = new WP_Query($args);
  include( locate_template( './includes/loops/fighters.php', false, false) );
?>

<?php 
    bk_main_after();
    get_template_part('includes/footer'); 
?>