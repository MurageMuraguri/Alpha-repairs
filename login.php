<?php
require ('template/head.php');
?>
<?php
require('template/nav_blank.php');
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
<!--                            <div class="text-muted text-center mb-3"><small>Log in with</small></div>-->
<!--                            <div class="btn-wrapper text-center">-->
<!--                                <a href="#" class="btn btn-neutral btn-icon">-->
<!--                    <span class="btn-inner--icon">-->
<!--                      <img alt="image" src="assets/img/icons/common/google.svg">-->
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

                            }elseif (isset($_SESSION['login'])&&$_SESSION['login']==0){
                                print($_SESSION['loginMessage']);
                                unset($_SESSION['login'],$_SESSION['loginMessage']);
                            }


                            ?>
                            <div class="text-center text-muted mb-4">
                                <small>Or sign in with credentials</small>
                            </div>
                            <form role="form" method = "POST" action = "process\pLogin.php" autocomplete = "off" accept-charset="UTF-8">
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">
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
                                        <input class="form-control" placeholder="Password" id="password" name="password" type="password" required>
                                    </div>


                                </div>
                                <div class="custom-control custom-control-alternative>

                                    <label class="custom-control-label" for="customCheckLogin">
                                        <span><a href="#">Forgot password?</a></span>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <input type="submit" id="submit" name="submit" class="btn btn-primary mt-4" value="Log in" />
                                </div>
                        </form>
                        </div>
                    </div>
<!--                    <div class="row mt-3">-->
<!--                        <div class="col-6">-->
<!--                            <a href="#" class="text-light"><small>Forgot password?</small></a>-->
<!--                        </div>-->

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
require('template/footer.php');
?>
