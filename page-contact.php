<?php
    get_template_part('includes/header'); 
    bk_main_before();
    /*
    Template Name: Contact
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
            <img class="w-100" src="<?php echo bloginfo('template_directory');?>/assets/img/contact-title.svg" alt="CHOOSE YOUR FIGHTER" />
        </h1>
        </div>
    </div>
  </div>
</section>

<section class="container pt-lg-5 mt-lg-5">
    <div class="row">
        <div class="col-md-6">
            <img class="w-100 d-none d-md-block" src="<?php echo bloginfo('template_directory');?>/assets/img/contact-img.png" alt="https://klugeinteractive.com/" />
        </div>
        <div class="col-md-6">
            <h2 class="fw-title-italic">HERE FOR YOU</h2>
            <p class="mb-lg-4">Our Discord and Facebook communities are great places to ask questions and get help quickly from our players and the dev team! You can also contact us directly at hello@finalfuryvr.com or by using the form on this page.</p>
            <?php get_template_part('includes/form/contact'); ?>
        </div>
    </div>
</section>
<?php 
    bk_main_after();
    get_template_part('includes/footer'); 
?>
