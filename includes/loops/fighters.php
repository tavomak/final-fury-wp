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

  <?php if ( $query->have_posts() ) : ?>
    <div class="row">
          <div class="col">
            <div class="d-flex flex-wrap">
                <?php while ( $query->have_posts() ) : $query->the_post();
                    $card = get_field('fighter_card');
                    $card_on = get_field('fighter_card_on');
                ?>
                <a href="<?php echo the_permalink();?>" class="position-relative fighter-card">
                <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );?>
                    <svg viewBox="0 0 440 380">
                        <defs>
                            <radialGradient id="gradient" cx="0" cy="1" r="1.7">
                                <stop class="stop1" offset="0%" />
                                <stop class="stop3" offset="60%" />
                                <stop class="stop3" offset="100%" />
                            </radialGradient>

                            <radialGradient id="gradient2" cx="0" cy="1" r="1.7">
                                <stop class="stop2" offset="0%" />
                                <stop class="stop4" offset="60%" />
                                <stop class="stop4" offset="100%" />
                            </radialGradient>

                            <clipPath id="clippath">
                                <path d="m436.5,0H143l-34.47,26L0,380h294l33.97-26L436.5,0Z"/>
                            </clipPath>
                        </defs>

                        <g clip-path="url(#clippath)">
                            <rect x="0" y="0" width="440" height="380" class="fondo"/>
                            <image class="card-off" xlink:href="<?php echo $card_on;?>" style="width: 90%;" />
                            <image class="card-on" xlink:href="<?php echo $card;?>" style="width: 90%;" />
                            <path d="m436.5,0H143l-34.47,26L0,380h294l33.97-26L436.5,0Z" style="fill:none;stroke:white;stroke-width:4"/>
                            <text x="40%" y="95%" font-size="50" fill="white" class="card-label" text-anchor="middle" style="stroke:black;stroke-width:1.5">
                                <?php echo the_title();?>
                            </text>
                        </g>
                    </svg>
                </a>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
          </div>
      </div>
  <?php endif; ?>

</section>