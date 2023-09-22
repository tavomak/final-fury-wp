<?php 
  $count = 1;
  if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post();
    $count++;
    ?>
    <div class="col-md-6 my-2 my-lg-3 pb-lg-1">

      <button
        class="parallelogram  <?php echo ( $count % 2 === 0 ) ? '' : 'parallelogram--variant'; ?>"
        id="parallelogram-<?php echo $count; ?>"
        type="button"
      >
        <div class="parallelogram--outer">
          <div class="parallelogram--inner">
            <div class="parallelogram--content">
              <h3 class="parallelogram--title">
                <?php the_title(); ?>
              </h3>
              <div class="parallelogram--text parallelogram--text-close">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </button>

    </div>
    <?php endwhile; wp_reset_postdata(); ?>
  <?php endif;?>