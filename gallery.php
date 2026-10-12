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
            /* Header */
            .gallery-header {
                padding: 120px 0 80px;
                background: linear-gradient(135deg,#0d1b4c,#203a73);
                color: #fff;
            }

                .gallery-header h1 {
                    font-size: 60px;
                    font-weight: 700;
                }

                .gallery-header p {
                    max-width: 700px;
                    margin: auto;
                    opacity: .9;
                }

            /* Filter */
            .filter-btn {
                border: none;
                padding: 12px 25px;
                margin: 5px;
                border-radius: 50px;
                background: #f3f5fa;
                transition: .3s;
                font-weight: 600;
            }

                .filter-btn.active,
                .filter-btn:hover {
                    background: #203a73;
                    color: #fff;
                }

            /* Gallery */
            .gallery-section {
                padding: 80px 0;
            }

            .gallery-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit,minmax(320px,1fr));
                gap: 25px;
            }

            .gallery-item {
                position: relative;
                overflow: hidden;
                border-radius: 20px;
                cursor: pointer;
                box-shadow: 0 10px 30px rgba(0,0,0,.1);
            }

                .gallery-item img {
                    width: 100%;
                    height: 300px;
                    object-fit: cover;
                    transition: .5s;
                }

            .gallery-overlay {
                position: absolute;
                inset: 0;
                background: linear-gradient( to top, rgba(0,0,0,.85), rgba(0,0,0,.1) );
                display: flex;
                align-items: flex-end;
                padding: 25px;
                color: white;
                opacity: 0;
                transition: .4s;
            }

            .gallery-item:hover img {
                transform: scale(1.1);
            }

            .gallery-item:hover .gallery-overlay {
                opacity: 1;
            }

            .gallery-overlay h5 {
                margin: 0;
                font-size: 20px;
                font-weight: 600;
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
                Our Gallery
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
                    <a asp-controller="Home" asp-action="Gallery" class="text-white">
                        Gallery
                    </a>
                </li>

            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Gallery Categories -->
    <section class="gallery-filter py-4">
        <div class="container text-center">

            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="Women's"> Women's Wing</button>
            <button class="filter-btn" data-filter="Book">IHRO Book Launch</button>
            <button class="filter-btn" data-filter="ICCC">ICCC Leadership Workshop</button>
            <button class="filter-btn" data-filter="humanity-award">Humanity Award</button>
            <button class="filter-btn" data-filter="International">International</button>
            <button class="filter-btn" data-filter="Training"> Training</button>
            <button class="filter-btn" data-filter="Buddhist">IHRO Buddhist Religious</button>
            <button class="filter-btn" data-filter="Forum">Enrollment</button>
            <button class="filter-btn" data-filter="Welfare">IHRO Welfare</button>
            <button class="filter-btn" data-filter="Chairman">Chairman's</button>

        </div>
    </section>
    
    <!-- Gallery Grid -->
    <section class="gallery-section">
        <div class="container"> 

            <div class="gallery-grid">

                <div class="gallery-item" data-category="Welfare">
                    <img src="img/Event/WF1.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Welfare">
                    <img src="img/Event/WF2.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Book">
                    <img src="img/Events/Event_1.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Book">
                    <img src="img/Events/Event_2.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Book">
                    <img src="img/Events/Event_3.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="human-rights">
                    <img src="img/Events/Event_4.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="International">
                    <img src="img/Events/Event_5.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="International">
                    <img src="img/Events/Event_6.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="International">
                    <img src="img/Events/Event_7.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="International">
                    <img src="img/Events/Event_8.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="International">
                    <img src="img/Events/Event_10.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="International">
                    <img src="img/Events/Event_11.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="International">
                    <img src="img/Events/Event_12.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="human-rights">
                    <img src="img/Events/Event_13.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="human-rights">
                    <img src="img/Events/Event_14.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="International">
                    <img src="img/Events/Event_15.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="International">
                    <img src="img/Events/Event_16.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E1.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E2.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E5.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E6.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E7.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E8.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E9.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E10.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E11.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E12.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E13.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E14.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E15.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E16.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E17.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E18.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E19.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E20.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E21.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E22.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E23.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E24.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E25.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E26.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E27.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E28.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E29.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E30.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E31.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E32.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E4.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/E3.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>
                
                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU1.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU2.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU3.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU4.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU5.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU6.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU7.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU8.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU9.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU10.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU11.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU12.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>


                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU13.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU14.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU15.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU16.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU17.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU18.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU19.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU20.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU21.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU22.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU23.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU24.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU25.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU26.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU27.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU28.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU29.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU30.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU31.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU32.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU33.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Forum">
                    <img src="img/Event/TU34.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Book">
                    <img src="img/Event/I1.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Book">
                    <img src="img/Event/I2.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Book">
                    <img src="img/Event/I3.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Book">
                    <img src="img/Event/I4.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>


                <div class="gallery-item" data-category="Book">
                    <img src="img/Event/I5.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>


                <div class="gallery-item" data-category="Book">
                    <img src="img/Event/I6.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>


                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I7.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>


                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I8.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>


                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I9.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>


                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I10.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>


                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I11.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>


                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I12.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>


                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I13.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>


                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I14.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>


                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I15.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I16.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I17.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>


                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I8.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>


                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I19.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>


                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I20.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>


                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I21.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I22.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>


                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I23.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I24.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I25.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I26.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I27.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I28.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I29.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I30.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I31.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I32.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I33.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I34.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>  

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I35.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I36.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I37.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I38.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I39.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I40.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I41.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I42.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I43.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I44.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I45.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I46.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I47.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I48.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I49.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="humanity-award">
                    <img src="img/Event/I50.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Women's">
                    <img src="img/Event/W1.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Women's">
                    <img src="img/Event/W2.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Women's">
                    <img src="img/Event/W3.jpg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Women's">
                    <img src="img/Event/W4.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Women's">
                    <img src="img/Event/W6.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Women's">
                    <img src="img/Event/W5.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Women's">
                    <img src="img/Event/W7.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Women's">
                    <img src="img/Event/W8.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>


                <div class="gallery-item" data-category="Women's">
                    <img src="img/Event/W9.jpg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Women's">
                    <img src="img/Event/W10.jpg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC1.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC2.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC3.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC4.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC5.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC6.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC7.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC8.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC9.jpg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC10.jpg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC11.jpg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC12.jpg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC13.jpg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC14.jpg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC15.jpg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC16.jpg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC17.jpg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC18.jpg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC119.jpg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC20.jpg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC21.jpg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC22.jpg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="ICCC">
                    <img src="img/Event/IC23.jpg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/TUS1.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/TUS2.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/TUS3.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/TUS4.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/TUS5.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/TUS6.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/TUS7.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/TUS8.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/TUS9.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/TUS10.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/TUS11.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/TUS12.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/TUS13.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/TUS14.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Buddhist">
                    <img src="img/Event/B1.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Buddhist">
                    <img src="img/Event/B2.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Buddhist">
                    <img src="img/Event/B3.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Buddhist">
                    <img src="img/Event/B4.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Buddhist">
                    <img src="img/Event/B6.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Buddhist">
                    <img src="img/Event/B7.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Buddhist">
                    <img src="img/Event/B8.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Buddhist">
                    <img src="img/Event/B9.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Buddhist">
                    <img src="img/Event/B10.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Buddhist">
                    <img src="img/Event/B11.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT1.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT2.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT3.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT4.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT5.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT6.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT7.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT8.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT9.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT10.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT11.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT12.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT13.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT14.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT15.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT16.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT17.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT18.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT19.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT20.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT21.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT22.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT23.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT24.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Training">
                    <img src="img/Event/HAT25.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>
                    <div class="gallery-item" data-category="Training">
                        <img src="img/Event/HAT26.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                    <div class="gallery-item" data-category="Training">
                        <img src="img/Event/HAT27.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>


                    <div class="gallery-item" data-category="Training">
                        <img src="img/Event/HAT28.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                    <div class="gallery-item" data-category="Training">
                        <img src="img/Event/HAT29.JPG" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                    <div class="gallery-item" data-category="Training">
                        <img src="img/Event/HAT30.JPG" alt="">
                        <div class="gallery-overlay">
                        </div>
                    </div>

                <div class="gallery-item" data-category="Welfare">
                    <img src="img/Event/IMG1.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Welfare">
                        <img src="img/Event/IMG2.jpeg" alt="">
                        <div class="gallery-overlay">
                        </div>
                    </div>

                <div class="gallery-item" data-category="Welfare">
                        <img src="img/Event/IMG3.jpeg" alt="">
                        <div class="gallery-overlay">
                        </div>
                    </div>

                <div class="gallery-item" data-category="Welfare">
                        <img src="img/Event/IMG4.jpeg" alt="">
                        <div class="gallery-overlay">
                        </div>
                    </div>

                <div class="gallery-item" data-category="Welfare">
                        <img src="img/Event/IMG5.jpeg" alt="">
                        <div class="gallery-overlay">
                        </div>
                </div>
                <div class="gallery-item" data-category="Welfare">
                        <img src="img/Event/IMG6.jpeg" alt="">
                        <div class="gallery-overlay">
                        </div>
                    </div>

                <div class="gallery-item" data-category="Welfare">
                        <img src="img/Event/IMG7.jpeg" alt="">
                        <div class="gallery-overlay">
                        </div>
                    </div>

                <div class="gallery-item" data-category="Welfare">
                        <img src="img/Event/IMG8.jpeg" alt="">
                        <div class="gallery-overlay">
                        </div>
                    </div>
                <div class="gallery-item" data-category="Welfare">
                        <img src="img/Event/IMG9.jpeg" alt="">
                        <div class="gallery-overlay">
                        </div>
                    </div>

                <div class="gallery-item" data-category="Welfare">
                        <img src="img/Event/IMG10.jpeg" alt="">
                        <div class="gallery-overlay">
                        </div>
                    </div>

                <div class="gallery-item" data-category="Welfare">
                        <img src="img/Event/IMG11.jpeg" alt="">
                        <div class="gallery-overlay">
                        </div>
                </div>

                <div class="gallery-item" data-category="Welfare">
                    <img src="img/Event/IMG12.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Welfare">
                    <img src="img/Event/IMG13.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Welfare">
                        <img src="img/Event/IMG14.jpeg" alt="">
                        <div class="gallery-overlay">
                        </div>
                </div>

                <div class="gallery-item" data-category="Welfare">
                        <img src="img/Event/IMG15.jpeg" alt="">
                        <div class="gallery-overlay">
                        </div>
                </div>

                <div class="gallery-item" data-category="Welfare">
                        <img src="img/Event/IMG16.jpeg" alt="">
                        <div class="gallery-overlay">
                        </div>
                </div>

                <div class="gallery-item" data-category="Welfare">
                        <img src="img/Event/IMG17.jpeg" alt="">
                        <div class="gallery-overlay">
                        </div>
                </div>

                <div class="gallery-item" data-category="Welfare">
                        <img src="img/Event/IMG18.jpeg" alt="">
                        <div class="gallery-overlay">
                        </div>
                </div>

                <div class="gallery-item" data-category="Welfare">
                        <img src="img/Event/IMG19.jpeg" alt="">
                        <div class="gallery-overlay">
                        </div>
                </div>

                <div class="gallery-item" data-category="Welfare">
                        <img src="img/Event/IMG20.jpeg" alt="">
                        <div class="gallery-overlay">
                        </div>
                </div>

                <div class="gallery-item" data-category="Welfare">
                        <img src="img/Event/IMG21.jpeg" alt="">
                        <div class="gallery-overlay">
                        </div>
                </div>

                <div class="gallery-item" data-category="Welfare">
                        <img src="img/Event/IMG22.jpeg" alt="">
                        <div class="gallery-overlay">
                        </div>
                </div>

                <div class="gallery-item" data-category="Welfare">
                        <img src="img/Event/IMG23.jpeg" alt="">
                        <div class="gallery-overlay">
                        </div>
                </div>

                <div class="gallery-item" data-category="Welfare">
                    <img src="img/Event/IMG24.jpeg" alt="">
                    <div class="gallery-overlay">
                    </div>
                </div>

                <div class="gallery-item" data-category="Welfare">
                    <img src=img/Event/IMG25.jpeg" alt="">
                    <div class="gallery-overlay">
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
        document.addEventListener("DOMContentLoaded", function () {

        const filterButtons = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');


        function filterGallery(category) {

        galleryItems.forEach(item => {

        const itemCategory = item.dataset.category;

        if (category === "all" || itemCategory === category) {
        item.style.display = "block";
        } else {
        item.style.display = "none";
        }

        });


        filterButtons.forEach(button => {

        button.classList.remove("active");

        if (button.dataset.filter === category) {
        button.classList.add("active");
        }

        });

        }


        // Load filter from URL
        const urlParams = new URLSearchParams(window.location.search);
        const urlFilter = urlParams.get("filter");


        if (urlFilter) {
        filterGallery(urlFilter);
        } else {
        filterGallery("all");
        }



        // Button click event
        filterButtons.forEach(button => {

        button.addEventListener("click", function () {

        const filter = this.dataset.filter;

        filterGallery(filter);


        // Optional: update URL without reload
        const newUrl = window.location.pathname + "?filter=" + filter;
        window.history.pushState({}, "", newUrl);

        });

        });


        });
    </script>

</body>
<</html>