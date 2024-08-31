<?php
include "header.php"
?>

<main>
    <section class="py-5rem membership-checkout-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="membership-checkout-top">
                        <h2 class="course-title">Membership Checkout</h2>
                        <div class=" rounded-1 mt-4 mb-5 bg-gray py-3 px-4">
                            <p class="list-para text-black fs-4">A Payment Gateway must be set up before any payments will be processed.</p>
                        </div>
                        <h3 class="course-title fw-semibold mb-4">Membership Level <a class="text-decoration-none fst-italic fs-5" href="membership-level.php">Change</a></h3>
                        <p class="list-para text-black mb-4">You have selected the <strong>Monthly</strong> membership level.</p>
                        <p class="list-para text-black">The price for membership is <strong>$49.00 per Month</strong>. After your initial payment, your first payment will cost $5.00.</p>
                    </div>
                </div>
                <form action="">
                    <div class="row">
                        <div class="col-12">
                            <div class="membership-account-info-area">
                                <h3 class="course-title fw-semibold mb-4">Account Information <span class="fs-5 fst-italic">Already have an account? <a class=" text-decoration-none fs-5" href="login.php">Log in here</a></span></h3>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="input-filed-area mb-4">
                                            <label class="login-label text-black">Username*</label>
                                            <input type="text" placeholder="Username" required="" class="news-input-field w-100 " name="" id="Username">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-filed-area mb-4">
                                            <label class="login-label text-black">Password*</label>
                                            <input type="password" placeholder="Password" required="" class="news-input-field w-100 " name="" id="Password">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-filed-area mb-4">
                                            <label class="login-label text-black">Confirm Password*</label>
                                            <input type="password" placeholder="Confirm Password" required="" class="news-input-field w-100 " name="" id="Confirm-Password">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-filed-area mb-4">
                                            <label class="login-label text-black">Email Address*</label>
                                            <input type="email" placeholder="Email Address" required="" class="news-input-field w-100 " name="" id="Email-Address">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-filed-area mb-4">
                                            <label class="login-label text-black">Confirm Email Address*</label>
                                            <input type="email" placeholder="Confirm Email Address" required="" class="news-input-field w-100 " name="" id="Confirm-Email-Address">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="membership-account-info-area">
                                <h3 class="course-title fw-semibold mb-4">Billing Address </h3>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="input-filed-area mb-4">
                                            <label class="login-label text-black">First Name*</label>
                                            <input type="text" placeholder="First Name" required="" class="news-input-field w-100 " name="" id="First-Name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-filed-area mb-4">
                                            <label class="login-label text-black">Last Name*</label>
                                            <input type="text" placeholder="Last Name" required="" class="news-input-field w-100 " name="" id="Last-Name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-filed-area mb-4">
                                            <label class="login-label text-black">Address 1*</label>
                                            <input type="text" placeholder="Address 1" required="" class="news-input-field w-100 " name="" id="Address-1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-filed-area mb-4">
                                            <label class="login-label text-black">Address 2</label>
                                            <input type="text" placeholder="Address 2" required="" class="news-input-field w-100 " name="" id="Address-2">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-filed-area mb-4">
                                            <label class="login-label text-black">City*</label>
                                            <input type="text" placeholder="City" required="" class="news-input-field w-100 " name="" id="City">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-filed-area mb-4">
                                            <label class="login-label text-black">State*</label>
                                            <input type="text" placeholder="State" required="" class="news-input-field w-100 " name="" id="State">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-filed-area mb-4">
                                            <label class="login-label text-black">Postal Code*</label>
                                            <input type="text" placeholder="Postal Code" required="" class="news-input-field w-100 " name="" id="Postal-Code">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-filed-area mb-4">
                                            <label class="login-label text-black">Postal Code*</label>
                                            <select class="form-select news-input-field w-100" aria-label="Default select example">
                                                <option selected>United States</option>
                                                <option value="1">Country One</option>
                                                <option value="2">Country Two</option>
                                                <option value="3">Country Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-filed-area mb-4">
                                            <label class="login-label text-black">Phone*</label>
                                            <input type="number" placeholder="Phone" required="" class="news-input-field w-100 " name="" id="Phone">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="membership-account-info-area">
                                <h3 class="course-title fw-semibold mb-4">Payment Information </h3>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="input-filed-area mb-4">
                                            <input class="news-input-field w-100" required inputmode="numeric" placeholder="Card Number" type="text" name="" id="cardnumber">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <div class="input-filed-area mb-4">
                                            <input class="news-input-field w-100" required inputmode="numeric" placeholder="Expiry" type="text" name="" id="expirationdate">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <div class="input-filed-area mb-4">
                                            <input class="news-input-field w-100" required inputmode="numeric" placeholder="CVV" type="text" name="" id="securitycode">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="text-center">
                                <div class=" rounded-1 mt-4 mb-5 bg-gray py-3 px-4">
                                    <p class="list-para text-black text-start fs-4">A Payment Gateway must be set up before any payments will be processed.</p>
                                </div>
                                <button class="primary-btn primary-btn-2 rounded-1" type="submit">Submit and Check Out</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>


<?php
include "footer.php"
?>

<script src="./assets/js/imask.min.js"></script>


<script>
    const name = document.getElementById("name");
    const cardnumber = document.getElementById("cardnumber");
    const expirationdate = document.getElementById("expirationdate");
    const securitycode = document.getElementById("securitycode");

    var cardnumber_mask = new IMask(cardnumber, {
        mask: [{
                mask: "0000 000000 00000",
                regex: "^3[47]\\d{0,13}",
                cardtype: "american express",
            },
            {
                mask: "0000 0000 0000 0000",
                regex: "^(?:6011|65\\d{0,2}|64[4-9]\\d?)\\d{0,12}",
                cardtype: "discover",
            },
            {
                mask: "0000 000000 0000",
                regex: "^3(?:0([0-5]|9)|[689]\\d?)\\d{0,11}",
                cardtype: "diners",
            },
            {
                mask: "0000 0000 0000 0000",
                regex: "^(5[1-5]\\d{0,2}|22[2-9]\\d{0,1}|2[3-7]\\d{0,2})\\d{0,12}",
                cardtype: "mastercard",
            },
            // {
            //     mask: '0000-0000-0000-0000',
            //     regex: '^(5019|4175|4571)\\d{0,12}',
            //     cardtype: 'dankort'
            // },
            // {
            //     mask: '0000-0000-0000-0000',
            //     regex: '^63[7-9]\\d{0,13}',
            //     cardtype: 'instapayment'
            // },
            {
                mask: "0000 000000 00000",
                regex: "^(?:2131|1800)\\d{0,11}",
                cardtype: "jcb15",
            },
            {
                mask: "0000 0000 0000 0000",
                regex: "^(?:35\\d{0,2})\\d{0,12}",
                cardtype: "jcb",
            },
            {
                mask: "0000 0000 0000 0000",
                regex: "^(?:5[0678]\\d{0,2}|6304|67\\d{0,2})\\d{0,12}",
                cardtype: "maestro",
            },
            // {
            //     mask: '0000-0000-0000-0000',
            //     regex: '^220[0-4]\\d{0,12}',
            //     cardtype: 'mir'
            // },
            {
                mask: "0000 0000 0000 0000",
                regex: "^4\\d{0,15}",
                cardtype: "visa",
            },
            {
                mask: "0000 0000 0000 0000",
                regex: "^62\\d{0,14}",
                cardtype: "unionpay",
            },
            {
                mask: "0000 0000 0000 0000",
                cardtype: "Unknown",
            },
        ],
        dispatch: function(appended, dynamicMasked) {
            var number = (dynamicMasked.value + appended).replace(/\D/g, "");

            for (var i = 0; i < dynamicMasked.compiledMasks.length; i++) {
                let re = new RegExp(dynamicMasked.compiledMasks[i].regex);
                if (number.match(re) != null) {
                    return dynamicMasked.compiledMasks[i];
                }
            }
        },
    });

    //Mask the Expiration Date
    var expirationdate_mask = new IMask(expirationdate, {
        mask: "MM{/}YY",
        groups: {
            YY: new IMask.MaskedPattern.Group.Range([0, 99]),
            MM: new IMask.MaskedPattern.Group.Range([1, 12]),
        },
    });

    //Mask the security code
    var securitycode_mask = new IMask(securitycode, {
        mask: "0000",
    });
</script>