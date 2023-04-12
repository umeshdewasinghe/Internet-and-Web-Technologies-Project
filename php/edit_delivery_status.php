<?php 
   session_start();
   require 'config.php';   
    
   $traget = $_GET['id'];
   $id = $_SESSION['id'];
   $sql = "UPDATE `order`
   SET delivery_status = 'done' , del_id = $id
   WHERE  id = $traget ";
   $result = $connection->query($sql);

   $connection->close();
   header("Location:../php/Delivery_portal.php");

?>