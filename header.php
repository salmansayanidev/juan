<?php
include "head.php"
?>

<body>

    <div class="top-area">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-md-3 col-lg-2">
                    <ul class="social-icons-list top-res-none">
                        <li class="social-icon-area">
                            <a class="social-icon-link" href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="social-icon-area">
                            <a class="social-icon-link" href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li class="social-icon-area">
                            <a class="social-icon-link" href="#">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                        </li>
                        <li class="social-icon-area">
                            <a class="social-icon-link" href="#">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </li>
                        <li class="social-icon-area">
                            <a class="social-icon-link" href="#">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <nav class="top-nav">
                        <ul class="top-nav-list">
                            <li class="">
                                <a class="top-link" href="about-us.php">
                                    about us
                                </a>
                            </li>
                            <li class="">
                                <a class="top-link" href="our-reviews.php">
                                    our reviews
                                </a>
                            </li>
                            <li class="">
                                <a class="top-link" href="contact-us.php">
                                    contact us
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-12 col-md-5 col-lg-4">
                    <ul class="d-flex justify-content-center justify-content-md-end justify-content-lg-end align-items-center gap-5 top-end-area">
                        <li class="d-flex align-items-center gap-3">
                            <div class="top-user-img-area">
                                <img class="user-img img-fluid" src="./assets/images/user-img.png" alt="">
                            </div>
                            <div class="">
                                <a class="top-link text-uppercase" href="login.php">
                                    login
                                </a>
                            </div>
                            <div class="">
                                <span class="top-link">
                                    /
                                </span>
                            </div>
                            <div class="">
                                <a class="top-link text-uppercase" href="signup.php">
                                    signup
                                </a>
                            </div>
                        </li>
                        <li class="">
                            <a class="top-link text-uppercase" href="#">
                                client portal
                            </a>
                        </li>
                        <li>
                            <div class="translater-area" style="display: none;">
                                <div id="google_translate_element"></div>
                            </div>
                            <div class="dropdown dropdown-language">
                                <button class="top-link text-uppercase d-flex justify-content-start align-items-center gap-3 dropdown-toggle trans-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img class="img-fluid flag-img main-flg" src="./assets/images/flag-img-1.png" alt="">
                                    Eng
                                </button>
                                <ul class="dropdown-menu flag">
                                    <li class="mb-2">
                                        <button class="top-link text-uppercase d-flex justify-content-start align-items-center gap-3 text-black flag_link eng dropdown-item default" data-lang="en">
                                            <img class="img-fluid drop-flag flag-img" src="./assets/images/flag-img-1.png" alt="">
                                            Eng
                                        </button>
                                    </li>
                                    <li class="mb-2">
                                        <button class="top-link text-uppercase d-flex justify-content-start align-items-center gap-3 text-black flag_link ar dropdown-item" data-lang="ar">
                                            <img class="img-fluid drop-flag flag-img" src="./assets/images/flag-img-2.png" alt="">
                                            Arabic
                                        </button>
                                    </li>
                                    <li class="mb-2">
                                        <button class="top-link text-uppercase d-flex justify-content-start align-items-center gap-3 text-black flag_link zh-CN dropdown-item" data-lang="zh-CN">
                                            <img class="img-fluid drop-flag flag-img" src="./assets/images/flag-img-3.png" alt="">
                                            Chinese (Simplified)
                                        </button>
                                    </li>
                                    <li class="mb-2">
                                        <button class="top-link text-uppercase d-flex justify-content-start align-items-center gap-3 text-black flag_link nl dropdown-item" data-lang="nl">
                                            <img class="img-fluid drop-flag flag-img" src="./assets/images/flag-img-4.png" alt="">
                                            Dutch
                                        </button>
                                    </li>
                                    <li class="mb-2">
                                        <button class="top-link text-uppercase d-flex justify-content-start align-items-center gap-3 text-black flag_link fr dropdown-item" data-lang="fr">
                                            <img class="img-fluid drop-flag flag-img" src="./assets/images/flag-img-5.png" alt="">
                                            French
                                        </button>
                                    </li>
                                    <li class="mb-2">
                                        <button class="top-link text-uppercase d-flex justify-content-start align-items-center gap-3 text-black flag_link de dropdown-item" data-lang="de">
                                            <img class="img-fluid drop-flag flag-img" src="./assets/images/flag-img-6.png" alt="">
                                            German
                                        </button>
                                    </li>
                                    <li class="mb-2">
                                        <button class="top-link text-uppercase d-flex justify-content-start align-items-center gap-3 text-black flag_link it dropdown-item" data-lang="it">
                                            <img class="img-fluid drop-flag flag-img" src="./assets/images/flag-img-7.png" alt="">
                                            Italian
                                        </button>
                                    </li>
                                    <li class="mb-2">
                                        <button class="top-link text-uppercase d-flex justify-content-start align-items-center gap-3 text-black flag_link pt dropdown-item" data-lang="pt">
                                            <img class="img-fluid drop-flag flag-img" src="./assets/images/flag-img-8.png" alt="">
                                            Portuguese
                                        </button>
                                    </li>
                                    <li class="mb-2">
                                        <button class="top-link text-uppercase d-flex justify-content-start align-items-center gap-3 text-black flag_link ru dropdown-item" data-lang="ru">
                                            <img class="img-fluid drop-flag flag-img" src="./assets/images/flag-img-9.png" alt="">
                                            Russian
                                        </button>
                                    </li>
                                    <li class="mb-2">
                                        <button class="top-link text-uppercase d-flex justify-content-start align-items-center gap-3 text-black flag_link es dropdown-item" data-lang="es">
                                            <img class="img-fluid drop-flag flag-img" src="./assets/images/flag-img-10.png" alt="">
                                            Spanish
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-lg-2 col-xl-3">
                    <a class="text-decoration-none" href=".">
                        <img class="img-fluid logo" src="./assets/images/logo.png" alt="">
                    </a>
                </div>
                <div class="col-12 col-lg-9 col-xl-8 ordr-md-1">
                    <nav class="header-navigation">
                        <button class="menu-btn menu-cls-btn" type="button">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                        <ul class="header-nav">
                            <li class="position-relative header-nav-li">
                                <a class="link" href="elite-trading-signals.php">
                                    Elite Trading Signals
                                    <i class="fa-solid fa-angle-down"></i>
                                </a>
                                <button class="dropdown-btn head-drop-btn" type="button">
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <ul class="head-dropdown-list">
                                    <li class="">
                                        <a class="link dropdown-link text-white" href="sniper-entries-stocks.php">
                                            Sniper Entries Stocks
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="link dropdown-link text-white" href="sniper-entries-crypto.php">
                                            Sniper Entries Crypto
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="link dropdown-link text-white" href="sniper-entries-commodities-futures-membership.php">
                                            Sniper Entries Commodities / Futures Membership
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="link dropdown-link text-white" href="sniper-entries-forex-membership.php">
                                            Sniper Entries Forex Membership
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="position-relative header-nav-li">
                                <a class="link" href="traders-hub.php">
                                    Trader’s Hub
                                    <i class="fa-solid fa-angle-down"></i>
                                </a>
                                <button class="dropdown-btn head-drop-btn" type="button">
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <ul class="head-dropdown-list">
                                    <li class="">
                                        <a class="link dropdown-link text-white" href="screeners-indicators.php">
                                            Screeners/Indicators
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="link dropdown-link text-white" href="trading-news.php">
                                            Trading News
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="position-relative header-nav-li">
                                <a class="link" href="#">
                                    Courses
                                    <i class="fa-solid fa-angle-down"></i>
                                </a>
                                <button class="dropdown-btn head-drop-btn" type="button">
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <ul class="head-dropdown-list">
                                    <li class="">
                                        <a class="link dropdown-link text-white" href="the-alerts.php">
                                            The Alerts
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="link dropdown-link text-white" href="the-flex-alpha-live-trading-room.php">
                                            The Flex Alpha Live Trading Room
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="position-relative header-nav-li">
                                <a class="link" href="#">
                                    Trading Courses
                                </a>
                            </li>

                            <li class="position-relative header-nav-li">
                                <a class="link" href="live-trading-rooms.php">
                                    Live Trading Rooms
                                    <i class="fa-solid fa-angle-down"></i>
                                </a>
                                <button class="dropdown-btn head-drop-btn" type="button">
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <ul class="head-dropdown-list">
                                    <li class="">
                                        <a class="link dropdown-link text-white" href="flex-alpha-live-trading-room.php">
                                            Flex Alpha – Live Trading Room
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="position-relative header-nav-li">
                                <a class="link" href="#">
                                    Resources/Tools
                                    <i class="fa-solid fa-angle-down"></i>
                                </a>
                                <button class="dropdown-btn head-drop-btn" type="button">
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <ul class="head-dropdown-list">
                                    <li class="">
                                        <a class="link dropdown-link text-white" href="newsletter.php">
                                            Newsletters
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="link dropdown-link text-white" href="our-blog.php">
                                            Our Blogs
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="link dropdown-link text-white" href="alpha-reports.php">
                                            Alpha Reports
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div class="col-6 col-lg-1">
                    <div class="header-btn-area text-end">
                        <button class="head-btn search-popup-btn" type="button">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                        <button class="menu-btn" type="button">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var currentUrl = window.location.href;
            var links = document.querySelectorAll('.dropdown-link');

            links.forEach(function(link) {
                if (link.href === currentUrl) {
                    link.classList.add('active');
                }
            });
        });
    </script>