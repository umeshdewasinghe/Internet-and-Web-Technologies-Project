<?php
session_start();

require 'config.php';


$first_name = '';
$last_name = '';
$address = '';
$type = '';
$email = '';
$hashed_password = '';


$id = $_SESSION['id'];
$type = $_SESSION['user_type'];
$first_name = $_POST['new_fname'];
$last_name = $_POST['new_lname'];
$address = $_POST['new_address'];
$email = $_POST['new_email'];
$hashed_password = password_hash($_POST['new_pass'], PASSWORD_BCRYPT);



if ($type == 'customer'){
    $sql = "UPDATE customer
            SET first_name = '$first_name' , last_name = '$last_name' , address = '$address' , email = '$email' , password = '$hashed_password'
            WHERE id = $id";
    
    $connection->query($sql);
    header("Location:../html/index.html");
}
else if($type == 'delivery_person'){
    $sql = "UPDATE delivery_person
    SET first_name = '$first_name' , last_name = '$last_name' , address = '$address' , email = '$email' , password = '$hashed_password'
    WHERE id = $id";

    $connection->query($sql);
    header("Location:../html/index.html");

}
else if($type == 'admin'){
    $sql = "UPDATE `admin`
    SET first_name = '$first_name' , last_name = '$last_name' ,  email = '$email' , password = '$hashed_password'
    WHERE id = $id";

    $connection->query($sql);
    header("Location:../html/index.html");

}
else{
    header("Location:../php/update_details.php");
}



?>