    <style>
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
    
    <!-- Subscribe Start -->
    <div class="container-fluid subscribe py-5">
        <div class="container text-center py-5">
            <div class="mx-auto text-center" style="max-width: 900px;">
                <h5 class="subscribe-title px-3">Subscribe</h5>
                <h1 class="text-white mb-4">Our Newsletter</h1>
                    
                <div class="position-relative mx-auto">
                    <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->

    <!-- QR Code Start -->

    <section class="verify-section">
       <div class="overlay-circle"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h6 class="small-title">VERIFY YOUR MEMBERSHIP</h6>
                        <h1>Scan your membership</h1>
                            <h2>QR code</h2>
                                <a href="https://systemihrolk.mywizard.web.lk/public/qr/search" class="scan-btn">
                                    <i class="fa-solid fa-arrow-right"></i>Scan QR Code
                                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- QR Code End -->

    <!-- Footer Start -->
    <div class="container-fluid footer py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Get In Touch</h4>
                        <a href="https://maps.app.goo.gl/CysgguDeBk1H432L6https://maps.app.goo.gl/CysgguDeBk1H432L6"><i class="fas fa-home me-2"></i> No.865/02, <br> Jaya Mawatha, <br> Rajagiriya, Sri Lanka</a>
                            <a href="mailto:ihrosrilanka@gmail.com"><i class="fas fa-envelope me-2"></i> ihrosrilanka@gmail.com</a>
                            <a href="tel:+94112072172"><i class="fas fa-phone me-2"></i> +94112072172</a>
                            <a href="tel:+94702885566"><i class="fas fa-phone me-2"></i></i> +94702885566</a>
                        <div class="d-flex align-items-center">
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="https://www.facebook.com/share/18uuoKzfGo/?mibextid=wwXIfr"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="https://x.com/IHRO_SRILANKA"><i class="fab fa-x-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="https://www.instagram.com/ihrosrilanka/"><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="https://www.linkedin.com/in/international-human-rights-organizations-083571412/"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="https://youtube.com/@ihrosrilankaofficial?si=5PCcmT1zv6p-VYzZ"><i class="fab fa-youtube"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="https://www.tiktok.com/@ihrosrilanka.official?_r=1&_t=ZS-97iKPh3Y0w8"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Organization</h4>
                            <a href="index.php"><i class="fas fa-angle-right me-2"></i> Home</a>
                            <a href="about.php"><i class="fas fa-angle-right me-2"></i> About</a>
                            <a href="gallery.php"><i class="fas fa-angle-right me-2"></i> Gallery</a>
                            <a href="events.php"><i class="fas fa-angle-right me-2"></i> Events</a>
                            <a href="tourist.php"><i class="fas fa-angle-right me-2"></i> Tourist</a>
                            <a href="contact.php"><i class="fas fa-angle-right me-2"></i> Contact</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Support</h4>
                        <a href="contact.php"><i class="fas fa-angle-right me-2"></i> Contact</a>
                        <a href="legal.php"><i class="fas fa-angle-right me-2"></i> Legal Notice</a>
                        <a href="privacy.php"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                        <a href="terms.php"><i class="fas fa-angle-right me-2"></i> Terms and Conditions</a>
                        <a href="sitemap.php"><i class="fas fa-angle-right me-2"></i> Sitemap</a>
                        <a href="cookie.php"><i class="fas fa-angle-right me-2"></i> Cookie policy</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <div class="row gy-3 gx-2 mb-4">
                            <div class="col-xl-6">
                                <form>
                                    <div class="form-floating">
                                        <select class="form-select bg-dark border" id="select1">
                                            <option value="1">Arabic</option>
                                            <option value="2">German</option>
                                            <option value="3">Greek</option>
                                            <option value="3">New York</option>
                                        </select>
                                        <label for="select1">English</label>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xl-6">
                                <form>
                                    <div class="form-floating">
                                        <select class="form-select bg-dark border" id="select1">
                                            <option value="1">USD</option>
                                            <option value="1">LKR</option>
                                            <option value="2">EUR</option>
                                            <option value="3">INR</option>
                                            <option value="3">GBP</option>
                                        </select>
                                        <label for="select1">$</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <h4 class="text-white mb-3">Payments</h4>
                        <div class="footer-bank-card">
                            <a href="#" class="text-white me-2"><i class="fab fa-cc-amex fa-2x"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-cc-visa fa-2x"></i></a>
                            <a href="#" class="text-white me-2"><i class="fas fa-credit-card fa-2x"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-cc-mastercard fa-2x"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-cc-paypal fa-2x"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-cc-discover fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->