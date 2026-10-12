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
            /* QR Code Start */

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .verify-section {
                position: relative;
                overflow: hidden;
                background: linear-gradient(135deg, #13357B 0%, #13357B 100%);
                padding: 90px 0;
            }

                /* Background Decorative Circles */

                .verify-section::before {
                    content: "";
                    position: absolute;
                    width: 500px;
                    height: 500px;
                    background: rgba(255,255,255,0.05);
                    border-radius: 50%;
                    top: -180px;
                    right: -180px;
                }

                .verify-section::after {
                    content: "";
                    position: absolute;
                    width: 400px;
                    height: 400px;
                    background: rgba(255,255,255,0.04);
                    border-radius: 50%;
                    bottom: -170px;
                    right: -120px;
                }

                .verify-section .container {
                    position: relative;
                    z-index: 2;
                }

            /* Small Heading */

            .small-title {
                color: #ffffff;
                font-size: 17px;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 1px;
                margin-bottom: 20px;
            }

            /* Main Heading */

            .verify-section h1 {
                color: #ffffff;
                font-size: 52px;
                font-weight: 700;
                margin-bottom: 10px;
                line-height: 1.2;
            }

            /* Second Line */

            .verify-section h2 {
                color: #ffffff;
                font-size: 44px;
                font-weight: 300;
                margin-bottom: 45px;
            }

            /* Scan Button */

            .scan-btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 15px;
                background: #ffffff;
                color: #1f2b4d;
                text-decoration: none;
                padding: 18px 45px;
                border-radius: 10px;
                font-size: 22px;
                font-weight: 600;
                transition: all .35s ease;
                box-shadow: 0 10px 30px rgba(0,0,0,.15);
            }

                .scan-btn i {
                    color: #13357B;
                    font-size: 24px;
                }

                .scan-btn:hover {
                    background: #f8f9fa;
                    color: #13357B;
                    transform: translateY(-5px);
                    box-shadow: 0 18px 40px rgba(0,0,0,.25);
                }

            /* Optional floating animation */

            .scan-btn {
                animation: floatButton 3s ease-in-out infinite;
            }

            @keyframes floatButton {

                0% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-5px);
                }

                100% {
                    transform: translateY(0);
                }
            }

            /* Responsive */

            @media (max-width: 992px) {

                .verify-section {
                    padding: 80px 0;
                }

                    .verify-section h1 {
                        font-size: 42px;
                    }

                    .verify-section h2 {
                        font-size: 36px;
                    }
            }

            @media (max-width: 768px) {

                .verify-section {
                    padding: 70px 20px;
                }

                .small-title {
                    font-size: 15px;
                }

                .verify-section h1 {
                    font-size: 34px;
                }

                .verify-section h2 {
                    font-size: 30px;
                    margin-bottom: 35px;
                }

                .scan-btn {
                    padding: 16px 35px;
                    font-size: 18px;
                }
            }

            @media (max-width: 576px) {

                .verify-section {
                    padding: 60px 15px;
                }

                    .verify-section h1 {
                        font-size: 28px;
                    }

                    .verify-section h2 {
                        font-size: 24px;
                    }

                .scan-btn {
                    width: 100%;
                    max-width: 280px;
                    font-size: 17px;
                }
            }
            /* QR Code End */
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
                Contact Us
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
                    <a href="contact.html" class="text-white">
                        Contact
                    </a>
                </li>

            </ol>
        </div>
    </div>
    <!-- Header End -->
    <!-- Contact Start -->
    <div class="container-fluid contact bg-light py-5" id="Contact">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Contact Us</h5>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-4">
                    <div class="bg-white rounded p-4">
                        <div class="text-center mb-4">
                            <i class="fa fa-map-marker-alt fa-3x text-primary"></i>
                            <h4 class="text-primary"><Address></Address></h4>
                            <p class="mb-0">No.865/02, <br> Jaya Mawatha, <br> Rajagiriya, Sri Lanka</p>
                        </div>
                        <div class="text-center mb-4">
                            <i class="fa fa-phone-alt fa-3x text-primary mb-3"></i>
                            <h4 class="text-primary">Mobile</h4>
                            <p class="mb-0">+94 11 207 2172</p>
                            <p class="mb-0">+94 70 288 5566</p>
                        </div>
                           
                        <div class="text-center">
                            <i class="fa fa-envelope-open fa-3x text-primary mb-3"></i>
                            <h4 class="text-primary">Email</h4>
                            <p class="mb-0">ihrosrilanka@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h3 class="mb-2">Send us a message</h3>
                    <br>

                    <form id="contactForm" action="https://api.web3forms.com/submit" method="POST">

                        <!-- Web3Forms Access Key -->
                        <input type="hidden" name="access_key" value="49c3909d-e5fe-44a6-811b-fc1d1904a611">

                        <div class="row g-3">

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text"
                                           class="form-control border-0"
                                           id="name"
                                           name="name"
                                           placeholder="Your Name"
                                           required>
                                    <label>Your Name</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email"
                                           class="form-control border-0"
                                           id="email"
                                           name="email"
                                           placeholder="Your Email"
                                           required>
                                    <label>Your Email</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text"
                                           class="form-control border-0"
                                           id="subject"
                                           name="subject"
                                           placeholder="Subject"
                                           required>
                                    <label>Subject</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0"
                                              id="message"
                                              name="message"
                                              placeholder="Message"
                                              style="height:160px"
                                              required></textarea>
                                    <label>Message</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button id="submitBtn"
                                        type="submit"
                                        class="btn btn-primary w-100 py-3">
                                    Send Message
                                </button>
                            </div>

                        </div>
                    </form>
                </div>

                <script>
                                    const form = document.getElementById("contactForm");
                                    const submitBtn = document.getElementById("submitBtn");

                                    form.addEventListener("submit", async function (e) {

                                        e.preventDefault();

                                        submitBtn.disabled = true;
                                        submitBtn.innerHTML = "Sending...";

                                        const formData = new FormData(form);

                                        try {

                                            const response = await fetch("https://api.web3forms.com/submit", {
                                                method: "POST",
                                                body: formData
                                            });

                                            const result = await response.json();

                                            if (result.success) {

                                                alert("Message sent successfully!");

                                                form.reset();

                                            } else {

                                                alert(result.message);

                                            }

                                        } catch (error) {

                                            alert("Something went wrong!");

                                        }

                                        submitBtn.disabled = false;
                                        submitBtn.innerHTML = "Send Message";

                                    });
                </script>
                <div class="col-12">
                    <div class="rounded">
                        <iframe class="rounded w-100"
                                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3960.7352768440755!2d79.90763567499653!3d6.922216193077449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwNTUnMjAuMCJOIDc5wrA1NCczNi44IkU!5e0!3m2!1sen!2slk!4v1779788266199!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>Rajagiriya, Sri Lanka</iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/lightbox/lightbox.min.js"></script>
<script src="~/lib/counterup/counterup.min.js"></script>

    
<!-- Template Javascript -->
<script src="js/main.js"></script>

    </body>
    </html>