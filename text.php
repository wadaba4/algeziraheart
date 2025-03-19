<?php 

include './connect.php';
$table = "users";
// $name = filterRequest("namerequest");
$data = array( 
"users_name" => "wadaba",
"users_email" => "wadaba4@gmail.com",
"users_phone" => "324234",
"users_verfiycode" => "3243243",       
);
$count = insertData($table , $data);