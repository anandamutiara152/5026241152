<!DOCTYPE html>
<html lang="en">

<head>
    <title>Select a Plan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <style>
        body {
            background: #dfdfdf;
            font-family: "Open Sans", sans-serif;
        }


        .outer-box {
            background: white;
            padding: 80px 0;
            margin: 25px 50px 20px 50px;
        }

        .main-box {
            text-align: center;
        }

        .main-box h2 {
            font-weight: 700;
            letter-spacing: 4px;
            font-size: 32px;
            font-family: 'Montserrat', sans-serif;
        }

        .subtitle {
            color: #777;
            font-size: 13px;
            margin-top: 5px;
            margin-bottom: 70px;
        }

        .plan-card {
            background: white;
            border: 2px solid #cfcfcf;
            padding: 40px 30px;
            text-align: center;
        }

        .plan-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            letter-spacing: 1px;
            font-size: 18px;
        }

        .price {
            color: #777;
            font-size: 15px;
            margin-bottom: 30px;
        }

        .btn-plan {
            font-family: 'Montserrat', sans-serif;
            padding: 10px 32px;
            font-size: 12px;
            margin-bottom: 35px;
            border-radius: 0;
        }

        .btn-grey {
            background: #bfbfbf;
            color: white;
        }

        .btn-red {
            background: #e45858;
            color: white;
        }

        .feature-list {
            list-style: none;
            padding-left: 0;
            font-size: 13px;
            color: #666;
        }

        .feature-list li {
            margin-bottom: 8px;
        }
    </style>

</head>

<body>

    <div class="outer-box">

        <div class="container main-box">

            <h2>SELECT A PLAN</h2>

            <p class="subtitle">
                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
            </p>

            <div class="row justify-content-center">

                <!-- LITE -->
                <div class="col-md-3 col-lg-3">
                    <div class="plan-card">

                        <div class="plan-title">Lite</div>
                        <div class="price">Rp 59.900/bulan</div>

                        <button class="btn btn-plan btn-grey">
                            YOUR PLAN
                        </button>

                        <ul class="feature-list">
                            <li>1 akun Lite</li>
                            <li>Download untuk mendengarkan offline</li>
                            <li>Kualitas audio tinggi (hingga ~160 kbps)</li>
                            <li>Pembatalan kapan saja</li>
                        </ul>

                    </div>
                </div>


                <!-- STANDARD -->
                <div class="col-md-3 col-lg-3">
                    <div class="plan-card">

                        <div class="plan-title">Standard</div>
                        <div class="price">Rp 79.900/bulan</div>

                        <button class="btn btn-plan btn-red">
                            UPGRADE
                        </button>

                        <ul class="feature-list">
                            <li>1 akun Standard</li>
                            <li>Download untuk mendengarkan offline</li>
                            <li>Kualitas audio sangat tinggi (hingga ~320 kbps)</li>
                            <li>Pembatalan kapan saja</li>
                        </ul>

                    </div>
                </div>


                <!-- PLATINUM -->
                <div class="col-md-3 col-lg-3">
                    <div class="plan-card">

                        <div class="plan-title">Platinum</div>
                        <div class="price">Rp 119.900/bulan</div>

                        <button class="btn btn-plan btn-red">
                            UPGRADE
                        </button>

                        <ul class="feature-list">
                            <li>Hingga 3 akun Platinum</li>
                            <li>Download untuk mendengarkan offline</li>
                            <li>Kualitas audio lossless (hingga ~24-bit/44,1 kHz)</li>
                            <li>Pembatalan kapan saja</li>
                        </ul>

                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>