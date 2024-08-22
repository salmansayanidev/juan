<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/style/slick.css">
    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="stylesheet" href="./assets/style/responsive.css">
    <title>Flex Trading</title>
</head>
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
                <div class="col-5 col-md-4 col-lg-3">
                    <nav class="top-nav">
                        <ul class="top-nav-list">
                            <li class="">
                                <a class="top-link" href="#">
                                    about us
                                </a>
                            </li>
                            <li class="">
                                <a class="top-link" href="#">
                                    our reviews
                                </a>
                            </li>
                            <li class="">
                                <a class="top-link" href="#">
                                    contact us
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-7 col-md-5 col-lg-4">
                    <ul class="d-flex justify-content-end align-items-center gap-5 top-end-area">
                        <li class="d-flex align-items-center gap-3">
                            <div class="top-user-img-area">
                                <img class="user-img img-fluid" src="./assets/images/user-img.png" alt="">
                            </div>
                            <div class="">
                                <a class="top-link text-uppercase" href="#">
                                    login
                                </a>
                            </div>
                            <div class="">
                                <span class="top-link">
                                    /
                                </span>
                            </div>
                            <div class="">
                                <a class="top-link text-uppercase" href="#">
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
                                    <li class="">
                                        <button class="top-link text-uppercase d-flex justify-content-start align-items-center gap-3 text-black flag_link eng dropdown-item default" data-lang="en">
                                            <img class="img-fluid flag-img" src="./assets/images/flag-img-1.png" alt="">  
                                            Eng
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
                                <a class="link" href="#">
                                    Trader’s Hub
                                    <i class="fa-solid fa-angle-down"></i>
                                </a>
                                <button class="dropdown-btn head-drop-btn" type="button">
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <ul class="head-dropdown-list">
                                    <li class="">
                                        <a class="link dropdown-link text-white" href="#">
                                            Screeners/Indicators
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="link dropdown-link text-white" href="#">
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
                                        <a class="link dropdown-link text-white" href="#">
                                            The Alerts
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="link dropdown-link text-white" href="#">
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
                                <a class="link" href="#">
                                    Live Trading Rooms
                                    <i class="fa-solid fa-angle-down"></i>
                                </a>
                                <button class="dropdown-btn head-drop-btn" type="button">
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <ul class="head-dropdown-list">
                                    <li class="">
                                        <a class="link dropdown-link text-white" href="#">
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
                                        <a class="link dropdown-link text-white" href="#">
                                            Newsletters
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="link dropdown-link text-white" href="#">
                                            Our Blogs
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="link dropdown-link text-white" href="#">
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