const scrollAction = $(window).scroll(function () {
  if ($(this).scrollTop() >= 730) {
    $(".menu-nav-fixed").fadeIn();
    $(".follow-button-pay").fadeIn();
    if (window.location.pathname.indexOf("proyectos") != 1) {
      $(".main-menu").addClass("fixed-menu-primary");
    }
  } else {
    $(".menu-nav-fixed").fadeOut();
    $(".follow-button-pay").fadeOut();
    if (window.location.pathname.indexOf("proyectos") != 1) {
      $(".main-menu").removeClass("fixed-menu-primary");
    }
  }
});

export default scrollAction;