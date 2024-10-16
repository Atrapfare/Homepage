<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Hi, my name is Dominik Knaup! This is my website - here you can get information about me and my projects.">
    <meta name="keywords" content="Dominik Knaup, Dominik, Knaup, Atrapfare, atrapfare">
    <meta name="author" content="Dominik Knaup">
    <meta name="copyright" content="Dominik Knaup">
    <!--favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/all/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/all/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/all/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/all/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/all/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/all/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/all/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/all/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/all/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/all/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/all/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/all/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/all/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/all/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="/assets/all/css/clearDefaultStyle.css">
    <link rel="stylesheet" href="/assets/all/bootstrap/css/bootstrap.css">
    <!--bootstrap-->
    <link rel="stylesheet" href="/assets/all/fontawesome/css/all.min.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="/assets/all/css/bootstrap-fixes.css">
    <link rel="stylesheet" href="/assets/all/css/fonts.css">
    <link rel="stylesheet" href="/assets/all/css/tags.css">
    <link rel="stylesheet" href="/assets/all/css/classes.css">
    <link rel="stylesheet" href="/assets/all/css/ids.css">
    <link rel="stylesheet" href="/assets/all/css/navigation.css">
    <link rel="stylesheet" href="/assets/home/css/welcome.css">
    <link rel="stylesheet" href="/assets/home/css/skills.css">
    <link rel="stylesheet" href="/assets/home/css/projectList.css">
    <link rel="stylesheet" href="/assets/home/css/contact.css">
    <link rel="stylesheet" href="/assets/all/css/footer.css">
    <link rel="stylesheet" href="/assets/all/css/modal.css">
    <link rel="stylesheet" href="/assets/all/css/toast.css">
    <title>Dominik Knaup</title>
</head>

<body class="bg-dark text-white content" id="top">
    <header>
        <div class="navigation">
            <div class="menuToggle" id="menuToggle"></div>
            <ul>
                <li class="list active">
                    <a href="/">
                        <span class="icon">
                            <i class="fa-solid fa-house"></i>
                        </span>
                        <span class="text">
                            Home
                        </span>
                    </a>
                </li>
                <li class="list">
                    <a href="#info">
                        <span class="icon">
                            <i class="fa-solid fa-circle-info"></i>
                        </span>
                        <span class="text">
                            Infos
                        </span>
                    </a>
                </li>
                <li class="list">
                    <a href="#security">
                        <span class="icon">
                            <i class="fa-solid fa-shield-halved"></i>
                        </span>
                        <span class="text">
                            Security
                        </span>
                    </a>
                </li>
                <li class="list">
                    <a href="#settings" data-bs-toggle="modal" data-bs-target="#accentColor">
                        <span class="icon">
                            <i class="fa-solid fa-gear"></i>
                        </span>
                        <span class="text">
                            Settings
                        </span>
                    </a>
                </li>
                <div class="indicator"></div>
            </ul>
        </div>
    </header>

    <main class="mt-5 pt-5 container">
        <section class="min-vh-100 accountDetails" id="accountDetails">

        </section>
    </main>


    <?php
        include_once "../assets/all/php/includes/footer.php";
    ?>


    <!--scripts-->
    <script src="/assets/all/bootstrap/js/bootstrap.bundle.js"></script>
    <!--bootstrap-->
    <script src="/assets/all/jquery/jquery-3.6.0.min.js"></script>
    <!--jquery-->
    <script src="/assets/all/lottiefiles/lottie-player.js"></script>
    <!--lottiefiles-->
    <script defer src="/assets/all/js/smoothScroll.js"></script>
    <!--smooth scroll-->
    <script src="/assets/all/js/newsletter.js"></script>
    <script src="/assets/all/js/characterCounter.js"></script>
    <script src="/assets/home/js/bootstrapActivations.js"></script>
    <script src="/assets/home/js/homeNavigation.js"></script>
    <script src="/assets/home/js/externalSources.js"></script>
    <script src="/assets/home/js/accentColor.js"></script>
    <script src="/assets/home/js/subtitle.js"></script>
    <script src="/assets/home/js/contact.js"></script>
    <script src="/assets/home/js/countdown.js"></script>
</body>

</html>