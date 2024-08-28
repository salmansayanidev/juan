<?php
    include "header.php"
?>



<main>
    <section class="login-section py-5rem">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-10 col-lg-6 ">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <img src="./assets/images/footer-logo.png" class="img-fluid login-signup-logo ">
                                    </div>
                                    <h4 class="text-center mb-5 login-signup-title">Sign in your account</h4>
                                    <form action="index.php">
                                        <div class="form-group mb-4">
                                            <label class="login-label">Email</label>
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
                                        <div class="form-row d-flex justify-content-between mt-5 mb-5 align-items-center">
                                            <div class="form-group">
                                                <div class="custom-control d-flex justify-content-start align-items-center gap-2 custom-checkbox ms-1 text-white">
                                                    <input type="checkbox" class="custom-control-input remember-checkbox" id="basic_checkbox_1">
                                                    <label class="custom-control-label mb-0" for="basic_checkbox_1">Remember my preference</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a class="text-white custom-control-label text-decoration-none" href="forgot-password.php">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center mb-5">
                                            <button type="submit" class="login-submit-btn">Sign In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-white custom-control-label">Don't have an account? <a class="text-white text-decoration-none" href="signup.php">Sign up</a></p>
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

<?php
    include "footer.php"
?>

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