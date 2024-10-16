<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $rootPath = dirname($_SERVER["DOCUMENT_ROOT"]);
    require_once $rootPath . "/php/settings/settings.php";

    $inputs = array();
    $errors = array();

    // input validation server side
    if (empty($_POST["name"]) || strlen($_POST["name"]) > 5000 || !preg_match("#^[a-zA-Z0-9äöüÄÖÜ ]+$#", $_POST["name"])) {
        $errors[] = "name";
    } else {
        $inputs["name"] = $_POST["name"];
    }

    if (empty($_POST["email"]) || strlen($_POST["email"]) > 5000 || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "email";
    } else {
        $inputs["email"] = $_POST["email"];
    }

    if (!empty($_POST["human"])) {
        $errors[] = "human";
    }

    if (empty($_POST["message"]) || strlen($_POST["message"]) > 5000) {
        $errors[] = "message";
    } else {
        $inputs["message"] = $_POST["message"];
    }

    $inputs = cleanUpInputs($inputs);

    if (count($errors) === 0) {
        $to = "dominik@knaup.de";
        $subject = "Kontaktformular - " . $inputs["name"];
        $message = $inputs["message"];
        $additionalHeaders = array(
            "From" => $inputs["email"],
            "Reply-To" => $inputs["email"],
            "X-Mailer" => phpversion()
        );
        $mail = mail($to, $subject, $message, $additionalHeaders);
        if (!$mail) {
            throw new Exception("Failed to send contact mail");
        }
        $errors[] = false; // no errors
    }
    echo json_encode($errors); // return errors as JSON
} else {
    header("location: /");
}
exit();
