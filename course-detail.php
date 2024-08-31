<?php
include "header.php"
?>

<main>
    <section class="tutor-profile-sec ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tutor-profile-area">
                        <div class="row">
                            <div class="col-12">
                                <div class="course-detail-area mb-5">
                                    <div class="d-flex justify-content-start align-items-center gap-4">
                                        <div class="alert-box-rating-area gap-2">
                                            <i class="fa-solid fa-star rated"></i>
                                            <i class="fa-solid fa-star rated"></i>
                                            <i class="fa-solid fa-star rated"></i>
                                            <i class="fa-solid fa-star rated"></i>
                                            <i class="fa-solid fa-star rated"></i>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center gap-4">
                                            <span class="rating-no">5</span>
                                            <span class="rating-qty">(2 Ratings)</span>
                                        </div>
                                    </div>
                                    <h2 class="course-title mt-4 mb-4">Alert Course 1</h2>
                                    <div class="">
                                        <p class="list-para fs-2 text-black fw-semibold"><span class="rating-qty fs-3">Categories: </span>The Alerts</p>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center gap-4">
                                        <button class="course-wishlist-btn" type="button">
                                            <i class="fa-regular fa-bookmark"></i>
                                            wishlist
                                        </button>
                                        <button class="course-wishlist-btn share-popup" type="button">
                                            <i class="fa-solid fa-share"></i>
                                            share
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="course-detail-main position-relative">
                                    <div class="row">
                                        <div class="col-12 col-lg-8">

                                            <div class="course-left-area">
                                                <img class="img-fluid course-detail-img mb-5" src="./assets/images/course-detail-img.png" alt="">
                                                <ul class="course-detail-tabs-btns">
                                                    <li class="">
                                                        <button data-view="Course-Info" class="course-detail-tabs-btn active" type="button">
                                                            Course Info
                                                        </button>
                                                    </li>
                                                    <li class="">
                                                        <button data-view="Reviews" class="course-detail-tabs-btn" type="button">
                                                            Reviews
                                                        </button>
                                                    </li>
                                                    <li class="">
                                                        <button data-view="Announcements" class="course-detail-tabs-btn" type="button">
                                                            Announcements
                                                        </button>
                                                    </li>
                                                </ul>


                                                <div data-content="Course-Info" class="course-detail-tab-content active">
                                                    <h4 class="course-sb-title mt-5 mb-4">About Course</h4>
                                                    <p class="list-para text-black mb-5">Learn How To Build The Perfect Diet & Meal Plan For Improved Health, Better Weight Loss And More Muscle Gains Hi, I'm Felix Harder fitness and dieting coach and amazon best selling author. My "Nutrition Masterclass" is designed for anyone who wants to get the most out of their diet, no matter if you're an athlete, bodybuilder or simply want to live a healthier life.</p>
                                                    <div class="course-show-more-area">
                                                        <p class="list-para text-black mb-4">This content is for members only.</p>
                                                        <div class=" d-flex justify-content-start align-items-center gap-4 mb-5">
                                                            <a class="primary-btn primary-btn-2 text-decoration-none" href="login.php">
                                                                Login
                                                            </a>
                                                            <a class="primary-btn primary-btn-2 text-decoration-none" href="#">
                                                                Join Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <button class="course-wishlist-btn show-more-btn" type="button">
                                                        <i class="fa-solid fa-plus"></i>
                                                        <span class="">Show More</span>
                                                    </button>
                                                    <h4 class="course-sb-title mt-5 mb-4">What Will You Learn?</h4>
                                                    <ul class="elite-list list-style-disc flex-ul-area">
                                                        <li class="mb-4">
                                                            <p class="list-para ">Understand the fundamentals of healthy dieting (calories, protein, carbs, fat, vitamins & minerals)</p>
                                                        </li>
                                                        <li class="mb-4">
                                                            <p class="list-para ">Create a diet that is perfect for your needs and lifestyle</p>
                                                        </li>
                                                        <li class="mb-4">
                                                            <p class="list-para ">Learn when, what and how much you should eat for optimal body composition</p>
                                                        </li>
                                                        <li class="mb-4">
                                                            <p class="list-para ">Build more muscle by optimizing your meal plan</p>
                                                        </li>
                                                        <li class="mb-4">
                                                            <p class="list-para ">Lose fat faster by optimizing your meal plan</p>
                                                        </li>
                                                        <li class="mb-4">
                                                            <p class="list-para ">Improve immunity and energy levels with the right vitamins and minerals</p>
                                                        </li>
                                                    </ul>
                                                    <h4 class="course-sb-title mt-5 mb-4">Course Content</h4>
                                                    <div class="course-content-list">
                                                        <div class="faq-box active">
                                                            <button type="button" class="faq-btn">
                                                                <span class="faq-question">Advance Concepts</span>
                                                                <span class="faq-icon">
                                                                    <i class="fa-solid fa-angle-down"></i>
                                                                </span>
                                                            </button>
                                                            <ul class="faq-text-area">
                                                                <li class="course-content-li">
                                                                    <div class="d-flex justify-content-start align-items-center gap-3">
                                                                        <i class="fa-brands fa-youtube"></i>
                                                                        <p class="faq-para">Meal Planning Explained</p>
                                                                    </div>
                                                                    <div class="d-flex justify-content-start align-items-center gap-3">
                                                                        <span class="course-video-time">07:00</span>
                                                                        <i class="fa-solid fa-lock"></i>
                                                                    </div>
                                                                </li>
                                                                <li class="course-content-li">
                                                                    <div class="d-flex justify-content-start align-items-center gap-3">
                                                                        <i class="fa-brands fa-youtube"></i>
                                                                        <p class="faq-para">Macronutrients Explained</p>
                                                                    </div>
                                                                    <div class="d-flex justify-content-start align-items-center gap-3">
                                                                        <span class="course-video-time">07:00</span>
                                                                        <i class="fa-solid fa-lock"></i>
                                                                    </div>
                                                                </li>
                                                                <li class="course-content-li">
                                                                    <div class="d-flex justify-content-start align-items-center gap-3">
                                                                        <i class="fa-brands fa-youtube"></i>
                                                                        <p class="faq-para">Adjusting Your Diet To Build Muscle</p>
                                                                    </div>
                                                                    <div class="d-flex justify-content-start align-items-center gap-3">
                                                                        <span class="course-video-time">07:00</span>
                                                                        <i class="fa-solid fa-lock"></i>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="faq-box">
                                                            <button type="button" class="faq-btn">
                                                                <span class="faq-question">Basic Concepts</span>
                                                                <span class="faq-icon">
                                                                    <i class="fa-solid fa-angle-down"></i>
                                                                </span>
                                                            </button>
                                                            <ul class="faq-text-area">
                                                                <li class="course-content-li">
                                                                    <div class="d-flex justify-content-start align-items-center gap-3">
                                                                        <i class="fa-brands fa-youtube"></i>
                                                                        <p class="faq-para">Meal Planning Explained</p>
                                                                    </div>
                                                                    <div class="d-flex justify-content-start align-items-center gap-3">
                                                                        <span class="course-video-time">07:00</span>
                                                                        <i class="fa-solid fa-lock"></i>
                                                                    </div>
                                                                </li>
                                                                <li class="course-content-li">
                                                                    <div class="d-flex justify-content-start align-items-center gap-3">
                                                                        <i class="fa-brands fa-youtube"></i>
                                                                        <p class="faq-para">Macronutrients Explained</p>
                                                                    </div>
                                                                    <div class="d-flex justify-content-start align-items-center gap-3">
                                                                        <span class="course-video-time">05:49 </span>
                                                                        <i class="fa-solid fa-lock"></i>
                                                                    </div>
                                                                </li>
                                                                <li class="course-content-li">
                                                                    <div class="d-flex justify-content-start align-items-center gap-3">
                                                                        <i class="fa-brands fa-youtube"></i>
                                                                        <p class="faq-para">How Much Fat Should You Consume Per Day</p>
                                                                    </div>
                                                                    <div class="d-flex justify-content-start align-items-center gap-3">
                                                                        <span class="course-video-time">08:45</span>
                                                                        <i class="fa-solid fa-lock"></i>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div data-content="Reviews" class="course-detail-tab-content ">
                                                    <h4 class="course-sb-title mt-5 mb-5">Student Ratings & Reviews</h4>
                                                    <div class="course-review-area">

                                                        <div class="course-review-box d-flex justify-content-between align-items-center">
                                                            <div class="course-review-left text-center">
                                                                <h3 class="crs-main-rev-rat mb-4">4.5</h3>
                                                                <div class="alert-box-rating-area gap-2 justify-content-center">
                                                                    <i class="fa-solid fa-star fs-2 rated"></i>
                                                                    <i class="fa-solid fa-star fs-2 rated"></i>
                                                                    <i class="fa-solid fa-star fs-2 rated"></i>
                                                                    <i class="fa-solid fa-star fs-2 rated"></i>
                                                                    <i class="fa-solid fa-star fs-2 rated"></i>
                                                                </div>
                                                                <span class="rating-qty fs-3 mt-4 d-block">Total 2 Ratings</span>
                                                            </div>
                                                            <div class="course-review-right">
                                                                <div class="course-review-list mb-2">
                                                                    <div class="d-flex justify-content-start align-items-center gap-4">
                                                                        <i class="fa-regular fa-star rated fs-2"></i>
                                                                        <span class="rating-no fs-2 d-block">5</span>
                                                                    </div>
                                                                    <div class="progress flex-grow-1" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar" style="width: 50%"></div>
                                                                    </div>
                                                                    <div class="">
                                                                        <span class="rating-qty fs-3 d-block">1 Rating</span>
                                                                    </div>
                                                                </div>
                                                                <div class="course-review-list mb-2">
                                                                    <div class="d-flex justify-content-start align-items-center gap-4">
                                                                        <i class="fa-regular fa-star rated fs-2"></i>
                                                                        <span class="rating-no fs-2 d-block">4</span>
                                                                    </div>
                                                                    <div class="progress flex-grow-1" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar" style="width: 50%"></div>
                                                                    </div>
                                                                    <div class="">
                                                                        <span class="rating-qty fs-3 d-block">1 Rating</span>
                                                                    </div>
                                                                </div>
                                                                <div class="course-review-list mb-2">
                                                                    <div class="d-flex justify-content-start align-items-center gap-4">
                                                                        <i class="fa-regular fa-star rated fs-2"></i>
                                                                        <span class="rating-no fs-2 d-block">3</span>
                                                                    </div>
                                                                    <div class="progress flex-grow-1" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar" style="width: 0%"></div>
                                                                    </div>
                                                                    <div class="">
                                                                        <span class="rating-qty fs-3 d-block">1 Rating</span>
                                                                    </div>
                                                                </div>
                                                                <div class="course-review-list mb-2">
                                                                    <div class="d-flex justify-content-start align-items-center gap-4">
                                                                        <i class="fa-regular fa-star rated fs-2"></i>
                                                                        <span class="rating-no fs-2 d-block">2</span>
                                                                    </div>
                                                                    <div class="progress flex-grow-1" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar" style="width: 0%"></div>
                                                                    </div>
                                                                    <div class="">
                                                                        <span class="rating-qty fs-3 d-block">1 Rating</span>
                                                                    </div>
                                                                </div>
                                                                <div class="course-review-list mb-2">
                                                                    <div class="d-flex justify-content-start align-items-center gap-4">
                                                                        <i class="fa-regular fa-star rated fs-2"></i>
                                                                        <span class="rating-no fs-2 d-block">1</span>
                                                                    </div>
                                                                    <div class="progress flex-grow-1" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar" style="width: 0%"></div>
                                                                    </div>
                                                                    <div class="">
                                                                        <span class="rating-qty fs-3 d-block">1 Rating</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="course-review-box d-flex justify-content-between align-items-start">
                                                            <div class="course-review-left text-center">
                                                                <span class="rating-qty fs-3 mt-5 d-block">5 years ago</span>
                                                            </div>
                                                            <div class="course-review-right">
                                                                <div class="alert-box-rating-area gap-2">
                                                                    <i class="fa-solid fa-star fs-2 rated"></i>
                                                                    <i class="fa-solid fa-star fs-2 rated"></i>
                                                                    <i class="fa-solid fa-star fs-2 rated"></i>
                                                                    <i class="fa-solid fa-star fs-2 rated"></i>
                                                                    <i class="fa-regular fa-star fs-2 rated"></i>
                                                                </div>
                                                                <p class="list-para text-black mt-5">The course is extraordinary!! <br> It explains everything from A to Z regarding Nutrition and also there are some very valuable workout tips. <br> Great job!</p>
                                                            </div>
                                                        </div>

                                                        <div class="course-review-box d-flex justify-content-between align-items-start">
                                                            <div class="course-review-left text-center">
                                                                <span class="rating-qty fs-3 mt-5 d-block">5 years ago</span>
                                                            </div>
                                                            <div class="course-review-right">
                                                                <div class="alert-box-rating-area gap-2">
                                                                    <i class="fa-solid fa-star fs-2 rated"></i>
                                                                    <i class="fa-solid fa-star fs-2 rated"></i>
                                                                    <i class="fa-solid fa-star fs-2 rated"></i>
                                                                    <i class="fa-solid fa-star fs-2 rated"></i>
                                                                    <i class="fa-regular fa-star fs-2 rated"></i>
                                                                </div>
                                                                <p class="list-para text-black mt-5">The course is extraordinary!! <br> It explains everything from A to Z regarding Nutrition and also there are some very valuable workout tips. <br> Great job!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div data-content="Announcements" class="course-detail-tab-content ">
                                                    <p class="text-center list-para text-black mt-5">No Data Available in this Section</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-4">
                                            <div class="course-right-area">
                                                <div class="course-right-box-main mb-5">
                                                    <div class="course-right-box bg-gray brdr-btm-2px-gray">
                                                        <div class="before-login-course-box mb-4 d-none">
                                                            <h4 class="course-sb-title mb-4">Course Progress</h4>
                                                            <div class="">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <span class="list-para text-black">0/6</span>
                                                                    <span class="list-para text-black">0% Complete</span>
                                                                </div>
                                                                <div class="progress w-100 mt-4 mb-4" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar" style="width: 0%"></div>
                                                                </div>
                                                                <a class="rounded-2 py-3 px-4 primary-btn primary-btn-2 text-decoration-none border-2 w-100 text-center mb-4" href="lesson.php">
                                                                    Start Learning
                                                                </a>
                                                                <button class="rounded-2 py-3 px-4 primary-btn primary-btn-2 text-decoration-none border-2 w-100" type="button">
                                                                    Course Complete
                                                                </button>
                                                            </div>

                                                        </div>
                                                        <div class="before-login-course-box">
                                                            <h4 class="course-sb-title mb-4">Pick a plan</h4>
                                                            <div class="pick-radio-area mb-4">
                                                                <input class="pick-radio-input" type="radio" name="course_plan_radio" id="course-plan-1">
                                                                <label class="course-packp-label" for="course-plan-1">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <div class="d-flex justify-content-start align-items-center gap-4">
                                                                            <span class="planchecked-circle"></span>
                                                                            <h3 class="plan-name">Monthly</h3>
                                                                        </div>
                                                                        <div class="">
                                                                            <h4 class="course-plan-price">$49<span>/Mo</span></h4>
                                                                        </div>
                                                                    </div>
                                                                    <a class="text-decoration-none primary-btn primary-btn-2 mt-5 w-100 text-center rounded-3 course-buy-btn" href="membership-checkout.php">
                                                                        Buy Now
                                                                    </a>
                                                                </label>
                                                            </div>
                                                            <div class="pick-radio-area mb-4">
                                                                <input class="pick-radio-input" type="radio" name="course_plan_radio" id="course-plan-2">
                                                                <label class="course-packp-label" for="course-plan-2">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <div class="d-flex justify-content-start align-items-center gap-4">
                                                                            <span class="planchecked-circle"></span>
                                                                            <h3 class="plan-name">Quarterly</h3>
                                                                        </div>
                                                                        <div class="">
                                                                            <h4 class="course-plan-price">$129<span>/Mo</span></h4>
                                                                        </div>
                                                                    </div>
                                                                    <a class="text-decoration-none primary-btn primary-btn-2 mt-5 w-100 text-center rounded-3 course-buy-btn" href="membership-checkout.php">
                                                                        Buy Now
                                                                    </a>
                                                                </label>
                                                            </div>
                                                            <div class="pick-radio-area">
                                                                <input class="pick-radio-input" type="radio" name="course_plan_radio" id="course-plan-3">
                                                                <label class="course-packp-label" for="course-plan-3">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <div class="d-flex justify-content-start align-items-center gap-4">
                                                                            <span class="planchecked-circle"></span>
                                                                            <h3 class="plan-name">Yearly</h3>
                                                                        </div>
                                                                        <div class="">
                                                                            <h4 class="course-plan-price">$499<span>/Ye</span></h4>
                                                                        </div>
                                                                    </div>
                                                                    <a class="text-decoration-none primary-btn primary-btn-2 mt-5 w-100 text-center rounded-3 course-buy-btn" href="membership-checkout.php">
                                                                        Buy Now
                                                                    </a>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course-right-box bg-white">
                                                        <ul class="">
                                                            <li class="pick-plan-list d-flex justify-content-start align-items-center gap-4 mb-4">
                                                                <i class="fa-solid fa-chart-simple"></i>
                                                                <span class="list-para text-black">All Levels</span>
                                                            </li>
                                                            <li class="pick-plan-list d-flex justify-content-start align-items-center gap-4 mb-4">
                                                                <i class="fa-solid fa-graduation-cap"></i>
                                                                <span class="list-para text-black">1 Total Enrolled</span>
                                                            </li>
                                                            <li class="pick-plan-list d-flex justify-content-start align-items-center gap-4 mb-4">
                                                                <i class="fa-regular fa-clock"></i>
                                                                <span class="list-para text-black">4 hours Duration</span>
                                                            </li>
                                                            <li class="pick-plan-list d-flex justify-content-start align-items-center gap-4">
                                                                <i class="fa-solid fa-arrows-rotate"></i>
                                                                <span class="list-para text-black">July 2, 2024 Last Updated</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="course-right-box-main">
                                                    <div class="course-right-box bg-gray brdr-btm-2px-gray">
                                                        <h4 class="course-sb-title mb-5 fw-normal">A course by</h4>
                                                        <div class="d-flex justify-content-start align-items-center gap-4">
                                                            <span class="cirlce-user-img course-dtl">A</span>
                                                            <a class="plan-name text-decoration-none fw-semibold" href="tutor-profile-page.php">Admin</a>
                                                        </div>
                                                    </div>
                                                    <div class="course-right-box bg-white">
                                                        <h4 class="course-sb-title mb-4">Material Includes</h4>
                                                        <ul class="list-style-disc pick-plan-list-area mb-5">
                                                            <li class="pick-plan-list mb-4">
                                                                <span class="list-para text-black">4 hours on-demand video</span>
                                                            </li>
                                                            <li class="pick-plan-list mb-4">
                                                                <span class="list-para text-black">4 articles</span>
                                                            </li>
                                                            <li class="pick-plan-list mb-4">
                                                                <span class="list-para text-black">3 downloadable resources</span>
                                                            </li>
                                                            <li class="pick-plan-list mb-4">
                                                                <span class="list-para text-black">Full lifetime access</span>
                                                            </li>
                                                            <li class="pick-plan-list mb-4">
                                                                <span class="list-para text-black">Access on mobile and TV</span>
                                                            </li>
                                                            <li class="pick-plan-list">
                                                                <span class="list-para text-black">Certificate of Completion</span>
                                                            </li>
                                                        </ul>
                                                        <h4 class="course-sb-title mb-4">Requirements</h4>
                                                        <ul class="list-style-disc pick-plan-list-area mb-5">
                                                            <li class="pick-plan-list mb-4">
                                                                <span class="list-para text-black">No prior health knowledge is required or assumed</span>
                                                            </li>
                                                            <li class="pick-plan-list">
                                                                <span class="list-para text-black">A digital food scale will help but is not required</span>
                                                            </li>
                                                        </ul>
                                                        <h4 class="course-sb-title mb-4">Audience</h4>
                                                        <ul class="list-style-disc pick-plan-list-area">
                                                            <li class="pick-plan-list mb-4">
                                                                <span class="list-para text-black">Anyone wanting to learn the truth about dieting & meal planning</span>
                                                            </li>
                                                            <li class="pick-plan-list">
                                                                <span class="list-para text-black">Anyone with an open mind towards dieting</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

<div class="social-share-popup-wrap">
    <div class="social-share-popup position-relative">
        <button class="share-popup-cls-btn" type="button">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <h2 class="course-title text-center mb-4">Share Course</h2>
        <p class="list-para mb-4 fw-semibold text-black">Page Link</p>
        <div class="input-filed-area mb-5">
            <input class="news-input-field w-100 share-input" id="" value="" type="text" name="" >
        </div>
        <h2 class="course-title fw-semibold fs-1 text-center mb-5">Share On Social Media</h2>
        <div class="d-flex justify-content-center align-items-center gap-4">
            <a class="share-social-icon rounded-2 d-flex justify-content-center align-items-center gap-4 py-2 px-4 primary-btn primary-btn-2 text-decoration-none text-center " style="--bg-color:#1877F2;"  href="#">
                <i class="fa-brands fa-facebook-f"></i>
                Facebook
            </a>
            <a class="share-social-icon rounded-2 d-flex justify-content-center align-items-center gap-4 py-2 px-4 primary-btn primary-btn-2 text-decoration-none text-center" style="--bg-color:#1DA1F2;" href="#">
                <i class="fa-brands fa-x-twitter"></i>
                Twitter
            </a>
            <a class="share-social-icon rounded-2 d-flex justify-content-center align-items-center gap-4 py-2 px-4 primary-btn primary-btn-2 text-decoration-none text-center" style="--bg-color:#0077B5;" href="#">
                <i class="fa-brands fa-linkedin"></i>
                Linkedin
            </a>
        </div>
    </div>
</div>

<?php
include "footer.php"
?>


<script>

    const shareInput = document.querySelector(".share-input");

    shareInput.value = window.location.href;

    

    $('.share-popup').on("click" , function() {
        $('.social-share-popup-wrap').addClass("active");
    });
    $('.share-popup-cls-btn').on("click" , function() {
        $('.social-share-popup-wrap').removeClass("active");
    });

    $('.show-more-btn').on("click", function() {
        $('.course-show-more-area').toggleClass('active');

        if ($('.course-show-more-area').hasClass('active')) {
            $(".show-more-btn span").text("Show Less");
            $(".show-more-btn i").removeClass('fa-plus').addClass('fa-minus');

        } else {
            $(".show-more-btn span").text("Show More");
            $(".show-more-btn i").removeClass('fa-minus').addClass('fa-plus');
        }
    });


    // faqs js

    $(".faq-text-area").hide();
    $(".faq-box.active").find(".faq-text-area").show();

    $(".faq-btn").click(function() {
        var $currentFaqBox = $(this).closest(".faq-box");

        if (!$currentFaqBox.hasClass("active")) {
            $(".faq-text-area").slideUp();
            $(".faq-box").removeClass("active");
            $currentFaqBox.addClass("active");
            $currentFaqBox.find(".faq-text-area").slideDown();
        } else {
            $currentFaqBox.removeClass("active");
            $currentFaqBox.find(".faq-text-area").slideUp();
        }
    });

    const detailTabs = document.querySelectorAll("[data-view]");

    detailTabs.forEach((tab) => {
        tab.addEventListener("click", () => {
            detailTabs.forEach((tab) => {
                tab.classList.remove("active");
            });
            $("[data-content]").removeClass('active')
            $(`[data-content="${tab.dataset.view}"]`).addClass('active')
            tab.classList.add("active");
        });
    });
</script>