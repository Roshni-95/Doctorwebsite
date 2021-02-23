$(document).ready(function() {
  $(window).scroll(function() {
    if (this.scrollY > 500) {
      $(".navbar").addClass("nav-scrolled");
    } else {
      $(".navbar").removeClass("nav-scrolled");
    }
    if (this.scrollY > 500) {
      $(".dropdown-menu").addClass("dropdown-scrolled-menu");
    } else {
      $(".dropdown-menu").removeClass("dropdown-scrolled-menu");
    }

  });
});
