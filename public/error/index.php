<?php
if (isset($_GET["error"])) {
    require_once dirname($_SERVER["DOCUMENT_ROOT"]) . "/php/settings/settings.php";
    $inputs = array();
    $inputs["error"] = cleanUpInputs($_GET["error"]);
    $error = intval($inputs["error"]);
    $errorMessage = "";
    $errorDetail = "";
    $errorSolution1 = "";
    $errorSolution2 = "";

    switch ($error) {
        case 400:
            $errorMessage = "Your request could not be processed";
            $errorDetail = "The 400 Error is caused by the client (you)";
            $errorSolution1 = "Check the URL";
            $errorSolution2 = "Delete Browser Cookies and Cache";
            break;
        case 403:
        case 401:
            $errorMessage = "You have no access to this ressource";
            $errorSolution1 = "<a class='styledLink' href='../#contact'>Contact me</a>";
            break;
        case 404:
            $errorMessage = "The requested page could not be found";
            $errorDetail = "The 404 Error is caused because the file you are searching for could not be found";
            $errorSolution1 = "Check the URL";
            $errorSolution2 = "<a class='styledLink' href='../#contact'>Contact me</a>";
            break;
        case 429:
            $errorMessage = "You have sent too many requests";
            $errorDetail = "The 429 Error is caused because you sent too many requests to the server";
            $errorSolution1 = "Check the URL";
            $errorSolution2 = "<a class='styledLink' href='../#contact'>Contact me</a>";
            break;
        case 500:
            $errorMessage = "Internal Server Error occured";
            $errorDetail = "The 500 Error is caused by the server (not you)";
            $errorSolution1 = "Wait some hours";
            $errorSolution2 = "<a class='styledLink' href='../#contact'>Contact me</a>";
            break;
        case 503:
            $errorMessage = "Server unreachable";
            $errorDetail = "The 503 Error is caused because the server (not you) is in maintenance mode or is unreachable for any reason";
            $errorSolution1 = "Check the URL";
            $errorSolution2 = "Delete Browser Cookies and Cache";
            break;
        default:
            header("location: /");
            exit;
    }
} else {
    header("location: /");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <link rel="stylesheet" href="/assets/all/css/footer.css">
    <link rel="stylesheet" href="/assets/all/css/modal.css">
    <link rel="stylesheet" href="/assets/all/css/toast.css">
    <title>DK Error</title>
</head>
<body class="bg-dark text-white container" id="body">

<main>
    <section class="error min-vh-100 bg-dark d-flex justify-content-center align-items-center flex-column">
        <div class="wrapper row">
            <div class="col-sm-12 sol-md-6 col-lg-6 text-center d-flex justify-content-center align-items-center flex-column">
                <h1 class="display-1 fw-bold">Error <?php echo $error; ?></h1>
                <p class="text-danger fw-bold fs-3"><?php echo $errorMessage ?></p>
                <p class="text-warning fw-bold fs-6"><?php echo $errorDetail ?></p>
                <div class="solutions text-muted">
                    <p><?php echo $errorSolution1 ?></p>
                    <?php
                    if ($errorSolution2 !== "") {
                        echo "<p>" . $errorSolution2 . "</p>";
                    }
                    ?>
                </div>
            </div>
            <div class="col-sm-12 sol-md-6 col-lg-6 d-flex justify-content-center align-items-center">
                <lottie-player src="/assets/all/lottiefiles/lotties/server.json" speed="1" loop
                               autoplay></lottie-player>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center align-items-center">
                <a href="/" class="btn btn-success">Back to Home</a>
            </div>
        </div>
    </section>
</main>

<?php
include_once "../assets/all/php/includes/footer.php";
?>


<!--scripts-->
<script src="/assets/all/bootstrap/js/bootstrap.bundle.js"></script><!--bootstrap-->
<script src="/assets/all/jquery/jquery-3.6.0.min.js"></script><!--jquery-->
<script src="/assets/all/lottiefiles/lottie-player.js"></script><!--lottiefiles-->
<script defer src="/assets/all/js/smoothScroll.js"></script><!--smooth scroll-->
<script src="/assets/all/js/newsletter.js"></script>
</body>
</html>