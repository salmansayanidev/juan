<?php
include 'header.php'
?>


<main>


    <div class="tradingview-widget-container mt-4">
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
                        <h1 class="sec-title text-gradient mb-3">Empowering Informed Decisions</h1>
                        <h1 class="sec-title mb-3">Unlock Your Trading Potential And Stay Ahead Of The Market</h1>
                        <p class="sm-para text-white">Our expert insights and real-time alerts empower you to trade smarter, faster, and with unparalleled confidence.</p>
                        <a class="sec-link mt-5" href="elite-trading-signals.php">
                            <span class="">Join Today</span>
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
                        <h1 class="sb-title text-black">Precision, Insight, Growth:</h1>
                        <p class="sm-para mt-4">Our mission is to provide precision trading signals and in-depth market analysis, enabling traders to make informed decisions</p>
                        <div class="results-list mt-5">
                            <div class="result-area">
                                <span class="result-tag">Win Rate</span>
                                <h3 class="result-count">80%+</h3>
                            </div>
                            <div class="result-area">
                                <span class="result-tag">% Gain/Trade</span>
                                <h3 class="result-count">5%+</h3>
                            </div>
                            <div class="result-area">
                                <span class="result-tag">Combined Trading Experience</span>
                                <h3 class="result-count">30 Years +</h3>
                            </div>
                        </div>
                        <p class="sm-para mt-4 mb-5">Delivering innovative trading solutions and educational resources that enhance trader performance and promote financial growth.</p>
                        <a class="primary-btn text-decoration-none" href="about-us.php">
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
                        <h1 class="sec-title text-white  mb-5">Stay ahead of the market with our Daily Market Analysis and Educational Tutorials.</h1>
                        <p class="sm-para text-white opacity-60 mb-4">Enhance your trading skills with our comprehensive tutorials, designed for traders of all levels, and start navigating the markets with confidence today.</p>
                        <a class="sec-link border-white" href="elite-trading-signals.php">
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
                    <h1 class="sb-title purple text-med-center">Trade Smarter with Flex Trading Insights</h1>
                </div>
                <!-- <div class="col-12 col-lg-4">
                    <div class="text-med-center">
                        <p class="sm-para opacity-60 text-black mb-4">Here our features that we present to make it easier for each of our users</p>
                        <a class="sm-para text-black text-decoration-none d-inline-block" href="#">
                            Let’s know more
                        </a>
                    </div>
                </div> -->
            </div>
            <div class="row justify-content-center pt-4">
                <div class="col-12 col-md-6 col-lg-4">
                    <a class=" text-decoration-none" href="elite-trading-signals.php">
                        <div class="feature-box text-center">
                            <img class="img-fluid feature-img" src="./assets/images/feature-img-4.png" alt="">
                            <h2 class="feature-title text-gradient text-center mb-5">Sniper Entries</h2>
                            <p class="sm-para opacity-60 text-white text-center">Gain access to meticulously curated swing trade alerts.</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <a class="text-decoration-none" href="#">
                        <div class="feature-box text-center">
                            <img class="img-fluid feature-img" src="./assets/images/feature-img-5.png" alt="">
                            <h2 class="feature-title text-gradient text-center mb-5">Trading Education</h2>
                            <p class="sm-para opacity-60 text-white text-center">Embark on your journey to trading excellence with Flex Trading today</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <a class=" text-decoration-none" href="live-trading-rooms.php">
                        <div class="feature-box text-center">
                            <img class="img-fluid feature-img" src="./assets/images/feature-img-6.png" alt="">
                            <h2 class="feature-title text-gradient text-center mb-5">Live Trading</h2>
                            <p class="sm-para opacity-60 text-white text-center">Experience the future of trading with Flex Alpha Live Trading Room</p>
                        </div>
                    </a>
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
                    <h1 class="sb-title text-white text-med-center">Testimonials From Our Subscribers</h1>
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
                                <p class="testimonial-para text-white opacity-60 mb-5">Flex Trading transformed my approach to the market. The daily analysis videos are a game-changer! I've been able to make more informed decisions and significantly improve my trading performance.</p>
                                <div class="d-flex justify-content-start align-items-center gap-4">
                                    <!-- <div class="test-user-img-area">
                                        <img class="img-fluid test-user-img" src="./assets/images/testimonial-user-img-1.png" alt="">
                                    </div> -->
                                    <div class="test-user-name-area">
                                        <h2 class="test-user-name text-gradient mb-1">Alex M</h2>
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
                                <p class="testimonial-para text-white opacity-60 mb-5">Thanks to Flex Trading, I now trade with confidence. The insights and tutorials are top-notch, providing me with the knowledge I need to navigate the market successfully. I highly recommend their services to any trader looking to elevate their game.</p>
                                <div class="d-flex justify-content-start align-items-center gap-4">
                                    <!-- <div class="test-user-img-area">
                                        <img class="img-fluid test-user-img" src="./assets/images/testimonial-user-img-2.png" alt="">
                                    </div> -->
                                    <div class="test-user-name-area">
                                        <h2 class="test-user-name text-gradient mb-1">Jessica L</h2>
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
                                <p class="testimonial-para text-white opacity-60 mb-5">I’ve seen a significant improvement in my trading strategies since joining Flex Trading. The precision trading signals and in-depth market analysis have been invaluable. I’ve had more winning trades and feel more confident in my decisions. </p>
                                <div class="d-flex justify-content-start align-items-center gap-4">
                                    <!-- <div class="test-user-img-area">
                                        <img class="img-fluid test-user-img" src="./assets/images/testimonial-user-img-3.png" alt="">
                                    </div> -->
                                    <div class="test-user-name-area">
                                        <h2 class="test-user-name text-gradient mb-1">Daniel K</h2>
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
                                <p class="testimonial-para text-white opacity-60 mb-5">The precision of the trading signals from Flex Trading is unmatched. I’ve had my best trading months ever! Their strategic recommendations are spot-on, and the transparency in their performance history reassures me of their reliability.</p>
                                <div class="d-flex justify-content-start align-items-center gap-4">
                                    <!-- <div class="test-user-img-area">
                                        <img class="img-fluid test-user-img" src="./assets/images/testimonial-user-img-1.png" alt="">
                                    </div> -->
                                    <div class="test-user-name-area">
                                        <h2 class="test-user-name text-gradient mb-1">Sophia R</h2>
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
                                <p class="testimonial-para text-white opacity-60 mb-5">Flex Trading’s educational content has helped me understand the market better than any other service. It's been a great investment. The tutorials and webinars are comprehensive, covering everything from basic concepts to advanced trading strategies. My trading skills have improved drastically.</p>
                                <div class="d-flex justify-content-start align-items-center gap-4">
                                    <!-- <div class="test-user-img-area">
                                        <img class="img-fluid test-user-img" src="./assets/images/testimonial-user-img-1.png" alt="">
                                    </div> -->
                                    <div class="test-user-name-area">
                                        <h2 class="test-user-name text-gradient mb-1">Michael W</h2>
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
                                <p class="testimonial-para text-white opacity-60 mb-5">The community and support at Flex Trading are fantastic. I feel like I have a team backing me up every step of the way. The interactive sessions and personalized advice have been incredibly helpful. Flex Trading has truly made a difference in my trading journey. </p>
                                <div class="d-flex justify-content-start align-items-center gap-4">
                                    <!-- <div class="test-user-img-area">
                                        <img class="img-fluid test-user-img" src="./assets/images/testimonial-user-img-1.png" alt="">
                                    </div> -->
                                    <div class="test-user-name-area">
                                        <h2 class="test-user-name text-gradient mb-1">Emily H</h2>
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
                        <h1 class="sb-title purple mb-4">Subscribe</h1>
                        <p class="sm-para opacity-60 text-black mb-5">Sign up to be the first to get updates.</p>
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