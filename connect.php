<?php
$dsn = "mysql:host=localhost;dbname=ecommerce;charset=utf8"; // تصحيح اسم قاعدة البيانات
$user = "root";
$pass = "";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
);

try {
    $con = new PDO($dsn, $user, $pass, $options);
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Access-Control-Allow-Origin");
    header("Access-Control-Allow-Methods: POST, OPTIONS , GET");
    include "./functions.php";
    if (!isset($notAuth)) {
        // checkAuthenticate();
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>