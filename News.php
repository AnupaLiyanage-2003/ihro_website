
 <!-- Start Main header-->
        <?php include 'loading/layout.php';?>
        <!-- End Main header-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
            .video-section {
                background-color: #f8f9fa;
            }

            .video-box {
                border: 4px solid #0d6efd; /* Blue border */
                border-radius: 15px;
                padding: 10px;
                background: #fff;
                box-shadow: 0 4px 15px rgba(0,0,0,0.15);
            }

                .video-box video {
                    width: 100%;
                    display: block;
                    border-radius: 10px;
                }
    </style>
</head>
<body>
    <!-- Start Main header-->
        <?php include 'header/header.php';?>
        <!-- End Main header-->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb"
         style="background: linear-gradient(rgba(0, 58, 102, 0.9), rgba(0, 58, 102, 0.8)), url(img/img_1.jpg), center center/cover no-repeat;">

        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s" style="font-size: 8rem;">
                Human Righrs News
            </h3>

            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown"
                data-wow-delay="0.3s">

                <li class="breadcrumb-item">
                    <a href="index.html" class="text-white">
                        Home
                    </a>
                </li>

                <li class="breadcrumb-item">
                    <a href="#" class="text-secondary">
                        Pages
                    </a>
                </li>

                <li class="breadcrumb-item active text-white">
                    <a href="news.html" class="text-white">
                        News
                    </a>
                </li>

            </ol>
        </div>
    </div>
    <!-- Header End -->

    <section class="video-section py-5">
        <div class="container">

            <div class="video-box">
                <video controls width="100%">
                    <source src="img/Videos/News1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

        </div>
    </section>
    <br />
    <br />

    <section class="video-section py-5">
        <div class="container">

            <div class="video-box">
                <video controls width="100%">
                    <source src="img/Videos/News2.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

        </div>
    </section>

    <br />
    <br />

         <!-- Start Main header-->
        <?php include 'footer/footer.php';?>
        <!-- End Main header-->

        
    <!-- Copyright Start -->
    <div class="container-fluid copyright text-body py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">

                    <i class="fas fa-copyright me-2"></i>
                    2026 |
                    <a class="text-white" href="index.html">
                        International Human Rights Organization
                    </a>
                    |
                    All rights reserved.
                    &nbsp;&nbsp;
                    Designed & Developed By
                    <a class="text-white" href="">
                        IHRO IT TEAM
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

        
    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>
</html>