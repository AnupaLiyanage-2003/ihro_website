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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.carousel.min.js" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.theme.green.min.css" rel="stylesheet">
    <link href="lib/lightbox/lightbox.min.css" rel="stylesheet">



    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
            .language-dropdown {
                margin-right: 15px;
            }

                .language-dropdown .dropdown-toggle {
                    font-size: 15px;
                    font-weight: 500;
                    color: #fff !important;
                }

            .language-menu {
                min-width: 80px;
                background: #fff;
                border: none;
                border-radius: 0;
                padding: 0;
            }

                .language-menu .dropdown-item {
                    color: #13357B;
                    padding: 12px 15px;
                    font-size: 16px;
                }

                    .language-menu .dropdown-item:hover {
                        background: #13357B;
                        color: #fff;
                    }

                    .language-menu .dropdown-item.active {
                        background: #13357B;
                        color: #fff;
                    }

            /* Phone Design */

            .phone-card {
                display: flex;
                align-items: center;
                gap: 15px;
                background: #ffffff;
                padding: 15px 25px;
                border-radius: 20px;
                box-shadow: 0 8px 25px rgba(0,0,0,0.1);
                transition: all .4s ease;
            }


                .phone-card:hover {
                    transform: translateY(-8px);
                    box-shadow: 0 15px 35px rgba(0,0,0,0.18);
                }


            .phone-icon {
                width: 60px;
                height: 60px;
                background: linear-gradient(135deg,#13357B,#13357B);
                color: white;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 25px;
            }


            .phone-card span {
                color: #13357B;
                font-size: 14px;
            }


            .phone-card h5 {
                margin: 3px 0 0;
                color: #333;
                font-weight: 700;
                letter-spacing: 1px;
            }

            /* Background */

            /* Background */

            .counter-section {
                background: linear-gradient(135deg,#13357B,#0d6efd);
            }


            /* Landscape Card */

            .counter-card {
                display: flex;
                align-items: center;
                gap: 20px;
                padding: 25px;
                height: 130px;
                border-radius: 25px;
                background: rgba(255,255,255,.15);
                backdrop-filter: blur(12px);
                color: white;
                transition: .4s;
                border: 1px solid rgba(255,255,255,.25);
            }


                .counter-card:hover {
                    transform: translateY(-8px);
                    background: rgba(255,255,255,.25);
                    box-shadow: 0 15px 35px rgba(0,0,0,.2);
                }


            /* Icon */

            .counter-icon {
                width: 80px;
                height: 80px;
                flex-shrink: 0;
                border-radius: 20px;
                background: #ffffff;
                color: #13357B;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 35px;
                box-shadow: 0 8px 20px rgba(0,0,0,.2);
            }

            /* Number */

            .counter-number {
                margin: 0;
                font-size: 38px;
                font-weight: 800;
                color: #ffffff;
            }


            .counter-card p {
                margin: 0;
                font-size: 17px;
                color: #ffffff;
                letter-spacing: 1px;
            }

            /* QR Code Start */

            /* ===========================
               Membership Verification
            =========================== */

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

/* =========================
   CHATBOT FLOATING BUTTON
========================= */

#chatbot-toggle {
    position: fixed;
    bottom: 90px;      /* Move icon higher */
    right: 30px;
    z-index: 9999;
}


.chatbot-btn {
    width: 65px;
    height: 65px;
    border: none;
    border-radius: 50%;
    background: #13357B;
    color: #ffffff;
    font-size: 26px;
    cursor: pointer;

    display: flex;
    align-items: center;
    justify-content: center;

    box-shadow: 0 5px 20px rgba(0,0,0,0.25);
    transition: all 0.3s ease;
}


.chatbot-btn:hover {
    transform: scale(1.1);
    background: #0d2558;
}



/* =========================
      CHAT WINDOW
========================= */

#chatbot-window {

    position: fixed;

    bottom: 170px;     /* Above icon */
    right: 30px;

    width: 360px;
    max-width: 90vw;

    height: 520px;

    background: #ffffff;

    border-radius: 18px;

    overflow: hidden;

    display: none;
    flex-direction: column;

    box-shadow: 0 10px 35px rgba(0,0,0,0.3);

    z-index: 10000;

    animation: chatbotOpen 0.3s ease;
}



/* Opening animation */

@keyframes chatbotOpen {

    from {
        opacity:0;
        transform: translateY(30px);
    }

    to {
        opacity:1;
        transform: translateY(0);
    }

}



/* =========================
       HEADER
========================= */


.chatbot-header {

    background:#13357B;

    color:white;

    padding:15px 18px;

    display:flex;

    align-items:center;

    justify-content:space-between;

    font-size:17px;

    font-weight:600;

}


.chatbot-header button {

    background:transparent;

    border:none;

    color:white;

    font-size:28px;

    cursor:pointer;

}



/* =========================
       MESSAGES
========================= */


#chatbot-messages {

    flex:1;

    padding:15px;

    overflow-y:auto;

    background:#f5f7fb;

    font-size:15px;

}



/* Bot Message */

.bot-message {

    background:white;

    padding:12px;

    border-radius:12px;

    margin-bottom:10px;

    width:fit-content;

    max-width:85%;

    box-shadow:0 2px 8px rgba(0,0,0,0.08);

}



/* User Message */

.user-message {

    background:#13357B;

    color:white;

    padding:12px;

    border-radius:12px;

    margin-bottom:10px;

    margin-left:auto;

    width:fit-content;

    max-width:85%;

}



/* =========================
       INPUT AREA
========================= */


#chatbot-form {

    display:flex;

    border-top:1px solid #ddd;

    background:white;

}


#chatbot-input {

    flex:1;

    border:none;

    outline:none;

    padding:14px;

    font-size:15px;

}


#chatbot-form button {

    width:80px;

    border:none;

    background:#13357B;

    color:white;

    cursor:pointer;

    font-size:16px;

}



#chatbot-form button:hover {

    background:#0d2558;

}



/* =========================
       MOBILE RESPONSIVE
========================= */


@media(max-width:500px){


    #chatbot-toggle {

        right:20px;

        bottom:80px;

    }


    #chatbot-window {

        right:10px;

        bottom:150px;

        width:95vw;

        height:480px;

    }


    .chatbot-btn {

        width:55px;

        height:55px;

    }

}

/* ===============================
   Discover Our Impact Section
================================= */

.impact-section {
    width: 100%;
    min-height: 100vh;
    background: linear-gradient(rgba(7, 37, 89, 0.75),
                rgba(7, 37, 89, 0.75)),
                url("img/impact-bg.jpg") center center/cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 60px 20px;
}

.impact-container {
    max-width: 1200px;
    width: 100%;
    margin: auto;
}

.impact-content {
    color: #fff;
}

.impact-content h2 {
    font-size: 4rem;
    font-weight: 800;
    margin-bottom: 20px;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.impact-content p {
    font-size: 1.4rem;
    line-height: 1.8;
    margin-bottom: 45px;
    color: rgba(255,255,255,0.9);
}

.impact-buttons {
    display: flex;
    justify-content: center;
    gap: 25px;
    flex-wrap: wrap;
}

.left-btn {
    justify-content: flex-start;
}

.impact-btn {
    display: inline-block;
    padding: 16px 45px;
    font-size: 18px;
    font-weight: 700;
    text-decoration: none;
    color: #13357B;
    background: #ffffff;
    border-radius: 50px;
    transition: all 0.4s ease;
    box-shadow: 0 12px 30px rgba(0,0,0,0.25);
}

.impact-btn:hover {
    background: #13357B;
    color: #ffffff;
    transform: translateY(-6px);
    box-shadow: 0 18px 35px rgba(0,0,0,0.35);
}

/* Optional animation */

.impact-content {
    animation: fadeUp 1.2s ease;
}

@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* ===============================
   Responsive Design
================================= */

@media (max-width: 992px) {

    .impact-content h2 {
        font-size: 3rem;
    }

    .impact-content p {
        font-size: 1.2rem;
    }

}

@media (max-width: 768px) {

    .impact-section {
        min-height: 80vh;
    }

    .impact-content h2 {
        font-size: 2.3rem;
    }

    .impact-content p {
        font-size: 1rem;
        margin-bottom: 35px;
    }

    .impact-buttons {
        flex-direction: column;
        align-items: center;
        gap: 18px;
    }

    .impact-btn {
        width: 220px;
    }

}
            
</style>

</head>

<body>

    <!-- Start Main header-->
        <?php include 'header/header.php';?>
        <!-- End Main header-->
         
    <!-- Carousel Start -->
    <div class="carousel-header">
        <div id="carouselId" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselId" data-bs-slide-to="0"
                        class="active"></button>

                <button type="button" data-bs-target="#carouselId" data-bs-slide-to="1"></button>

                <button type="button" data-bs-target="#carouselId" data-bs-slide-to="2"></button>

                <button type="button" data-bs-target="#carouselId" data-bs-slide-to="3"></button>

                <button type="button" data-bs-target="#carouselId" data-bs-slide-to="4"></button>
            </div>
           <!-- Slides -->
            <div class="carousel-inner">

                <!-- Slide 1 (ACTIVE) -->
                <div class="carousel-item active">
                    <img src="img/img_1.jpg" class="d-block w-100 carousel-img" alt="IHRO">

                    <div class="carousel-caption">
                        <div class="text-center p-4 mx-auto" style="max-width:900px;">

                            <h4 class="text-white text-uppercase fw-bold mb-3 wow fadeInUp"
                                data-wow-delay="0.2s">
                                The International Human Rights Organization Sri Lanka
                            </h4>

                            <h1 class="display-1 text-white mb-4 wow fadeInUp"
                                data-wow-delay="0.4s">
                                MAKING HUMAN RIGHTS A FACT
                            </h1>

                            <p class="text-white fs-5 mb-5 wow fadeInUp"
                            data-wow-delay="0.6s">
                                The International Human Rights Organization Sri Lanka (IHRO)
                                is an independent, non-profit national organization committed
                                to promoting, protecting, and implementing human rights worldwide.
                            </p>

                            <a href="#" class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp"
                            data-wow-delay="0.8s">
                                More Details
                            </a>

                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="img/BA7.PNG" class="d-block w-100 carousel-img" alt="Human Rights">

                    <div class="carousel-caption d-flex align-items-center justify-content-center h-100">
                        <h1 class="display-1 text-white fw-bold wow fadeInUp">
                            EVERY PERSON HAS RIGHTS.
                        </h1>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="img/BA8.jpeg" class="d-block w-100 carousel-img" alt="IHRO Peace">

                    <div class="carousel-caption">
                        <div class="text-center p-4 mx-auto" style="max-width:900px;">

                            <h1 class="display-3 text-white mb-4">
                                PROTECTING RIGHTS, PROMOTING PEACE.
                            </h1>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="carousel-item">
                    <img src="img/BA6.PNG" class="d-block w-100 carousel-img" alt="IHRO Peace">

                    <div class="carousel-caption">
                        <div class="text-center p-4 mx-auto" style="max-width:900px;">

                            <h1 class="display-3 text-white mb-4">
                                EVERY VOICE MATTERS.
                            </h1>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="carousel-item">
                    <img src="img/BA5.jpeg" class="d-block w-100 carousel-img" alt="IHRO Peace">

                    <div class="carousel-caption">
                        <div class="text-center p-4 mx-auto" style="max-width:900px;">

                            <h1 class="display-3 text-white mb-4">
                                EVERY ACTION CREATES CHANGE.
                            </h1>
                        </div>
                    </div>
                </div>

                <!-- Slide 6 -->
                <div class="carousel-item">
                    <img src="img/BA2.jpeg" class="d-block w-100 carousel-img" alt="IHRO Peace">

                    <div class="carousel-caption">
                        <div class="text-center p-4 mx-auto" style="max-width:900px;">

                            <h1 class="display-3 text-white mb-4">
                                TOGETHER WE STAND FOR HUMANITY.
                            </h1>
                        </div>
                    </div>
                </div>

            </div>



            <!-- Previous -->
            <button class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselId"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">
                    Previous
                </span>
            </button>
            <!-- Next -->
            <button class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselId"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">
                    Next
                </span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="d-flex justify-content-start align-items-center h-100">
                        <img src="img/aboutlogo.png" class="img-fluid" alt="IHRO Logo">
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h5 class="sub-title pe-3">About Our Organization</h5>
                    <h1 class="display-5 mb-4">Making Human Rights <br> A Fact.</h1>
                    <p class="mb-4">The International Human Rights Organization Sri Lanka (IHRO) is an independent, non-profit national organization committed to advancing the implementation of the Universal Declaration of Human Rights (UDHR) at local, regional, national, and international levels. IHRO brings together a global network of individuals, educators, and organizations dedicated to promoting human rights awareness, education, and protection for all people.</p>
                    <p class="mb-4">
                        IHRO promotes human rights through education, awareness, and community initiatives, bringing together individuals, educators, organizations, and institutions to create a more informed and united society.
                    </p>
                    <p class="mb-4">IHRO was founded on the 60th anniversary of the Universal Declaration of Human Rights to address ongoing human rights challenges worldwide. Inspired by the Declaration’s principles, it works to promote freedom, equality, justice, and peaceful coexistence through awareness and action.</p>
                    <div class="row gy-4 align-items-center">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <br />
    <!-- Where WE Do Start -->
    <!-- Services Start -->
    <div class="container-fluid service overflow-hidden py-5" id="where">
        <div class="container">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">What We Do</h5>
                </div>
                <h1 class="display-5 mb-4">We Are In A Mission To Help The Helpless</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="img/education.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                        <a href="#" class="h4 text-white mb-0">IHRO Academy</a>
                                    </div>
                                    <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="about.php#card1">Explore More</a>
                                </div>
                                <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">IHRO Academy</h4></a>
                                    <div class="px-4">
                                        <p class="mb-4">Empowering individuals through knowledge to uphold and protect their rights.</p>
                                        <a class="btn btn-primary border-secondary rounded-pill py-3 px-5" href="about.php#card1">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="img/violence.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                        <a href="#" class="h4 text-white mb-0">Human Rights Violation</a>
                                    </div>
                                    <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="about.php#card1">Explore More</a>
                                </div>
                                <div class="service-content pb-4">
                                    <a href="#"><h4 class="text-white mb-4 py-3">Human Rights Violation</h4></a>
                                    <div class="px-4">
                                        <p class="mb-4">Standing against violence and creating safe spaces for all genders.</p>
                                        <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="about.php#card1">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="img/Legal-Aid.webp" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                        <a href="#" class="h4 text-white mb-0">Legal Aid</a>
                                    </div>
                                    <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="about.php#card1">Explore More</a>
                                </div>
                                <div class="service-content pb-4">
                                    <a href="#"><h4 class="text-white mb-4 py-3">Legal Aid</h4></a>
                                    <div class="px-4">
                                        <p class="mb-4">Providing access to justice and legal assistance for those in need.</p>
                                        <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="about.php#card1">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="img/banath.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                        <a href="#" class="h4 text-white mb-0">Youth Club</a>
                                    </div>
                                    <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="about.php#card1">Explore More</a>
                                </div>
                                <div class="service-content pb-4">
                                    <a href="#"><h4 class="text-white mb-4 py-3">Youth Club</h4></a>
                                    <div class="px-4">
                                        <p class="mb-4">Breaking the cycle of poverty by ensuring children’s rights and opportunities.</p>
                                        <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="about.php#card1">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="img/womens.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                        <a href="#" class="h4 text-white mb-0">Women's wing'</a>
                                    </div>
                                    <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="about.php#card2">Explore More</a>
                                </div>
                                <div class="service-content pb-4">
                                    <a href="#"><h4 class="text-white mb-4 py-3">Women's Wing</h4></a>
                                    <div class="px-4">
                                        <p class="mb-4">Ensuring equal rights and dignity for every individual, without discrimination.</p>
                                        <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="about.php#card2">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="img/youth.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                        <a href="#" class="h4 text-white mb-0">Welfare Movement</a>
                                    </div>
                                    <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="about.php#card2">Explore More</a>
                                </div>
                                <div class="service-content pb-4">
                                    <a href="#"><h4 class="text-white mb-4 py-3">Welfare Movement</h4></a>
                                    <div class="px-4">
                                        <p class="mb-4">It is essential to implement group activities for the good of society, without discrimination, while providing equal opportunities for all parties.</p>
                                        <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="about.php#card2">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
    <!-- Fact Counter Start -->
    <div class="container-fluid counter-section py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="counter-card">
                        <div class="counter-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div>
                            <h2 class="counter-number" data-target="25">5200+</h2>
                            <p>International Directors</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="counter-card">
                        <div class="counter-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div>
                            <h2 class="counter-number" data-target="56">3025+</h2>
                            <p>National Directors</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="counter-card">
                        <div class="counter-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div>
                            <h2 class="counter-number" data-target="127">1110+</h2>
                            <p>District Directors</p>
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6">
                    <div class="counter-card">
                        <div class="counter-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div>
                            <h2 class="counter-number" data-target="25">500+</h2>
                            <p>Defenders</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Fact Counter -->
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
    <!-- Chairman Message Start -->

    <div class="container-fluid py-5" id="chairman-message">
        <div class="container pt-5">
            <div class="row g-5 align-items-center">

                <!-- Chairman Image -->
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="h-100 shadow rounded overflow-hidden"
                         style="border: 12px solid #13357B;">
                        <img src="img/CHA_0783.JPG"
                             class="img-fluid w-100 h-100"
                             style="object-fit: cover;"
                             alt="Chairman - IHRO Sri Lanka">
                    </div>
                </div>

                <!-- Chairman Message -->
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">

                    <h5 class="sub-title text-primary pe-3">Chairman's Message</h5>

                    <p class="mb-4">
                        It is my great honor to welcome you to the
                        <strong>International Human Rights Organization – Sri Lanka (IHRO Sri Lanka)</strong>.
                    </p>

                    <p class="mb-4">
                        Our organization is dedicated to promoting, protecting, and advocating
                        for the fundamental rights and freedoms of every individual,
                        without discrimination. We strive to build a society founded on
                        justice, equality, dignity, and respect for human rights through
                        education, advocacy, research, community engagement, and collaboration.
                    </p>

                    <p class="mb-4">
                        At IHRO Sri Lanka, we believe that meaningful change is achieved
                        through collective effort. I extend my sincere gratitude to our
                        members, volunteers, partners, and supporters whose dedication
                        and commitment continue to strengthen our mission and expand
                        our impact across the country.
                    </p>

                    <p class="mb-4">
                        As we move forward, we remain committed to empowering communities,
                        promoting awareness, and working together to create a more just,
                        inclusive, and peaceful society for present and future generations.
                    </p>
                    

                    <!-- Signature -->
                    <div class="mt-5 pt-3 border-top">
                        <h4 class="mb-1 text-primary fw-bold">
                            Subashana S. Subawickrama
                        </h4>

                        <p class="mb-0 fw-semibold">
                            Chairman / Founder
                        </p>

                        <p class="text-muted mb-0">
                            International Human Rights Organization – Sri Lanka
                            (IHRO Sri Lanka)
                        </p>
                    </div>
                    <br><br>
                    <div class="impact-buttons left-btn">
                        <a href="president.php" class="impact-btn">Explore More</a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Chairman Message End -->
        <!-- Guide Start -->
        <div class="container-fluid contact overflow-hidden py-5">
            <div class="container pb-5">
                <div class="office">
                    <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary px-3">WORLWIDE OFFICES</h5>
                        </div>
                        <h1 class="display-5 mb-4">OUR DIRECTOR BOARD</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <div class="guide-item">
                                <div class="guide-img">
                                    <div class="guide-img-efects">
                                        <img src="img/Event/neel.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                    </div>
                                </div>
                                <div class="guide-title text-center rounded-bottom p-4">
                                    <div class="guide-title-inner">
                                        <h4 class="mt-3">Dr. Neel Wasantha</h4>
                                        <p class="mb-0">Senior Lecturer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="guide-item">
                                <div class="guide-img">
                                    <div class="guide-img-efects">
                                        <img src="img/wijaya.jpeg" class="img-fluid w-100 rounded-top" alt="Image">
                                    </div>
                                </div>
                                <div class="guide-title text-center rounded-bottom p-4">
                                    <div class="guide-title-inner">
                                        <h4 class="mt-3">Dr.S Wijayarajan</h4>
                                        <p class="mb-0">Doctor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="guide-item">
                                <div class="guide-img">
                                    <div class="guide-img-efects">
                                        <img src="img\IMG_2286.JPG (1).jpeg" class="img-fluid w-100 rounded-top" alt="Image">
                                    </div>
                                </div>
                                <div class="guide-title text-center rounded-bottom p-4">
                                    <div class="guide-title-inner">
                                        <h4 class="mt-3">Dr. K. Rajasundaran</h4>
                                        <p class="mb-0">Doctor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="guide-item">
                                <div class="guide-img">
                                    <div class="guide-img-efects">
                                        <img src="img/susantha.jpeg" class="img-fluid w-100 rounded-top" alt="Image">
                                    </div>
                                </div>
                                <div class="guide-title text-center rounded-bottom p-4">
                                    <div class="guide-title-inner">
                                        <h4 class="mt-3"> S.Gunawardhana</h4>
                                        <p class="mb-0">Attorney at Law</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Travel Guide End -->
    <!-- Discover Our Impact Section -->
    <section class="verify-section">
        <div class="overlay-circle"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h1>Discover Our Impact</h1>
                    <h6 class="small-title">
                        See how IHRO is promoting<br>
                        human rights across Sri Lanka.
                    </h6>
                    <div class="impact-buttons">
                        <a href="events.php" class="impact-btn">Events</a>
                        <a href="gallery.php" class="impact-btn">Gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Start Main header-->
        <?php include 'footer/footer.php';?>
        <!-- End Main header-->


        <!-- Copyright Start -->
<footer class="container-fluid copyright py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">

                <p class="mb-0 text-white">
                    <i class="fas fa-copyright me-2"></i>
                    2026
                    <a href="index.html" class="text-white text-decoration-none fw-semibold">
                        International Human Rights Organization (IHRO)
                    </a>.
                    All Rights Reserved.
                </p>

                <p class="mb-0 mt-2 text-white">
                    Designed &amp; Developed by
                    <a href="#" class="text-white text-decoration-none fw-semibold">
                        IHRO IT Team
                    </a>
                </p>

            </div>
        </div>
    </div>
</footer>
<!-- Copyright End -->



<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>


<!-- Chatbot Widget Start -->
        <div id="chatbot-toggle" style="position: fixed; bottom: 30px; right: 30px; z-index: 9999;">
            <button id="open-chatbot" class="btn btn-primary rounded-circle" style="width: 60px; height: 60px; box-shadow: 0 2px 8px rgba(0,0,0,0.2);">
                <i class="fas fa-comments" style="font-size: 1.5rem;"></i>
            </button>
        </div>
        <div id="chatbot-window" style="display: none; position: fixed; bottom: 100px; right: 30px; width: 320px; max-width: 90vw; background: #fff; border-radius: 16px; box-shadow: 0 4px 24px rgba(0,0,0,0.18); z-index: 10000; overflow: hidden;">
            <div style="background: #13357B; color: #fff; padding: 12px 16px; display: flex; align-items: center; justify-content: space-between;">
                <span><i class="fas fa-robot me-2"></i>Chat with us!</span>
                <button id="close-chatbot" style="background: none; border: none; color: #fff; font-size: 1.2rem; cursor: pointer;">&times;</button>
            </div>
            <div id="chatbot-messages" style="height: 260px; padding: 12px; overflow-y: auto; background: #f7f7f7; font-size: 0.97rem;"></div>
            <form id="chatbot-form" style="display: flex; border-top: 1px solid #eee;">
                <input id="chatbot-input" type="text" placeholder="Type your message..." autocomplete="off" style="flex: 1; border: none; padding: 10px; outline: none; font-size: 1rem;">
                <button type="submit" style="background: #13357B; color: #fff; border: none; padding: 0 18px; font-size: 1.1rem;">Send</button>
            </form>
        </div>
        <!-- Chatbot Widget End -->

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/lightbox.min.js"></script>
    <script src="~/lib/counterup/counterup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function(){

        const counters = document.querySelectorAll(".counter");

        counters.forEach(counter => {

        let target = +counter.getAttribute("data-target");
        let count = 0;

        let speed = target / 100;

        function updateCounter(){

        if(count < target){

        count += speed;
        counter.innerText = Math.ceil(count);

        setTimeout(updateCounter, 20);

        }else{
        counter.innerText = target;
        }
        }

        updateCounter();

        });

        });
    </script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>