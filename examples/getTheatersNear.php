<?php

require_once '../vendor/autoload.php';

use GoogleMovieClient\Client;

$test = new Client();
try {
    $days = $test->getTheatersNear('Thun', 'en');
    dd($days);
} catch (Exception $ex) {
    echo $ex->getMessage();

    echo '<hr/>';

    echo $ex->getTraceAsString();
}
