<?php ?>

<div class="wpcf7 brickcf7 w-100" role="form" id="wpcf7-f131-o1" lang="es-ES" dir="ltr" class="w-100 wp">
  <div class="screen-reader-response">
      <p role="status" aria-live="polite" aria-atomic="true"></p>
      <ul></ul>
  </div>
  <form
      class="wpcf7-form init"
      id="request_key"
      role="form"
      method="post"
      name="request_key"
  >
      <div style="display: none;">
          <input type="hidden" name="_wpcf7" value="131">
          <?php 
              $plugin_data = get_plugin_data( ABSPATH . 'wp-content/plugins/contact-form-7/wp-contact-form-7.php' );
              echo '<input type="hidden" name="_wpcf7_version" value="'.$plugin_data['Version'].'">';
          ?>
          <input type="hidden" name="_wpcf7_locale" value="en_US">
          <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f131-o1">
          <input type="hidden" name="_wpcf7_container_post" value="0">
      </div>
      <div class="container-fluid">
          <div class="form-group w-100  mb-4">
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
          <div class="form-group w-100  mb-4">
            <div class="form-octagon">
              <label class="form-octagon--outer" for="inputEmail">
                  <input
                      type="email"
                      class="form-control form-octagon--inner"
                      id="inputEmail"
                      name="inputEmail"
                      placeholder="YOUR EMAIL"
                      required
                  >
              </label>
            </div>
          </div>
          <div class="form-group w-100  mb-4">
            <div class="form-octagon">
              <label class="form-octagon--outer" for="inputPlatform">
                  <select class="form-select form-octagon--inner" aria-label="Select Platform">
                      <option selected>SELECT PLATFORM</option>
                      <option value="meta-quest">META QUEST</option>
                      <option value="sSteam-vr">STEAM VR</option>
                      <option value="playStation-vr-2">PLAYSTATION VR 2</option>
                  </select>
              </label>
            </div>
          </div>
          <div class="form-group w-100  mb-4">
            <div class="form-octagon">
              <label class="form-octagon--outer" for="inputPlatform">
                  <input
                      type="text"
                      class="form-control form-octagon--inner"
                      id="inputPlatform"
                      name="inputPlatform"
                      placeholder="WEBSITE / CHANNEL URL"
                      required
                  >
              </label>
            </div>
          </div>
          <div class="form-group w-100  mb-4">
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
            <span class="ajax-loader"></span>
          </div>
      </div>
  </form>
</div>