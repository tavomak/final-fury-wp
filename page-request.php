<?php
    get_template_part('includes/header'); 
    bk_main_before();
    /*
    Template Name: Request
    */
?>

<section
  class="container-fluid px-0 pt-5"
  style="background: url(<?php echo bloginfo('template_directory');?>/assets/img/request-bg.png) center bottom no-repeat; background-size: cover;"
>
  <div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col col-lg-5">
        <h1 class="pb-4">
            <img class="w-100" src="<?php echo bloginfo('template_directory');?>/assets/img/request-title.svg" alt="CHOOSE YOUR FIGHTER" />
        </h1>
        </div>
    </div>
  </div>
</section>

<section class="container pt-lg-5 mt-lg-5">
    <div class="row">
        <div class="col-md-6">
            <img class="w-100 d-none d-md-block" src="<?php echo bloginfo('template_directory');?>/assets/img/request-img.png" alt="https://klugeinteractive.com/" />
        </div>
        <div class="col-md-6">
            <h2 class="fw-title-italic">WELCOME, CHAMPION!</h2>
            <p class="mb-lg-4">Thank you for your interest in playing Final Fury. Please tell us more about you and we will be in touch shortly.</p>
            <?php get_template_part('includes/form/request'); ?>
        </div>
    </div>
</section>
<?php 
    bk_main_after();
    get_template_part('includes/footer'); 
?>
