<?php

function myExceptionHandler($exception)
{
    error_log($exception . PHP_EOL);
    http_response_code(500);
    if (filter_var(ini_get("display_errors"), FILTER_VALIDATE_BOOLEAN)) {
        echo "<h1>DevMode</h1>" . PHP_EOL . $exception;
    } else {
        header("location: /error/?error=500");
    }
}

set_exception_handler("myExceptionHandler");

set_error_handler(function ($level, $message, $file = '', $line = 0) {
    throw new ErrorException($message, 0, $level, $file, $line);
});

register_shutdown_function(function () {
    $error = error_get_last();
    if ($error !== null) {
        $exception = new ErrorException(
            $error["message"], 0, $error["type"], $error["file"], $error["line"]
        );
        myExceptionHandler($exception);
    }
});


function cleanUpInputs(string|array $inputs)
{
    if (is_array($inputs)) {
        foreach ($inputs as $input) {
            $input = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input);
        }
    } elseif (is_string($inputs)) {
        $input = trim($inputs);
        $input = stripslashes($inputs);
        $input = htmlspecialchars($inputs);
    }
    return $inputs;
}