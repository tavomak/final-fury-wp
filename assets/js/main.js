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

  const moveListIcons = $(".move-list--icon-link");
  const moveListVideo = $(".move-list--video");
  const moveListVideoEmbed = $(".move-list--video-iframe");


  $.each(moveListIcons, function (key, item) {
    if ($(this).is(".move-list--active")) {
      if ($(this).data("type") === "youTube") {
       moveListVideoEmbed.attr({
         src: "https://www.youtube.com/embed/" + $(this).data("source") + "?feature=oembed&enablejsapi=1&enablejsapi=1&autoplay=1&mute=1",
       })
      } else {
        moveListVideo.attr({
          src: $(this).data("source"),
        }).removeClass("d-none");
      }
    }
  });

  $(moveListIcons).on("click", function (e) {
    e.preventDefault();
    $('.icon--on').addClass('d-none');
    $('.icon--off').removeClass('d-none');
    $(this).find('.icon--off').addClass('d-none');
    $(this).find('.icon--on').removeClass('d-none');
    const { name, desc, type, source } = $(this).data();
    $(".move-list--text-title").text(name);
    $(".move-list--text-description").text(desc);
    if (type === "youTube") {
      moveListVideoEmbed.attr({
        src: "https://www.youtube.com/embed/" + source + "?feature=oembed&enablejsapi=1&enablejsapi=1&autoplay=1&mute=1",
      }).removeClass("d-none");
    } else {
      moveListVideo.attr({
        src: source,
      }).removeClass("d-none");
    }
  })

  $('.voice-button').on('click', function (e) {
    e.preventDefault();

    const audioElements = $('.voice-audio');
    const currentIndex = $(this).data('currentIndex') || 0;

    audioElements.each(function() {
      this.pause();
      this.currentTime = 0;
    });

    $('.theme-audio')[0].pause();
  
    const audioElement = audioElements[currentIndex];
    if (audioElement.paused) {
      audioElement.play();
    } else {
      audioElement.pause();
    }

    const nextIndex = (currentIndex + 1) % audioElements.length;
    $(this).data('currentIndex', nextIndex);
  });

  $('.theme-button').on('click', function (e) {
    e.preventDefault();
    const voiceElements = $('.voice-audio');

    voiceElements.each(function() {
      this.pause();
    });

    const audioElement = $('.theme-audio')[0];

    if (audioElement.paused) {
      audioElement.play();
    } else {
      audioElement.pause();
    }
});

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

  $(".wpcf7").on("wpcf7mailsent", function (event) {
    $("#contact-form-modal").modal("hide");
    Toastify({
      text: "Your message was sent successfully",
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
    $('.wpcf7-form')[0].reset();
  });

  $(".wpcf7").on("wpcf7mailfailed", function (event) {
    Toastify({
      text: "your Message was not sent",
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
