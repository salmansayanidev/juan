<?php
include "header.php"
?>

<main>
    <section class="testimonial-section py-5rem testimonial-inner-section">
        <div class="container">
            <div class="row justify-content-between align-items-center mb-5 pb-3">
                <div class="col-12 col-lg-5">
                    <h1 class="sb-title text-white text-med-center">Testimonials From Our Platform Users</h1>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="testimonial-btn-area d-flex justify-content-start align-items-center gap-5">
                        <div class="swiper-pagination testimonial-pagination"></div>
                        <div class="testimonial-slider-btn-area d-flex justify-content-start align-items-center gap-4">
                            <button class="slider-btn test-pre" type="button">
                                <i class="fa-solid fa-arrow-left"></i>
                            </button>
                            <button class="slider-btn test-next" type="button">
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="swiper testimonial-inner-slider">
                        <div class="swiper-wrapper">

                            <div class="testmonial-box swiper-slide">
                                <div class="rating-star-area d-flex justify-content-start align-items-center gap-2 mb-5">
                                    <span class="fa fa-star rating-star"></span>
                                    <span class="fa fa-star rating-star"></span>
                                    <span class="fa fa-star rating-star"></span>
                                    <span class="fa fa-star rating-star"></span>
                                    <span class="fa fa-star rating-star"></span>
                                </div>
                                <p class="testimonial-para text-white opacity-60 mb-5">Is the best crypto asset trading platform that I have ever used, very good for long-term investment</p>
                                <div class="d-flex justify-content-start align-items-center gap-4">
                                    <div class="test-user-img-area">
                                        <img class="img-fluid test-user-img" src="./assets/images/testimonial-user-img-1.png" alt="">
                                    </div>
                                    <div class="test-user-name-area">
                                        <h2 class="test-user-name text-gradient mb-1">Christopher Smith</h2>
                                        <span class="test-tag testimonial-para text-white opacity-60 height-auto">Investor</span>
                                    </div>
                                </div>
                            </div>

                            <div class="testmonial-box swiper-slide">
                                <div class="rating-star-area d-flex justify-content-start align-items-center gap-2 mb-5">
                                    <span class="fa fa-star rating-star"></span>
                                    <span class="fa fa-star rating-star"></span>
                                    <span class="fa fa-star rating-star"></span>
                                    <span class="fa fa-star rating-star"></span>
                                    <span class="fa fa-star rating-star"></span>
                                </div>
                                <p class="testimonial-para text-white opacity-60 mb-5">Ecosystem and support system that really helps me especially in management and monitoring</p>
                                <div class="d-flex justify-content-start align-items-center gap-4">
                                    <div class="test-user-img-area">
                                        <img class="img-fluid test-user-img" src="./assets/images/testimonial-user-img-2.png" alt="">
                                    </div>
                                    <div class="test-user-name-area">
                                        <h2 class="test-user-name text-gradient mb-1">James Brian</h2>
                                        <span class="test-tag testimonial-para text-white opacity-60 height-auto">Trader</span>
                                    </div>
                                </div>
                            </div>

                            <div class="testmonial-box swiper-slide">
                                <div class="rating-star-area d-flex justify-content-start align-items-center gap-2 mb-5">
                                    <span class="fa fa-star rating-star"></span>
                                    <span class="fa fa-star rating-star"></span>
                                    <span class="fa fa-star rating-star"></span>
                                    <span class="fa fa-star rating-star"></span>
                                    <span class="fa fa-star rating-star"></span>
                                </div>
                                <p class="testimonial-para text-white opacity-60 mb-5">very good for long-term investment, Is the best crypto asset trading platform that I have ever used, </p>
                                <div class="d-flex justify-content-start align-items-center gap-4">
                                    <div class="test-user-img-area">
                                        <img class="img-fluid test-user-img" src="./assets/images/testimonial-user-img-3.png" alt="">
                                    </div>
                                    <div class="test-user-name-area">
                                        <h2 class="test-user-name text-gradient mb-1">Max Maximof</h2>
                                        <span class="test-tag testimonial-para text-white opacity-60 height-auto">Investor</span>
                                    </div>
                                </div>
                            </div>

                            <div class="testmonial-box swiper-slide">
                                <div class="rating-star-area d-flex justify-content-start align-items-center gap-2 mb-5">
                                    <span class="fa fa-star rating-star"></span>
                                    <span class="fa fa-star rating-star"></span>
                                    <span class="fa fa-star rating-star"></span>
                                    <span class="fa fa-star rating-star"></span>
                                    <span class="fa fa-star rating-star"></span>
                                </div>
                                <p class="testimonial-para text-white opacity-60 mb-5">Is the best crypto asset trading platform that I have ever used, very good for long-term investment</p>
                                <div class="d-flex justify-content-start align-items-center gap-4">
                                    <div class="test-user-img-area">
                                        <img class="img-fluid test-user-img" src="./assets/images/testimonial-user-img-1.png" alt="">
                                    </div>
                                    <div class="test-user-name-area">
                                        <h2 class="test-user-name text-gradient mb-1">Christopher Smith</h2>
                                        <span class="test-tag testimonial-para text-white opacity-60 height-auto">Investor</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



<?php
include "footer.php"
?>



<script>
    // testimonial slider

    var swiper = new Swiper(".testimonial-inner-slider", {
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
</script>