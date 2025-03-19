<?php

include_once "../connect.php";
include_once "../functions.php";

if ($con) { // Check if $con is properly initialized
    $username = filterRequest("username");
    $password = sha1(filterRequest("password"));
    $email = filterRequest("email");
    $phone = filterRequest("phone");
    $vefiycode = "0"; // Corrected variable name

    $stmt = $con->prepare("SELECT * FROM users WHERE users_email = ? OR users_phone = ? ");
    $stmt->execute(array($email , $phone));
    $conunt = $stmt->rowCount();
    if($conunt > 0){
        echo "EMAIL OR PHONE already exists.";
    } else {
        $data=array(
            "users_name" => $username,
            "users_password" => $password,
            "users_email" => $email,
            "users_phone" => $phone,
            "users_vefiycode" => $vefiycode, // Corrected column name
        );
        insertData("users",$data);
    }
} else {
    echo "Database connection failed.";
}

// Ensure the PHP script is properly closed
?>