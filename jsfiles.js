(function($) {
  $("#setting").on("click", function(e) {
    e.preventDefault();
    $(".menu").slideToggle("slow");
  });
  $("#close").on("click", function(e) {
    e.preventDefault();
    $(".menu").slideToggle("slow");
  });
  $("#sub_1").on("click", function(e) {
    e.preventDefault();
    $(".sub1").slideToggle("slow");
  });
  $("#sub_2").on("click", function(e) {
    e.preventDefault();
    $(".sub2").slideToggle("slow");
  });
  $("#sub_3").on("click", function(e) {
    e.preventDefault();
    $(".sub3").slideToggle("slow");
  });
  $("#sub_4").on("click", function(e) {
    e.preventDefault();
    $(".sub4").slideToggle("slow");
  });
  $("#sub_5").on("click", function(e) {
    e.preventDefault();
    $(".sub5").slideToggle("slow");
  });
  $("#sub_6").on("click", function(e) {
    e.preventDefault();
    $(".sub6").slideToggle("slow");
  });
  $("#quick-menu").on("click", function(e) {
    e.preventDefault();
    $(".sub9").slideToggle("linear");
  });
  $(window).resize(function() {
    if ($(window).width() > 1200) {
      $(".menu").css("display", "block");
    }
    if ($(window).width() < 1200) {
      $(".menu").css("display", "none");
    }
  });
})(jQuery);
