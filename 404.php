<?php
    get_template_part('includes/header'); 
    bk_main_before();
?>

<section
  class="container-fluid px-0 pt-5"
  style="background: url(<?php echo bloginfo('template_directory');?>/assets/img/request-bg.png) center bottom no-repeat; background-size: cover;"
>
  <div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col col-lg-5">
        <h1 class="pb-4">
            <img class="w-100" src="<?php echo bloginfo('template_directory');?>/assets/img/error-title.svg" alt="CHOOSE YOUR FIGHTER" />
        </h1>
        </div>
    </div>
  </div>
</section>

<section class="container ">
    <div class="row align-items-center">
        <div class="col-md-6 order-lg-2 py-2">
            <h2 class="fw-title-italic">OOOPS! PAGE NOT FOUND</h2>
            <p class="mb-lg-4">This page doesn’t exist or was removed! We suggest you back to home.</p>
            <div class="py-4" style="width: 250px;">
              <a
              href="<?php echo site_url();?>"
                class="octagon"
              >
                <div class="octagon--outer">
                  <span class="octagon--inner">
                    back to home
                  </span>
                </div>
              </a>
            </div>
        </div>
        <div class="col-md-6 order-lg-1">
          <img class="w-100" src="<?php echo bloginfo('template_directory');?>/assets/img/home-1.png" alt="" />
        </div>
    </div>
</section>

<?php 
    bk_main_after();
    get_template_part('includes/footer'); 
?>