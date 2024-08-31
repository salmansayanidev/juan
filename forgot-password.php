<?php
include 'header.php'
?>

<main>
    <section class="login-section py-5rem">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-10 col-lg-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <img src="./assets/images/footer-logo.png" class="img-fluid login-signup-logo ">
                                    </div>
                                    <h4 class="text-center mb-4 text-white login-signup-title">Forgot Password</h4>
                                    <form action="">
                                        <div class="form-group mb-5">
                                            <label class="login-label"><strong>Email</strong></label>
                                            <input type="email" class="form-field" placeholder="email" value="">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="login-submit-btn">SUBMIT</button>
                                        </div>
                                    </form>
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