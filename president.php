<!-- Start Main header-->
<?php include 'loading/layout.php'; ?>
<!-- End Main header-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Organization Chairman | Leadership</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        body {
            background: #f5f8fd;
            color: #444;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
        }

        img {
            width: 100%;
            display: block;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }

        section {
            padding: 90px 0;
        }

        /* Hero */

        .hero {
            height: 100vh;
            background:
                linear-gradient(rgba(8, 32, 92, .80), rgba(8, 32, 92, .80)),
                url("img/CHA_1551.JPG");
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }

        .hero h4 {
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .hero h1 {
            font-size: 65px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hero p {
            max-width: 700px;
            margin: auto;
            font-size: 18px;
        }

        .hero a {
            display: inline-block;
            margin-top: 35px;
            padding: 15px 40px;
            background: #fff;
            color: #13357B;
            border-radius: 50px;
            font-weight: 600;
            transition: .4s;
        }

        .hero a:hover {
            background: #13357B;
            color: #fff;
        }

        /* Chairman */

        .profile {
            display: grid;
            grid-template-columns: 380px 1fr;
            gap: 60px;
            align-items: center;
        }

        .profile img {
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, .2);
        }

        .tag {
            display: inline-block;
            padding: 8px 20px;
            background: #eaf1ff;
            color: #13357B;
            border-radius: 30px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .profile h2 {
            font-size: 45px;
            margin-bottom: 10px;
            color: #13357B;
        }

        .profile h4 {
            margin-bottom: 20px;
            font-weight: 500;
        }

        .profile p {
            margin-bottom: 20px;
            line-height: 1.9;
        }

        .social {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }

        .social a {
            height: 48px;
            width: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #13357B;
            color: #fff;
            transition: .3s;
        }

        .social a:hover {
            transform: translateY(-5px);
            background: #0b255c;
        }

        h4 {
            color: #fff;
        }

        h1 {
            color: #fff;
        }

        /* Message */

        .message {
            background: white;
        }

        .title {
            text-align: center;
            margin-bottom: 50px;
        }

        .title h2 {
            font-size: 42px;
            color: #13357B;
        }

        .title p {
            max-width: 650px;
            margin: 15px auto;
        }

        .message-box {
            background: #f7f9ff;
            padding: 50px;
            border-left: 6px solid #13357B;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
            line-height: 2;
        }

        /* Cards */

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 50px;
        }

        .card {
            background: #fff;
            padding: 40px;
            text-align: center;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
            transition: .4s;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card i {
            font-size: 50px;
            margin-bottom: 20px;
            color: #13357B;
        }

        .card h3 {
            margin-bottom: 15px;
        }

        /* Timeline */

        .timeline {
            margin-top: 60px;
            position: relative;
        }

        .timeline::before {
            content: "";
            position: absolute;
            left: 22px;
            top: 0;
            width: 4px;
            height: 100%;
            background: #13357B;
        }

        .item {
            margin-left: 70px;
            margin-bottom: 40px;
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
            position: relative;
        }

        .item::before {
            content: "";
            position: absolute;
            left: -60px;
            top: 28px;
            width: 20px;
            height: 20px;
            background: #13357B;
            border-radius: 50%;
        }

        .item h3 {
            color: #13357B;
            margin-bottom: 10px;
        }

        /* Stats */

        .stats {
            background: #13357B;
            color: #fff;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            text-align: center;
        }

        .stat {
            padding: 35px;
        }

        .stat h2 {
            font-size: 55px;
            margin-bottom: 10px;
        }

        /* Quote */

        .quote {
            background: #fff;
            text-align: center;
        }

        .quote i {
            font-size: 60px;
            color: #13357B;
            margin-bottom: 20px;
        }

        .quote h2 {
            font-size: 34px;
            max-width: 900px;
            margin: auto;
            font-weight: 500;
            line-height: 1.8;
        }

        /* Footer */

        footer {
            background: #081f53;
            color: white;
            text-align: center;
            padding: 30px;
        }

        /* Reveal */

        .reveal {
            opacity: 0;
            transform: translateY(60px);
            transition: 1s;
        }

        .reveal.active {
            opacity: 1;
            transform: none;
        }

        /* Responsive */

        @media(max-width:992px) {

            .hero h1 {
                font-size: 45px;
            }

            .profile {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .social {
                justify-content: center;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media(max-width:600px) {

            .hero h1 {
                font-size: 34px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .message-box {
                padding: 30px;
            }

        }

        .card {
            border-radius: 18px;
            transition: .4s;
        }

        .card img {
            height: 260px;
            object-fit: cover;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, .15) !important;
        }

        /* Certificate Card */
        .certificate-card {
            background: #ffffff;
            padding: 30px 25px;
            text-align: center;
            border-radius: 18px;
            height: 100%;
            min-height: 380px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border-top: 5px solid #13357B;
            overflow: hidden;
        }

        /* Hover Effect */
        .certificate-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 18px 40px rgba(19, 53, 123, 0.20);
        }


        /* Logo Circle */
        .logos {
            width: 90px;
            height: 90px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 3px solid #13357B;
            overflow: hidden;
        }


        /* Logo Image */
        .logos img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 10px;
        }


        /* Certificate Title */
        .certificate-card h5 {
            font-size: 18px;
            font-weight: 700;
            color: #13357B;
            margin-bottom: 12px;
            line-height: 1.4;
        }


        /* Description */
        .certificate-card p {
            color: #666;
            font-size: 14px;
            line-height: 1.7;
            min-height: 55px;
            margin-bottom: 15px;
        }


        /* Date Badge */
        .certificate-card span {
            display: inline-block;
            margin-top: 10px;
            background: #13357B;
            color: #ffffff;
            padding: 7px 18px;
            border-radius: 25px;
            font-size: 13px;
            font-weight: 500;
        }


        /* Remove Link Style */
        .certificate-card a {
            text-decoration: none;
            color: inherit;
        }


        /* Icon Style (Optional) */
        .certificate-card .icon {
            width: 75px;
            height: 75px;
            margin: 0 auto 20px;
            background: #13357B;
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
        }


        /* Responsive Design */
        @media(max-width:768px) {

            .certificate-card {
                min-height: auto;
                padding: 25px 20px;
            }

            .certificate-card h5 {
                font-size: 17px;
            }

            .logos {
                width: 80px;
                height: 80px;
            }
        }


        @media(max-width:576px) {

            .certificate-card {
                margin-bottom: 20px;
            }

            .certificate-card p {
                font-size: 13px;
            }

        }
    </style>

</head>

<body>

    <section class="hero">

        <div>

            <h4>International Human Rights Organization</h4>

            <h1>Chairman’s Profile</h1>
            <h4>Experience. Integrity. Leadership.</h4>

            <p>Learn about the experience, professional affiliations, certifications, specialized training, and
                leadership that guide the vision and mission of the International Human Rights Organization (IHRO).</p>

            <a href="#chairman">Meet Our Chairman</a>

        </div>

    </section>

    <section id="chairman">

        <div class="container profile reveal">

            <div>

                <img src="img/CHA_0783.jpg" alt="Chairman">

            </div>

            <div>

                <span class="tag">Organization Chairman</span>

                <h2>Mr. Subashana S. Subawickrama</h2>

                <h4>Founder & Chairman</h4>

                <p>

                    Mr. Subashana S. Subawickrama is the Chairman of the organization and a dedicated advocate for human
                    rights, social justice, and community empowerment. He is committed to promoting equality, dignity,
                    and the protection of fundamental human rights through education, awareness, and humanitarian
                    initiatives.
                    To strengthen his professional knowledge and leadership in the field of human rights, Mr.
                    Subawickrama has successfully completed several internationally recognized training programs offered
                    by the US Institute of Diplomacy and Human Rights (USIDHR), Washington, DC.

                </p>

                <p>

                    His commitment to ethical leadership, transparency, and social responsibility has strengthened our
                    organization and expanded its impact both nationally and internationally.

                </p>

                <div class="social">

                    <a href="https://www.facebook.com/share/1F2eFkG3AQ/?mibextid=wwXIfr"><i class="fab fa-facebook-f"></i></a>

                    <a href="https://www.linkedin.com/in/subashana-subawickrama-55b9a6285?utm_source=share_via&utm_content=profile&utm_medium=member_ios"><i class="fab fa-linkedin"></i></a>

                    <a href="https://x.com/subashanass?s=11"><i class="fab fa-twitter"></i></a>

                    <a href="https://youtube.com/@ihrosrilankaofficial?si=dOX_Xv4e2wsMgHMk"><i class="fab fa-youtube"></i></a>

                </div>

            </div>

        </div>

    </section>

    <section class="message">

        <div class="container">

            <div class="title">

                <h2>Chairman's Message</h2>

                <p class="mb-4">
                    It is my great honor to welcome you to the
                    <strong>International Human Rights Organization – Sri Lanka (IHRO Sri Lanka)</strong>.
                </p>
            </div>

            <div class="message-box reveal">

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
            </div>

        </div>

<!-- Licenses & Certifications Section -->
<section class="container py-5">

    <div class="text-center mb-5">
        <h2 class="fw-bold">Licenses & Certifications</h2>
        <p class="text-muted">
            Professional certifications demonstrating leadership, expertise,
            and commitment to human rights and humanitarian values.
        </p>
    </div>

    <div class="row g-4">

        <!-- Certificate 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="certificate-card">
                <a href="img/traff.jpg" target="_blank">
                    <div class="logos">
                        <img src="img/us.webp" alt="USIDHR Logo">
                    </div>
                    <h5>Human Trafficking Prevention Training</h5>
                    <p>
                        US Institute of Diplomacy and Human Rights (USIDHR) -
                        Washington, DC
                    </p>
                    <span>Issued Jul 2023</span>
                </a>
            </div>
        </div>


        <!-- Certificate 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="certificate-card">
                <a href="img/american.jpg" target="_blank">
                    <div class="logos">
                        <img src="img/american.png" alt="American National Business University">
                    </div>
                    <h5>
                        Doctor Of Excellence In Social Sciences
                        (Honoris Causa)
                    </h5>
                    <p>
                        American National Business University
                    </p>
                    <span>Issued Jul 2019</span>
                </a>
            </div>
        </div>


        <!-- Certificate 3 -->
        <div class="col-lg-4 col-md-6">
            <div class="certificate-card">
                <a href="img/zoe2.jpg" target="_blank">
                    <div class="logos">
                        <img src="img/zoe.png" alt="ZOE Foundation Australia">
                    </div>
                    <h5>
                        Pathway to Preventing Child Trafficking
                    </h5>
                    <p>
                        ZOE Foundation Australia
                    </p>
                    <span>Issued Jul 2023</span>
                </a>
            </div>
        </div>


        <!-- Certificate 4 -->
        <div class="col-lg-4 col-md-6">
            <div class="certificate-card">
                <a href="img/Global.jpg" target="_blank">
                    <div class="logos">
                        <img src="img/London.jpg" alt="University Of London">
                    </div>
                    <h5>
                        Global Diplomacy: The United Nations in the World
                    </h5>
                    <p>
                        University Of London - London, UK
                    </p>
                    <span>Issued Jul 2023</span>
                </a>
            </div>
        </div>


        <!-- Certificate 5 -->
        <div class="col-lg-4 col-md-6">
            <div class="certificate-card">
                <a href="img/child123.jpg" target="_blank">
                    <div class="logos">
                        <img src="img/UniversityDeGeneve.jpg" alt="University De Geneve">
                    </div>
                    <h5>
                        Children's Human Rights:
                        An Interdisciplinary Introduction
                    </h5>
                    <p>
                        University De Geneve - Geneva, Switzerland
                    </p>
                    <span>Issued Jul 2023</span>
                </a>
            </div>
        </div>


        <!-- Certificate 6 -->
        <div class="col-lg-4 col-md-6">
            <div class="certificate-card">
                <a href="img/edu.jpg" target="_blank">
                    <div class="logos">
                        <img src="img/us.webp" alt="USIDHR Logo">
                    </div>
                    <h5>
                        Human Rights Training Certification
                    </h5>
                    <p>
                        US Institute of Diplomacy and Human Rights (USIDHR) -
                        Washington, DC
                    </p>
                    <span>Issued Jul 2023</span>
                </a>
            </div>
        </div>

    </div>

</section>

        <section>

            <div class="container">

                <div class="title">

                    <h2>Chairman's Responsibilities</h2>

                </div>

                <div class="timeline">

                    <div class="item reveal">

                        <h3>Strategic Leadership</h3>

                        <p>Provides visionary leadership by defining the organization's mission,
                            strategic direction, and long-term objectives to achieve sustainable
                            growth and meaningful social impact..</p>

                    </div>

                    <div class="item reveal">

                        <h3>Governance</h3>

                        <p>Promotes accountability, transparency, integrity, and ethical
                            decision-making while ensuring compliance with organizational
                            policies and international best practices.</p>

                    </div>

                    <div class="item reveal">

                        <h3>International Partnerships</h3>

                        <p>Strengthens collaboration with governments, international
                            organizations, NGOs, academic institutions, and development partners
                            to advance human rights and humanitarian initiatives.</p>

                    </div>

                    <div class="item reveal">

                        <h3>Humanitarian Programs</h3>

                        <p>Leads and supports humanitarian, educational, and community
                            development programs that empower vulnerable populations,
                            promote social justice, and improve the quality of life.</p>

                    </div>

                </div>

            </div>

        </section>

        <footer>

            © 2026 International Human Rights Organization | Chairman's Office

        </footer>

        <script>

            // Counter

            document.querySelectorAll(".counter").forEach(counter => {

                const update = () => {

                    const target = +counter.dataset.target;

                    const count = +counter.innerText;

                    const speed = Math.ceil(target / 100);

                    if (count < target) {

                        counter.innerText = count + speed;

                        setTimeout(update, 20);

                    } else {

                        counter.innerText = target;

                    }

                };

                update();

            });

            // Reveal Animation

            function reveal() {

                document.querySelectorAll(".reveal").forEach(item => {

                    const top = item.getBoundingClientRect().top;

                    if (top < window.innerHeight - 100) {

                        item.classList.add("active");

                    }

                });

            }

            window.addEventListener("scroll", reveal);

            reveal();

        </script>

</body>

</html>