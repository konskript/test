<?php

require "../vendor/autoload.php";

$app = new \Slim\App;

$app->get("/testing", function() {
    echo "Hello World";
});

$app->run();