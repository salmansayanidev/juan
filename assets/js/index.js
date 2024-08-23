// translator js

var flags = document.getElementsByClassName("flag_link");
const mainflg = document.querySelector(".main-flg");

function googleTranslateElementInit() {
  new google.translate.TranslateElement(
    {
      pageLanguage: "en",
      includedLanguages: "en,zh-CN",
    },
    "google_translate_element"
  );
}

Array.prototype.forEach.call(flags, function (e) {
  e.addEventListener("click", function () {
    var lang = e.getAttribute("data-lang");
    var languageSelect = document.querySelector("select.goog-te-combo");
    languageSelect.value = lang;
    var img = e.querySelector(".img-fluid");
    console.log(img.src);
    mainflg.src = img.src;
    languageSelect.dispatchEvent(new Event("change"));
  });
});

// tip video js

const video = document.querySelector(".tip-video");
const playPauseBtn = document.getElementById("playPauseBtn");
const playPauseIcon = document.getElementById("playPauseIcon");
const volumeBtn = document.getElementById("volume-btn");
const volumeIcon = document.getElementById("volume-icon");

playPauseBtn?.addEventListener("click", function () {
  if (video.paused) {
    video.play();
    playPauseIcon.classList.remove("bi-play");
    playPauseIcon.classList.add("bi-pause");
  } else {
    video.pause();
    playPauseIcon.classList.remove("bi-pause");
    playPauseIcon.classList.add("bi-play");
  }
});

volumeBtn?.addEventListener("click", function () {
  if (video.volume) {
    video.volume = false;
    volumeIcon.classList.remove("fa-volume-high");
    volumeIcon.classList.add("fa-volume-xmark");
  } else {
    video.volume = true;
    volumeIcon.classList.add("fa-volume-high");
    volumeIcon.classList.remove("fa-volume-xmark");
  }
});

// testimonial slider

var swiper = new Swiper(".testimonial-slider", {
  slidesPerView: 3,
  spaceBetween: 20,
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  autoplay: true,
  autoplaySpeed: 2000,
  speed: 500,
  loop: true,
  navigation: {
    nextEl: ".test-next",
    prevEl: ".test-pre",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },

    1024: {
      slidesPerView: 3,
    },
  },
});

// search popup js
$(".search-popup-btn").click(function () {
  $(".search-popup-wrap").toggleClass("active");
});

// header dropdown js

$(".header-nav-li").mouseover(function () {
  if (window.innerWidth > 991) {
    $(this).find(".head-dropdown-list").addClass("show");
  } else {
    $(this).find(".head-dropdown-list").removeClass("show");
  }
});

$(".header-nav-li").mouseleave(function () {
  if (window.innerWidth > 991) {
    $(this).find(".head-dropdown-list").removeClass("show");
  }
});

$(".head-drop-btn").click(function () {
  if (
    !$(this)
      .closest(".header-nav-li")
      .find(".head-dropdown-list")
      .hasClass("active")
  ) {
    $(".head-dropdown-list").removeClass("active");
    $(this)
      .closest(".header-nav-li")
      .find(".head-dropdown-list")
      .addClass("active");
  } else {
    $(".head-dropdown-list").removeClass("active");
  }
});

// menu js

$(".menu-btn").click(function () {
  $(".header-navigation").toggleClass("active");
});


