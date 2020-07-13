<?php

if (!function_exists('readline')) {
    function readline($question)
    {
        $fh = fopen('php://stdin', 'r');
        echo $question;
        $userInput = trim(fgets($fh));
        fclose($fh);

        return $userInput;
    }
}
