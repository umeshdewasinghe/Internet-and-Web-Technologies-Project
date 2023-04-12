<?php 
session_start();

require 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * from admin where email = '$email'" ;
$sql1 = "SELECT * from customer where email = '$email'" ;
$sql2 = "SELECT * from delivery_person where email = '$email'" ;

$result = $connection->query($sql);
$result1 = $connection->query($sql1);
$result2 = $connection->query($sql2);

$row = $result->fetch_assoc();
$row1 = $result1->fetch_assoc();
$row2 = $result2->fetch_assoc();



if(password_verify($password, $row['password'])){
    
    $_SESSION['user_type'] = 'admin';
    $_SESSION['email'] = $email;
    $_SESSION['gender'] = $row['gender'];
    $_SESSION['login_status'] = 'passed';
    $_SESSION['username'] = $row['first_name'] . " " . $row['last_name'] ;
    $_SESSION['id'] = $row['id'];
    header("Location:../php/Home.php");

}
else{
    
    if(password_verify($password, $row1['password'])){

        $_SESSION['user_type'] = 'customer';
        $_SESSION['email'] = $email;
        $_SESSION['gender'] = $row1['gender'];
        $_SESSION['login_status'] = 'passed';
        $_SESSION['username'] = $row1['first_name'] . " " . $row1['last_name'];
        $_SESSION['id'] = $row1['id'];
        header("Location:../php/Home.php");
    }
    else{

        if(password_verify($password, $row2['password'])){

            $_SESSION['user_type'] = 'delivery_person';
            $_SESSION['email'] = $email;
            $_SESSION['gender'] = $row2['gender'];
            $_SESSION['login_status'] = 'passed';
            $_SESSION['username'] = $row2['first_name'] . " " . $row2['last_name'] ;
            $_SESSION['id'] = $row2['id'];
            header("Location:../php/Home.php");

        }
        else{
            
            $_SESSION['login_status'] = 'failed';
            header("Location:../html/index.html");

        }
    }
}
?>