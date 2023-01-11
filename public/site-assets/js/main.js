$(window).on("load", function () {
  "use strict";
  // Loading
  $(".load_cont").fadeOut(function () {
    $(this).parent().fadeOut();
    $("body").css({
      "overflow-y": "visible",
    });
  });
  $(".intro_cont .animated , .intro_img").addClass("fadeInUp");

  // Animation
  AOS.init({
    offset: 100,
    duration: 700,
    easing: "ease-in-out",
  });
});

$(document).ready(function () {
  "use strict";
  // Header
  $(".menu-btn").click(function () {
    $(this).toggleClass("fa-times");
  });
  // Header Scroll
  $(window).scroll(function () {
    let scroll = $(window).scrollTop();
    if (scroll >= 3) {
      $(" header").addClass("shadow");
    } else {
      $(" header").removeClass("shadow");
    }
  });
  // Tilt
  $(".tilt").tilt({
    maxTilt: 30,
    perspective: 1000,
  });
  //up button
  var scrollbutton = $(".up_btn");
  $(window).scroll(function () {
    $(this).scrollTop() >= 1000
      ? scrollbutton.addClass("show")
      : scrollbutton.removeClass("show");
  });

  // Mouse
  function mousecursor() {
    if ($("body")) {
      const e = document.querySelector(".cursor-inner"),
        t = document.querySelector(".cursor-outer");
      let n,
        i = 0,
        o = !1;
      (window.onmousemove = function (s) {
        o ||
          (t.style.transform =
            "translate(" + s.clientX + "px, " + s.clientY + "px)"),
          (e.style.transform =
            "translate(" + s.clientX + "px, " + s.clientY + "px)"),
          (n = s.clientY),
          (i = s.clientX);
      }),
        $("body").on("mouseenter", "a, .cursor-pointer", function () {
          e.classList.add("cursor-hover"), t.classList.add("cursor-hover");
        }),
        $("body").on("mouseleave", "a, .cursor-pointer", function () {
          ($(this).is("a") && $(this).closest(".cursor-pointer").length) ||
            (e.classList.remove("cursor-hover"),
            t.classList.remove("cursor-hover"));
        }),
        (e.style.visibility = "visible"),
        (t.style.visibility = "visible");
    }
  }
  $(function () {
    mousecursor();
  });
  $(".clients_slider").owlCarousel({
    loop: false,
    nav: false,
    dots: true,
    smartSpeed: 3000,
    autoplayHoverPause: true,
    margin: 15,
    autoplay: false,
    responsive: {
      0: { items: 1 },
      420: { items: 2 },
      577: { items: 3 },
      768: { items: 4 },
      992: { items: 5 },
      1200: { items: 6 },
    },
  });
});
