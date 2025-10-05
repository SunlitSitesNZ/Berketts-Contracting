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

    <!-- Add these to ALL pages -->
<link rel="preconnect" href="https://cdnjs.cloudflare.com">
<link rel="preconnect" href="https://cdn.jsdelivr.net">
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
<link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <!-- CSS here -->
     
    <link rel="stylesheet" href="css/style.css">

</head>


<body>
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
                            <p> <a href="index.html" class="text-muted">Home /</a> <span></span>Services</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- service-details-start -->
     <?php
        include 'service-details-toggle.php';
     ?>

    <!-- service-details-end -->

    <!-- footer-start -->
    <?php include './componants/footer.php'; ?>
    <!-- footer-end -->

    <!-- JS here -->
    <?php include './componants/scriptTags.php'; ?>
   
<!-- Show correct tab on page load -->
<script>
$(document).ready(function() {
    // Get the service parameter from URL
    var urlParams = new URLSearchParams(window.location.search);
    var service = urlParams.get('service');
    
    // If we have a service parameter, show that tab
    if (service) {
        $('#' + service + '-tab').tab('show');
    }
});
</script>

</body>

</html>