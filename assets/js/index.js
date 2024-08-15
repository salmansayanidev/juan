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

playPauseBtn.addEventListener("click", function () {
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

volumeBtn.addEventListener("click", function () {
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
    640: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 4,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
