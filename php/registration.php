<?php 

require 'config.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$type = $_POST['type'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$hashed_password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    if(isset( $_POST['licence']))
        $licence = $_POST['licence'];

    else
        $licence = '';

    if ($type == 'Customer'){
        
        $sql = "insert into Customer values('','$first_name','$last_name','$address', '$email', '$hashed_password', '$gender')";
        $connection->query($sql);
    }
    else if($type == 'Delivery_person'){

        $sql = "insert into delivery_person values('','$first_name','$last_name','$address', '$licence','$email', '$hashed_password' , '$gender')";
        $connection->query($sql);
    }
    else{ 
        $connection->close();
        echo '<script>alert("Registration failed")</script>';
        header("Location:../html/registration.html");
        
    }
        $connection->close();
        echo '<script>alert("Registration sucessfull")</script>';
        header("Location:../html/index.html");

?>