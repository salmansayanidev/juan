<?php
include 'header.php'
?>


<main>
    <section class="inner-page-bnner sniper-entries-stocks-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-bnner-text-area text-webkit-center">
                        <h1 class="sec-title inner-sec-title text-gradient">Elite Trading Signals</h1>
                        <a class="sec-link mt-4" href="#">
                            <span class="">Start a 30-Day Trial For $5 </span>
                            <span class="circle"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5rem">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="sec-sb-title mb-5 text-black">What you are getting:</h3>
                    <ul class="elite-list list-style-disc">
                        <li class="mb-3">
                            <p class="list-para">Sniper Entries-Stocks offers meticulously curated, time-stamped alerts for swing trades, complete with precise entry and exit points.</p>
                        </li>
                        <li class="mb-3">
                            <p class="list-para">Each signal includes detailed portfolio allocation percentages, target goals, and stop-loss orders to maximize your trading strategy’s effectiveness.</p>
                        </li>
                        <li class="mb-3">
                            <p class="list-para">As a member, you gain exclusive access to our comprehensive market analysis videos. These sessions delve deep into price trends, pattern formations, and crucial time factors, including advanced cycle analysis.</p>
                        </li>
                        <li class="mb-3">
                            <p class="list-para">Led by our experienced trading experts, the service covers a wide array of markets, from individual stocks to the most liquid ETFs. ‘Sniper Entries – Stocks’ is more than just a trading tool; it’s a comprehensive educational experience.</p>
                        </li>
                        <li class="mb-3">
                            <p class="list-para">We focus on the essential aspects of mental psychology and discipline in trading, providing you with the knowledge and confidence needed to progress on your journey toward financial independence.</p>
                        </li>
                        <li class="mb-3">
                            <p class="list-para">Embrace a new perspective on investing and trading with ‘Sniper Entries – Stocks,’ where we transform insights into action.</p>
                        </li>
                    </ul>
                </div>

                <div class="col-12">
                    <div class="video-area mt-5">
                        <iframe width="640" height="360" class="sniper-entries-iframe" src="https://www.youtube.com/embed/XHOmBV4js_E" title="Video Placeholder" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        include 'flex-team-section.php'
    ?>

    <section class="proven-record-section pb-5rem">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="sb-title purple mb-1  text-center">Proven record:</h1>
                    <h4 class="sm-tag text-center text-gradient">select year</h4>
                </div>
                <div class="col-12">
                    <ul class="proven-record-tab">
                        <li class="">
                            <button data-view="2024year" class="primary-btn primary-btn-2 text-decoration-none proven-record-btn active" type="button">
                                2024
                            </button>
                        </li>
                        <li class="">
                            <button data-view="2023year" class="primary-btn primary-btn-2 text-decoration-none proven-record-btn" type="button">
                                2023
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-lg-10">

                    <div data-content="2024year" class="proven-record-area active">
                        <iframe class="proven-record-iframe" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRl6fAIPomJRmEXSxFwYdLFDJKTznwjhjVoZ96bqE96d4wB36KKgL0BidJNqubtOiplO5OTr5nq1ysM/pubhtml?gid=1221310701&amp;single=true" width="400" height="800"></iframe>
                    </div>

                    <div data-content="2023year" class="proven-record-area">
                        <iframe class="proven-record-iframe" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRl6fAIPomJRmEXSxFwYdLFDJKTznwjhjVoZ96bqE96d4wB36KKgL0BidJNqubtOiplO5OTr5nq1ysM/pubhtml?gid=67150087&amp;single=true" width="400" height="800"></iframe>
                    </div>
                </div>            

            </div>
        </div>
    </section>

    <?php
        include 'have-question-section.php'
    ?>

</main>



<?php
    include 'footer.php'
?>

<script>
    const provenTabs = document.querySelectorAll("[data-view]");

    provenTabs.forEach((tab) => {
        tab.addEventListener("click", () => {
            provenTabs.forEach((tab) => {
                tab.classList.remove("active");
            });
            $("[data-content]").removeClass('active')
            $(`[data-content="${tab.dataset.view}"]`).addClass('active')
            tab.classList.add("active");
        });
    });
</script>