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
            body {
                background: #f5f8ff;
                font-family: 'Segoe UI',sans-serif;
            }

            .awareness-hero {
                background: linear-gradient(135deg,#13357B,#295bc7);
                color: #fff;
                text-align: center;
                padding: 100px 20px;
            }

                .awareness-hero h1 {
                    font-size: 48px;
                    font-weight: 800;
                    color: #fff;
                }

                .awareness-hero p {
                    max-width: 800px;
                    margin: auto;
                    margin-top: 20px;
                    font-size: 20px;
                }

            .awareness-section {
                padding: 80px 0;
            }

            .section-title {
                text-align: center;
                margin-bottom: 40px;
            }

                .section-title h2 {
                    color: #13357B;
                    font-weight: 800;
                }

            .intro-card {
                background: #fff;
                border-radius: 15px;
                padding: 35px;
                box-shadow: 0 10px 30px rgba(0,0,0,.08);
                margin-bottom: 60px;
            }

            .info-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit,minmax(320px,1fr));
                gap: 30px;
                margin-bottom: 70px;
            }

            .info-card {
                background: #fff;
                padding: 35px;
                border-radius: 15px;
                box-shadow: 0 10px 30px rgba(0,0,0,.08);
                border-top: 5px solid #13357B;
                transition: .4s;
            }

                .info-card:hover {
                    transform: translateY(-8px);
                }

                .info-card h3 {
                    color: #13357B;
                    margin-bottom: 20px;
                }

            .timeline {
                border-left: 4px solid #13357B;
                padding-left: 35px;
                margin-bottom: 70px;
            }

            .timeline-item {
                background: #fff;
                padding: 30px;
                border-radius: 15px;
                margin-bottom: 30px;
                position: relative;
                box-shadow: 0 10px 25px rgba(0,0,0,.08);
            }

                .timeline-item::before {
                    content: "";
                    width: 20px;
                    height: 20px;
                    background: #13357B;
                    border-radius: 50%;
                    position: absolute;
                    left: -47px;
                    top: 35px;
                }

            .framework-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(320px, 320px));
                    justify-content: center;   /* Centers the grid */
                    gap: 30px;
                }
            

            .framework-card {
                background: #fff;
                padding: 30px;
                border-radius: 15px;
                text-align: center;
                box-shadow: 0 10px 25px rgba(0,0,0,.08);
                transition: .4s;
            }

                .framework-card:hover {
                    transform: translateY(-10px);
                }

                .framework-card h3 {
                    color: #13357B;
                    margin-bottom: 15px;
                }

            .importance {
                display: grid;
                grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
                gap: 20px;
                margin-bottom: 70px;
            }

            .importance-item {
                background: #13357B;
                color: #fff;
                padding: 25px;
                border-radius: 12px;
                font-weight: 600;
            }

            .closing {
                background: linear-gradient(135deg,#13357B,#2d5ed4);
                color: #fff;
                text-align: center;
                padding: 60px;
                border-radius: 20px;
            }

                .closing h2 {
                    font-size: 40px;
                    margin-bottom: 20px;
                    color: #fff
                }

            .reveal {
                opacity: 0;
                transform: translateY(50px);
                transition: 1s;
            }

                .reveal.active {
                    opacity: 1;
                    transform: translateY(0);
                }

            @media(max - width:768px) {

                .awareness-hero h1 {
                    font-size: 34px;
                }

                .closing {
                    padding: 35px;
                }

                    .closing h2 {
                        font-size: 40px;
                    }
            }

            .sdg-grid,
            .udhr-grid{
                    display:grid;
                    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
                    gap:25px;
                    margin-top:40px;
            }

            .sdg-card {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 0;
                overflow: hidden;
                background: #fff;
                border-radius: 12px;
            }

            .sdg-img {
                width: 100%;
                height: 100%;
                object-fit: cover; /* Use 'contain' if you don't want cropping */
                display: block;
                transition: transform 0.3s ease;
            }

            .sdg-card:hover .sdg-img {
                transform: scale(1.05);
            }

            .udhr-card{
            text-align:center;
            }

            .udhr-card h5{
            font-size:22px;
            }

            .udhr-card p{
            margin:0;
            font-weight:500;
            }

            .udhr-section {
                background: #f8f9fc;
            }

            .udhr-list {
                max-width: 1100px;
                margin: 40px auto 0;
            }

            .udhr-item {
                display: flex;
                align-items: flex-start;
                gap: 20px;
                background: #fff;
                border-left: 5px solid #13357B;
                border-radius: 12px;
                padding: 20px 25px;
                margin-bottom: 18px;
                box-shadow: 0 8px 20px rgba(0,0,0,.08);
                transition: .3s ease;
            }

                .udhr-item:hover {
                    transform: translateX(8px);
                    box-shadow: 0 12px 30px rgba(19,53,123,.15);
                }

            .article-no {
                width: 55px;
                height: 55px;
                min-width: 55px;
                border-radius: 50%;
                background: #13357B;
                color: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 22px;
                font-weight: 700;
            }

            .article-content h4 {
                color: #13357B;
                font-size: 22px;
                font-weight: 700;
                margin-bottom: 8px;
            }

            .article-content p {
                margin: 0;
                color: #555;
                line-height: 1.7;
            }

            @media (max-width:768px) {

                .udhr-item {
                    flex-direction: column;
                }

                .article-no {
                    margin-bottom: 10px;
                }

                .article-content h4 {
                    font-size: 10px;
                }
            }

            .udhr-description {
                font-size: 20px; /* Change size as needed */
                line-height: 1.8;
                color: #555;
                max-width: 900px;
                margin: 0 auto;
                text-align: center;
            }

            /* Desktop */
            .udhr-section .section-title h2 {
                font-size: 3.5rem; /* 56px */
            }

            /* Tablet */
            @media (max-width:992px) {
                .udhr-section .section-title h2 {
                    font-size: 3rem; /* 48px */
                }
            }

            /* Mobile */
            @media (max-width:768px) {
                .udhr-section .section-title h2 {
                    font-size: 2.3rem; /* 37px */
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
     style="background: linear-gradient(rgba(0, 58, 102, 0.9), rgba(0, 58, 102, 0.8)), url(../img/img_1.jpg), center center/cover no-repeat;">

    <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s" style="font-size: 8rem;">
                Awareness
        </h3>

        <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown"
            data-wow-delay="0.3s">

            <li class="breadcrumb-item">
                <a asp-controller="Home" asp-action="Index" class="text-white">
                    Home
                </a>
            </li>

            <li class="breadcrumb-item">
                <a href="#" class="text-secondary">
                    Pages
                </a>
            </li>

            <li class="breadcrumb-item active text-white">
                    <a asp-controller="Home" asp-action="Award" class="text-white">
                        Awareness
                </a>
            </li>

        </ol>
    </div>
</div>
<!-- Header End -->

    <!-- ==============================
     Human Rights Awareness Section
==================================-->

    <section class="awareness-hero">
        <div class="container">
            <h1>Human Rights Awareness</h1>
            <p>
                Building a society that values dignity, equality, justice, and respect for every individual.
            </p>
        </div>
    </section>

    <section class="awareness-section">

        <div class="container">

            <!-- Introduction -->

            <div class="section-title reveal">
                <h2>Introduction</h2>
            </div>

            <div class="intro-card reveal">
                <p>
                    Human rights awareness is the foundation for building a society that values dignity,
                    equality, and justice. This section provides knowledge about human rights, legal
                    protections available in Sri Lanka, and international frameworks established to
                    protect the rights of all individuals.
                </p>
            </div>


            <!-- What Are Human Rights -->

            <div class="section-title reveal">
                <h2>What Are Human Rights?</h2>
            </div>

            <div class="info-grid">

                <div class="info-card reveal">
                    <h3>Definition</h3>

                    <p>
                        Human rights are the basic rights and freedoms that belong to every person.
                        They ensure that every individual can live with dignity, equality,
                        and respect regardless of background or circumstances.
                    </p>

                </div>

                <div class="info-card reveal">

                    <h3>Key Human Rights</h3>

                    <ul>

                        <li>Right to Life and Personal Security</li>

                        <li>Right to Equality</li>

                        <li>Right to Education</li>

                        <li>Freedom of Expression</li>

                        <li>Freedom of Religion</li>

                        <li>Right to Justice and Fair Treatment</li>

                    </ul>

                </div>

            </div>


            <!-- Sri Lanka -->

            <div class="section-title reveal">
                <h2>Local Human Rights Framework – Sri Lanka</h2>
            </div>

            <div class="timeline">

                <div class="timeline-item reveal">

                    <h3>Constitution of Sri Lanka – Fundamental Rights</h3>

                    <ul>

                        <li><strong>Article 12</strong> – Right to Equality</li>

                        <li><strong>Article 11</strong> – Freedom from Torture</li>

                        <li><strong>Article 10</strong> – Freedom of Religion</li>

                        <li><strong>Article 14</strong> – Freedom of Expression & Assembly</li>

                        <li>Protection against unlawful arrest and detention.</li>

                    </ul>

                </div>

                <div class="timeline-item reveal">

                    <h3>Human Rights Commission Act No. 21 of 1996</h3>

                    <ul>

                        <li>Promote human rights awareness</li>

                        <li>Investigate complaints</li>

                        <li>Monitor human rights conditions</li>

                        <li>Recommend legal improvements</li>

                        <li>Promote international standards</li>

                    </ul>

                </div>

                <div class="timeline-item reveal">

                    <h3>Other Sri Lankan Laws</h3>

                    <ul>

                        <li>Penal Code of Sri Lanka</li>

                        <li>Prevention of Domestic Violence Act No.34 of 2005</li>

                        <li>Employment Laws</li>

                        <li>Children and Young Persons Ordinance</li>

                        <li>Right to Information Act No.12 of 2016</li>

                    </ul>

                </div>

            </div>


            <!-- International -->

            <div class="section-title reveal">

                <h2>International Human Rights Framework</h2>

            </div>

            <div class="framework-grid">

                <div class="framework-card reveal">
                    <h3>UDHR (1948)</h3>
                    <p>
                        Universal Declaration of Human Rights establishing dignity,
                        equality, liberty and justice for everyone.
                    </p>
                </div>

                <div class="framework-card reveal">
                    <h3>ICCPR (1966)</h3>
                    <p>
                        Protects civil and political rights including freedom,
                        privacy, fair trial and minority rights.
                    </p>
                </div>

                <div class="framework-card reveal">
                    <h3>ICESCR (1966)</h3>
                    <p>
                        Protects economic, social and cultural rights including
                        education, health and employment.
                    </p>
                </div>


                <div class="framework-card reveal">
                    <h3>CRC (1989)</h3>
                    <p>
                        Protects children's rights to education, identity,
                        healthcare and participation.
                    </p>
                </div>

                <div class="framework-card reveal">
                    <h3>CEDAW (1979)</h3>
                    <p>
                        Eliminates discrimination against women and promotes equal opportunities.
                    </p>
                </div>

                <div class="framework-card reveal">
                    <h3>CRPD (2006)</h3>
                    <p>
                        Protects the rights and dignity of persons with disabilities
                        through equality and inclusion.
                    </p>
                </div>

            </div>

<br><br><br>
            <!-- Importance -->

            <div class="section-title reveal">

                <h2>Why Human Rights Awareness Matters</h2>

            </div>

            <div class="importance reveal">

                <div class="importance-item">
                    ✔ Recognize your rights and responsibilities
                </div>

                <div class="importance-item">
                    ✔ Respect the rights of others
                </div>

                <div class="importance-item">
                    ✔ Identify unfair treatment
                </div>

                <div class="importance-item">
                    ✔ Promote equality and justice
                </div>

            </div>


            <!-- Closing -->

            <div class="closing reveal">
                <h2>Together for Human Dignity</h2>

                <p>
                    Human rights awareness creates empowered individuals and strengthens
                    communities where dignity, equality and justice are respected for everyone.
                </p>

            </div>

        </div>

    </section>

    <br /> <br />

    <!--============================
    SUSTAINABLE DEVELOPMENT GOALS
    =============================-->

    <section class="sdg-section py-5">

        <div class="container">

            <div class="section-title reveal">
                <h2>Sustainable Development Goals (SDGs) & Human Rights</h2>
                <h5>The Sustainable Development Goals (SDGs) are a set of 17 global goals adopted by the United Nations in 2015 as part of the 2030 Agenda for Sustainable Development. They aim to create a more peaceful, equal, and sustainable world by addressing social, economic, and environmental challenges.</h5>
            </div>

            <div class="intro-card reveal">

                <p>
                    The Sustainable Development Goals (SDGs) are a set of 17 global goals adopted
                    by the United Nations in 2015 as part of the 2030 Agenda for Sustainable Development.
                    They aim to create a more peaceful, equal, and sustainable world by addressing
                    social, economic, and environmental challenges.
                </p>

                <p>
                    Human rights and the SDGs are closely connected because achieving sustainable
                    development requires protecting the dignity, equality, and freedoms of all people.
                </p>

            </div>

            <div class="section-title reveal">
                <h2>The 17 Sustainable Development Goals</h2>
            </div>

            <div class="sdg-grid">

                    <div class="sdg-card reveal">
                    <img src="img/Awa/1.jpg" alt="SDG 1" class="sdg-img">
                    </div>

                    <div class="sdg-card reveal">
                    <img src="img/Awa/2.jpg" alt="SDG 2" class="sdg-img">
                    </div>

                    <div class="sdg-card reveal">
                    <img src="img/Awa/3.jpg" alt="SDG 3" class="sdg-img">
                    </div>

                    <div class="sdg-card reveal">
                    <img src="img/Awa/4.jpg" alt="SDG 4" class="sdg-img">
                    </div>

                    <div class="sdg-card reveal">
                    <img src="img/Awa/5.jpg" alt="SDG 5" class="sdg-img">
                    </div>

                    <div class="sdg-card reveal">
                    <img src="img/Awa/6.jpg" alt="SDG 6" class="sdg-img">
                    </div>

                    <div class="sdg-card reveal">
                    <img src="img/Awa/7.jpg" alt="SDG 7" class="sdg-img">
                    </div>

                    <div class="sdg-card reveal">
                    <img src="img/Awa/8.jpg" alt="SDG 8" class="sdg-img">
                    </div>

                    <div class="sdg-card reveal">
                    <img src="img/Awa/9.jpg" alt="SDG 9" class="sdg-img">
                    </div>

                    <div class="sdg-card reveal">
                    <img src="img/Awa/10.jpg" alt="SDG 10" class="sdg-img">
                    </div>

                    <div class="sdg-card reveal">
                    <img src="img/Awa/11.jpg" alt="SDG 11" class="sdg-img">
                    </div>

                    <div class="sdg-card reveal">
                    <img src="img/Awa/12.jpg" alt="SDG 12" class="sdg-img">
                    </div>

                    <div class="sdg-card reveal">
                    <img src="img/Awa/13.jpg" alt="SDG 13" class="sdg-img">
                    </div>

                    <div class="sdg-card reveal">
                        <img src="img/Awa/14.jpg" alt="SDG 14" class="sdg-img">
                    </div>

                    <div class="sdg-card reveal">
                    <img src="img/Awa/15.jpg" alt="SDG 15" class="sdg-img">
                    </div>

                    <div class="sdg-card reveal">
                    <img src="img/Awa/16.jpg" alt="SDG 16" class="sdg-img">
                    </div>

                    <div class="sdg-card reveal">
                    <img src="img/Awa/17.jpg" alt="SDG 17" class="sdg-img">
                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- ================================
    UNIVERSAL DECLARATION OF HUMAN RIGHTS
    =====================================-->

    <section class="udhr-section py-5">

        <div class="container">

            <div class="section-title reveal">
                <h2>Universal Declaration of Human Rights (UDHR)</h2>

                <p class="udhr-description">
                    The Universal Declaration of Human Rights (UDHR) was adopted by the
                    United Nations General Assembly on <strong>10 December 1948</strong>.
                    It establishes the fundamental rights and freedoms that belong to every
                    person, everywhere in the world.
                </p>

            </div>

            <div class="udhr-list">

                <div class="udhr-item reveal">
                    <div class="article-no">1</div>
                    <div class="article-content">
                        <h4>Equality and Freedom</h4>
                        <p>All human beings are born free and equal in dignity and rights.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">2</div>
                    <div class="article-content">
                        <h4>Freedom from Discrimination</h4>
                        <p>Everyone is entitled to all rights and freedoms without discrimination of any kind.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">3</div>
                    <div class="article-content">
                        <h4>Right to Life, Liberty and Security</h4>
                        <p>Everyone has the right to life, liberty and personal security.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">4</div>
                    <div class="article-content">
                        <h4>Freedom from Slavery</h4>
                        <p>No one shall be held in slavery or servitude.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">5</div>
                    <div class="article-content">
                        <h4>Freedom from Torture</h4>
                        <p>No one shall be subjected to torture or cruel, inhuman or degrading treatment.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">6</div>
                    <div class="article-content">
                        <h4>Recognition Before the Law</h4>
                        <p>Everyone has the right to be recognized as a person before the law.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">7</div>
                    <div class="article-content">
                        <h4>Equality Before the Law</h4>
                        <p>Everyone is equal before the law and deserves equal legal protection.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">8</div>
                    <div class="article-content">
                        <h4>Right to an Effective Remedy</h4>
                        <p>Everyone has the right to seek legal remedies when their rights are violated.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">9</div>
                    <div class="article-content">
                        <h4>Freedom from Arbitrary Arrest</h4>
                        <p>No one shall be subjected to arbitrary arrest, detention or exile.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">10</div>
                    <div class="article-content">
                        <h4>Right to a Fair Trial</h4>
                        <p>Everyone has the right to a fair and public hearing by an independent court.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">11</div>
                    <div class="article-content">
                        <h4>Presumption of Innocence</h4>
                        <p>Everyone is presumed innocent until proven guilty according to law.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">12</div>
                    <div class="article-content">
                        <h4>Right to Privacy</h4>
                        <p>Everyone has the right to privacy, family, home and protection of reputation.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">13</div>
                    <div class="article-content">
                        <h4>Freedom of Movement</h4>
                        <p>Everyone has the right to move freely and choose where to live within their country.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">14</div>
                    <div class="article-content">
                        <h4>Right to Seek Asylum</h4>
                        <p>Everyone has the right to seek protection from persecution in another country.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">15</div>
                    <div class="article-content">
                        <h4>Right to Nationality</h4>
                        <p>Everyone has the right to a nationality and cannot be arbitrarily deprived of it.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">16</div>
                    <div class="article-content">
                        <h4>Marriage and Family</h4>
                        <p>Adults have the right to marry and establish a family with free and full consent.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">17</div>
                    <div class="article-content">
                        <h4>Right to Property</h4>
                        <p>Everyone has the right to own property individually or with others.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">18</div>
                    <div class="article-content">
                        <h4>Freedom of Thought, Conscience and Religion</h4>
                        <p>Everyone has the right to freedom of thought, conscience and religion.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">19</div>
                    <div class="article-content">
                        <h4>Freedom of Opinion and Expression</h4>
                        <p>Everyone has the right to hold opinions and express ideas freely.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">20</div>
                    <div class="article-content">
                        <h4>Freedom of Assembly and Association</h4>
                        <p>Everyone has the right to peaceful assembly and to join associations.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">21</div>
                    <div class="article-content">
                        <h4>Participation in Government</h4>
                        <p>Everyone has the right to participate in government and public affairs.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">22</div>
                    <div class="article-content">
                        <h4>Right to Social Security</h4>
                        <p>Everyone has the right to social security and economic protection.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">23</div>
                    <div class="article-content">
                        <h4>Right to Work</h4>
                        <p>Everyone has the right to work, fair wages and safe working conditions.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">24</div>
                    <div class="article-content">
                        <h4>Right to Rest and Leisure</h4>
                        <p>Everyone has the right to rest, leisure and reasonable working hours.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">25</div>
                    <div class="article-content">
                        <h4>Adequate Standard of Living</h4>
                        <p>Everyone has the right to food, clothing, housing, healthcare and essential services.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">26</div>
                    <div class="article-content">
                        <h4>Right to Education</h4>
                        <p>Everyone has the right to education that promotes human dignity and understanding.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">27</div>
                    <div class="article-content">
                        <h4>Participation in Cultural Life</h4>
                        <p>Everyone has the right to participate in cultural life and benefit from scientific progress.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">28</div>
                    <div class="article-content">
                        <h4>Social and International Order</h4>
                        <p>Everyone is entitled to a social and international order where these rights can be realized.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">29</div>
                    <div class="article-content">
                        <h4>Duties to the Community</h4>
                        <p>Everyone has responsibilities to the community while respecting the rights of others.</p>
                    </div>
                </div>

                <div class="udhr-item reveal">
                    <div class="article-no">30</div>
                    <div class="article-content">
                        <h4>Protection of Human Rights</h4>
                        <p>No individual, group or state may destroy or limit the rights and freedoms set out in the UDHR.</p>
                    </div>
                </div>

            </div>

        </div>

    </section>

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
        const reveals = document.querySelectorAll(".reveal");

        window.addEventListener("scroll", reveal);

        function reveal() {

        reveals.forEach((element) => {

        const windowHeight = window.innerHeight;

        const revealTop = element.getBoundingClientRect().top;

        const revealPoint = 120;

        if (revealTop < windowHeight - revealPoint) {

        element.classList.add("active");

        }

        });

        }

        reveal();
</script>

</body>
</html>