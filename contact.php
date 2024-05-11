<?php include 'include/header.php'; ?>

        <div class="container z-index-3">
            <div class="row">

                <!-- parsonal-info-start -->
               <?php include 'include/side_bar.php'; ?>
                <!-- personal-info-end -->

                <!-- resume-page-start -->
                <div class="col-xxl-8 col-xl-9">
                    <div class="bostami-page-content-wrap">

                        <!-- page title -->
                        <div class="section-wrapper pl-60 pr-60 pt-60">
                            <div class="bostami-page-title-wrap mb-15">
                                <h2 class="page-title">contact</h2>
                            </div>
                        </div>

                        <!-- contact form -->
                        <div class="section-wrapper pr-60 pl-60 mb-60">
                            <div class="contact-area bg-light-white-2">
                               
                            
                                <form class="contact-form" action="mail.php" method="post">
                                    <div class="form-input-item mb-60">
                                        <label class="input-lebel name">name *</label>
                                        <input name="name" class="input-box name" type="text" required>
                                    </div>
                                    <div class="form-input-item mb-60">
                                        <label class="input-lebel gmail">Email *</label>
                                        <input name="email" class="input-box gmail" type="Email" required>
                                    </div>

                                    <div class="form-input-item mb-60">
                                        <label class="input-lebel gmail">Mobile Number *</label>
                                        <input name="mobile_number" class="input-box gmail" type="text" required>
                                    </div>

                                    <div class="form-input-item mb-40">
                                        <label class="input-lebel message">Message *</label>
                                        <textarea name="message" class="input-box message" cols="30"
                                            rows="10"></textarea>
                                    </div>
                                    <div class="form-btn-wrap">
                                        <button type="submit" name="submit" value="Send" class="form-btn">submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- footer copyright -->
                       <?php include 'include/footer.php'; ?>

                    </div>
                </div>
                <!-- resume-page-end -->

                <!-- main-menu-start -->
                <div class="col-xxl-1 d-xxl-block d-none">
                    <div class="bostami-main-menu-wrap">
                        <nav class="bastami-main-menu main_menu">
                            <ul>
                                <li>
                                    <a href="index.php">
                                        <span>
                                            <i class="fa-light fa-address-card"></i>
                                        </span>
                                        about
                                    </a>
                                </li>
                                <li>
                                    <a href="resume.php">
                                        <span>
                                            <i class="fa-light fa-file-user"></i>
                                        </span>
                                        Resume
                                    </a>
                                </li>
                                <li>
                                    <a href="work.php">
                                        <span>
                                            <i class="fa-light fa-briefcase"></i>
                                        </span>
                                        Works
                                    </a>
                                </li>
                               
                                <li class="active">
                                    <a href="contact.php">
                                        <span>
                                            <i class="fa-light fa-address-book"></i>
                                        </span>
                                        contact
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- main-menu-end -->

            </div>

        </div>


    </div>




    <!-- JS here -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swipper-bundle.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/appear.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>