<?php
require 'environment.php';


if (ENVIRONMENT == 'development') {
    define("BASE_URL", "localhost/php-mvc/");
    $config = array(
        'dbname' => 'prod',
        'host' => 'localhost',
        'user' => 'root',
        'password' => ''        //senha padrao do mysql quando emulado pelo wampp server  e vazia
    );
    extract($config);
} else if (ENVIRONMENT == "production") {
    define("BASE_URL", "localhost");
    $config = array(
        'dbname' => 'mvc',
        'host' => 'localhost',
        'user' => 'root',
        'password' => ''
    );
    extract($config);
}
global $db;

echo $password;
try {
    $db = new PDO("mysql:dbname=" . $dbname . ";host=" . $host, $user, $password);
} catch (PDOException $e) {
    echo $e->getMessage();
}
