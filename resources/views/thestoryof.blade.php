<!--Nama: Ananda Mutiara Ramadhani Rambe
    NRP : 5026241152
    Kelas   : PWEB A
    Topik Bootstrap : JS Carousel
    Referensi: thestoryof.com.au
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Indonesia | The Story Of</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        body {
            margin: 0;
        }

        /* TOPBAR */

        .topbar {
            background: black;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding-right: 25px;
        }

        .topbar a {
            color: white;
            font-size: 16px;
        }

        /* HEADER */

        .header-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 40px;
        }

        .header-left {
            width: 33%;
        }

        .header-center {
            width: 34%;
            text-align: center;
        }

        .header-right {
            width: 33%;
            display: flex;
            justify-content: flex-end;
            gap: 25px;
        }

        .header-right i {
            font-size: 18px;
            cursor: pointer;
        }

        /* MENU */

        .menu {
            text-align: center;
            padding-bottom: 20px;
        }

        .menu a {
            margin: 0 20px;
            color: #111;
            font-size: 15px;
            text-decoration: none;
            font-weight: 500;
        }

        /* CAROUSEL */

        .carousel-item {
            height: 750px;
        }

        .carousel-item img {
            height: 100%;
            object-fit: cover;
        }

        /* CATEGORY */

        .category {
            margin-top: 60px;
        }

        .category img {
            width: 100%;
            height: 450px;
            object-fit: cover;
        }

        .category p {
            margin-top: 12px;
            font-size: 30px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        /* PRODUCT */

        .product {
            text-align: center;
            margin-top: 40px;
        }

        .product img {
            width: 100%;
        }

        .product p {
            margin-top: 7px;
            font-size: 15px;
        }

        /* BUTTON */

        .viewall {
            background: black;
            color: white;
            padding: 10px 30px;
            display: inline-block;
            margin-top: 30px;
            text-decoration: none;
        }

        /* FOOTER */

        .footer {
            background: black;
            color: white;
            padding: 40px;
            margin-top: 60px;
        }

        .footer a {
            color: white;
            display: block;
            margin-bottom: 10px;
            text-decoration: none;
        }

        .footer-left {
            margin-top: 70px;
            margin-left: 30px;
            font-size: 10px;
            text-align: left;
        }
    </style>
</head>

<body>

    <!-- TOPBAR -->

    <div class="topbar">
        <a href="#">
            <i class="bi bi-instagram"></i>
        </a>
    </div>

    <!-- HEADER -->

    <div class="container-fluid">

        <div class="header-wrapper">

            <div class="header-left"></div>

            <div class="header-center">
                <img src="https://id.thestoryof.com.au/cdn/shop/files/tso_black.jpg?v=1710224367&width=1100"
                    height="110">
            </div>

            <div class="header-right">
                <i class="bi bi-search"></i>
                <i class="bi bi-person"></i>
                <i class="bi bi-cart"></i>
            </div>

        </div>

        <!-- MENU -->

        <div class="menu">

            <a href="#">HOME</a>
            <a href="#">NEW ARRIVALS</a>
            <a href="#">BESTSELLERS</a>
            <a href="#">DRESSES</a>
            <a href="#">TOPS</a>
            <a href="#">PRE-ORDER</a>
            <a href="#">SALE</a>
            <a href="#">GIFT VOUCHER</a>

        </div>

    </div>

    <!-- CAROUSEL -->

    <div id="banner" class="carousel slide" data-ride="carousel">

        <!-- indicator -->

        <ul class="carousel-indicators">
            <li data-target="#banner" data-slide-to="0" class="active"></li>
            <li data-target="#banner" data-slide-to="1"></li>
            <li data-target="#banner" data-slide-to="2"></li>
            <li data-target="#banner" data-slide-to="3"></li>
            <li data-target="#banner" data-slide-to="4"></li>
            <li data-target="#banner" data-slide-to="5"></li>
        </ul>

        <!-- slide -->

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="https://id.thestoryof.com.au/cdn/shop/files/NEW_MOBILE_WEB_BANNER_10.png?v=1772761223&width=1000"
                    class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="https://id.thestoryof.com.au/cdn/shop/files/resize_0E5A9969.jpg?v=1772004063&width=1445"
                    class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="https://id.thestoryof.com.au/cdn/shop/files/resize_0E5A0184.jpg?v=1772001051&width=1445"
                    class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="https://id.thestoryof.com.au/cdn/shop/files/resize_0E5A0628.jpg?v=1772002282&width=1445"
                    class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="https://id.thestoryof.com.au/cdn/shop/files/026A2680.jpg?v=1765332637&width=1445"
                    class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="https://id.thestoryof.com.au/cdn/shop/files/Green_1.jpg?v=1753673284&width=1445"
                    class="d-block w-100">
            </div>

        </div>

        <!-- tombol -->

        <a class="carousel-control-prev" href="#banner" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>

        <a class="carousel-control-next" href="#banner" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>

    <!-- CATEGORY -->

    <div class="container category">

        <div class="row text-center">

            <div class="col-4">
                <img
                    src="https://id.thestoryof.com.au/cdn/shop/files/NEW_MOBILE_WEB_BANNER_10.png?v=1772761223&width=1000">
                <p>NEW ARRIVALS</p>
            </div>

            <div class="col-4">
                <img
                    src="https://id.thestoryof.com.au/cdn/shop/files/NEW_MOBILE_WEB_BANNER_3_77b95474-7663-43a9-bf05-7edb215b65e8.png?v=1765781401&width=1000">
                <p>DRESSES</p>
            </div>

            <div class="col-4">
                <img
                    src="https://id.thestoryof.com.au/cdn/shop/files/NEW_MOBILE_WEB_BANNER_7.png?v=1765783538&width=1000">
                <p>TOPS</p>
            </div>

        </div>

        <!-- PRODUCT -->

        <div class="row">

            <div class="col-3 product">
                <img src="https://id.thestoryof.com.au/cdn/shop/files/resize_0E5A0042.jpg?v=1772000629&width=1100">
                <p>MADA ZERE MINI DRESS</p>
                <p>Rp 4.500.000</p>
            </div>

            <div class="col-3 product">
                <img src="https://id.thestoryof.com.au/cdn/shop/files/resize_0E5A0081.jpg?v=1772000794&width=1445">
                <p>PINOT SCALLOP MINI DRESS</p>
                <p>Rp 4.750.000</p>
            </div>

            <div class="col-3 product">
                <img src="https://id.thestoryof.com.au/cdn/shop/files/resize_0E5A0221.jpg?v=1772001051&width=1445">
                <p>MIRUNA MIDI DRESS</p>
                <p>Rp 4.750.000</p>
            </div>

            <div class="col-3 product">
                <img
                    src="https://id.thestoryof.com.au/cdn/shop/files/SHOPIFY_FOTO_PRODUK_47.png?v=1773028164&width=1100">
                <p>FARRO TOP</p>
                <p>Rp 2.750.000</p>
            </div>

        </div>

        <div class="text-center">
            <a href="#" class="viewall">VIEW ALL</a>
        </div>

    </div>

    <!-- FOOTER -->

    <div class="footer text-center">

        <a href="#"><b>INFORMATION</b></a>
        <a href="#">Contact</a>
        <a href="#">Stockist</a>
        <a href="#">Terms and Condition</a>
        <a href="#">Payment Confirmation</a>

        <p class="footer-left">
            © 2026, Indonesia | The Story Of Powered by Shopify
        </p>

    </div>

</body>

</html>