<?php
    get_template_part('includes/header'); 
    bk_main_before();
    /*
    Template Name: Request
    */
?>

<section
  class="container-fluid px-0 pt-5"
  style="background: url(<?php echo bloginfo('template_directory');?>/assets/img/fighter-bg.png); background-size: cover;"
>
  <div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col col-lg-5">
        <h1 class="pb-5">
            <img class="w-100" src="<?php echo bloginfo('template_directory');?>/assets/img/request-title.svg" alt="CHOOSE YOUR FIGHTER" />
        </h1>
        </div>
    </div>
  </div>
</section>

<section class="container">
    <div class="row justify-content-between">
        <div class="col-md-5">
            <h2 class="fw-title-italic">WELCOME, CHAMPION!</h2>
            <p>Thank you for your interest in playing Final Fury. Please tell us more about you and we will be in touch shortly.</p>
            <img class="w-100 d-none d-md-block" src="<?php echo bloginfo('template_directory');?>/assets/img/request-img.png" alt="https://klugeinteractive.com/" />
        </div>
        <div class="col-md-6">
            <form method="post" class="wpcf7-form" name="formulario_inicial" id="formulario_inicial">
                <div style="display: none;">
                    <input type="hidden" name="_wpcf7" value="5">
                    <input type="hidden" name="_wpcf7_version" value="5.1.9">
                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f5-o1">
                    <input type="hidden" name="_wpcf7_container_post" value="0">
                </div>
                <div class="container-fluid">
                    <div class="form-group w-100 px-4 mb-4">
                        <span class="bk-projectcart--text__span"></span>
                        <label class="parallel--label" for="inputName">
                            <input
                                type="text"
                                class="form-control parallel--input"
                                id="inputName"
                                name="inputName"
                                placeholder="YOUR NAME"
                                required
                            >
                        </label>
                    </div>
                    <div class="form-group w-100 px-4 mb-4">
                        <label class="parallel--label" for="inputEmail">
                            <input
                                type="email"
                                class="form-control parallel--input"
                                id="inputEmail"
                                name="inputEmail"
                                placeholder="YOUR EMAIL"
                                required
                            >
                        </label>
                    </div>
                    <div class="form-group w-100 px-4 mb-4">
                        <label class="parallel--label" for="inputPlatform">
                            <select class="form-select parallel--input" aria-label="Select Platform">
                                <option selected>SELECT PLATFORM</option>
                                <option value="meta-quest">META QUEST</option>
                                <option value="sSteam-vr">STEAM VR</option>
                                <option value="playStation-vr-2">PLAYSTATION VR 2</option>
                            </select>
                        </label>
                    </div>
                    <div class="form-group w-100 px-4 mb-4">
                        <label class="parallel--label" for="inputPlatform">
                            <input
                                type="text"
                                class="form-control parallel--input"
                                id="inputPlatform"
                                name="inputPlatform"
                                placeholder="WEBSITE / CHANNEL URL"
                                required
                            >
                        </label>
                    </div>
                    <div class="form-group w-100 px-4 mb-4">
                        <textarea
                            type="text"
                            class="form-control parallel--text-area"
                            id="inputTextArea"
                            name="inputTextArea"
                            placeholder="TELL US MORE."
                            required
                        ></textarea>
                    </div>
                    <div class="form-group w-100">
                        <div class="py-4">
                            <div class="ps-4">
                                <button
                                type="submit"
                                class="octagon"
                                >
                                <div class="octagon--outer">
                                    <span class="octagon--inner text-uppercase">
                                        submit
                                    </span>
                                </div>
                                </button>
                            </div>
                            <span class="ajax-loader"></span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<?php 
    bk_main_after();
    get_template_part('includes/footer'); 
?>
