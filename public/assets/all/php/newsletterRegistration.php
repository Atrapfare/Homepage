<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $rootPath = dirname($_SERVER["DOCUMENT_ROOT"]);
    require_once $rootPath . "/php/settings/settings.php";
    require_once $rootPath . "/php/classes/dbConnection.php";
    require_once $rootPath . "/php/classes/newsletter.php";

    $errors = array();
    $inputs = array();

    // input validation server side
    if (empty($_POST["email"]) || strlen($_POST["email"]) > 5000 || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "email";
    } else {
        $inputs["email"] = $_POST["email"];
    }

    // $inputs = cleanUpInputs($inputs);

    if (count($errors) === 0) {
        // add email to newsletter list
        $newsletter = new Newsletter($inputs["email"]);
        if ($newsletter->addNewsletter() === true) {
            $errors[] = false; // no errors
        } else {
            $errors[] = "emailAlreadyUsed";
        }
    }
    echo json_encode($errors); // return errors as JSON
} else {
    header("location: /");
}
exit();