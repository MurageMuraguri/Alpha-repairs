<header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
        <div class="container">
            <a class="navbar-brand" href="index.php"> ULTRA electronics
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a class="navbar-brand" href="index.php">
                                ULTRA electronics
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="fix.php">
                            <i class="ni ni-settings"></i>
                            <span class="nav-link-inner--text">Request Fix</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="index.php#about_us">
                            <i class="ni ni-briefcase-24"></i>
                            <span class="nav-link-inner--text">About us</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="index.php#contact_us">
                            <i class="ni ni-send"></i>
                            <span class="nav-link-inner--text">Contact Us</span>
                        </a>
                    </li>
                    <?php

                    if(isset($_SESSION['login'])&&$_SESSION['login']==1){ ?>


                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="process/logout.php">
                                <i class="ni ni-single-02"></i>
                                <span class="nav-link-inner--text">Log out</span>
                            </a>

                        <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="process/logout.php">
                            <i class="ni ni-favourite-28"></i>
                            <span class="nav-link-inner--text">Hello <?php print($_SESSION['displayName']);?></span>
                        </a>


                    <?php    }else {  ?>

                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="login.php">
                                <i class="ni ni-single-02"></i>
                                <span class="nav-link-inner--text">Login</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="register.php">
                                <i class="ni ni-fat-add"></i>
                                <span class="nav-link-inner--text">Register</span>
                            </a>
                        </li>
                        <?php
                            }
                    ?>

                </ul>
            </div>
        </div>
    </nav>
</header>