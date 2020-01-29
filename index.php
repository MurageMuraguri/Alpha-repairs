<?php
require ('template/head.php');
?>
<body>
<?php
require ('template/nav.php');
?>

  <main>
    <div class="position-relative">
      <!-- shape Hero -->
      <section class="section section-lg section-shaped pb-250">
        <div class="shape shape-style-1 bg-gradient-default">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="container py-lg-md d-flex">
          <div class="col px-0">
            <div class="row">
              <div class="col-lg-6">
                <h1 class="display-3  text-white">Ultra Electronics<span></span></h1>
                <p class="lead  text-white">A fast emerging device repair company aimed at providing the best client experience and service.</p>
                <div class="btn-wrapper">
                  <a href="fix.php" class="btn btn-white btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="ni ni-settings"></i></span>
                    <span class="btn-inner--text">Order a Fix </span>
                  </a>
                    <a href="fix.php#ongoing" class="btn btn-white btn-icon mb-3 mb-sm-0">
                        <span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
                        <span class="btn-inner--text">Check on ongoing fixes.</span>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew">
          <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </section>
      <!-- 1st Hero Variation -->
    </div>

    <section class="section section-lg" id="about_us">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-6 order-md-2">
            <img src="assets/img/Devices.png" class="img-fluid floating" alt="image">
          </div>
          <div class="col-md-6 order-md-1">
            <div class="pr-md-5">
              <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle mb-5">
                <i class="ni ni-settings-gear-65"></i>
              </div>
              <h3>What can we repair?</h3>
              <!-- <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p> -->
              <ul class="list-unstyled mt-5">
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success mr-3">
                        <i class="ni ni-settings-gear-65"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0">Laptops of all makes.</h6>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success mr-3">
                        <i class="ni ni-html5"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0">Phones,both android and apple devices.</h6>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success mr-3">
                        <i class="ni ni-satisfied"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0">Device accessories and peripherals.</h6>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section pb-0 bg-gradient-warning">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-6 order-lg-2 ml-lg-auto">
            <div class="position-relative pl-md-5">
              <img src="assets/img/fix.svg" class="img-center img-fluid" alt="image">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="d-flex px-3">
              <div>
                <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                  <i class="ni ni-building text-primary"></i>
                </div>
              </div>
              <div class="pl-4">
                <h4 class="display-3 text-white">Why us?</h4>
                <p class="text-white">Egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate. In arcu cursus euismod quis viverra.
                    Aliquet sagittis id consectetur purus ut faucibus. Etiam dignissim diam quis enim.</p>
              </div>
            </div>
            <div class="card shadow shadow-lg--hover mt-5">
              <div class="card-body">
                <div class="d-flex px-3">
                  <div>
                    <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                      <i class="ni ni-satisfied"></i>
                    </div>
                  </div>
                  <div class="pl-4">
                    <h5 class="title text-success">Awesome Support</h5>
                    <p>TLorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>

                  </div>
                </div>
              </div>
            </div>
            <div class="card shadow shadow-lg--hover mt-5">
              <div class="card-body">
                <div class="d-flex px-3">
                  <div>
                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                      <i class="ni ni-active-40"></i>
                    </div>
                  </div>
                  <div class="pl-4">
                    <h5 class="title text-warning">Modern technology and processes.</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="section section-lg">
      <div class="container">
        <div class="row justify-content-center text-center mb-lg">
          <div class="col-lg-8">
            <h2 class="display-3">Customer Reviews</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="px-4">
              <img src="assets/img/theme/team-1-800x800.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;" alt="image">
              <div class="pt-4 text-center">
                <h5 class="title">
                  <span class="d-block mb-1">Ryan Tompson</span>
                  <p>"Non nisi est sit amet facilisis magna. Amet dictum sit amet justo."</p>
                </h5>

              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="px-4">
              <img src="assets/img/theme/team-2-800x800.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;" alt="image">
              <div class="pt-4 text-center">
                <h5 class="title">
                  <span class="d-block mb-1">Romina Hadid</span>
                    <p>"Non nisi est sit amet facilisis magna. Amet dictum sit amet justo."</p>
                </h5>

              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="px-4">
              <img alt="image" src="assets/img/theme/team-3-800x800.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
              <div class="pt-4 text-center">
                <h5 class="title">
                  <span class="d-block mb-1">Alexander Smith</span>
                    <p>"Non nisi est sit amet facilisis magna. Amet dictum sit amet justo."</p>
                </h5>

              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="px-4">
              <img alt="image" src="assets/img/theme/team-4-800x800.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
              <div class="pt-4 text-center">
                <h5 class="title">
                  <span class="d-block mb-1">John Doe</span>
                    <p>"Non nisi est sit amet facilisis magna. Amet dictum sit amet justo."</p>
                </h5>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-lg pt-0">
      <div class="container">
        <div class="card bg-gradient-warning shadow-lg border-0">
          <div class="p-5">
            <div class="row align-items-center">
              <div class="col-lg-8">
                <h3 class="text-white">We have made repairing your devices easier.</h3>
                <!-- <p class="lead text-white mt-3">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture.</p> -->
              </div>
              <div class="col-lg-3 ml-lg-auto">
                <a href="#" class="btn btn-white btn-icon mb-3 mb-sm-0">
                  <span class="btn-inner--icon"><i class="ni ni-settings"></i></span>
                  <span class="btn-inner--text">Order a Fix </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-lg bg-gradient-default" id="contact_us">
      <div class="container pt-lg pb-300">
        <div class="row text-center justify-content-center">
          <div class="col-lg-10">
            <h2 class="display-3 text-white">Contact Us.</h2>
            <p class="lead text-white"><i class="fa fa-phone-square"></i> Call us:    07##########        </p>
            <p class="lead text-white"><i class="fa fa-envelope-o"></i> Email us:    ####@####.com      </p>
            <p class="lead text-white"><i class="fa fa-street-view"></i> Visit us at:   ######st.      </p>

          </div>
        </div>
        </div>
      </div>
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="section section-lg pt-lg-0 section-contact-us">
      <div class="container">
        <div class="row justify-content-center mt--300">
          <div class="col-lg-8">
            <div class="card bg-gradient-secondary shadow">
              <div class="card-body p-lg-5">
                <h4 class="mb-1">We'd like to hear from you.</h4>
                <!-- <p class="mt-0">Your project is very important to us.</p> -->
                <div class="form-group mt-5">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-user-run"></i></span>
                    </div>
                    <input class="form-control" placeholder="Your name" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email address" type="email">
                  </div>
                </div>
                <div class="form-group mb-4">
                  <textarea class="form-control form-control-alternative" name="name" rows="4" cols="80" placeholder="Type a message..."></textarea>
                </div>
                <div>
                  <button type="button" class="btn btn-default btn-round btn-block btn-lg">Send Message</button>
                </div>
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
