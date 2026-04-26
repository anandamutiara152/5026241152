<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kami. Flow | Linktree</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 40px;

            background:
                linear-gradient(rgba(0, 0, 0, 0.30), rgba(0, 0, 0, 0.30)),
                linear-gradient(to bottom,
                    #c59b77 0%,
                    #d9a689 10%,
                    #e7a1a4 100%);
        }

        .container-custom {
            width: 100%;
            max-width: 580px;
            min-height: 100vh;

            border-radius: 24px 24px 0 0;
            overflow: hidden;

            background: linear-gradient(to bottom,
                    #c59b77 0%,
                    #d9a689 5%,
                    #e7a1a4 100%);

            box-shadow: 0 24px 32px rgba(0, 0, 0, 0.15);
        }

        .header {
            padding-top: 95px;
            text-align: center;
            position: relative;
        }

        .topbar {
            position: absolute;
            top: 20px;
            left: 0;
            right: 0;

            display: flex;
            justify-content: space-between;
            padding: 10px 30px;
        }

        .icon-btn {
            width: 40px;
            height: 40px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.4);

            transition: 0.2s;
        }

        .icon-btn:hover {
            background: rgba(255, 255, 255, 1);
        }

        .icon-btn:active {
            transform: scale(0.95);
        }

        .icon-btn button {
            width: 100%;
            height: 100%;
            border: none;
            background: none;
            cursor: pointer;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-btn svg {
            width: 18px;
            height: 18px;
            fill: black;
        }

        .profile-img {
            width: 96px;
            height: 96px;
            border-radius: 50%;
        }

        .title {
            margin-top: 15px;
            color: white;
            font-size: 23px;
            font-weight: 700;
        }

        .desc {
            color: white;
            font-size: 16px;
        }

        .link-list {
            padding: 5px;
        }

        .link-item {
            display: flex;
            justify-content: center;
            align-items: center;

            min-height: 64px;
            margin: 15px 10px;

            border-radius: 100px;

            background: #f3b296;
            color: white;

            font-weight: 500;
            text-decoration: none;
            position: relative;
            transition: 0.2s;
        }

        .link-item:hover {
            background: #e7a585;
            text-decoration: none;
            color: white;
        }

        .link-item:active {
            transform: scale(0.98);
        }

        .menu-dot {
            position: absolute;
            right: 16px;
            opacity: 0.6;
        }

        .link-item.has-image {
            justify-content: flex-start;
            padding-left: 16px;
        }

        .thumb {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            z-index: 2;
        }

        .link-item.has-image span:first-of-type {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            text-align: center;
        }

        .footer {
            text-align: center;
            padding: 40px 20px;
        }

        .join-btn {
            background: white;
            color: black;

            padding: 14px 22px;
            border-radius: 100px;

            display: inline-block;
            margin-bottom: 20px;
        }

        .footer-text {
            font-size: 12px;
            color: black;
            opacity: 0.7;
        }
    </style>
</head>

<body>

    <div class="container container-custom p-0">

        <div class="header">

            <div class="topbar">

                <div class="icon-btn">
                    <button>
                        <svg viewBox="0 0 28 28">
                            <path
                                d="m15.7603 6.829 4.6725-4.80317 2.712 2.77734-4.9012 4.67248h6.8944v3.85565h-6.9271l4.9339 4.7922-2.712 2.7229-6.6983-6.731-6.69829 6.731-2.712-2.712 4.93387-4.7923h-6.92703v-3.86645h6.89436l-4.9012-4.67248 2.712-2.77734 4.67249 4.80317v-6.829h4.0516zm-4.0516 12.0243h4.0516v9.1489h-4.0516z" />
                        </svg>
                    </button>
                </div>

                <div class="icon-btn">
                    <button aria-label="Share profile">
                        <svg viewBox="0 0 256 256">
                            <path
                                d="M216,112v96a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V112A16,16,0,0,1,56,96H80a8,8,0,0,1,0,16H56v96H200V112H176a8,8,0,0,1,0-16h24A16,16,0,0,1,216,112ZM93.66,69.66,120,43.31V136a8,8,0,0,0,16,0V43.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,69.66Z" />
                        </svg>
                    </button>
                </div>

            </div>

            <img src="https://ugc.production.linktr.ee/MQTSMAsARmX8Uhh5QqnA_bNnWJgLBn2conlvZ?io=true&size=avatar-v3_0"
                class="profile-img">

            <h1 class="title">Kami. Flow</h1>
            <p class="desc">#FindYourFlow</p>

        </div>

        <div class="link-list">

            <a href="#" class="link-item">Catalogue Kami. Flow <span class="menu-dot">⋮</span></a>
            <a href="#" class="link-item">Website – Kami. Flow <span class="menu-dot">⋮</span></a>
            <a href="#" class="link-item">Shopee – Kami. Flow <span class="menu-dot">⋮</span></a>
            <a href="#" class="link-item">Tokopedia – Kami. Flow <span class="menu-dot">⋮</span></a>
            <a href="#" class="link-item">Zalora – Kami. Flow <span class="menu-dot">⋮</span></a>

            <a href="#" class="link-item has-image">
                <img src="https://ugc.production.linktr.ee/B4Scx2fBS3iAovfqBSDD_convert.jpg" class="thumb">
                <span>All store – Kami</span>
                <span class="menu-dot">⋮</span>
            </a>

        </div>

        <div class="footer">
            <div class="join-btn"><b>Join kami.flow on Linktree</b></div>
            <div class="footer-text">
                Cookie Preferences · Report · Privacy · Explore
            </div>
        </div>

    </div>
</body>

</html>