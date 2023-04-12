<?php session_start();?>

<!DOCTYPE html>
<html>
	<head>
		<!--add a title-->
		<title>My shopping cart</title>
        <link rel = "stylesheet" href = "../css/delivery_portal.css">
        <link rel = "stylesheet" href = "../css/Home.css">
        <script src = "../js/home_photo_slide.js"></script>
  
    </head>
	<body>
		<!--add a logo-->
        <div id = "header">
		    <div id = "c1">
                <img id = "logo" src = "../images/home_page/logo.jpg" alt = "image">
            </div>
            <div id = "c2">
                <div id = "c3">
                <?php
                    if ($_SESSION['gender'] == 'female')
                        echo("<img id =\"profile_pic\" src = \"../images/home_page/profile2.PNG\" alt = \"profile\">");
                    else
                        echo("<img id =\"profile_pic\" src = \"../images/home_page/profile.PNG\" alt = \"profile\">");
               ?>
                </div>
                <div id = "c4">
                    <p><?php echo ($_SESSION['username']) ?><br>
                    <p><a href = "edit_profile.php">Edit profile</a></p>
                    <p><a href="destroy.php">log out</a></p>
        
                </div>
            </div>
            
        </div>

		
		<div id = "navbar">

            <ul id = "ul_list_1">
            <li><a href = "Home.php"> Home </a></li>
                    <?php 
                        if($_SESSION['user_type'] == 'delivery_person')
                            echo("<li><a href = \"delivery_portal.php\"> Delivery portal</a></li>");
                    ?>
                    <li><a href = "how_its_work.php"> How it works</a></li>
                    <li><a href = "pricing.php"> Pricing</a></li>
                    <li><a href = "FAQ.php"> FAQ</a></li>
                    <li><a href = "Privacy policy.php"> Privacy policy</a></li>
                    <li><a href = "Contact Us.php"> Contact us</a></li>
            </ul>
		</div>  
        <hr class = "line">
        <div class="body_main">
        <div id = "body2">
                <div id="dHeader">
                    <h1 style="font-family: Tahoma, Verdana, sans-serif;"><h1 style="font-size:50px">Delivery Portal</h1></h1>
                    <div id="d1">
                        <div id="d2">
                        <?php
                    if ($_SESSION['gender'] == 'female')
                        echo("<img id =\"d_logo\" src = \"../images/home_page/profile2.PNG\" style = \"margin-left: 20px; width: 140px; border: 4px solid #0650A7\" alt = \"profile\">");
                    else
                        echo("<img id =\"d_logo\" src = \"../images/home_page/profile.PNG\" style = \"margin-left: 20px; width: 140px; border: 4px solid #0650A7\" alt = \"profile\">");
                     ?></div>
                        <div id="d3">
                            <H2><?php echo($_SESSION['username']); ?></H2>
                            <p>ID: <?php echo($_SESSION['id']); ?></p>
                        </div>
                    </div>
             </div>   
        </div>
        <br>
        <br>
        <form method="post" action = "delivery_portal.php">
                
                <div style = "text-align:center">
                    <h2>selected jobs<h2>
                </div>
            <table class = "table">
                <tr>
                    <th id="l1">Order code</th>         
                    <th id="l3">location</th>
                    <th id="l4">Confirm</th>
                    <th id="l5">Delivery</th>
                </tr>
                
        <?php

                require 'config.php';   
                $sql = "SELECT * from `order` where del_id = ".$_SESSION['id']." AND confirm_status like '%yes'";
                $result = $connection->query($sql);
                if($result->num_rows>0){

                    while($row=$result->fetch_assoc()){

                       if ( $row['confirm_status'] != NULL && $row['delivery_status'] != NULL ){
                        echo "<tr><td style=\"text-align: center\">".$row['id']."</td>";
                        
                        echo "<td style=\"text-align: center\">".$row['location']."</td>";
                        echo "<td style=\"text-align: center\">"."
                            <a href=\"edit_no.php?id=$row[id]\"  class=\"button2 no\">Decline order</a></td>";
                        echo "<td style=\"text-align: center\"> "."<a href=\"edit_delivery_status.php?id=$row[id]\" target=\"_self\" class=\"button2 yes\">Completed</a>"."</td></tr>";
                       }
                    }
                }
            ?>
            </table>
            <br>
                <div style = "text-align:center">
                    <h2>available jobs<h2>
                </div>
            <br>
            <table class = "table">
                 <tr>
                    <th id="l1">Order code</th>
                    <th id="l2">location</th>
                    <th id="l3">Confirm</th>
            
                </tr>
                <tr>
                <?php
                require 'config.php';  
        
                $sql = "SELECT * from `order` where confirm_status = 'no' LIMIT 3";
                $result = $connection->query($sql);

                    if($result->num_rows>0){

                        while($row=$result->fetch_assoc()){

                           if ( $row['confirm_status'] != NULL && $row['delivery_status'] != NULL ){
                            echo "<tr><td style=\"text-align: center\">".$row['id']."</td>";
                            
                            echo "<td style=\"text-align: center\">".$row['location']."</td>";
                            echo "<td style=\"text-align: center\">"."<a href=\"edit_yes.php?id=$row[id]\" class=\"button2 yes\">Accept Order</a>
                                        </td>";
          
                           }
                        }
                    }
                
                ?>

            </table>
        </div>                    
		<hr class = "line">
		<div id ="footer">
			<footer>
                <img src="../images/home_page/payment.jpg">
			</footer>
		</div>
	</body>
</html>


