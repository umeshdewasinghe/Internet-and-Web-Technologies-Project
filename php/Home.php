<?php session_start();?>

<!DOCTYPE html>
<html>
	<head>
		<!--add a title-->
		<title>My shopping cart</title>
        <link rel = "stylesheet" href = "../css/Home.css">
        
  
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
            <div id = "body1">
                <div style="float: left;">
                    <h1>clean laundry,<br>few clicks away</h1>
                    <a href = "pricing.php"><button id = "order_button">Order now</button></a>
                </div>
                   
                <div style="display: flex; float: right;" id ="slide_show">
                    <img class ="slide" src="../images/home_page/slide/img1.jpg">
                    <img class ="slide" src="../images/home_page/slide/img2.jpg">
                    <img class ="slide" src="../images/home_page/slide/img3.jpg">
                </div>
  
            </div>
        
            <div id = "body2">
                    <h1>Why choose us</h1>
                    <div class="box">
                        <img src = "../images/home_page/boxes/high-quality.png">
                        <h2>High quality</h2>
                    </div>
                    <div class="box">
                        <img src = "../images/home_page/boxes/price.png">
                        <h2>affordable pricing</h2>
                    </div>
                    <div class="box">
                        <img src = "../images/home_page/boxes/express-delivery.png">
                        <h2>fast delivery</h2>
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
    <script src = "../js/home_photo_slide.js"></script>
</html>


