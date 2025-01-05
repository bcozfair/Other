<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />
    <link href="assets/plugins/custom/cookiealert/cookiealert.bundle.css" rel="stylesheet" type="text/css" />

    <style>
        .navbar {
            position: sticky;
            top: 0;
            z-index: 10;
            /* ให้แน่ใจว่า navbar อยู่ด้านบน */
        }

        p {
            font-size: 16px;
        }

        .dropdown button {
            font-size: 14px;
        }

        .footer {
            font-size: 16px;
        }

        .navbar {
            font-size: 17px;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .bg-dark {
            background-color: #343a40 !important;
        }

        a {
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration-line: underline;
        }

        .breadcrumb-item a {
            color: white;
            font-size: 17px;
        }

        .text-muted {
            color: #6c757d !important;
        }

        .btn-go-top {
            position: fixed;
            width: 40px;
            height: 40px;
            bottom: 40px;
            right: 50px;
            line-height: 40px;
            border-radius: 5px;
            background: #6e7073;
            text-decoration: none;
            text-align: center;
            font-size: 20px;
            color: white;
            z-index: 3;
        }

        .btn-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            height: 35px;
            font-size: 12px;
        }

        .input-group {
            width: 250px;
        }

        .form-control,
        .fa-magnifying-glass {
            font-size: 12px;
        }

        .breadcrumb-item.active a {
            color: #aab7b8;
        }

        .breadcrumb-light {
            --bs-breadcrumb-divider: ">";
            /* ตัวแยก */
            color: #f8f9fa;
            /* สีข้อความ */
        }

        .breadcrumb-light .breadcrumb-item+.breadcrumb-item::before {
            content: ">";
            /* ตัวแยก */
            color: #aab7b8;
            /* สีของตัวแยก */
        }

        .breadcrumb-light .breadcrumb-item a:hover {
            text-decoration: underline;
        }

        .card {
            /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        /* Add some padding inside the card container */
        .container {
            padding: 2px 16px;
            border-radius: 5px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(172, 172, 172, 0.2);
            transition: 0.3s;
            border-radius: 5px;
            /* 5px rounded corners */
            border: none;
        }

        /* Add rounded corners to the top left and the top right corner of the image */
        img {
            border-radius: 5px 5px 0 0;
        }

        @media (max-width: 992px) {

            /* Navbar */
            .navbar-brand img {
                width: 180px;
            }

            /* Search and Language */
            .input-group {
                width: 100%;
                margin-bottom: 10px;
                height: 50%;
            }

            .dropdown .btn {
                width: 100%;
                margin-bottom: 10px;
                text-align: left;
            }
        }

        @media (max-width: 768px) {

            /* Main Content Layout */
            .container.bg-white {
                margin-top: -20%;
            }

            .col-3 {
                width: 100%;
                margin-bottom: 20px;
            }

            .col-9 {
                width: 100%;
            }

            /* Product Lists */
            .row .col-6 {
                width: 100%;
            }

            /* Text Adjustments */
            h4 {
                font-size: 20px;
            }

            h5 {
                font-size: 16px;
            }

            p,
            li {
                font-size: 14px;
            }

            /* Footer */
            .footer .col-md {
                margin-bottom: 15px;
            }
        }

        @media (max-width: 576px) {

            /* Cookie Alert */
            .cookiealert p {
                margin-left: 5%;
                margin-right: 5%;
                font-size: 12px;
            }

            /* Navbar */
            .navbar-brand img {
                width: 150px;
            }

            /* Breadcrumb */
            .breadcrumb-item a {
                font-size: 14px;
            }

            /* Main Content */
            .container.bg-white {
                margin-top: -25%;
                padding: 15px;
            }

            /* Button Go Top */
            .btn-go-top {
                bottom: 60px;
                right: 15px;
            }
        }
    </style>
</head>

<body>
    <!-- navber -->
    <nav class="navbar navbar-expand-lg bg-white p-3 fw">
        <div class="container">
            <a class="navbar-brand col-4" href="#"><img src="https://www.hanagroup.com/images/Hanalogo.jpg"
                    alt="" width="auto" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="row collapse navbar-collapse mb-1" id="navbarNavDropdown">
                <div class="d-flex" style="justify-content: end">
                    <div class="input-group mb-1">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                            aria-describedby="button-addon2" />
                        <button class="btn btn-outline-secondary btn-icon" type="button" id="button-addon2"
                            style="width: 40px">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>

                    <div class="dropdown">
                        <button class="btn btn-ountline dropdown-toggle" type="button">
                            <i class="fa-solid fa-globe"></i> EN | English
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">EN | English</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">TH | ไทย</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">CN | 中國人</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About Us
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="#">Blog</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">About Us</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Contact us</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Worldwide Manufacturing
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="#">Blog</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">About Us</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Contact us</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Investor Relations
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="#">Blog</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">About Us</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Contact us</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- breadcrumb -->
    <div class="container-fluid bg-dark p-1 d-flex align-items-center" style="height: 55px">
        <div class="container">
            <nav class="breadcrumb-light" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item active">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Ayutthaya</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Overview</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- main -->
    {{ $slot }}

    <!-- footer -->
    <footer class="container-fluid bg-dark text-white border-top footer">
        <br />
        <div class="container menu">
            <div class="row">
                <div class="col-6 col-md">
                    <p class="text-light left-border-w">| About Us</p>
                    <ul class="list-unstyled text-small text-white">
                        <li>
                            <a class="text-muted" href="/AboutUs/CompanyProfile" target="_self">Company Profile</a>
                        </li>
                        <li>
                            <a class="text-muted" href="/AboutUs/VisionMission" target="_self">Vision &amp;
                                Mission</a>
                        </li>
                        <li>
                            <a class="text-muted" href="/AboutUs/History" target="_self">History</a>
                        </li>
                        <li class="text-muted">
                            Board &amp; Executive
                            <ul class="text-small" style="list-style-type: none">
                                <li>
                                    <a class="text-muted" href="/AboutUs/Directors" target="_self">Board of
                                        Directors</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="/AboutUs/Executives" target="_self">Executives</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="text-muted" href="/AboutUs/Awards" target="_self">Awards</a>
                        </li>
                        <li>
                            <a class="text-muted" href="/AboutUs/Privacy" target="_self">Privacy Policy (PDPA)</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <p class="text-light left-border-w">
                        | Worldwide Manufacturing
                    </p>
                    <ul class="list-unstyled text-small">
                        <li>
                            <a class="text-muted" href="/Manufacturing/Bkk" target="_self">Headquarters</a>
                        </li>
                        <li>
                            <a class="text-muted" href="/Manufacturing/Lpn" target="_self">Lamphun</a>
                        </li>
                        <li>
                            <a class="text-muted" href="/Manufacturing/Ayt" target="_self">Ayutthaya</a>
                        </li>
                        <li>
                            <a class="text-muted" href="/Manufacturing/Jx" target="_self">Jiaxing</a>
                        </li>
                        <li>
                            <a class="text-muted" href="/Manufacturing/Ohio" target="_self">Ohio</a>
                        </li>
                        <li>
                            <a class="text-muted" href="/Manufacturing/Kk" target="_self">Cambodia</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <p class="text-light left-border-w">
                        | Investor Relations
                    </p>
                    <ul class="list-unstyled text-small">
                        <li>
                            <a class="text-muted" href="/Investor/PressReleases" target="_self">Press Releases</a>
                        </li>
                        <li>
                            <a class="text-muted" href="/Investor/FinancialInfo" target="_self">Financial
                                Information</a>
                        </li>
                        <li>
                            <a class="text-muted" href="/Investor/GroupStructure" target="_blank">Group Structure</a>
                        </li>
                        <li>
                            <a class="text-muted" href="/Investor/Shareholding" target="_blank">Major
                                Shareholders</a>
                        </li>
                        <li class="text-muted">
                            Sustainable Development
                            <ul class="text-small" style="list-style-type: none">
                                <li>
                                    <a class="text-muted" href="/Investor/Sustainability"
                                        target="_self">Sustainability</a>
                                </li>
                                <li class="text-muted">
                                    Corporate Governance
                                    <ul class="text-small" style="list-style-type: none">
                                        <li>
                                            <a class="text-muted" href="/Investor/Article" target="_blank">Article of
                                                Association</a>
                                        </li>
                                        <li>
                                            <a class="text-muted" href="/Investor/Charters" target="_self">Charters
                                                of Board and
                                                Committees</a>
                                        </li>
                                        <li>
                                            <a class="text-muted" href="/Investor/CGrelated" target="_self">CG
                                                related policies</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="text-muted" href="/Investor/AntiCorruption"
                                        target="_self">Anti-Corruption</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="text-muted" href="/Investor/SETNews" target="_self">SET News</a>
                        </li>
                        <li class="text-muted">
                            Annual Report
                            <ul class="text-small" style="list-style-type: none">
                                <li>
                                    <a class="text-muted" href="/Investor/Annual" target="_self">Annual Report</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="/Investor/Report" target="_self">56-1 Report
                                        (Thai)</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="text-muted" href="/Investor/Stock" target="_blank">Stock Information</a>
                        </li>
                        <li>
                            <a class="text-muted" href="/Investor/IRContact" target="_self">IR Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <p class="text-light left-border-w">
                        <a class="text-light" href="/Career">| Career</a>
                    </p>
                </div>
                <div class="col-6 col-md">
                    <p class="text-light left-border-w">
                        <a class="text-light" href="/Contact">| Contact Us</a>
                    </p>
                </div>
            </div>
        </div>
        <hr />
        <div class="container">
            <p class="text-light" style="text-align: center">
                © Copyright 2025 Hana Microelectronics Public Co., Ltd. All
                rights reserved.
            </p>
        </div>

        <a href="#" class="btn-go-top">
            <i class="fa-regular fa-circle-up"></i>
        </a>
    </footer>

    <!--begin::Cookie alert-->
    <div class="cookiealert d-flex flex-column text-white text-center rounded-0 py-4"
        style="
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                z-index: 9999;
                background: rgba(0, 0, 0, 0.5);
            ">
        <p style="font-size: 14px; margin-left: 15%; margin-right: 15%">
            This website uses cookies to provide you with a best browsing
            experience. By using this website you consent to our use of
            cookies and <a href="#">Data Privacy Policy</a>
        </p>

        <button type="button" style="font-size: 16px" class="btn btn-warning d-inline mx-auto fw-bold">
            Accept
        </button>
    </div>

    <!--end::Cookie alert-->

    <!-- Bootstrap JavaScript และ Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/custom/cookiealert/cookiealert.bundle.js"></script>

    <script>
        window.addEventListener("cookieAlertAccept", function() {
            alert("cookies accepted");
        });
    </script>
</body>

</html>
