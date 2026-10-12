<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IHRO</title>
    <link rel="icon" type="image/png" href="../img/Logo_IHRO.jpg" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap + Styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            overflow: hidden;
        }

        /* LOADER */
        #loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: #13357B;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            z-index: 9999;
            transition: all 1s ease;
        }

        #loader.hide {
            opacity: 0;
            visibility: hidden;
        }

        .loader-circle {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            border: 3px solid #fff;
            display: flex;
            justify-content: center;
            background: #fff;
            align-items: center;
            animation: pulse 1.5s infinite;
        }

        .logo {
            width: 135px;
            height: 135px;
            border-radius: 50%;
            overflow: hidden;
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            color: aliceblue;
        }

        .logo-text {
            margin-top: 35px;
            color: white;
            font-size: 55px;
            font-weight: 600;
            letter-spacing: 16px;
            animation: pulse 1.5s infinite;
        }

        .dots {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .dots span {
            width: 10px;
            height: 10px;
            background: white;
            border-radius: 50%;
            animation: bounce 0.6s infinite alternate;
        }

        .dots span:nth-child(2) { animation-delay: 0.2s; }
        .dots span:nth-child(3) { animation-delay: 0.4s; }

        /* ANIMATIONS */
        @@keyframes pulse {
            0%, 100% { opacity: .6; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.06); }
        }

        @@keyframes bounce {
            from { transform: translateY(0); }
            to { transform: translateY(-8px); }
        }

        /* RESPONSIVE */
        @media (max-width:768px) {
            .loader-circle { width: 120px; height: 120px; }
            .logo { width: 75px; height: 75px; }
            .logo-text { font-size: 42px; letter-spacing: 10px; }
        }

        @media (max-width:480px) {
            .loader-circle { width: 95px; height: 95px; }
            .logo { width: 58px; height: 58px; }
            .logo-text { font-size: 28px; letter-spacing: 7px; }
        }
    </style>
</head>

<body>

    <!-- LOADER -->
    <div id="loader">
        <div class="loader-circle">
            <div class="logo">
                <img src="../img/Social media logo.png" alt="IHRO Logo" />
            </div>
        </div>

        <div class="logo-text">IHRO</div>

        <div class="dots">
            <span></span><span></span><span></span>
        </div>
    </div>

    <!-- MAIN CONTENT (YOUR PAGES LOAD HERE) -->
    <div id="main-content" style="display:none;">
        
    </div>

    <!-- Scripts -->
    <script>
        window.addEventListener("load", function () {
            setTimeout(function () {
                document.getElementById("loader").classList.add("hide");
                document.body.style.overflow = "auto";
                document.getElementById("main-content").style.display = "block";
            }, 2500);
        });
    </script>

</body>
</html>