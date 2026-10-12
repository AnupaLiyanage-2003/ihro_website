 <!-- Start Main header-->
        <?php include 'loading/layout.php';?>
        <!-- End Main header-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>IHRO - ABOUT</title>
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
            /* Modern Vision & Mission Card */
            .vm-landscape-card {
                display: flex;
                align-items: center;
                gap: 35px;
                padding: 35px;
                border-radius: 30px;
                position: relative;
                overflow: hidden;
                background: rgba(255, 255, 255, 0.85);
                backdrop-filter: blur(15px);
                -webkit-backdrop-filter: blur(15px);
                border: 1px solid rgba(255,255,255,0.4);
                box-shadow: 0 20px 50px rgba(19,53,123,0.12);
                transition: all 0.5s ease;
                z-index: 1;
            }

                /* Animated Gradient Border */
                .vm-landscape-card::before {
                    content: '';
                    position: absolute;
                    inset: -2px;
                    border-radius: 32px;
                    background: linear-gradient( 135deg, #13357B, #3d7eff, #00c6ff, #13357B );
                    background-size: 300% 300%;
                    animation: gradientMove 8s ease infinite;
                    z-index: -2;
                }

                /* Inner White Layer */
                .vm-landscape-card::after {
                    content: '';
                    position: absolute;
                    inset: 2px;
                    background: white;
                    border-radius: 28px;
                    z-index: -1;
                }

                /* Hover Effect */
                .vm-landscape-card:hover {
                    transform: translateY(-12px);
                    box-shadow: 0 30px 60px rgba(19,53,123,0.20);
                }

     

            /* Floating Circle Decoration */
            .vm-image::before {
                content: '';
                position: absolute;
                width: 120px;
                height: 120px;
                background: rgba(19,53,123,0.15);
                border-radius: 50%;
                top: -30px;
                right: -30px;
                animation: pulseGlow 4s infinite;
            }

            /* Content */
            .vm-content {
                text-align: left;
            }

                .vm-content h2 {
                    font-size: 3rem;
                    font-weight: 800;
                    color: #13357B;
                    margin-bottom: 15px;
                    text-align: left;
                    position: relative;
                }

                    .vm-content h2::after {
                        content: '';
                        width: 70px;
                        height: 4px;
                        background: linear-gradient(90deg,#13357B,#4f7de0);
                        position: absolute;
                        left: 0;
                        right: auto;
                        bottom: -8px;
                        border-radius: 10px;
                    }

                .vm-content p {
                    margin-top: 20px;
                    color: #666;
                    line-height: 1.9;
                    font-size: 1.05rem;
                }

            /* Gradient Animation */
            @keyframes gradientMove {
                0% {
                    background-position: 0% 50%;
                }

                50% {
                    background-position: 100% 50%;
                }

                100% {
                    background-position: 0% 50%;
                }
            }

            /* Floating Image */
            @keyframes floatImage {
                0%, 100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-12px);
                }
            }

            /* Glow Circle */
            @keyframes pulseGlow {
                0%, 100% {
                    transform: scale(1);
                    opacity: .5;
                }

                50% {
                    transform: scale(1.2);
                    opacity: .9;
                }
            }

            /* Entrance Animation */
            .vm-landscape-card {
                animation: fadeUp 1s ease;
            }

            @keyframes fadeUp {
                from {
                    opacity: 0;
                    transform: translateY(60px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* Mobile Responsive */
            @media(max-width:768px) {
                .vm-landscape-card {
                    flex-direction: column;
                    text-align: center;
                    padding: 25px;
                }

                .vm-image {
                    width: 100%;
                    height: 250px;
                }

                .vm-content h2::after {
                    left: 50%;
                    transform: translateX(-50%);
                }
            }

            /*=========================
               History Section
            ==========================*/

            .history-section {
                background: #fff;
                padding: 80px 0;
            }

            .section-subtitle {
                color: #0d6efd;
                font-size: 16px;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 1px;
                margin-bottom: 10px;
            }

            .section-title {
                color: #13357B;
                font-size: 40px;
                font-weight: 700;
                margin-bottom: 15px;
            }

            .title-line {
                width: 70px;
                height: 3px;
                background: #0d6efd;
                margin: 0 auto 40px;
                border-radius: 5px;
            }

            .history-content {
                max-width: 1000px;
                margin: 0 auto;
            }

                .history-content p {
                    font-size: 17px;
                    line-height: 1.9;
                    color: #555;
                    text-align: justify;
                    margin-bottom: 20px;
                }

                    .history-content p:last-child {
                        margin-bottom: 0;
                    }

            /* Responsive */

            @media (max-width:991px) {

                .section-title {
                    font-size: 34px;
                }

                .history-content p {
                    font-size: 16px;
                }
            }

            @media (max-width:768px) {

                .history-section {
                    padding: 60px 0;
                }

                .section-title {
                    font-size: 28px;
                }

                .history-content p {
                    font-size: 15px;
                }
            }

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

            .card {
                border-radius: 15px;
                transition: 0.3s;
            }

                .card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 10px 25px rgba(0,0,0,0.12) !important;
                }

                .card h4 {
                    font-weight: 700;
                    margin-bottom: 15px;
                }

                .card p {
                    line-height: 1.8;
                    font-size: 15px;
                }

            /* Maps */
            /*====================================
               IHRO Branch Live Map Design
            =====================================*/

            .branch-map-section {
                background: linear-gradient(135deg,#f4f8ff,#ffffff);
                padding: 80px 0;
            }


            /* Main Map Card */

            .map-card {
                background: #ffffff;
                border-radius: 30px;
                padding: 25px;
                box-shadow: 0 20px 50px rgba(19,53,123,0.15);
                position: relative;
                overflow: hidden;
            }


                /* Top Glow */

                .map-card::before {
                    content: "";
                    position: absolute;
                    width: 250px;
                    height: 250px;
                    background: #13357B;
                    opacity: .08;
                    border-radius: 50%;
                    top: -120px;
                    right: -120px;
                }


            /* Title */

            .map-title {
                text-align: center;
                margin-bottom: 35px;
            }


                .map-title h5 {
                    color: #13357B;
                    font-weight: 800;
                    letter-spacing: 2px;
                    text-transform: uppercase;
                }


                .map-title h2 {
                    font-size: 42px;
                    font-weight: 800;
                    color: #13357B;
                }



            /* Google Map Box */

            #branchMap {
                width: 100%;
                height: 600px;
                border-radius: 25px;
                overflow: hidden;
                box-shadow: inset 0 0 0 5px rgba(19,53,123,.05);
            }



            /* Custom Google Marker Popup */

            .gm-style .gm-style-iw {
                border-radius: 15px !important;
            }



            .gm-style-iw h5 {
                color: #13357B;
                font-weight: 700;
            }



            /* Floating Info */

            .map-info {
                position: absolute;
                bottom: 45px;
                left: 45px;
                background: white;
                padding: 20px 25px;
                border-radius: 20px;
                box-shadow: 0 15px 35px rgba(0,0,0,.15);
                z-index: 10;
            }



                .map-info h4 {
                    margin: 0;
                    color: #13357B;
                }



                .map-info p {
                    margin: 5px 0 0;
                    color: #555;
                }



            /* Responsive */

            @media(max-width:768px) {


                .branch-map-section {
                    padding: 40px 15px;
                }


                .map-card {
                    padding: 15px;
                }


                #branchMap {
                    height: 420px;
                }


                .map-title h2 {
                    font-size: 30px;
                }


                .map-info {
                    left: 20px;
                    bottom: 25px;
                    padding: 15px;
                }
            }

        /*==========================
    ABOUT IHRO
==========================*/

.purpose-section{
    max-width:1300px;
    margin:80px auto;
    padding:0 20px;
}

/* Heading */

.purpose-header{
    text-align:center;
    margin-bottom:55px;
}

.purpose-badge{
    display:inline-block;
    padding:10px 24px;
    background:#eef4ff;
    color:#143d8d;
    font-weight:700;
    font-size:14px;
    letter-spacing:3px;
    border-radius:30px;
    position:relative;
    text-transform:uppercase;
}

.purpose-badge::before,
.purpose-badge::after{
    content:"";
    position:absolute;
    top:50%;
    width:90px;
    height:2px;
    background:#2d5cff;
}

.purpose-badge::before{
    right:100%;
    margin-right:18px;
}

.purpose-badge::after{
    left:100%;
    margin-left:18px;
}

.purpose-header h2{
    margin:20px 0 12px;
    font-size:58px;
    color:#173d8f;
    font-weight:700;
}

.purpose-header p{
    font-size:15px;
    color:#666;
}

/* Card */

.purpose-card{
    background:#fff;
    border:3px solid #1f9df5;
    border-radius:35px;
    padding:60px;
    box-shadow:0 18px 45px rgba(0,0,0,.08);
    transition:.35s;
}

.purpose-card:hover{
    transform:translateY(-8px);
    box-shadow:0 25px 60px rgba(0,0,0,.12);
}

.purpose-card h3{
    color:#173d8f;
    font-weight:700;
    margin-bottom:25px;
    position:relative;
}

.purpose-card h3::after{
    content:"";
    width:85px;
    height:5px;
    background:#355cc9;
    border-radius:20px;
    position:absolute;
    left:0;
    bottom:-12px;
}

.purpose-card p{
    margin-top:28px;
    font-size:15px;
    line-height:2;
    color:#555;
    text-align:justify;
}

/* Responsive */

@media(max-width:991px){

    .purpose-header h2{
        font-size:42px;
    }

    .purpose-card{
        padding:40px;
    }

    .purpose-card h3{
        font-size:38px;
    }

    .purpose-card p{
        font-size:18px;
    }

    .purpose-badge::before,
    .purpose-badge::after{
        width:45px;
    }

}

@media(max-width:576px){

    .purpose-header h2{
        font-size:34px;
    }

    .purpose-card{
        padding:30px 25px;
        border-radius:25px;
    }

    .purpose-card h3{
        font-size:30px;
    }

    .purpose-card p{
        font-size:16px;
        line-height:1.8;
    }

    .purpose-badge::before,
    .purpose-badge::after{
        display:none;
    }

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
            <h3 class="text-white mb-4 wow fadeInDown"
                data-wow-delay="0.1s"
                style="font-size: 8rem;">
                About Us
            </h3>
        </div>
    </div>
    <!-- Header End -->

    <section class="purpose-section">

    <div class="purpose-header">
        <span class="purpose-badge">OUR PURPOSE</span>

        <h2>About IHRO</h2>

        <p>Promoting Human Rights, Justice & Human Dignity.</p>
    </div>

    <div class="purpose-card">

        <p>
            The International Human Rights Organization Sri Lanka (IHRO) is a humanitarian
            organization dedicated to promoting, protecting, and advancing human rights
            through education, advocacy, leadership, and community engagement. As a platform
            that unites professionals, educators, youth, volunteers, and institutions,
            IHRO works to strengthen a culture of respect for human dignity, equality,
            justice, and peace.
        </p>

        <p>
            Through strategic partnerships, awareness campaigns, capacity-building programs,
            legal support initiatives, and humanitarian services, IHRO empowers individuals
            and communities to become active defenders of human rights. Our work extends
            across Sri Lanka and through international collaborations, creating sustainable
            solutions that contribute to a more inclusive, equitable, and rights-respecting
            society.
        </p>
    </div>

</section>

    <!-- Vision & Mission Section Start -->
    <section class="vision-mission-landscape py-5">
        <div class="container">

            <!-- Title -->
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">OUR PURPOSE</h5>
                </div>
                <h1 class="display-5 fw-bold">Vision & Mission</h1>
                <p class="text-muted">Making Human Rights A Fact.</p>
            </div>

            <!-- Vision -->
            <div class="vm-landscape-card wow fadeInLeft" data-wow-delay="0.2s">
                <div class="vm-icon-box">
                </div>

                <div class="vm-content">
                    <h2>Our Vision</h2>
                    <p>
                        A world where human rights are fully realized, respected,
                        and protected for every individual, enabling all people and
                        nations to live with dignity, freedom, equality, and peace.
                    </p>
                </div>
            </div>
            <br /> <br />
            <!-- Mission -->
            <div class="vm-landscape-card wow fadeInRight mt-4" data-wow-delay="0.4s">

                <div class="vm-icon-box">
                </div>

                <div class="vm-content">
                    <h2>Our Mission</h2>
                    <p>
                        The International Human Rights Organization Sri Lanka (IHRO)
                        is dedicated to advancing the principles and implementation
                        of the Universal Declaration of Human Rights at local,
                        regional, national, and international levels.
                        <br><br>
                        Through education, advocacy, and collaboration, IHRO
                        empowers individuals, educators, civil society organizations,
                        and governmental institutions to promote human rights
                        awareness, prevent abuses, and foster sustainable cultures
                        of respect, accountability, and peace worldwide.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!-- Vision & Mission Section End -->

    <!-- History & Overview Start -->
    <section class="history-section py-5">
        <div class="container">

            <!-- Section Title -->
            <div class="text-center mb-5">
                <h6 class="section-subtitle">SRI LANKA HUMAN RIGHTS</h6>
                <h2 class="section-title">History & Overview</h2>
                <div class="title-line"></div>
            </div>

            <div class="row justify-content-center">

                <div class="col-lg-10">

                    <div class="history-content">

                        <p>
                            Sri Lanka is a diverse nation with a rich cultural heritage, home to multiple ethnic,
                            religious, and linguistic communities. The country's human rights landscape has been
                            shaped by decades of political change, civil conflict, and socio-economic challenges.
                            Although the Constitution guarantees fundamental rights and Sri Lanka is a party to
                            several international human rights treaties, challenges remain in ensuring these rights
                            are fully realized for all citizens.
                        </p>

                        <p>
                            The legacy of the armed conflict continues to influence the country's human rights
                            environment. Many individuals and communities continue to seek truth, justice,
                            accountability, and reparations for past violations. Progress toward reconciliation
                            has been gradual, highlighting the importance of transparent, independent, and
                            victim-centered processes.
                        </p>

                        <p>
                            Civil and political rights, including freedom of expression, peaceful assembly,
                            and association, remain important priorities. Protecting journalists, human rights
                            defenders, and civil society organizations is vital for maintaining democratic values
                            and ensuring public participation.
                        </p>

                        <p>
                            Sri Lanka also faces ongoing challenges relating to the rule of law, access to justice,
                            and socio-economic rights. Strengthening judicial independence, ensuring equal protection
                            under the law, and improving access to education, healthcare, housing, and livelihoods
                            are essential for promoting dignity, equality, and justice for all.
                        </p>

                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- Histry & Overview End-->
    <!-- Province Section Start -->
    <section class="province-section py-5">
        <div class="container">

            <div class="row g-4">

                <!-- Province Item -->
                <div class="col-lg-4 col-md-6">
                    <div class="province-item">
                        <h4>Northern Province</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="province-item">
                        <h4>Eastern Province</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="province-item">
                        <h4>Central Province</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="province-item">
                        <h4>Western Province</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="province-item">
                        <h4>Southern Province</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="province-item">
                        <h4>North Western Province</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="province-item">
                        <h4>Uva Province</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="province-item">
                        <h4>North Central Province</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="province-item">
                        <h4>Sabaragamuwa Province</h4>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Province Section End -->
    <!-- Engagement Section Start -->
    <section class="py-5 bg-light">
        <div class="container">

            <!-- Section Title -->
            <div class="text-center mb-5" id="card1">
                <h5 class="text-primary text-uppercase fw-bold">
                    Engagement
                </h5>

                <h2 class="fw-bold">
                    IHRO's Engagement in Sri Lanka
                </h2>

                <p class="text-muted mx-auto" style="max-width:800px;">
                    The International Human Rights Organization Sri Lanka (IHRO Sri Lanka)
                    works to promote and protect human rights for all people across Sri Lanka.
                    We support individuals and communities by encouraging equality, justice,
                    dignity, and freedom while helping those whose rights are under threat.
                </p>
            </div>

            <!-- Cards -->
            <div class="row g-4" >

                <!-- Card 1 -->
                <div class="col-lg-6">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h4 class="text-primary">
                                IHRO Education
                            </h4>

                            <p class="text-muted mb-0">
                                IHRO Academy is the educational and capacity-building arm of the International Human Rights Organization (IHRO), dedicated to 
                                promoting knowledge, awareness, and practical skills in human rights, leadership, peacebuilding, and community development.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-6" >
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h4 class="text-primary" id="card2">
                                Human Rights Violence
                            </h4>

                            <p class="text-muted mb-0">
                                Human rights violence refers to any act that violates the fundamental rights and freedoms to which every person is entitled, regardless of their race, religion, nationality, gender, or social status. These violations can take many forms, including physical abuse, discrimination, 
                                torture, human trafficking, child exploitation, gender-based violence, forced displacement, and the denial of basic freedoms such as education, healthcare, justice, and freedom of expression.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-6">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h4 class="text-primary">
                                Legal Aid
                            </h4>

                            <p class="text-muted mb-0">
                                IHRO Legal Aid is committed to ensuring that every individual has access to justice, regardless of their financial or social circumstances. 
                                We provide legal guidance, support, and referrals to individuals facing human rights violations, discrimination, domestic violence, labor disputes, child protection issues, and other legal challenges.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg-6" id="card2">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h4 class="text-primary">
                                Youth Club
                            </h4>

                            <p class="text-muted mb-0">
                                The Youth Club is a dynamic platform that empowers young people to become responsible leaders, human rights advocates, and positive agents of change. Through leadership development, 
                                volunteer programs, awareness campaigns, community service, and educational activities, the Youth Club encourages active participation in promoting equality, justice, peace, and social responsibility.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-lg-6" >
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h4 class="text-primary">
                                Women's Wing
                            </h4>

                            <p class="text-muted mb-0">
                                The Women's Wing is dedicated to empowering women and girls by promoting gender equality, protecting women's rights, and creating opportunities for leadership, education, and economic empowerment. 
                                Through awareness programs, legal support, capacity-building initiatives, health campaigns, and community engagement, we work to ensure that every woman can live with dignity, safety, and equal opportunities.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-lg-6" >
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h4 class="text-primary">
                                Welfare Movement
                            </h4>

                            <p class="text-muted mb-0">
                                The Welfare Movement is committed to improving the quality of life for vulnerable individuals and communities through compassionate service, humanitarian assistance, and sustainable development initiatives. We provide support to those in need through relief programs, 
                                educational assistance, healthcare initiatives, livelihood support, disaster response, and community welfare projects.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 7-->
                <div class="col-lg-6" >
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h4 class="text-primary">
                                Human Rights For All
                            </h4>

                            <p class="text-muted mb-0">
                                We are committed to ensuring equal rights, dignity, and opportunities for all people, regardless of race, gender, religion, ethnicity, age, or ability.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 8-->
                <div class="col-lg-6">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h4 class="text-primary">
                                Poverty Child
                            </h4>

                            <p class="text-muted mb-0">
                                Ensuring every child has access to their fundamental rights, education, and opportunities to overcome poverty and build a brighter future.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Engagement Section End -->
    <!-- Branchers Start -->
    <!-- Live Branch Map -->
    <section class="branch-map-section py-5">

        <div class="map-card">

            <div class="map-title">

                <h5>Our Network</h5>

                <h2>IHRO Sri Lanka Branches</h2>

            </div>


            <div id="branchMap"></div>


            <div class="map-info">

                <h4>IHRO Branches</h4>

                <p>Human Rights Service Across Sri Lanka</p>

            </div>


        </div>

    </section>


    <!-- Google Map Script -->
    <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZaov2F4lo6I_X2ixB3nMsgrd1C3D4I2Q&callback=initMap">
    </script>

    <!-- Branchers End -->


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
    <script>

        function initMap(){


        // Sri Lanka Center
        const sriLanka = {
        lat: 7.8731,
        lng: 80.7718
        };


        const map = new google.maps.Map(
        document.getElementById("branchMap"),
        {
        zoom:7,
        center:sriLanka,

        styles:[
        {
        featureType:"all",
        elementType:"geometry",
        stylers:[
        {
        color:"#f4f8ff"
        }
        ]
        }
        ]

        }
        );


        // Branch Locations

        const branches = [

        {
        name: "IHRO Colombo Branch",
        position: { lat: 6.9271, lng: 79.8612 }
        },

        {
        name: "IHRO Gampaha Branch",
        position: { lat: 7.0873, lng: 79.9994 }
        },

        {
        name: "IHRO Kalutara Branch",
        position: { lat: 6.5854, lng: 79.9607 }
        },

        {
        name: "IHRO Kandy Branch",
        position: { lat: 7.2906, lng: 80.6337 }
        },

        {
        name: "IHRO Matale Branch",
        position: { lat: 7.4675, lng: 80.6234 }
        },

        {
        name: "IHRO Nuwara Eliya Branch",
        position: { lat: 6.9497, lng: 80.7891 }
        },

        {
        name: "IHRO Galle Branch",
        position: { lat: 6.0329, lng: 80.2168 }
        },

        {
        name: "IHRO Matara Branch",
        position: { lat: 5.9549, lng: 80.5550 }
        },

        {
        name: "IHRO Hambantota Branch",
        position: { lat: 6.1241, lng: 81.1185 }
        },

        {
        name: "IHRO Jaffna Branch",
        position: { lat: 9.6615, lng: 80.0255 }
        },

        {
        name: "IHRO Kilinochchi Branch",
        position: { lat: 9.3961, lng: 80.3982 }
        },

        {
        name: "IHRO Mullaitivu Branch",
        position: { lat: 9.2671, lng: 80.8142 }
        },

        {
        name: "IHRO Vavuniya Branch",
        position: { lat: 8.7514, lng: 80.4971 }
        },

        {
        name: "IHRO Mannar Branch",
        position: { lat: 8.9810, lng: 79.9042 }
        },

        {
        name: "IHRO Trincomalee Branch",
        position: { lat: 8.5874, lng: 81.2152 }
        },

        {
        name: "IHRO Batticaloa Branch",
        position: { lat: 7.7102, lng: 81.6924 }
        },

        {
        name: "IHRO Ampara Branch",
        position: { lat: 7.2975, lng: 81.6820 }
        },

        {
        name: "IHRO Kurunegala Branch",
        position: { lat: 7.4863, lng: 80.3623 }
        },

        {
        name: "IHRO Puttalam Branch",
        position: { lat: 8.0362, lng: 79.8283 }
        },

        {
        name: "IHRO Anuradhapura Branch",
        position: { lat: 8.3114, lng: 80.4037 }
        },

        {
        name: "IHRO Polonnaruwa Branch",
        position: { lat: 7.9403, lng: 81.0188 }
        },

        {
        name: "IHRO Badulla Branch",
        position: { lat: 6.9934, lng: 81.0550 }
        },

        {
        name: "IHRO Monaragala Branch",
        position: { lat: 6.8725, lng: 81.3507 }
        },

        {
        name: "IHRO Ratnapura Branch",
        position: { lat: 6.6828, lng: 80.3992 }
        },

        {
        name: "IHRO Kegalle Branch",
        position: { lat: 7.2513, lng: 80.3464 }
        },

        {
        name: "IHRO Colombo Fort Branch",
        position: {
        lat: 6.9344,
        lng: 79.8428
        }
        },

        {
        name: "IHRO Pettah Branch",
        position: {
        lat: 6.9365,
        lng: 79.8510
        }
        },

        {
        name: "IHRO Battaramulla Branch",
        position: {
        lat: 6.8964,
        lng: 79.9181
        }
        },

        {
        name: "IHRO Maharagama Branch",
        position: {
        lat: 6.8480,
        lng: 79.9265
        }
        },

        {
        name: "IHRO Dehiwala Branch",
        position: {
        lat: 6.8402,
        lng: 79.8712
        }
        },

        {
        name: "IHRO Nallur Branch",
        position: {
        lat: 9.6748,
        lng: 80.0334
        }
        },

        {
        name: "IHRO Chunnakam Branch",
        position: {
        lat: 9.7443,
        lng: 80.0356
        }
        },

        {
        name: "IHRO Chavakachcheri Branch",
        position: {
        lat: 9.6597,
        lng: 80.1648
        }
        },

        {
        name: "IHRO Point Pedro Branch",
        position: {
        lat: 9.8167,
        lng: 80.2333
        }
        },

        {
        name: "IHRO Karainagar Branch",
        position: {
        lat: 9.7422,
        lng: 79.8875
        }
        }

        ];



        branches.forEach(branch=>{


        const marker = new google.maps.Marker({

        position:branch.position,

        map:map,

        title:branch.name,

        animation:
        google.maps.Animation.DROP

        });



        const info =
        new google.maps.InfoWindow({

        content:
        `
        <div>
        <h5>${branch.name}</h5>
        <p>
        International Human Rights Organization
        </p>
        </div>
        `

        });



        marker.addListener(
        "click",
        ()=>{

        info.open(
        map,
        marker
        );

        }
        );


        });



        }

    </script>
</body>

</html>