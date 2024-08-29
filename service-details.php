<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Discover detailed information about the comprehensive construction services offered by Berkett Contracting LTD, including infrastructure development, forestry roading, bulk aggregate supply, and earthworks solutions.">
    <meta name="keywords" content="construction service details, infrastructure development details, forestry roading details, bulk aggregate supply details, earthworks solutions details, New Zealand contracting services, reliable construction details, professional contracting details">
    <meta name="author" content="Hannah Ross, Web Developer">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">

    <meta http-equiv="Cache-control" content="public">
    
    <title>Service Details - Berkett Contracting LTD</title>

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Service Details - Berkett Contracting LTD">
    <meta property="og:description" content="Discover services offered by Berkett Contracting LTD, including infrastructure development, forestry roading, bulk aggregate supply, and earthworks solutions.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.berkettcontracting.co.nz/service-details">
    <meta property="og:image" content="https://www.berkettcontracting.co.nz/img/berkett-imgs/digger.webp">

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
        <div class="container ">
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
     <section class="mb-5">
     <?php
        include './service-details-toggle.php';
     ?>
     </section>

    <!-- service-details-end -->

    <!-- footer-start -->
    <?php include './componants/footer.php'; ?>
    <!-- footer-end -->

    <!-- JS here -->
    <?php include 'componants/scriptTags.php'; ?>

</body>

</html>