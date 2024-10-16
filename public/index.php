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
    <link rel="stylesheet" href="/assets/all/bootstrap/css/bootstrap.css"><!--bootstrap-->
    <link rel="stylesheet" href="/assets/all/fontawesome/css/all.min.css"><!--fontawesome-->
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
                <a href="#top">
                    <span class="icon">
                        <i class="fa-solid fa-house"></i>
                    </span>
                    <span class="text">
                        Home
                    </span>
                </a>
            </li>
            <li class="list">
                <a href="#infos">
                    <span class="icon">
                        <i class="fa-solid fa-circle-info"></i>
                    </span>
                    <span class="text">
                        Info
                    </span>
                </a>
            </li>
            <li class="list">
                <a href="#contact">
                    <span class="icon">
                        <i class="fa-solid fa-comment"></i>
                    </span>
                    <span class="text">
                        Contact
                    </span>
                </a>
            </li>
            <li class="list">
                <a href="#" data-bs-toggle="modal" data-bs-target="#accentColor">
                    <span class="icon">
                        <i class="fa-solid fa-pen"></i>
                    </span>
                    <span class="text">
                        Edit
                    </span>
                </a>
            </li>
            <div class="indicator"></div>
        </ul>
    </div>
</header>

<div class="modal fade" id="accentColor" tabindex="-1" aria-labelledby="accentColor" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark border-0">
            <div class="modal-header border-0">
                <h5 class="modal-title mx-auto" id="exampleModalLabel">Change the accent color</h5>
            </div>
            <div class="modal-body text-center">
                <span id="green"><i class="fa-solid fa-droplet text-success fa-2x m-2 cursor"></i></span>
                <span id="blue"><i class="fa-solid fa-droplet text-info fa-2x m-2 cursor"></i></span>
                <span id="red"><i class="fa-solid fa-droplet text-danger fa-2x m-2 cursor"></i></span>
                <span id="black"><i class="fa-solid fa-droplet fa-2x m-2 cursor text-muted"></i></span>
                <span id="yellow"><i class="fa-solid fa-droplet text-warning fa-2x m-2 cursor"></i></span>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="contactMailSuccess" tabindex="-1" aria-labelledby="contactMailSuccess" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark border-0">
            <div class="modal-header border-0">
                <h5 class="modal-title mx-auto" id="exampleModalLabel">Mail sent</h5>
            </div>
            <div class="modal-body text-center d-flex justify-content-center align-items-center">
                <lottie-player class="responseLottie" src="assets/all/lottiefiles/lotties/check.json"
                               autoplay></lottie-player>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="contactMailFailure" tabindex="-1" aria-labelledby="contactMailFailure" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark border-0">
            <div class="modal-header border-0">
                <h5 class="modal-title mx-auto" id="exampleModalLabel">Mail not sent</h5>
            </div>
            <div class="modal-body text-center d-flex justify-content-center align-items-center">
                <lottie-player class="responseLottie" src="assets/all/lottiefiles/lotties/fail.json" speed="1"
                               autoplay></lottie-player>
            </div>
        </div>
    </div>
</div>

<main class="mt-5 pt-5 container">
    <section class="min-vh-100 welcome" id="welcome">
        <div class="centered">
            <p class="textAccentColor fs-5">Hi my name is</p>
            <h1 class="display-1 fw-bolder">Dominik Knaup</h1>
            <h2 class="display-6 textSemiMuted"><span class="text-info fw-bold" id="subtitle1">web </span><span
                        class="text-danger fw-bold" id="subtitle2">dev</span>eloper and <span
                        class="text-warning fw-bold" id="subtitle3">software</span> engineer.</h2>
            <p id="countdown"></p>
            <div class="imgBx mt-5">
                <div class="info">
                    <img src="assets/all/img/me.jpg" alt="me">
                    <h2 class="mx-3">Some infos</h2>
                    <a href="#infos" class="btn btn-success"><i class="fa-solid fa-arrow-down"></i></a>
                </div>
            </div>
        </div>
    </section>

    <div class="row pt-5 mb-5 pb-5" id="infos">
        <section class="minVh50 col-sm-12 col-md-12 col-lg-7 d-flex justify-content-center align-items-center"
                 id="skills">
            <div class="skills">
                <div class="skillbox">
                    <div class="info">
                        <div class="icon d-flex justify-content-center align-items-center"><i
                                    class="fa-solid fa-server fa-2x"></i></div>
                        <div class="text">
                            <h3>Backend</h3>
                            <p>PHP SQL JavaScript Spring-Boot</p>
                        </div>
                    </div>
                </div>
                <div class="skillbox">
                    <div class="info">
                        <div class="icon d-flex justify-content-center align-items-center"><i
                                    class="fa-solid fa-brush fa-2x"></i></div>
                        <div class="text">
                            <h3>Frontend</h3>
                            <p>HTML CSS JavaScript React</p>
                        </div>
                    </div>
                </div>
                <div class="skillbox">
                    <div class="info">
                        <div class="icon d-flex justify-content-center align-items-center text-danger"><i
                                    class="fa-solid fa-laptop-code fa-2x"></i></div>
                        <div class="text">
                            <h3>Software Entwicklung</h3>
                            <p>Java Kotlin</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="minVh50 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-center align-items-center"
                 id="projects">
            <div class="projectbox">
                <h3>Recent Projects</h3>
                <div class="list">
                    <div class="imgBx">
                        <lottie-player src="assets/all/lottiefiles/lotties/website.json" class="lottieplayer" speed="1"
                                       loop
                                       autoplay></lottie-player>
                    </div>
                    <div class="info">
                        <h2 class="rank"><small>#</small>1</h2>
                        <h4>This Website</h4>
                        <p>Just a Website<br>
                            <a href="https://github.com/Atrapfare/Homepage/" target="_blank">Github</a>
                        </p>
                    </div>
                </div>
                <div class="list">
                    <div class="imgBx">
                        <lottie-player src="assets/all/lottiefiles/lotties/student.json" class="lottieplayer" speed="0.7"
                                       loop
                                       autoplay></lottie-player>
                    </div>
                    <div class="info">
                        <h2 class="rank"><small>#</small>2</h2>
                        <h4>Student Job</h4>
                        <p>Full-Stack Engineering Digital-Twin Dashboard<br>
                            <a href="https://www.isw.uni-stuttgart.de/" target="_blank">ISW Universität Stuttgart</a>
                        </p>
                    </div>
                </div>
                <div class="list">
                    <div class="imgBx">
                        <lottie-player src="assets/all/lottiefiles/lotties/smileyCry.json" class="lottieplayer"
                                       speed="0.7"
                                       loop autoplay></lottie-player>
                    </div>
                    <div class="info">
                        <h2 class="rank"><small>#</small>3</h2>
                        <h4>Open for more</h4>
                        <p>Just write me<br>for project requests</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="mb-5 py-5">
        <section class="minVh50" id="contact">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <form id="contactForm" class="contactForm" method="POST" action="">
                        <h2>Send a message</h2>
                        <p class="text-danger" id="errorBox"></p>
                        <div class="formBox mt-5">
                            <div class="inputBox">
                                <input type="text" name="name" minlength="3" maxlength="30" placeholder="Name"
                                       id="contactInputName" required>
                            </div>
                            <div class="inputBox">
                                <input type="email" name="email" minlength="3" maxlength="30" placeholder="Email"
                                       id="contactInputEmail" required>
                            </div>
                            <div class="inputBox">
                                <input type="text" name="human" class="human" id="contactInputHuman">
                            </div>
                            <div class="inputBox">
                                <textarea name="message" minlength="3" maxlength="5000" placeholder="Message"
                                          id="contactInputMessage"
                                          required></textarea>
                                <p class="text-danger text-center" id="characterCounter">Remaining letters: 5000</p>
                            </div>
                            <div class="inputBox text-center">
                                <input type="submit" class="btn btn-success" name="submit" id="contactSubmitForm"
                                       value="Send">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 text-dark">
                    <div class="row contactInfo">
                        <div class="row map">
                            <div class="col-12 card text-center" id="externalSourceMaps">
                                <div class="card-header">
                                    External Source
                                </div>
                                <div class="card-body d-flex justify-content-center align-items-center flex-column">
                                    <h5 class="card-title fw-bold">Accept <span class="text-danger">Google Maps</span>
                                        as
                                        External Source</h5>
                                    <button type="button" class="btn btn-success" id="mapsAccept">Accept</button>
                                </div>
                                <div class="card-footer text-muted">
                                    By clicking <span class="fw-bold">Accept</span>, you accept that Google sets
                                    cookies.
                                    These cookies collect information about user behavior.
                                </div>
                            </div>
                            <iframe class="col-12" id="map"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.9868388653385!2d9.127544815838538!3d48.782141514026286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4799dba04b39ca73%3A0xfcbb310b8cea695!2sVivaldiweg%2036%2C%2070195%20Stuttgart!5e0!3m2!1sde!2sde!4v1649953273090!5m2!1sde!2sde"
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                        <div class="row contactData text-white">
                            <div class="box">
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="text">
                                    <h3>Address</h3>
                                    <p><a href="https://goo.gl/maps/vGrQLrZSNVhBQYcb6" target="_blank"
                                          class="styledLink">Vivaldiweg
                                            36, 70195 Stuttgart, Germany</a></p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="text">
                                    <h3>Email</h3>
                                    <p><a class="styledLink cursor" id="sendMail">Send a mail</a></p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="text">
                                    <h3>Phone</h3>
                                    <p><a class="styledLink cursor" id="call">Call me</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="toast position-fixed bottom-0 end-0" role="alert" aria-live="assertive" aria-atomic="true"
         id="toast1">
        <div class="toast-header">
            <strong class="me-auto fw-bold">Tipp</strong>
            <small class="toastTimeAgo">Just now</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body bg-success">
            Press the <i class="fa-solid fa-pen mx-1"></i> in the menu and change your accent color
        </div>
    </div>
</main>


<?php
include_once "assets/all/php/includes/footer.php";
?>


<!--scripts-->
<script src="/assets/all/bootstrap/js/bootstrap.bundle.js"></script><!--bootstrap-->
<script src="/assets/all/jquery/jquery-3.6.0.min.js"></script><!--jquery-->
<script src="/assets/all/lottiefiles/lottie-player.js"></script><!--lottiefiles-->
<script defer src="/assets/all/js/smoothScroll.js"></script><!--smooth scroll-->
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