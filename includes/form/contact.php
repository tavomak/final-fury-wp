<?php ?>

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
            <div class="form-octagon">
              <label class="form-octagon--outer" for="inputName">
                  <input
                      type="text"
                      class="form-control form-octagon--inner"
                      id="inputName"
                      name="inputName"
                      placeholder="YOUR NAME"
                      required
                  >
              </label>
            </div>
          </div>
          <div class="form-group w-100 px-4 mb-4">
            <div class="form-octagon">
              <label class="form-octagon--outer" for="inputEmail">
                  <input
                      type="email"
                      class="form-control form-octagon--inner"
                      id="inputEmail"
                      name="inputEmail"
                      placeholder="EMAIL"
                      required
                  >
              </label>
            </div>
          </div>
          <div class="form-group w-100 px-4 mb-4">
            <div class="form-octagon">
              <label class="form-octagon--outer" for="inputTopic">
                  <input
                      type="text"
                      class="form-control form-octagon--inner"
                      id="inputTopic"
                      name="inputTopic"
                      placeholder="TOPIC"
                      required
                  >
              </label>
            </div>
          </div>
          <div class="form-group w-100 px-4 mb-4">
            <div class="form-octagon">
              <label class="form-octagon--outer" for="inputTextArea">
                <textarea
                    type="text"
                    class="form-control form-octagon--inner"
                    id="inputTextArea"
                    name="inputTextArea"
                    placeholder="TELL US MORE."
                    required
                ></textarea>
              </label>
            </div>
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