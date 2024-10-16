<?php
$rootPath = dirname($_SERVER["DOCUMENT_ROOT"]);
require_once $rootPath . "/php/settings/settings.php";

echo('
<footer class="container content text-center mb-5 pb-1">
    <div class="footer row mt-5 pt-5">
        <div class="legal col-sm-12 col-md-4 col-lg-2 mt-3">
            <h5>Legal</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="/legal/imprint/"
                                             class="styledLink text-decoration-none p-0 text-muted">Imprint</a></li>
                <li class="nav-item mb-2"><a href="/legal/privacy/"
                                             class="styledLink text-decoration-none p-0 text-muted">Privacy</a></li>
                <li class="nav-item mb-2"><a href="/legal/cookies/"
                                             class="styledLink text-decoration-none p-0 text-muted">Cookies</a></li>
                <li class="nav-item mb-2"><a href="https://www.1blu.de/"
                                             class="styledLink text-decoration-none p-0 text-muted" target="_blank">Web
                        host</a>
                </li>
            </ul>
        </div>
        <div class="resources col-sm-12 col-md-4 col-lg-2 mt-3">
            <h5>Resources</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="https://getbootstrap.com/"
                                             class="styledLink p-0 text-muted" target="_blank">Bootstrap</a>
                </li>
                <li class="nav-item mb-2"><a href="https://pixabay.com/"
                                             class="styledLink p-0 text-muted" target="_blank">Pixabay</a>
                </li>
                <li class="nav-item mb-2"><a href="https://fontawesome.com/"
                                             class="styledLink p-0 text-muted" target="_blank">Fontawesome</a>
                </li>
                <li class="nav-item mb-2"><a href="https://jquery.com/" class="styledLink p-0 text-muted"
                                             target="_blank">JQuery</a>
                </li>
                <li class="nav-item mb-2"><a href="https://lottiefiles.com/"
                                             class="styledLink p-0 text-muted" target="_blank">Lottiefiles</a>
                </li>
            </ul>
        </div>
        <div class="social col-sm-12 col-md-4 col-lg-2 mt-3">
            <h5>Social</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="https://www.instagram.com/atrapfare/"><i
                                class="fa-brands fa-instagram icon"></i></a></li>
                <li class="nav-item mb-2"><a href="https://www.linkedin.com/in/dominik-knaup-5b7368227/"><i
                                class="fa-brands fa-linkedin-in icon"></i></a></li>
                <li class="nav-item mb-2"><a href="https://twitter.com/DominikKnaup"><i
                                class="fa-brands fa-twitter icon"></i></a></li>
                <li class="nav-item mb-2"><a href="https://www.facebook.com/dominik.knaup.39"><i
                                class="fa-brands fa-facebook-f icon"></i></a></li>
            </ul>
        </div>
        <div class="newsletter col-sm-12 col-md-12 col-lg-6 px-5 mt-3">
            <form class="px-3" id="newsletterForm" class="newsletterForm" method="POST" action="">
                <h5>Subscribe to my newsletter</h5>
                <p>1. Information about new projects</p>
                <p>2. Updates related with my website</p>
                <p class="newsletterFailureMessage text-danger" id="newsletterFailureMessage"></p>
                <p class="newsletterSuccessMessage text-success" id="newsletterSuccessMessage"></p>
                <div class="row">
                    <div class="col-sm-12 col-md-8 col-lg-8 mt-2">
                        <input class="form-control" type="email" name="email" minlength="3" maxlength="30"
                               placeholder="Email"
                               id="newsletterInputEmail" required>
                    </div>
                    <input type="text" name="human" class="human" id="newsletterInputHuman">
                    <div class="col-sm-12 col-md-4 col-lg-4 mt-2">
                        <input class="btn btn-primary w-100" type="submit" name="submit" id="newsletterSubmitForm"
                               value="Subscribe">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="py-4 my-5 border-top">
        <p>&copy; <?php echo date("Y"); ?> Dominik Knaup - All rights reserved.</p>
    </div>
</footer>
');