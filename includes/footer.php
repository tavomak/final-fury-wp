<?php bk_footer_before();
$socialMedia = array(
    array(
        'name' => 'Discord',
        'link' => 'https://discord.gg/asD6j3fjbf',
        'icon' => '<i class="fab fa-discord"></i>',
    ),
    array(
        'name' => 'Instagram',
        'link' => 'https://www.twitter.com/example',
        'icon' => '<i class="fab fa-instagram"></i>',
    ),
    array(
        'name' => 'Reddit',
        'link' => 'https://www.reddit.com/r/FinalFuryVR/',
        'icon' => '<i class="fab fa-reddit"></i>',
    ),
    array(
        'name' => 'Facebook',
        'link' => 'https://www.facebook.com/finalfuryvr',
        'icon' => '<i class="fab fa-facebook"></i>',
    ),
    array(
        'name' => 'Tiktok',
        'link' => 'https://www.tiktok.com/@finalfuryvr',
        'icon' => '<i class="fab fa-tiktok"></i>',
    ),
    array(
        'name' => 'Twitter',
        'link' => 'https://twitter.com/FinalFuryVR',
        'icon' => '<i class="fab fa-twitter"></i>',
    ),
    array(
        'name' => 'Youtube',
        'link' => 'https://www.youtube.com/channel/UCHpTTuB_qdSHMq-mGrDJxLQ',
        'icon' => '<i class="fab fa-youtube"></i>',
    ),
);

?>
</main>

<footer class="py-5 footer" style="background-image:url(<?php echo bloginfo('template_directory');?>/assets/img/footer-img.png)">
    <section class="container">
      <div class="row justify-content-center align-items-center" style="min-height:362px">
        <div class="col-md-6">
            <?php if ($socialMedia && count($socialMedia)) : ?>
                <ul class="d-flex justify-content-between">
                    <?php foreach ($socialMedia as $item) : ?>
                    <li>
                        <a href="<?php echo esc_url($item['link']); ?>" target="_blank" rel="noreferrer" class="fs-2">
                        <?php echo $item['icon']; ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
          <div class="d-flex py-4 justify-content-center">
            <a href="<?php echo site_url('/request');?>">
                <span class="fw-bold">
                  <u>
                    Request a Key
                  </u>
                </span>
            </a>
            <span class="px-4">|</span>
            <a href="https://drive.google.com/drive/u/0/folders/10HkeagcjMqQ7AXwI87JlczjRU2n2YMQy" target="_blank" rel="noreferrer">
              <span class="fw-bold">
                <u>
                  Press Kit
                </u>
              </span>
            </a>
          </div>
          <div class="text-center py-4 accordion-outer">
            <span class="me-3">
              a game by:
            </span>
            <a href="https://klugeinteractive.com/" target="_blank" rel="noreferrer">
              <img src="<?php echo bloginfo('template_directory');?>/assets/img/logo-white.png" alt="https://klugeinteractive.com/" width={60} />
            </a>
          </div>
        </div>
      </div>
    </section>
</footer>

<?php echo do_shortcode('[contact-form-7 id="2effa07" title="Contact form 1"]'); ?>

<div class="modal fade" id="contact-form-modal" tabindex="-1" role="dialog" aria-labelledby="contact-form-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content bg-medium-blue">
            <div class="d-flex w-100 p-2 justify-content-end">
                <div class="mobile-menu-icon">
                    <button class="hamburger hamburger--squeeze is-active" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span class="hamburger-box">
                        <span class="hamburger-inner" ></span>
                    </span>
                    </button>
                </div>
            </div>
            <div class="container mb-5">
                <div class="row">
                    <div class="col text-center">
                        <img class="w-100" style="max-width: 392px;" src="<?php echo bloginfo('template_directory');?>/assets/img/contact-title.svg" alt="" width="392" />
                    </div>
                </div>
            </div>
            <div class="modal-body wpcf7" role="form" id="wpcf7-f5-o1" lang="es-ES" dir="ltr">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="fw-title-italic">HERE FOR YOU</h2>
                            <p>Our Discord and Facebook communities are great places to ask questions and get help quickly from our players and the dev team! You can also contact us directly at hello@finalfuryvr.com or by using the form on this page.</p>
                            <img class="w-100 d-none d-md-block" src="<?php echo bloginfo('template_directory');?>/assets/img/contact-img.png" alt="https://klugeinteractive.com/" />
                        </div>
                        <div class="col-md-6">
                            <div class="wpcf7 js w-100" role="form" id="wpcf7-f132-o1" lang="es-ES" dir="ltr" class="w-100 wp">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                <form
                                    class="wpcf7-form init"
                                    id="contact_form_primary"
                                    role="form"
                                    method="post"
                                    name="contact_form_primary"
                                >
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="132">
                                        <?php 
                                            $plugin_data = get_plugin_data( ABSPATH . 'wp-content/plugins/contact-form-7/wp-contact-form-7.php' );
                                            echo '<input type="hidden" name="_wpcf7_version" value="'.$plugin_data['Version'].'">';
                                        ?>
                                        <input type="hidden" name="_wpcf7_locale" value="en_US">
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f132-o1">
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
                                                    placeholder="EMAIL"
                                                    required
                                                >
                                            </label>
                                        </div>
                                        <div class="form-group w-100 px-4 mb-4">
                                            <label class="parallel--label" for="inputTopic">
                                                <input
                                                    type="text"
                                                    class="form-control parallel--input"
                                                    id="inputTopic"
                                                    name="inputTopic"
                                                    placeholder="TOPIC"
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php bk_footer_after();?>

<?php bk_bottomline();?>

<?php wp_footer(); ?>
</body>

</html>