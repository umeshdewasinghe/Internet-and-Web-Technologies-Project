<?php session_start();?>

<!DOCTYPE html>

<html>
	<head>
		<!--add a title-->
		<title>edit profile</title>
    <link rel = "stylesheet" href = "../css/Home.css">
    <link rel = "stylesheet" href="../css/edit_profile.css">
    <link rel = "stylesheet" href="../css/main.css">
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
            <div id = "v_body1" >
                <div class = "v_bodyC" style="text-align: center; float: left; width: 200px; height: 100%;">
                    <?php
                    if ($_SESSION['gender'] == 'female')
                        echo("<img id =\"profile_pic\" src = \"../images/home_page/profile2.PNG\" style = \"margin-left: 20px; width: 140px; border: 4px solid #0650A7\" alt = \"profile\">");
                    else
                        echo("<img id =\"profile_pic\" src = \"../images/home_page/profile.PNG\" style = \"margin-left: 20px; width: 140px; border: 4px solid #0650A7\" alt = \"profile\">");
                     ?>
                    <?php echo ($_SESSION['username']
                     . "<br>" .$_SESSION['user_type']) ?>
               
                </div>
                <div class = "v_bodyC" style="float: right; width: 550px; height: 100%; text-align: center;">
                    <div class ="box-1" style = "float: left; text-align: left; padding: 5px;">
                        <h3>Update Details</h3>
                        <form id="update_form" method="POST" action="./update_details.php">
                            Enter new first name :<br>
                            <input type = "text" name="new_fname" required><br><br>
                            Enter new Last name :<br>
                            <input type = "text" name="new_lname" required><br><br>
                            Enter new address :<br>
                            <input type = "text" name="new_address" required><br><br>
                            Enter new email :<br>
                            <input type = "text" name="new_email" required><br><br>
                            Enter new password :<br>
                            <input type = "password" name="new_pass" required><br><br>
                            
                            <input id = "all_button" type = "submit" name="submit" value="sumbit"><br><br>
                           
                        </form>
                    </div>
                    <div class ="box-1" style = "float: right; text-align: left; padding: 5px;">
               
                    <?php
                    
                    $id = $_SESSION['id'];
                    $type = $_SESSION['user_type'];
          
                    if(($type == 'delivery_person') or( $type == 'customer')){
                      
                        if($_SESSION['user_type'] == 'customer')
                            echo ("<h3>Order history</h3>");
                        else if($_SESSION['user_type'] == 'delivery_person'){
                            echo ("<h3>delivered orders</h3>");
                        }
  
                        echo("
                    
                        <table class = \"table\" border = \"1\" >
                            <tr class=\"table-header\">
                                <th class=\"id\">ID</th>
                                <th class=\"price\">price</th>
                                <th class=\"delivery_status\">delivery_status</th>
                           
                            </tr>");
                        
                                require 'config.php';

                                if($type == 'delivery_person'){
                                    $sql = "SELECT  id,price,delivery_status
                                            FROM `order` where del_id = $id";
                                }
                                else if($type == 'customer'){
                                    $sql = "SELECT  id,price,delivery_status
                                            FROM `order` where Cus_id = $id";
                                }

                                $result = $connection->query($sql);

                                if($result->num_rows>0){

                                    while($row=$result->fetch_assoc()){
                                        echo "<tr><td>".$row['id']."</td>".
                                        "<td>".$row['price']."</td>".
                                        "<td>".$row['delivery_status']."</td></tr>";
                                    }
                                }
                                else{
                                        echo "empty table";
                                }
                                
                                echo "</table>";
                                $connection->close();
                        }
                        else{
                            
                            require 'config.php';
                   
                            $sql1 = "SELECT count(*)as total from customer ;";
                            $sql2 = "SELECT count(*)as total from delivery_person ;";
                            $sql3 = "SELECT count(*)as total from `order`;";

                            $result1 = $connection->query($sql1);
                            $result2 = $connection->query($sql2);
                            $result3 = $connection->query($sql3);
                            
                            $result1 = $result1->fetch_assoc();
                            $result2 = $result2->fetch_assoc();
                            $result3 = $result3->fetch_assoc();

                            echo("
                            <h3>Report</h3>
                            <table>
                                <tr><th>Type</th><th>amount</th></tr>
                                <tr><td>Customer</td><td>". $result1['total']. "</td></tr>
                                <tr><td>Delivery_persons</td><td>".$result2['total']."</td></tr>
                                <tr><td>orders</td><td>".$result3['total']."</td></tr>
                            </table>
                            ");
                            echo("<h3>Feedback</h3>");
                    

                                $sql = "SELECT * FROM `feedback`";

                                $result = $connection->query($sql);

                                if($result->num_rows>0){

                                    while($row=$result->fetch_assoc()){
                                        echo "<table border = 1><tr><td>".$row['id']."</td>".
                                        "<td>".$row['name']."</td>".
                                        "<td style = \"width: \"20px\">".$row['des']."</td></tr></table>";
                                    }
                                }
                                else{
                                        echo "empty table";
                                }
                                
                            }
                  
                    ?>
                    </div>
                </div>
            </div>
		<hr class = "line">
		<div id ="footer">
			<footer>
                <img src="../images/home_page/payment.jpg" >
			</footer>
		</div>
	</body>
</html>


