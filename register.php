<?php
require('template/head.php');
?>

<?php
require ('template/nav_blank.php');
?>
<main>
    <section class="section section-shaped section-lg">
        <div class="shape shape-style-1 bg-gradient-default">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="container pt-lg-md">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card bg-secondary shadow border-0">
<!--                        <div class="card-header bg-white pb-5">-->
<!--                            <div class="text-muted text-center mb-3"><small>Sign up with</small></div>-->
<!--                            <div class="text-center">-->
<!---->
<!--                                <a href="#" class="btn btn-neutral btn-icon">-->
<!--                    <span class="btn-inner--icon">-->
<!--                      <img src="assets/img/icons/common/google.svg" alt="image">-->
<!--                    </span>-->
<!--                                    <span class="btn-inner--text">Google</span>-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="card-body px-lg-5 py-lg-5">
                            <?php
                                if(isset($_SESSION['register'])){
                                    print($_SESSION['registerMessage']);
                                    unset($_SESSION['register'],$_SESSION['registerMessage']);

                                }


                            ?>
                            <div class="text-center text-muted mb-4">
                                <small>Sign up with credentials</small>
                            </div>
                            <form ole="form" method = "POST" action = "process\pRegister.php" autocomplete = "off" accept-charset="UTF-8">


                                <div class="form-group">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Your name" id="name" name="name" type="text" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Email" id="email" name="email" type="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" id="password" name="password" id="password" name="password" placeholder="Password" type="password" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" id="cpassword" name="cpassword" id="cpassword" name="cpassword" placeholder="Confirm password" type="password" required>
                                    </div>
                                </div>

                                <div>
                                    <a href="login.php" class="text-light"><small>Already registered?</small></a>
                                </div>
                                <div class="text-muted font-italic" id="message"><small></small> </div>



                                <div class="text-center">
                                    <input type="submit" id="submit" name="submit" class="btn btn-primary mt-4" value="Create account" />
<!--                                    <button type="button" id="submit" class="btn btn-primary mt-4">Create account</button>-->
                                </div>
                            </form>
                            <script>

                                var check = function() {
                                    if (document.getElementById('password').value ==
                                        document.getElementById('cpassword').value) {
                                        document.getElementById('message').style.color = 'green';
                                        document.getElementById('message').innerHTML = '';
                                        document.getElementById("submit").disabled = false;
                                    } else {
                                        document.getElementById('message').style.color = 'red';
                                        document.getElementById('message').innerHTML = 'Passwords do not match';
                                        document.getElementById("submit").disabled = true;
                                    }
                                }



                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
require ('template/footer.php');
?>
