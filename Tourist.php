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
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.8.1/build/css/intlTelInput.css">

    <style>

            .about-section {
                background: #f5f5f5;
                padding: 60px 0;
            }

            .container {
                width: 90%;
                max-width: 1200px;
                margin: auto;
            }

            .content-box {
                background: #fff;
                padding: 40px;
                border-radius: 12px;
                border: 1px solid #e5e5e5;
                box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            }

                .content-box h2 {
                    color: #1f2b5b;
                    font-size: 42px;
                    font-weight: 700;
                    margin-bottom: 25px;
                }

                .content-box p {
                    color: #5f667a;
                    font-size: 24px;
                    line-height: 1.9;
                    margin-bottom: 25px;
                    text-align: justify;
                }

                .content-box strong {
                    color: #3d4668;
                    font-weight: 700;
                }

            .mt-5 {
                margin-top: 60px;
            }

            @@media (max-width: 768px) {
                .content-box {
                    padding: 25px;
                }

                    .content-box h2 {
                        font-size: 28px;
                    }

                    .content-box p {
                        font-size: 16px;
                        line-height: 1.8;
                    }
            }
            .application-card {
                width: 100%;
                max-width: 1000px;
                background: #fff;
                border-radius: 24px;
                overflow: hidden;
                box-shadow: 0 20px 60px rgba(0,0,0,0.15);
            }

            .application-wrapper {
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 80px 20px;
                background: #f8fafc;
            }

            .phone-input {
                width: 100% !important;
                height: 55px;
                border: 2px solid #d9e2ec;
                border-radius: 14px;
                padding-left: 90px !important; /* IMPORTANT FIX */
                font-size: 16px;
            }

                .phone-input:focus {
                    outline: none;
                    border-color: #0d6efd;
                    box-shadow: 0 0 0 4px rgba(13,110,253,.15);
                }

            .iti {
                width: 100%;
            }
            /* Fix flag box position */
            .iti__flag-container {
                padding-left: 12px;
            }

            /* Make input text start AFTER country code */
            .iti__selected-dial-code {
                margin-left: 6px;
                font-weight: 500;
            }

            .iti input {
                text-indent: 0 !important;
                letter-spacing: 0.5px;
            }

            .header {
                background: #003b66;
                padding: 45px;
                text-align: center;
            }

                .header h1 {
                    color: #fff;
                    font-size: 42px;
                    font-weight: 700;
                    line-height: 1.3;
                }

            .form-area {
                padding: 50px;
                display: grid;
                grid-template-columns: repeat(2,1fr);
                gap: 25px 30px;
            }

            .input-box {
                display: flex;
                flex-direction: column;
            }

                .input-box label {
                    margin-bottom: 8px;
                    font-size: 16px;
                    font-weight: 600;
                    color: #0f172a;
                }

                    .input-box label span {
                        color: red;
                    }

                .input-box input {
                    height: 55px;
                    border: 2px solid #d9e2ec;
                    border-radius: 14px;
                    padding: 0 18px;
                    font-size: 15px;
                    transition: .3s;
                }

                    .input-box input:focus {
                        outline: none;
                        border-color: #0d6efd;
                        box-shadow: 0 0 0 4px rgba(13,110,253,.15);
                    }

                .input-box select {
                    width: 100%;
                    height: 55px;
                    border: 2px solid #d9e2ec;
                    border-radius: 14px;
                    padding: 0 15px;
                    font-size: 15px;
                    background: #fff;
                    cursor: pointer;
                    transition: 0.3s ease;
                    appearance: none; /* removes default arrow */
                }

                    /* Focus effect */
                    .input-box select:focus {
                        outline: none;
                        border-color: #0d6efd;
                        box-shadow: 0 0 0 4px rgba(13,110,253,.15);
                    }

            /* Wrapper fix for dropdown */
            .input-box {
                display: flex;
                flex-direction: column;
            }

                /* Label styling */
                .input-box label {
                    margin-bottom: 8px;
                    font-weight: 600;
                    color: #1f2937;
                }

                /* Custom dropdown arrow */
                .input-box.full-width {
                    position: relative;
                }

                    /* Add arrow icon */
                    .input-box.full-width::after {
                        content: "▼";
                        position: absolute;
                        right: 18px;
                        top: 62%;
                        transform: translateY(-50%);
                        pointer-events: none;
                        font-size: 12px;
                        color: #6b7280;
                    }

            .full-width {
                grid-column: 1/-1;
            }

            .submit-section {
                grid-column: 1/-1;
                text-align: center;
                margin-top: 10px;
            }

            .submit-btn {
                background: #003b66;
                color: #fff;
                border: none;
                padding: 16px 50px;
                border-radius: 50px;
                font-size: 18px;
                font-weight: 600;
                cursor: pointer;
                transition: .3s;
            }

                .submit-btn:hover {
                    background: #00518d;
                    transform: translateY(-3px);
                }

            @media(max-width:768px) {

                .header h1 {
                    font-size: 28px;
                }

                .form-area {
                    grid-template-columns: 1fr;
                    padding: 30px;
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
                Tourist Safety
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
                    <a href="tourist.html" class="text-white">
                        Tourist
                    </a>
                </li>

            </ol>
        </div>
    </div>
    <!-- Header End -->

    <section class="about-section">
        <div class="container">

            <div class="content-box">
                <h2>International Human Rights Organization Sri Lanka</h2>

                <p>
                    The International Human Rights Organization Sri Lanka (IHRO) is an
                    independent, non-profit national organization committed to advancing
                    the implementation of the Universal Declaration of Human Rights (UDHR)
                    at local, regional, national, and international levels. IHRO brings
                    together a global network of individuals, educators, and organizations
                    dedicated to promoting human rights awareness, education, and protection
                    for all people.
                </p>

                <p>
                    IHRO's core purpose is to develop and deliver human rights education
                    resources and initiatives that inform, support, and unite individuals,
                    educators, civil society organizations, and governmental institutions.
                    Through these efforts, the organization works to strengthen the
                    dissemination, understanding, and practical adoption of the Universal
                    Declaration of Human Rights across all sectors of society.
                </p>

                <h2 class="mt-5">Tourist Assistance & Safety Support System</h2>

                <p>
                    This is a <strong>free QR code–based support service</strong> designed
                    to assist international tourists during their stay in Sri Lanka. By
                    scanning the QR code, registered tourists can directly connect with the
                    International Human Rights Organization (IHRO) to access guidance and
                    support whenever required.
                </p>

                <p>
                    This system offers a secure and reliable platform for reporting concerns
                    related to <strong>
                    personal safety, legal matters, harassment,
                    exploitation, loss of travel documents, or any situation
                </strong>
                requiring immediate advice or assistance. The initiative aims to provide
                timely support and clear guidance, ensuring a safe, informed, and
                confident travel experience throughout the visit.
            </p>
        </div>

    </div>
</section>

<div class="application-wrapper">

    <div class="application-card">

        <div class="header">
            <h1>Tourist Assistance and Safety Support System</h1>
        </div>

        <form id="touristForm" action="https://api.web3forms.com/submit" method="POST" class="form-area">

            <input type="hidden" name="access_key" value="49c3909d-e5fe-44a6-811b-fc1d1904a611">
            <input type="hidden" name="subject" value="Tourist Assistance Application">

            <div class="input-box">
                <label>Full Name <span>*</span></label>
                <input type="text" id="name" name="fullName" required>
            </div>


            <div class="input-box">
                <label>Passport Number <span>*</span></label>
                <input type="text" id="passport" name="passportNumber" required>
            </div>


            <div class="input-box">
                <label>Email Address <span>*</span></label>
                <input type="email" id="email" name="email" required>
            </div>


            <div class="input-box">
                <label>Local Number (Sri Lanka) <span>*</span></label>
                <input id="lkNumber"
                       type="tel"
                       name="localNumber"
                       placeholder="077 123 4567"
                       required>
            </div>


            <div class="input-box">
                <label>Foreign Number <span>*</span></label>

                <input id="foreignNumber"
                       type="tel"
                       name="foreignNumber"
                       class="phone-input"
                       required>
            </div>


            <div class="input-box">
                <label>WhatsApp Number <span>*</span></label>

                <input type="text"
                       id="WhatsappNumber"
                       name="whatsappNumber"
                       required>
            </div>


            <div class="input-box">
                <label>Number of Days <span>*</span></label>

                <input type="number"
                       min="1"
                       id="NoDays"
                       name="numberOfDays"
                       required>
            </div>


            <div class="input-box full-width">
                <label>Destination Country <span>*</span></label>

                <select id="country" name="destinationCountry" required>
                    <option value="">Loading countries...</option>
                </select>
            </div>


            <div class="submit-section">
                <button type="submit" class="submit-btn">
                    Submit Application
                </button>
            </div>


        </form>

    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.8.1/build/js/intlTelInput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.0/build/js/utils.js"></script>

    <script>
    document
    .getElementById("touristForm")
    .addEventListener("submit", function(e){

    e.preventDefault();

    const inputs = this.querySelectorAll("input[required]");

    let valid = true;

    inputs.forEach(input => {

    if(input.value.trim() === ""){
    valid = false;
    input.style.borderColor = "#ef4444";
    }else{
    input.style.borderColor = "#22c55e";
    }
    });

    if(valid){

    alert("Application submitted successfully!");

    this.reset();

    inputs.forEach(input=>{
    input.style.borderColor="#dbe3ef";
    });

    }else{
    alert("Please fill all required fields.");
    }
    });
    //Local number //

        const lkInput = document.querySelector("#lkNumber");

        lkInput.addEventListener("input", function () {
        this.value = this.value.replace(/[^0-9]/g, '');
        });

    // Foreign number //
        const input = document.querySelector("#foreignNumber");

        const iti = window.intlTelInput(input, {
        initialCountry: "auto",
        preferredCountries: ["lk","us","gb","ca","au","in"],

        separateDialCode: true,   // shows +94 | number
        nationalMode: true,

        // 🔥 THIS enables search inside dropdown
        allowDropdown: true,
        autoPlaceholder: "polite",
        formatOnDisplay: true,
        dropdownContainer: document.body
        });
        // ✅ Allow ONLY numbers (no letters, no symbols)
        input.addEventListener("input", function () {
        this.value = this.value.replace(/[^0-9]/g, '');
        });

        // countries //

        document.addEventListener("DOMContentLoaded", function () {

        const select = document.getElementById("country");

        const countries = [
        "🇱🇰 Sri Lanka",
        "🇺🇸 United States",
        "🇬🇧 United Kingdom",
        "🇨🇦 Canada",
        "🇦🇺 Australia",
        "🇮🇳 India",
        "🇸🇬 Singapore",
        "🇲🇾 Malaysia",
        "🇯🇵 Japan",
        "🇨🇳 China",
        "🇩🇪 Germany",
        "🇫🇷 France",
        "🇮🇹 Italy",
        "🇦🇪 United Arab Emirates",
        "🇰🇷 South Korea",
        "🇧🇩 Bangladesh",
        "🇳🇵 Nepal",
        "🇵🇰 Pakistan",
        "🇿🇦 South Africa"
        ];

        countries.forEach(country => {
        const option = document.createElement("option");
        option.value = country;
        option.textContent = country;
        select.appendChild(option);
        });

        });

</script>

    </body>
</html>