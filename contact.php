<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Contact Us</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/berkett-imgs/digger.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
</head>

<body style="visibility: hidden;">
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- !header-start -->
    <?php include './componants/header.php'; ?>
    <!-- header-end -->


    <!-- breadcrumb-start -->
    <section class="breadcrumb breadcrumb_bg banner-bg-1 bg-img overlay2 pt-pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-1">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Contact Us</h2>
                            <p> <a href="./index.php" class="text-muted">Home /</a> <span></span> Contact</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                    <!-- Contact Form -->
                    <div class="contact_from_area clearfix mb-50">
                        <div class="contact_form">
                            <form action="./mail.php" method="post" id="main_contact_form">
                                <div class="contact_input_area">
                                    <div id="success_fail_info">
                                        <div id="success" class="d-none alert alert-success">Your message was sent successfully! We will be in touch soon.</div>
                                        <div id="fail" class="d-none alert alert-danger">Sorry, something went wrong. Please try again.</div>
                                    </div>
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="Name" id="Name" placeholder="First Name" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="Last-Name" id="Last-Name" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control mb-30" name="Email" id="Email" placeholder="E-mail" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="Number" id="Number" placeholder="Contact Number">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="Message" class="form-control mb-30" id="Message" cols="30" rows="6" placeholder="Your Message *" required></textarea>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12 text-center">
                                            <button type="submit" id="submit-btn" class="boxed-btn">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 offset-lg-1 mb-50 contact-info-container">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Richmond Nelson</h3>
                            <p>6B/750 Lower Queen Street</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>03 544 8529</h3>
                            <p>Mon to Fri business hours</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>office@berkettcontracting.co.nz</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- ================ contact section end ================= -->

    <!-- footer-start -->
    <?php include './componants/footer.php'; ?>
    <!-- footer-end -->

    <!-- JS here -->
    <?php include 'componants/scriptTags.php'; ?>

</body>

</html>