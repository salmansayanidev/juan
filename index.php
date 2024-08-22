<?php
include 'header.php'
?>


<main>


    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text"> </span></a></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [{
                        "proName": "FOREXCOM:SPXUSD",
                        "title": "S&P 500"
                    },
                    {
                        "proName": "FOREXCOM:NAS100",
                        "title": "NASDAQ 100"
                    },
                    {
                        "proName": "BITSTAMP:BTCUSD",
                        "title": "Bitcoin"
                    },
                    {
                        "proName": "BITSTAMP:ETHUSD",
                        "title": "Ethereum"
                    },
                    {
                        "description": "SPY",
                        "proName": "AMEX:SPY"
                    },
                    {
                        "description": "QQQ",
                        "proName": "NASDAQ:QQQ"
                    },
                    {
                        "description": "GOLD OZ",
                        "proName": "TVC:GOLD"
                    },
                    {
                        "description": "DJI",
                        "proName": "CAPITALCOM:US30"
                    },
                    {
                        "description": "USD INDEX",
                        "proName": "CAPITALCOM:DXY"
                    },
                    {
                        "description": "NVDA",
                        "proName": "NASDAQ:NVDA"
                    },
                    {
                        "description": "MSFT",
                        "proName": "NASDAQ:MSFT"
                    },
                    {
                        "description": "TSLA",
                        "proName": "NASDAQ:TSLA"
                    },
                    {
                        "description": "AAPL",
                        "proName": "NASDAQ:AAPL"
                    },
                    {
                        "description": "GOAL",
                        "proName": "NASDAQ:META"
                    },
                    {
                        "description": "GOOGL",
                        "proName": "NASDAQ:GOOGL"
                    },
                    {
                        "description": "AMZN",
                        "proName": "NASDAQ:AMZN"
                    }
                ],
                "showSymbolLogo": true,
                "isTransparent": false,
                "displayMode": "adaptive",
                "colorTheme": "dark",
                "locale": "in"
            }
        </script>
    </div>


    <section class="banner-section">
        <div class="container">
            <div class="row justify-content-between align-items-center med-justify-center">
                <div class="col-12 col-lg-6">
                    <div class="text-med-center">
                        <h3 class="para mb-2">Welcome To Flex Trading</h3>
                        <h1 class="sec-title mb-3"><span class="text-gradient">Investin</span> <br> Stock Market For A Brighter Tomorrow</h1>
                        <p class="sm-para text-white">We will show you the best way to be an option in selling and buying cryptocurrency assets</p>
                        <a class="sec-link mt-5" href="#">
                            <span class="">Live Trading Rooms</span>
                            <span class="circle"><i class="fa-solid fa-minus fa-rotate-90"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-9 col-lg-5">
                    <img class="img-fluid bnner-right-img" src="./assets/images/bnner-right-img.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="about-us-section py-5rem">
        <div class="container">
            <div class="row justify-content-between align-items-center med-justify-center column-reverse">
                <div class="col-12 col-md-9 col-lg-5">
                    <img class="img-fluid about-us-img" src="./assets/images/about-us-img.png" alt="">
                </div>
                <div class="col-12 col-lg-6">
                    <div class="text-med-center">
                        <h2 class="sm-title text-gradient mb-2">About Us</h2>
                        <h1 class="sb-title text-black">Different Services <br> That Combines: Practical Trade Signals</h1>
                        <div class="results-list mt-5">
                            <div class="result-area">
                                <span class="result-tag">Our Users</span>
                                <h3 class="result-count">12M+</h3>
                            </div>
                            <div class="result-area">
                                <span class="result-tag">Active Transaction</span>
                                <h3 class="result-count">100M+</h3>
                            </div>
                            <div class="result-area">
                                <span class="result-tag">Brand Partner</span>
                                <h3 class="result-count">300+</h3>
                            </div>
                        </div>
                        <p class="sm-para mt-4 mb-5">Has become the best choice to become a platform that accommodates users in asset transactions</p>
                        <a class="primary-btn text-decoration-none" href="#">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tips-section py-5rem">
        <div class="container">
            <div class="row justify-content-between align-items-center med-justify-center ">
                <div class="col-12 col-lg-5">
                    <div class="text-med-center">
                        <h1 class="sb-title text-white  mb-5">Learn More Tips In Our Transactions</h1>
                        <p class="sm-para text-white opacity-60 mb-4">We provide various tutorials in the form of videos specifically for our users to be able to maximize our platform</p>
                        <a class="sec-link border-white" href="#">
                            <span class="">See our videos</span>
                            <span class="text-white"><i class="fa-solid fa-video"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-9 col-lg-6">
                    <div class="tip-video-area position-relative">
                        <video class="img-fluid tip-video" poster="./assets/images/tips-sec-img.png" src="./assets/videos/dummy-video.mp4"></video>
                        <button class="tip-video-btn" id="playPauseBtn" type="button">
                            <i class="bi bi-play" id="playPauseIcon"></i>
                        </button>
                        <button type="button" id="volume-btn" class="volume-btn">
                            <i class="fa-solid fa-volume-high" id="volume-icon"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features-section py-5rem">
        <div class="container">
            <div class="row justify-content-between align-items-center mb-5">
                <div class="col-12 col-lg-6">
                    <h1 class="sb-title purple text-med-center">Best Features For Users Convenience</h1>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="text-med-center">
                        <p class="sm-para opacity-60 text-black mb-4">Here our features that we present to make it easier for each of our users</p>
                        <a class="sm-para text-black text-decoration-none d-inline-block" href="#">
                            Let’s know more
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pt-4">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-box text-center">
                        <img class="img-fluid feature-img" src="./assets/images/feature-img-1.png" alt="">
                        <h2 class="feature-title text-gradient text-center mb-5">Easy Payment</h2>
                        <p class="sm-para opacity-60 text-white text-center">Easier payments with many options to sell or buy in our transactions</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-box text-center">
                        <img class="img-fluid feature-img" src="./assets/images/feature-img-2.png" alt="">
                        <h2 class="feature-title text-gradient text-center mb-5">High Security</h2>
                        <p class="sm-para opacity-60 text-white text-center">Security system with high technology and encryption of every user's data</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-box text-center">
                        <img class="img-fluid feature-img" src="./assets/images/feature-img-3.png" alt="">
                        <h2 class="feature-title text-gradient text-center mb-5">Best Ecosystem</h2>
                        <p class="sm-para opacity-60 text-white text-center">The services we provide with full support for the convenience of our users</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        include 'flex-team-section.php'
    ?>

    <section class="testimonial-section py-5rem">
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
                    <div class="swiper testimonial-slider">
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

    <section class="newsletter-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-6">
                    <div class="text-center">
                        <h1 class="sb-title purple mb-4">Join our news letter</h1>
                        <p class="sm-para opacity-60 text-black mb-5">Let's join our platform community and start investing in cryptocurrency</p>
                        <form action="">
                            <div class="newsletter-field-area">
                                <input type="email" required placeholder="enter your email" class="input-field" name="" id="">
                                <button class="submit-btn" type="submit">
                                    Submit Now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include 'footer.php'
?>