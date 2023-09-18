$(function () {
  /* 
	------------------------------------------------------------------
		SBJS
	------------------------------------------------------------------
	*/
  function logSource(sbData) {
    //console.log('Cookies are set! Your source is: ${sbData.current.src}');z
  }
  sbjs.init();
  /* 
	------------------------------------------------------------------
		PRELOAD
	------------------------------------------------------------------
    */
  let userNavigator = navigator.vendor;

  if (userNavigator === "Apple Computer, Inc.") {
    $(".cd-loader").remove();
  } else {
    $(window).on("load", function () {
      $(".cd-loader").fadeOut("slow", function () {
        $(this).remove();
      });
    });
  }

  /* 
	------------------------------------------------------------------
		Navbar
	------------------------------------------------------------------
    */
  $(window).scroll(function () {
    if ($(this).scrollTop() >= 80) {
      $(".main-menu").addClass("active");
    } else {
      $(".main-menu").removeClass("active");
    }
  });

  $(".mobile-primary-menu").on("click", function () {
    $(this).toggleClass("is-active");
    $("#navbarNavDropdown").toggleClass("show");
    $(".header").toggleClass("open");
  });

  /* 
	------------------------------------------------------------------
		Modal
	------------------------------------------------------------------
    */

  $(".contactModalBtn").on("click", function (e) {
    e.preventDefault();
    $("#contact-form-modal").modal("show");
  });

  $(".videoModalBtn").on("click", function (e) {
    e.preventDefault();
    $("#video-modal").modal("show");
  });

  $("#video-modal").on("hidden.bs.modal", function (event) {
    $(".youtubeVideo").each(function () {
      this.contentWindow.postMessage(
        '{"event":"command","func":"stopVideo","args":""}',
        "*"
      );
    });
  });

  /* 
	------------------------------------------------------------------
		Parallelogram
	------------------------------------------------------------------
    */

  $(".parallelogram").on("click", function (e) {
    e.preventDefault();
    $(".parallelogram").removeClass("parallelogram--active");
    $(".parallelogram--text").addClass("parallelogram--text-close");
    $(this)
      .find(".parallelogram--text")
      .removeClass("parallelogram--text-close");
    $(this).addClass("parallelogram--active");
  });

  /* 
	------------------------------------------------------------------
		Single
	------------------------------------------------------------------
    */
  if (data) {
    const moveList = data.move_list;
    const themeUri = data.base_url;
    console.log({ moveList });

    const createMoveList = ({ listOfItems: list }) => {
      const moveListIcons = $(".move-list--icons");
      const moveListVideo = $(".move-list--video");
      const moveListVideoEmbed = $(".move-list--video-iframe");

      moveListIcons.empty();

      $.each(list, function (key, value) {
        let activeUrl;
        let iconUrl;
        if (value.video_id) {
          activeUrl =
            "https://www.youtube.com/embed/" +
            value.video_id +
            "?feature=oembed&enablejsapi=1&enablejsapi=1&autoplay=1&mute=1";
          moveListVideoEmbed.attr({
            src: activeUrl,
          });
        } else {
          activeUrl = value?.video_file;
        }

        if (value.active) {
          iconUrl =
            value.move_icon_on ||
            `${themeUri}icon-${value.icon_type}-active.png`;
          moveListVideo.attr({
            poster: value.image,
            src: activeUrl,
          });
          $(".move-list--text-title").text(value.name);
          $(".move-list--text-description").text(value.description);
        } else {
          iconUrl =
            value.move_icon_off || `${themeUri}icon-${value.icon_type}.png`;
        }

        moveListIcons.append(`
              <li class="px-2" style="width: 20%">
                <a href="#" class="move-list--icon-link" data-name="${
                  value.name + "-" + key
                }" data-type="${value.video_source}">
                  <img class="w-100" src="${iconUrl}">
                </a>
              </li>
            `);
      });
    };

    createMoveList({ listOfItems: moveList });

    $(".move-list--icons").on("click", ".move-list--icon-link", function (e) {
      e.preventDefault();
      const isEmbed = $(this).data("type") === "youTube";
      const moveListVideo = $(".move-list--video");
      const moveListFigure = $(".move-list--figure");

      moveListVideo.fadeOut("fast", () => {
        const newArray = moveList.map((item, key) =>
          item.name + "-" + key === $(this).data("name")
            ? { ...item, active: true }
            : { ...item, active: false }
        );
        $(".move-list--icons").empty();
        createMoveList({ listOfItems: newArray });
      });

      if (isEmbed) {
        moveListFigure.removeClass("d-none");
        moveListVideo.addClass("d-none");
        moveListFigure.fadeIn();
      } else {
        moveListVideo.removeClass("d-none");
        moveListFigure.addClass("d-none");
        moveListVideo.fadeIn();
      }
    });
  }

  /* 
	------------------------------------------------------------------
		Formularios
	------------------------------------------------------------------
    */

  var sbjMedio = sbjs.get.current.mdm,
    sbjFuente = sbjs.get.current.src;

  $("#fuenteSbj").val(sbjFuente);
  $("#medioSbj").val(sbjMedio);

  /* 
	------------------------------------------------------------------
		Validacion de Formularios
	------------------------------------------------------------------
    */

  $(".wpcf7").on("wpcf7:mailsent", function (event) {
    $("#contacto-form-modal").modal("hide");
    Toastify({
      text: "Success",
      duration: 3000,
      close: true,
      gravity: "top", // `top` or `bottom`
      position: "right", // `left`, `center` or `right`
      stopOnFocus: true, // Prevents dismissing of toast on hover
      style: {
        background: "linear-gradient(to right, #00b09b, #96c93d)",
      },
      onClick: function () {}, // Callback after click
    }).showToast();
  });

  $(".wpcf7").on("wpcf7mailfailed", function (event) {
    console.log("Failed");
    Toastify({
      text: "Success",
      duration: 3000,
      close: true,
      gravity: "top", // `top` or `bottom`
      position: "right", // `left`, `center` or `right`
      stopOnFocus: true, // Prevents dismissing of toast on hover
      style: {
        background: "linear-gradient(to right, #ff5f6d, #ffc371)",
      },
      onClick: function () {}, // Callback after click
    }).showToast();
  });

  $(".wpcf7").on("wpcf7invalid", function () {
    console.log("invalid");
  });

  $(".wpcf7").on("wpcf7submit", function () {
    console.log("wpcf7submit");
  });
});
