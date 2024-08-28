<?php
include "header.php"
?>






<main>
    <section class="py-5rem stock-screener-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="sec-sb-title mb-5 text-center text-gradient">Stock Screener</h3>
                </div>
                <div class="col-12">
                    <div class="tradingview-widget-container w-100">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text"></span></a></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                            {
                                "width": 1366,
                                "height": 685,
                                "defaultColumn": "overview",
                                "defaultScreen": "most_capitalized",
                                "market": "america",
                                "showToolbar": true,
                                "colorTheme": "dark",
                                "locale": "en"
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular-indicators-section pb-5rem">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-12 col-lg-7">
                    <h3 class="sec-sb-title text-lg-start text-center mb-lg-0 mb-4 text-gradient">Popular Indicators:</h3>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="d-flex justify-content-center justify-content-lg-end">
                        <a class="sec-link text-black" href="#">
                            <span class="">See All Indicators </span>
                            <span class="circle border-black"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="economics-chart-slider-layer rounded-top-5 overflow-hidden m-0 popular-indicator">
                        <div class="">
                            <img class="economics-chart-img w-100 img-fluid" src="./assets/images/chart-img-2.png" alt="">
                        </div>
                        <div class="economics-chart-text-area ">
                            <h3 class="economics-chart-title text-white">Squeeze Pro</h3>
                            <p class="text-white sm-para mt-3 mb-4">A game-changing tool from John Carter to help you catch bigger and fastr moves more often.</p>
                            <a class="text-decoration-none watchlist-read-more text-decoration-none d-inline-block" href="chart-form.php">
                                read more
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="economics-chart-slider-layer rounded-top-5 overflow-hidden m-0 popular-indicator">
                        <div class="">
                            <img class="economics-chart-img w-100 img-fluid" src="./assets/images/chart-img-3.png" alt="">
                        </div>
                        <div class="economics-chart-text-area ">
                            <h3 class="economics-chart-title text-white">Ready Aim Fire Pro</h3>
                            <p class="text-white sm-para mt-3 mb-4">A game-changing tool from John Carter to help you catch bigger and fastr moves more often.</p>
                            <a class="text-decoration-none watchlist-read-more text-decoration-none d-inline-block" href="chart-form.php">
                                read more
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="economics-chart-slider-layer rounded-top-5 overflow-hidden m-0 popular-indicator">
                        <div class="">
                            <img class="economics-chart-img w-100 img-fluid" src="./assets/images/chart-img-2.png" alt="">
                        </div>
                        <div class="economics-chart-text-area ">
                            <h3 class="economics-chart-title text-white">Micro Voodoo</h3>
                            <p class="text-white sm-para mt-3 mb-4">A game-changing tool from John Carter to help you catch bigger and fastr moves more often.</p>
                            <a class="text-decoration-none watchlist-read-more text-decoration-none d-inline-block" href="chart-form.php">
                                read more
                            </a>
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