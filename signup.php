<?php
include 'head.php'
?>


<main>
    <section class="login-section">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-12 col-md-10 col-lg-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <img src="./assets/images/footer-logo.png" class="img-fluid login-signup-logo ">
                                    </div>
                                    <h4 class="text-center mb-5 login-signup-title">Sign up your account</h4>
                                    <form action=".">
                                        <div class="form-group mb-4">
                                            <label class="login-label"><strong>Username</strong></label>
                                            <input type="text" class="form-field" placeholder="username">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="login-label"><strong>Email</strong></label>
                                            <input type="email" class="form-field" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label class="login-label"><strong>Password</strong></label>
                                            <div class="position-relative">
                                                <input type="password" class="form-field" placeholder="Password">
                                                <button type="button" class="pass-eye-btn eye-btn">
                                                    <i class="fa-solid fa-eye-slash"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="text-center mt-4">
                                            <button type="submit" class="login-submit-btn">Sign Up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-5">
                                        <p class="text-white custom-control-label">Already have an account? <a class="text-white text-decoration-none" href="login.php">Sign in</a></p>
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

<script>
    const eyeBtns = document.querySelectorAll(".eye-btn");

    eyeBtns.forEach((eyeBtn) => {
        eyeBtn.addEventListener("click", () => {
            const myInput = eyeBtn.previousElementSibling;
            const icon = eyeBtn.querySelector("i");

            if (myInput.type === "password") {
                myInput.type = "text";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            } else {
                myInput.type = "password";
                icon.classList.add("fa-eye-slash");
                icon.classList.remove("fa-eye");
            }
        });
    });
</script>