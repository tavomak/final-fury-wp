<?php
    get_template_part('includes/header'); 
    bk_main_before();
    $video = 'dbHLMopYsuQ';
?>

<section class="position-relative">
  <div class="video-overlay">
    <div class="video-overlay--content text-center">
        <div
          class="py-4 video-overlay--content-img"
        >
          <img
            class="w-100"
            src="<?php echo bloginfo('template_directory');?>/assets/img/final-fury-logo.png"
            alt="" />
        </div>
        <h1 class="fw-title-italic">A CLASSIC ARCADE FIGHTING GAME REIMAGINED FOR VR</h1>
        <p>Coming 2024 to all major platforms</p>
      </div>
  </div>
  <img
    src="<?php echo bloginfo('template_directory');?>/assets/img/mobile-HOME.jpg"
    alt=""
    class="w-100 d-md-none"
  >
  <div class="video-overlay--layer"></div>
  <video
    id="myVideo"
    loop
    autoPlay
    muted
    class="active muted w-100  d-none d-md-block"
    poster="<?php echo bloginfo('template_directory');?>/assets/img/video-poster.jpg"
  >
    <source src="<?php echo bloginfo('template_directory');?>/assets/img/home-loop.mp4" type="video/mp4" />
  </video>
</section>

<section class="container py-4 my-5">
  <div class="row align-items-center justify-content-center">
    <div class="col-lg-5">
      <h1 class="fs-4 fw-title-italic">Sign up for our Closed Beta on Quest 2</h1>
      <p>
        Join us in shaping the development of Final Fury before the game’s official release! By signing up you agree to receive communication about Final Fury from Kluge Interactive.
      </p>
      <?php echo do_shortcode("[mc4wp_form id=154]"); ?>
    </div>
    <div class="col-lg-5 d-none d-lg-block">
      <img class="w-100" src="<?php echo bloginfo('template_directory');?>/assets/img/home-3.png" alt="" />
    </div>
  </div>
</section>

<section class="container py-md-4 my-5">
  <div class="row align-items-center justify-content-between">
    <div class="col-lg-6">
      <a href="#" class="videoModalBtn">
        <img class="w-100" src="<?php echo bloginfo('template_directory');?>/assets/img/home-2.jpg" alt="" />
      </a>
    </div>
    <div class="col-lg-5">
      <h1 class="fs-4 fw-title-italic">Welcome to the galaxy&apos;s ultimate fighting tournament</h1>
      <p>
        Choose from a roster of futuristic combatants, master their unique abilities, and unleash epic combos.
      </p>
      <div class="text-center text-md-start">
        <a
          class="btn octagon"
          href="https://discord.gg/wYVecnMgau"
          target="_blank"
          rel="noreferrer"
        >
          <div class="octagon--outer-variant">
            <span class="octagon--inner-variant">
              <div class="px-5">
                <i class="fab fa-discord me-2"></i>
                <span>
                  Join to discord
                </span>
              </div>
            </span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="container py-md-5 my-5">
  <div class="row py-5">
    <div class="col text-center">
      <img src="<?php echo bloginfo('template_directory');?>/assets/img/faq-img.svg" alt="" width={292} />
    </div>
  </div>
  <div class="row d-flex">
  <?php 
    $query = new WP_Query(array(
        'post_type'      	=> 'fiq_post_type',
        'posts_per_page'	=> 12,
        'post_status'		=> 'publish',
    ));

    include( locate_template( './includes/templates/faq.php', false, false) );
  ?>
  </div>
</section>

<section class="container py-md-4 my-5">
  <div class="row align-items-center justify-content-center">
    <div class="col-lg-5 order-md-2">
      <h2 class="fs-4 fw-title-italic">Subscribe to our email newsletter</h2>
      <p>
        Don’t miss out on the latest Final Fury news.
      </p>
      <?php echo do_shortcode("[mc4wp_form id=154]"); ?>
    </div>
    <div class="col-lg-5 order-md-1">
      <img class="w-100" src="<?php echo bloginfo('template_directory');?>/assets/img/home-1.png" alt="" />
    </div>
  </div>
</section>

<div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="video-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="d-flex w-100 p-2 justify-content-end bg-light-blue">
                <div class="mobile-menu-icon">
                <button class="hamburger hamburger--squeeze is-active" type="button" data-bs-dismiss="modal" aria-label="Close">
                  <span class="hamburger-box">
                    <span class="hamburger-inner" ></span>
                  </span>
                </button>
            </div>
            </div>
            <div class="modal-body p-0">
              <div id="video-<?php echo get_row_index(). '-' . the_title();?>" class="video-wrapper">
                  <figure
                      class="wp-block-embed-youtube wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio m-0">
                      <div class="wp-block-embed__wrapper">
                          <iframe
                              id="iframe-<?php echo get_row_index(). '-' . the_title(); ?>"
                              class="<?php echo (is_numeric($video)) ? 'vimeo' : 'youtube' ;?> youtubeVideo"
                              title="Embed video Flora"
                              width="500"
                              src="<?php echo (is_numeric($video)) ? 'https://player.vimeo.com/video/'.$video.'?title=&portrait=0autoplay=1' : 'https://www.youtube.com/embed/'.$video.'?feature=oembed&enablejsapi=1&enablejsapi=1' ;?>"
                              frameborder="0"
                              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                              allowfullscreen="">
                          </iframe>
                      </div>
                  </figure>
              </div>
            </div>
        </div>
    </div>
</div>

<?php 
    bk_main_after();
    get_template_part('includes/footer'); 
?>