
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
            /* Google Font */
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

            body {
                font-family: 'Poppins',sans-serif;
            }

            /* Section */
            .journal-section {
                padding: 100px 0;
                background: linear-gradient(135deg,#f8fbff,#eef5ff);
                overflow: hidden;
            }

            /* Main Card */
            .journal-card {
                display: flex;
                align-items: center;
                gap: 60px;
                background: rgba(255,255,255,0.8);
                backdrop-filter: blur(20px);
                border-radius: 30px;
                padding: 40px;
                box-shadow: 0 20px 60px rgba(0,0,0,0.08);
                border: 1px solid rgba(255,255,255,0.5);
                animation: fadeUp 1s ease;
            }

            /* Book Image */
            .journal-image {
                flex: 0 0 380px;
                position: relative;
            }

                .journal-image img {
                    width: 100%;
                    border-radius: 20px;
                    box-shadow: 0 25px 50px rgba(0,0,0,0.25);
                    transition: 0.5s;
                    height: auto;
                    display: block;
                }

                .journal-image:hover img {
                    transform: rotate(-2deg) scale(1.04);
                }

                /* Floating Glow */
                .journal-image::before {
                    content: '';
                    position: absolute;
                    width: 250px;
                    height: 250px;
                    background: #0d6efd;
                    border-radius: 50%;
                    filter: blur(120px);
                    opacity: .25;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%,-50%);
                    z-index: -1;
                }

            /* Content */
            .journal-content {
                flex: 1;
            }

            .badge {
                display: inline-block;
                padding: 10px 18px;
                border-radius: 50px;
                background: rgba(13,110,253,0.1);
                color: #0d6efd;
                font-weight: 600;
                margin-bottom: 20px;
                letter-spacing: 1px;
            }

            .journal-content h2 {
                font-size: 42px;
                font-weight: 700;
                margin-bottom: 25px;
                color: #1f2c56;
                line-height: 1.3;
            }

            .journal-content p {
                color: #666;
                font-size: 17px;
                line-height: 1.9;
                margin-bottom: 15px;
            }

            /* Buttons */
            .journal-buttons {
                margin-top: 35px;
                display: flex;
                gap: 15px;
                flex-wrap: wrap;
            }

            .btn-primary,
            .btn-secondary {
                text-decoration: none;
                padding: 15px 28px;
                border-radius: 50px;
                font-weight: 600;
                transition: 0.4s;
            }

            .btn-primary {
                background: #0d6efd;
                color: #fff;
            }

                .btn-primary:hover {
                    transform: translateY(-4px);
                    box-shadow: 0 15px 30px rgba(13,110,253,.35);
                }

            .btn-secondary {
                border: 2px solid #0d6efd;
                color: #0d6efd;
            }

                .btn-secondary:hover {
                    background: #0d6efd;
                    color: #fff;
                }

            /* Animation */
            @keyframes fadeUp {
                from {
                    opacity: 0;
                    transform: translateY(50px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* Responsive */
            @media(max-width:992px) {

                .journal-card {
                    flex-direction: column;
                    text-align: center;
                }

                .journal-image {
                    flex: 0 0 auto;
                    max-width: 350px;
                }

                .journal-content h2 {
                    font-size: 32px;
                }

                .journal-buttons {
                    justify-content: center;
                }
            }

            @media(max-width:576px) {

                .journal-card {
                    padding: 25px;
                }

                .journal-content h2 {
                    font-size: 26px;
                }

                .journal-content p {
                    font-size: 15px;
                }
            }

            /* ===== Gallery Section ===== */

            .gallery-section {
                padding: 100px 0;
                background: linear-gradient(135deg,#f8fbff,#eef5ff);
            }

            .gallery-heading {
                text-align: center;
                max-width: 800px;
                margin: auto;
                margin-bottom: 60px;
            }

            .gallery-tag {
                display: inline-block;
                padding: 8px 18px;
                background: #0d6efd15;
                color: #0d6efd;
                border-radius: 50px;
                font-weight: 600;
                margin-bottom: 20px;
            }

            .gallery-heading h2 {
                font-size: 3rem;
                font-weight: 800;
                color: #1f2c56;
                margin-bottom: 15px;
            }

            .gallery-heading p {
                color: #6c757d;
                font-size: 1.1rem;
            }

            /* ===== Album Card ===== */

            .gallery-album {
                position: relative;
                overflow: hidden;
                border-radius: 30px;
                cursor: pointer;
                box-shadow: 0 20px 60px rgba(0,0,0,.12);
            }

                .gallery-album img {
                    width: 100%;
                    height: 650px;
                    object-fit: cover;
                    transition: 1s ease;
                }

                /* Zoom Effect */
                .gallery-album:hover img {
                    transform: scale(1.1);
                }

            /* Photo Count Badge */

            .photo-count {
                position: absolute;
                top: 25px;
                right: 25px;
                background: rgba(255,255,255,.15);
                backdrop-filter: blur(15px);
                color: #fff;
                padding: 12px 20px;
                border-radius: 50px;
                font-weight: 600;
                z-index: 5;
                border: 1px solid rgba(255,255,255,.3);
            }

            /* Overlay */

            .album-content {
                position: absolute;
                left: 0;
                bottom: 0;
                width: 100%;
                padding: 50px;
                color: #fff;
                background: linear-gradient( to top, rgba(0,0,0,.9), rgba(0,0,0,.1), transparent);
            }

                .album-content h3 {
                    font-size: 2.4rem;
                    font-weight: 700;
                    margin-bottom: 10px;
                }

                .album-content p {
                    margin-bottom: 25px;
                    opacity: .9;
                }

            /* Button */

            .view-btn {
                border: none;
                background: #fff;
                color: #0d6efd;
                padding: 14px 28px;
                border-radius: 50px;
                font-weight: 700;
                transition: .4s;
            }

                .view-btn:hover {
                    transform: translateY(-3px);
                }

            /* Shine Animation */

            .shine {
                position: absolute;
                top: 0;
                left: -150%;
                width: 50%;
                height: 100%;
                background: linear-gradient( 120deg, transparent, rgba(255,255,255,.35), transparent);
            }

            .gallery-album:hover .shine {
                animation: shineMove 1.5s ease;
            }

            @keyframes shineMove {
                100% {
                    left: 180%;
                }
            }

            /* Floating Animation */

            .gallery-album {
                animation: floatCard 5s ease-in-out infinite;
            }

            @keyframes floatCard {
                0%, 100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-8px);
                }
            }

            /* Responsive */

            @media(max-width:768px) {

                .gallery-heading h2 {
                    font-size: 2rem;
                }

                .gallery-album img {
                    height: 350px;
                }

                .album-content {
                    padding: 25px;
                }

                    .album-content h3 {
                        font-size: 1.5rem;
                    }
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
                Events
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
                    <a href="events.html" class="text-white">
                        Events
                    </a>
                </li>

            </ol>
        </div>
    </div>
    <!-- Header End -->
    <!-- Journal Start -->
    <section class="journal-section">
        <div class="container">

            <!-- Training Card -->
            <div class="journal-card">

                <div class="journal-image">
                    <a href="news.php">
                        <img src="img/IHRONews.png"
                             alt="International Humanity Award 2025"
                             class="img-fluid">
                    </a>
                </div>

                <div class="journal-content">
                    <span class="badge">NEWS</span>

                    <h2>IHRO News</h2>

                    <p>
                        The International Human Rights Organization (IHRO) continues to strengthen its commitment to promoting human rights, social justice, peace, and community development through a wide range of impactful initiatives. Our latest news highlights successful awareness programs, educational workshops, humanitarian assistance, youth empowerment projects, international collaborations, and advocacy campaigns conducted across Sri Lanka and beyond.
                    </p>
                    <div class="journal-buttons">
                        <a href="news.php" class="btn-primary">
                            <i class="fas fa-arrow-right"></i> Learn More
                        </a>
                    </div>
                </div>
            </div>
            <br /> <br />

            <!-- First Card -->
            <div class="journal-card mb-5">

                <div class="journal-image">
                    <a href="gallery.php?filter=Book">
                        <img src="img/bookihrolk.png"
                             alt="Human Rights Research Journal"
                             class="img-fluid">
                    </a>
                </div>

                <div class="journal-content">
                    <span class="badge">NEW PUBLICATION</span>

                    <h2>Official Launch: "Human Rights Research"</h2>

                    <p>
                        We are proud to announce the official launch of the academic publication titled
                        <strong>"Human Rights Research."</strong> This volume features peer-reviewed papers
                        by scholars and members of Sri Lanka's academic community, exploring critical aspects
                        of human rights, including theory, methodology, institutional frameworks, and practical implementation.
                    </p>

                    <p>
                        The publication serves as a significant contribution to informed dialogue,
                        fostering scholarly engagement on human dignity, justice, and peace.
                    </p>

                    <div class="journal-buttons">

                        <div class="journal-buttons">
                            <a href="https://heyzine.com/flip-book/1993f04453.html" class="btn-primary">
                                <i class="fas fa-arrow-right"></i> Learn More
                            </a>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Second Card -->
            <div class="journal-card">

                <div class="journal-image">
                    <a href="gallery.php?filter=humanity-award">
                        <img src="img/ihrolk_trof.jpeg"
                             alt="International Humanity Award 2025"
                             class="img-fluid">
                    </a>
                </div>

                <div class="journal-content">
                    <span class="badge">GLOBAL EVENT</span>

                    <h2>International Humanity Award 2025</h2>

                    <p>
                        The International Humanity Award 2025, held in observance of the 77th International Human Rights Day,
                        is a prestigious global recognition that honors individuals and organizations for their outstanding
                        contributions to humanity, human rights, equality, peace, and social welfare.
                    </p>

                    <div class="journal-buttons">
                        <a href="https://heyzine.com/flip-book/8db37cf704.html" class="btn-primary">
                            <i class="fas fa-arrow-right"></i> Learn More
                        </a>
                    </div>
                </div>
            </div>
            <br />    <br />

            <!-- Woman's Card -->
            <div class="journal-card">

                <div class="journal-image">
                    <a href="gallery.php?filter=Women%27s">
                        <img src="img/Event/WOMEN.jpeg"
                             alt="International Humanity Award 2025"
                             class="img-fluid">
                    </a>
                </div>

                <div class="journal-content">
                    <span class="badge">LOCAL EVENT</span>

                    <h2>27th June - Women's Wing Launch</h2>

                    <p>
                        The IHRO Women’s Wing successfully held a meaningful gathering dedicated to empowering women, promoting leadership, and advancing human rights. 
                        Together, we shared ideas, strengthened partnerships, and reaffirmed our commitment to building a more equal and inclusive future.
                    </p>
                    <div class="journal-buttons">
                        <a href="gallery.php?filter=Women%27s" class="btn-primary">
                            <i class="fas fa-arrow-right"></i> Learn More
                        </a>
                    </div>
                    </div>
                </div>
            <br />    <br />
            <!-- IHRO and ICCC Jointly Card -->
            <div class="journal-card">

                <div class="journal-image">
                    <a href="gallery.php?filter=ICCC">
                        <img src="img/Event/logo.png"
                             alt="International Humanity Award 2025"
                             class="img-fluid">
                    </a>
                </div>

                <div class="journal-content">
                    <span class="badge">GLOBAL EVENT</span>

                    <h2>24th June - IHRO And ICCC Jointly Host Successful Leadership Workshop</h2>

                    <p>
                        The International Human Rights Organization (IHRO), in collaboration with the International Christian Clergy Council (ICCC), successfully conducted a leadership workshop under the guidance of Rev. Fr. Ajith Rohitha
                        The event brought together IHRO officials, international delegates, and distinguished guests, fostering collaboration, leadership, and shared humanitarian values.
                    </p>
                    <div class="journal-buttons">
                        <a href="https://iccc.lk" class="btn-primary">
                            <i class="fas fa-arrow-right"></i> Learn More
                        </a>
                    </div>
                </div>
            </div>
            <br />    <br />
            <!-- Enrollment and Training Card -->
            <div class="journal-card">

                <div class="journal-image">
                    <a href="gallery.php?filter=Training">
                        <img src="img/Event/TUS1.JPG"
                             alt="International Humanity Award 2025"
                             class="img-fluid">
                    </a>
                </div>

                <div class="journal-content">
                    <span class="badge">TRAINING EVENT</span>

                    <h2>08 June 2025 - Enrollment and Training Programme (BMICH)</h2>

                    <p>
                        An enrollment and training programme on Basic Human Rights Knowledge was conducted at the Bandaranaike Memorial International Conference Hall (BMICH). The programme was graced by Deputy Inspector General of Police Mr. Roshan Rajapakse. Mr. Indika Ranatunga represented the entrepreneurial community, while Mr. Udayakumara Amarasinghe, Senior Lecturer at the University of Sri Jayewardenepura and former Chairman of the National Child Protection Authority, served as a key resource person.
                    </p>
                    <div class="journal-buttons">
                        <a href="gallery.php?filter=Training" class="btn-primary">
                            <i class="fas fa-arrow-right"></i> Learn More
                        </a>
                    </div>
                </div>
            </div>
            <br />    <br />
            <!-- Buddhist Card -->
            <div class="journal-card">

                <div class="journal-image">
                    <a href="gallery.php?filter=Buddhist">
                        <img src="img/Event/B4.jpeg"
                             alt="International Humanity Award 2025"
                             class="img-fluid">
                    </a>
                </div>

                <div class="journal-content">
                    <span class="badge">BUDDHIST EVENT</span>

                    <h2>IHRO Buddhist Monks Conference</h2>

                    <p>
                        June 15 - The International Human Rights Organization (IHRO) was honored to welcome Venerable Kobawaka Dhamminda Thero and Venerable Digala Piyadassi Thero, Buddhist Religious Advisors and International Directors of IHRO, as they graced the IHRO Sangha Conference. They were warmly received by the Chairman, marking a meaningful occasion of unity, spiritual guidance, and humanitarian commitment.
                    </p>
                    <div class="journal-buttons">
                        <a href="gallery.php?filter=Buddhist" class="btn-primary">
                            <i class="fas fa-arrow-right"></i> Learn More
                        </a>
                    </div>
                </div>
            </div>
            <br />    <br />

            <!-- Training Card -->
            <div class="journal-card">

                <div class="journal-image">
                    <a href="gallery.php?filter=Training">
                        <img src="img/Event/HAT4.JPG"
                             alt="International Humanity Award 2025"
                             class="img-fluid">
                    </a>
                </div>

                <div class="journal-content">
                    <span class="badge">TRAINING EVENT</span>

                    <h2>02 June 2026 Training Program</h2>

                    <p>
                        A training programme on Basic Human Rights Knowledge was conducted at the Bandaranaike Memorial International Conference Hall (BMICH). The programme was graced by Deputy Inspector General of Police Mr. Roshan Rajapakse. Mr. Indika Ranatunga represented the entrepreneurial community, while Mr. Udayakumara Amarasinghe, Senior Lecturer at the University of Sri Jayewardenepura and former Chairman of the National Child Protection Authority, served as a key resource person.
                    </p>
                    <div class="journal-buttons">
                        <a href="gallery.php?filter=Training" class="btn-primary">
                            <i class="fas fa-arrow-right"></i> Learn More
                        </a>
                    </div>
                </div>
            </div>
            <br />    <br />
            <!-- Training Card -->
            <div class="journal-card">

                <div class="journal-image">
                    <a href="gallery.php?filter=Forum">
                        <img src="img/Event/E11.JPG"
                             alt="International Humanity Award 2025"
                             class="img-fluid">
                    </a>
                </div>

                <div class="journal-content">
                    <span class="badge">ENROLLMENT EVENT</span>

                    <h2>15 June 2026 Enrollment Program</h2>

                    <p>
                        On 15 June 2026, the International Human Rights Organization (IHRO) successfully organized a Forum Program that brought together community leaders, human rights advocates, academics, youth representatives, and members of the public to discuss important social and human rights issues.
                    </p>
                    <div class="journal-buttons">
                        <a href="gallery.php?filter=Forum" class="btn-primary">
                            <i class="fas fa-arrow-right"></i> Learn More
                        </a>
                    </div>
                </div>
            </div>
            <br />    <br />
            <!-- Training Card -->
            <div class="journal-card">

                <div class="journal-image">
                    <a href="gallery.php?filter=Forum">
                        <img src="img/Event/TU1.JPG"
                             alt="International Humanity Award 2025"
                             class="img-fluid">
                    </a>
                </div>

                <div class="journal-content">
                    <span class="badge">ENROLLMENT EVENT</span>

                    <h2>19 July 2025 Enrollment Program Kandy</h2>

                    <p>
                        On 19 July 2025 in Kandy, the International Human Rights Organization (IHRO) successfully organized a Forum Program that brought together community leaders, human rights advocates, academics, youth representatives, and members of the public to discuss important social and human rights issues. The forum provided a platform for meaningful dialogue, knowledge sharing, and collaboration, encouraging participants to exchange ideas and explore practical solutions to challenges affecting society. The event reaffirmed IHRO's commitment to promoting human rights, social justice, equality, and community empowerment through education, awareness, and collective action.
                    </p>
                    <div class="journal-buttons">
                        <a href="gallery.php?filter=Forum" class="btn-primary">
                            <i class="fas fa-arrow-right"></i> Learn More
                        </a>
                    </div>
                </div>
            </div>

            <br />    <br />
            <!-- Training Card -->
            <div class="journal-card">

                <div class="journal-image">
                    <a href="gallery.php?filter=Welfare">
                        <img src="img/Event/TU1.JPG"
                             alt="International Humanity Award 2025"
                             class="img-fluid">
                    </a>
                </div>

                <div class="journal-content">
                    <span class="badge">WELFARE EVENT</span>

                    <h2>2026 Vesak Ice Cream Dansala</h2>

                    <p>
                        On 29 May, our Vesak Ice Cream Dansala was successfully held in the true spirit of Vesak, spreading kindness, compassion, and generosity to the community. Hundreds of visitors, including families, children, and devotees, enjoyed free ice cream while celebrating this sacred occasion. We sincerely thank all the volunteers, sponsors, and well-wishers whose dedication made this event a memorable success. May the blessings of Vesak bring peace, happiness, and prosperity to everyone.
                    </p>
                    <div class="journal-buttons">
                        <a href="gallery.php?filter=Welfare" class="btn-primary">
                            <i class="fas fa-arrow-right"></i> Learn More
                        </a>
                    </div>
                </div>
            </div>
    <!-- Journal End -->
    <br /> <br />
        <!-- Human Rights Day Card -->
        <div class="journal-card">

            <div class="journal-image">
                    <a href="gallery.php?filter=Book">
                        <img src="img/Event/TU1.JPG"
                             alt="International Humanity Award 2025"
                             class="img-fluid">
                    </a>
                </div>

                <div class="journal-content">
                    <span class="badge">GLOBAL EVENT</span>

                <h2>75 International Human Rights Day</h2>

                <p>
                        Explore memorable moments, official meetings, and special celebrations
                        from the 75th International Human Rights Day.
                </p>
                <div class="journal-buttons">
                    <a href="gallery.php?filter=Book" class="btn-primary">
                            <i class="fas fa-arrow-right"></i> Learn More
                        </a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Journal End -->

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
            document.addEventListener("DOMContentLoaded", () => {

                const card = document.querySelector(".journal-card");

                window.addEventListener("scroll", () => {
                    const cardTop = card.getBoundingClientRect().top;

                    if(cardTop < window.innerHeight - 100){
                        card.style.opacity = "1";
                        card.style.transform = "translateY(0)";
                    }
                });

            });

            document.querySelectorAll('.gallery-item img').forEach(img => {
                img.addEventListener('click', () => {
                    const overlay = document.createElement('div');
                    overlay.style.cssText = `
                        position:fixed;
                        top:0;
                        left:0;
                        width:100%;
                        height:100%;
                        background:rgba(0,0,0,.9);
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        z-index:9999;
                        cursor:pointer;
                    `;

                    const image = document.createElement('img');
                    image.src = img.src;
                    image.style.maxWidth = '90%';
                    image.style.maxHeight = '90%';
                    image.style.borderRadius = '15px';

                    overlay.appendChild(image);
                    document.body.appendChild(overlay);

                    overlay.onclick = () => overlay.remove();
                });
            });
        </script>

<script>
    document.addEventListener("DOMContentLoaded", function () {

    // Get filter from URL
    const params = new URLSearchParams(window.location.search);
    const selectedFilter = params.get("filter");

    if (selectedFilter) {
    // Highlight the correct filter button
    document.querySelectorAll(".filter-btn").forEach(btn => {
    btn.classList.remove("active");

    if (btn.dataset.filter === selectedFilter) {
    btn.classList.add("active");
    btn.click(); // Trigger your existing filter logic
    }
    });
    }

    });
</script>
    </body>
</html>