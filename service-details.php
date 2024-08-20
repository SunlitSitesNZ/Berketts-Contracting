<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Services - Berkett Contracting</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./img/berkett-imgs/digger.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="css/style.css">
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
    <section class="breadcrumb breadcrumb_bg banner-bg-1 overlay2 pt-pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-1">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Services</h2>
                            <p> <a href="./index.php" class="text-muted">Home /</a> <span></span>Services</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- service-details-start -->
     <?php
        include './service-details-toggle.php';
     ?>

    <!-- service-details-end -->

    <!-- footer-start -->
    <?php include './componants/footer.php'; ?>
    <!-- footer-end -->

    <!-- JS here -->
    <?php include 'componants/scriptTags.php'; ?>

</body>

</html>