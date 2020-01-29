<?php

require('template/head.php');

?>

<?php

require('template/nav.php');

?>
    <main class="profile-page">
        <section class="section-profile-cover section-shaped my-0">
            <!-- Circles background -->
<!--        <div class="shape shape-style-1 shape-primary alpha-4">-->
               <div class="shape shape-style-1 bg-gradient-default">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- SVG separator -->
            <div class="separator separator-bottom separator-skew">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="card card-profile shadow mt--300">
                    <div class="px-4">

                        <div class="text-center mt-5">
                            <h3>Request Fix.</h3>
                            <?php
                if (isset($_SESSION['request'])){

                    print($_SESSION['requestMessage']);
                    unset($_SESSION['request'],$_SESSION['requestMessage']);
                }
?>
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                            <form role="form" method = "POST" action = "process\submitRequest.php" autocomplete = "off" accept-charset="UTF-8">
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">

                                        <input class="form-control" placeholder="Device-laptop,phone etc." id="device" name="device" type="text" required>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">

                                        <input class="form-control" placeholder="Make" id="brand" name="brand" type="text" required>
                                    </div>
                                </div>
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">

                                            <input class="form-control" placeholder="Model" id="model" name="model" type="text" required>
                                        </div>
                                    </div>
                                        <div class="form-group mb-3">
                                            <div class="input-group input-group-alternative">

                                                <input class="form-control" placeholder="Phone number" id="phone" name="number" type="number" required>
                                            </div>
                                        </div>
                                            <div class="form-group mb-3">
                                                <div class="input-group input-group-alternative">

                                                    <textarea class="form-control" id = "problem" rows = "3" cols = "80" name="problem" placeholder="Describe problem here." required></textarea>
                                                </div>
                                            </div>
<?php
if(isset($_SESSION['login'])&&$_SESSION['login']==1){?>

    <div class="text-center">
        <input type="submit" id="submit" name="submit" class="btn btn-primary my-4" value="Submit"/>

    </div>

    <?php }else {
    ?>
    <h3>Please <a href="login.php">login</a> or <a href="register.php">register</a> a as a user to access this feature</h3>
    <?php
}
    ?>
                            </form>
                                    </div>
                                <div class="col-sm-2"</div>
                            </div>
                        </div>
                        <div class="mt-5 py-5 border-top text-center" id="ongoing">
                            <h3>Ongoing fixes.</h3>
                            <div class="row justify-content-center">

                                <div class="col-lg-9">
                                    <?php
                            if(isset($_SESSION['login'])&&$_SESSION['login']==1){?>


                            <?php
                                }else{?>

                                <h2>You need to be logged in for this to work.</h2>
                            <?php
                            }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>




<?php
require('template/footer.php')
?>